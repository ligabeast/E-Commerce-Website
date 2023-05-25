<?php

namespace Database\Seeders;

use App\Models\ArticleHasCategory;
use Illuminate\Database\Seeder;

class ArticleHasCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleHasCategory::truncate(); //delete all rows

        $csvFile = fopen(base_path("database/data/article_has_articlecategory.csv"), "r");
        $data = fgetcsv($csvFile, 2000); // Column names

        while ($data = fgetcsv($csvFile, 2000, ";")) {

            ArticleHasCategory::create([
                "article_category_id" => (int)$data[0],
                "article_id" => (int)$data[1]
            ]);
        }
        fclose($csvFile);
    }
}
