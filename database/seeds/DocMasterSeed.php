<?php

use Illuminate\Database\Seeder;

class DocMasterSeed extends Seeder
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
    }
}
