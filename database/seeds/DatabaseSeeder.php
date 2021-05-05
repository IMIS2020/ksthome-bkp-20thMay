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
        $this->call(AdminSeeder::class);
        $this->call(DocMasterSeed::class);
        $this->call(DomainNameSeeder::class);
        $this->call(DomainValuesSeeder::class);
        $this->call(ApplicationSessionSeed::class);
        $this->call(ApplicationScheduleSeed::class);
    }
}
