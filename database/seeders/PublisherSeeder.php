<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('publishers')->insert([
            [
                "publisher_id"=>"P001",
                "name"=>"Penerbit Haru",
                "address"=>"Jl. Sulawesi No.17, Nurmanan, Mangkujayan, Ponorogo, Jawa Timur",
                "phone"=>"(0352) 481444",
                "email"=>"penerbitharu@gmail.com",
                "image"=>"http://www.penerbitharu.com/upload/logo.png"
            ],
            [
                "publisher_id"=>"P002",
                "name"=>"Penerbit Gramedia Pustaka Utama",
                "address"=>"Gedung Kompas Gramedia Lantai 5, Jl. Palmerah Barat 29-37. Jakarta 10270",
                "phone"=>"(021) 5347710",
                "email"=>"customercare@gramedia.com",
                "image"=>"https://cdnwpedutorenews.gramedia.net/wp-content/uploads/2022/02/02083934/Gramedia-World-Karawang.png"
            ],
            [
                "publisher_id"=>"P003",
                "name"=>"Penerbit Erlangga",
                "address"=>"Jl. H. Baping Raya No. 100 Ciracas Jakarta 13740",
                "phone"=>"(021) 8717006",
                "email"=>"support@erlangga.co.id",
                "image"=>"https://upload.wikimedia.org/wikipedia/id/5/5b/Esis.jpg"
            ]
        ]);
    }
}
