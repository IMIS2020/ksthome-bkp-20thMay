<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ApplicationSessionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applicationSession')->insert(
            [
                'sessionName'=> '21-22',
                'start_date' => '1-1-2021',
                'end_date'   => '1-1-2022',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('applicationSession')->insert(
            [
                'sessionName'=> '22-23',
                'start_date' => '1-1-2022',
                'end_date'   => '1-1-2023',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('applicationSession')->insert(
            [
                'sessionName'=> '23-24',
                'start_date' => '1-1-2023',
                'end_date'   => '1-1-2024',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
