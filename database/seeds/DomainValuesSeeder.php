<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DomainValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domainValues')->insert(
            [
                'value' => '10',
                'valueDescription' => 'Examination Level 10',
                'nameId' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => '12',
                'valueDescription' => 'Examination Level 12',
                'nameId' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => '13',
                'valueDescription' => 'Examination Level 13',
                'nameId' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Madhyamik',
                'valueDescription' => 'Examination Passed',
                'nameId' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Higher Secondary',
                'valueDescription' => 'Examination Passed',
                'nameId' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'B.Com',
                'valueDescription' => 'Examination Passed',
                'nameId' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'WBBSE',
                'valueDescription' => 'University/ Board/ Council',
                'nameId' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'WBCHSE',
                'valueDescription' => 'University/ Board/ Council',
                'nameId' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'WBSCTVE&D',
                'valueDescription' => 'University/ Board/ Council',
                'nameId' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Nursing',
                'valueDescription' => 'Scholarship',
                'nameId' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'HHDLS',
                'valueDescription' => 'Scholarship',
                'nameId' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Graduate',
                'valueDescription' => 'Examination Level',
                'nameId' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Post Graduate',
                'valueDescription' => 'Examination Level',
                'nameId' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        
            
    }
}
