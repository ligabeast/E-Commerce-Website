<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleCategory::truncate(); //delete all rows

        $csvFile = fopen(base_path("database/data/articlecategory.csv"), "r");
        $data = fgetcsv($csvFile, 2000); // Column names

        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {

            ArticleCategory::create([
                "id" => $data['0'],
                "name" => $data['1'],
                "parent" => ($data['2'] != "NULL") ? $data['2'] : NULL
            ]);
        }

        fclose($csvFile);
    }
}
