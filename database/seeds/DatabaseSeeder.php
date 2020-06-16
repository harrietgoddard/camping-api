<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('regions')->insert([
            ['region_name' => 'North West'],
            ['region_name' => 'North East']
        ]);

    }
}
