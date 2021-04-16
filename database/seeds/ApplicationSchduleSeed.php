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
        DB::table('applicationSessionSeed')->insert(
            [
                'sessionId' => 1,
                'scholarshipTypeValueId' => 16,
                'startDate'=> '01-04-2021',
                'lastDate'=>  '31-05-2021',
                'applicationNoPrefixFormat'=> 'NURS-21-22-',
                'contactPersonEmailId'=> 'AdminNURSING@gmail.com',
                'contactPersonContactNo'=> '9999999999',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('applicationSessionSeed')->insert(
                [
                    'sessionId' => 1,
                    'scholarshipTypeValueId' => 17,
                    'startDate'=> '01-04-2021',
                    'lastDate'=>  '31-05-2021',
                    'applicationNoPrefixFormat'=> 'DLSS-21-22-',
                    'contactPersonEmailId'=> 'AdminHHDLSS@gmail.com',
                    'contactPersonContactNo'=> '9999999999',
                    'status'=> 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
    }
}
