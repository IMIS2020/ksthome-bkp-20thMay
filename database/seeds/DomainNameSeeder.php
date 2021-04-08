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
                'name' => 'ExamLevel',
                'description' => 'desc 1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(    
            [
                'name' => 'ExamPassed',
                'description' => 'desc 2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(    
            [
                'name' => 'UnivBoard',
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
