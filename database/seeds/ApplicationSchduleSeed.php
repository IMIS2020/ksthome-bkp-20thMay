<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ApplicationSchduleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applicationScheduleTable')->insert(
            [
                'sessionId' => 1,
                'scholarshipTypeValueId' => 19,
                'startDate'=> '01-04-2021',
                'lastDate'=>  '31-05-2021',
                'applicationNoPrefixFormat'=> 'NURSG/21-22/',
                'contactPersonEmailId'=> 'AdminNURSING@gmail.com',
                'contactPersonContactNo'=> '9999999999',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('applicationScheduleTable')->insert(
                [
                    'sessionId' => 1,
                    'scholarshipTypeValueId' => 20,
                    'startDate'=> '01-04-2021',
                    'lastDate'=>  '31-05-2021',
                    'applicationNoPrefixFormat'=> 'HHDLS/21-22/',
                    'contactPersonEmailId'=> 'AdminHHDLSS@gmail.com',
                    'contactPersonContactNo'=> '9999999999',
                    'status'=> 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
    }
}
