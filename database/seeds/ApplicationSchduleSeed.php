<?php

use Illuminate\Database\Seeder;

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
                'sessionId' => '',
                'financialYear'=> '',
                'startDate'=> '',
                'lastDate'=> '',
                'applicationNoPrefixFormat'=> '',
                'contactPersonEmailId'=> '',
                'contactPersonContactNo'=> '',
                'status'=> '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
