<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string("book_id", 4)->primary();
            $table->string("publisher_id", 4);
            $table->foreign("publisher_id")->references("publisher_id")->on("publishers");
            $table->string("title");
            $table->string("author");
            $table->integer("year");
            $table->string("synopsis", 512);
            $table->string("image");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
