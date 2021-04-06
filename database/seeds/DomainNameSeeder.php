<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DomainNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domainName')->insert(
            [
                'name' => 'Examination Level',
                'description' => 'desc 1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(    
            [
                'name' => 'Examination Passed',
                'description' => 'desc 2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(    
            [
                'name' => 'University/ Board/ Council',
                'description' => 'desc 3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(    
            [
                'name' => 'Scholarship',
                'description' => 'desc 4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
