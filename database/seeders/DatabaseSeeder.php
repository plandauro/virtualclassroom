<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/cursos');
        Storage::makeDirectory('public/cursos');

        $this->call(UserSeeder::class);

        $this->call(AreaSeeder::class);

        $this->call(GradeSeeder::class);

        $this->call(PriceSeeder::class);

        $this->call(LevelSeeder::class);

        $this->call(PlatformSeeder::class);

        $this->call(CourseSeeder::class);
    }
}
