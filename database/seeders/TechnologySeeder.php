<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'Artificial intelligence',
            ],
            [
                'name' => 'Robotics',
            ],
            [
                'name' => 'Medical',
            ],
            [
                'name' => '3d Printing',
            ],
            [
                'name' => 'Energy',
            ],
            [
                'name' => 'Blockchain',
            ],
        ];

        foreach ($technologies as $technology) {
            $newTag = new Technology();
            $newTag->fill($technology);
            $newTag->save();
        }
    }
}
