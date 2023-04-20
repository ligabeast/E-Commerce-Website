<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::truncate(); //delete all rows

        $csvFile = fopen(base_path("database/data/articles.csv"), "r");
        $data = fgetcsv($csvFile, 2000); // Column names

        while ($data = fgetcsv($csvFile, 2000, ";")) {

                Article::create([
                    "name" => $data['1'],
                    "price" => (int)str_replace('.', '', $data['2']),
                    "description" => $data['3'],
                    "creator_id" => $data['4'],
                    "state" => $data['6']
                ]);


        }
        fclose($csvFile);
    }
}
