<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate(); //delete all rows

        $csvFile = fopen(base_path("database/data/users.csv"), "r");
        $data = fgetcsv($csvFile, 2000); // Column names

        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {

            User::create([
                "id" => $data['0'],
                "name" => $data['1'],
                "password" => $data['2'],
                "email" => $data['3'],
            ]);
        }

        fclose($csvFile);
    }
}
