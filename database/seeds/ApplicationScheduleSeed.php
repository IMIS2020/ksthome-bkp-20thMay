<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ApplicationScheduleSeed extends Seeder
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
                'scholarshipTypeValueId' => 18,
                'startDate'=> Carbon::parse('2021-04-01'),
                'lastDate'=>  Carbon::parse('2021-05-31'),
                'applicationNoPrefixFormat'=> 'NURSG/21-22/',
                'contactPersonEmailId'=> 'scholarships@silf.in',
                'contactPersonContactNo'=> '9990503759/9891572290',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        DB::table('applicationScheduleTable')->insert(
            [
                'sessionId' => 1,
                'scholarshipTypeValueId' => 19,
                'startDate'=> Carbon::parse('2021-04-01'),
                'lastDate'=>  Carbon::parse('2021-05-31'),
                'applicationNoPrefixFormat'=> 'HHDLS/21-22/',
                'contactPersonEmailId'=> 'scholarships@silf.in',
                'contactPersonContactNo'=> '9990503759/9891572290',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
