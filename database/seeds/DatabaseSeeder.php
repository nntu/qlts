<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(taisanseed::class);
        $this->command->info('taisanseed table seeded!');

        $this->call(Phongseed::class);
        $this->command->info('Phong table seeded!');

        $this->call(NhomTSSeed::class);
        $this->command->info('Phong table seeded!');
    }
}
