<?php

namespace App\Http\Controllers;

use App\Models\Book_Category;
use App\Models\Books;
use App\Models\categories;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index() {
        return view('home', [
            'active' => "home",
            'books' => Books::all(),
            'categories' => categories::all(),
            'Publishers' => Publisher::all()
        ]);
    }

    public function show_detail($book_id) {
        return view('bookdetail', [
            'active' => '',
            'book' => Books::all()->where('book_id', $book_id),
            'Publishers' => Publisher::all(),
            'categories' => categories::all()
        ]);
    }

    public function category_page($category_id) {
        return view('categorypage', [
            'active' => 'category',
            'Publishers' => Publisher::all(),
            'categories' => categories::all(),
            'categories_where' => categories::all()->where('category_id', $category_id),
            'bookcategories' => Book_Category::all(),
            'books' => Books::all()
        ]);
    }

    public function publisher_page($publisher_id) {
        return view('publisherpage', [
            'active' => 'publisher',
            'books_where' => Books::all()->where('publisher_id', $publisher_id),
            'Publishers' => Publisher::all(),
            'Publishers_where' => Publisher::all()->where('publisher_id', $publisher_id),
            'categories' => categories::all()
        ]);
    }

    public function contact_page() {
        return view('contactpage', [
            'active' => "contact",
            'categories' => categories::all(),
            'Publishers' => Publisher::all()
        ]);
    }
}
