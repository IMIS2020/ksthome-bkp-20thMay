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
                'sessionName'=> '2021-22',
                'start_date' => '1-1-2021',
                'end_date'   => '31-12-2021',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('applicationSession')->insert(
            [
                'sessionName'=> '2022-23',
                'start_date' => '1-1-2022',
                'end_date'   => '31-12-2022',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('applicationSession')->insert(
            [
                'sessionName'=> '2023-24',
                'start_date' => '1-1-2023',
                'end_date'   => '31-12-2023',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
