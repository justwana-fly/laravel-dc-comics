<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = [
            [
                "title" => "Action Comics #1000: The Deluxe Edition",
                "description" => "The celebration of 1,000 issues...",
                "thumb" => "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
                "price" => "$19.99",
                "series" => "Action Comics",
                "sale_date" => "2018-10-02",
                "type" => "comic book",
            ],
            [
                "title" => "American Vampire 1976 #1",
                "description" => "America is broken...",
                "thumb" => "https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg",
                "price" => "$3.99",
                "series" => "American Vampire 1976",
                "sale_date" => "2020-10-06",
                "type" => "comic book",
            ],
            // Aggiungi qui gli altri fumetti...
        ];

        foreach ($comics as $comic) {
            DB::table('comics')->insert($comic);
        }
    }
}
