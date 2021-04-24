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

        //Examination level
        DB::table('domainValues')->insert(
            [
                'value' => '10th Standard',
                'valueDescription' => 'Examination passed 10th Standard',
                'nameId' => 1,
                'domainTypeId' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => '12th - Science',
                'valueDescription' => 'Examination passed 12th Science',
                'nameId' => 2,
                'domainTypeId' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => '12th - Commerce',
                'valueDescription' => 'Examination passed 12th Commerce',
                'nameId' => 2,
                'domainTypeId' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => '12th - Arts',
                'valueDescription' => 'Examination passed 12th Arts',
                'nameId' => 2,
                'domainTypeId' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'B.Ed',
                'valueDescription' => 'B.Ed',
                'nameId' => 3,
                'domainTypeId' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'B.Sc Agriculture',
                'valueDescription' => 'B.Sc Agriculture',
                'nameId' => 3,
                'domainTypeId' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);


        //University board

        DB::table('domainValues')->insert(
            [
                'value' => 'CISCE - Council for the Indian School Certificate Examinations',
                'valueDescription' => 'CISCE - Council for the Indian School Certificate Examinations',
                'nameId' => 1,
                'domainTypeId' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'CISCE - Council for the Indian School Certificate Examinations',
                'valueDescription' => 'CISCE - Council for the Indian School Certificate Examinations',
                'nameId' => 2,
                'domainTypeId' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'WBBSE - Council for the Indian School Certificate Examinations',
                'valueDescription' => 'WBBSE - Council for the Indian School Certificate Examinations',
                'nameId' => 1,
                'domainTypeId' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'WBCHSE - West Bengal Council of Higher Secondary Education',
                'valueDescription' => 'WBCHSE - West Bengal Council of Higher Secondary Education',
                'nameId' => 2,
                'domainTypeId' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Clacutta University',
                'valueDescription' => 'Clacutta University',
                'nameId' => 3,
                'domainTypeId' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Delhi University',
                'valueDescription' => 'Delhi University',
                'nameId' => 3,
                'domainTypeId' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        //Admission

        DB::table('domainValues')->insert(
            [
                'value' => 'Bachelors Nursing',
                'valueDescription' => 'Bachelors Nursing',
                'nameId' => 4,
                'domainTypeId' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]); 
        DB::table('domainValues')->insert(
            [
                'value' => 'Bachelors in Pharmacy',
                'valueDescription' => 'Bachelors in Pharmacy',
                'nameId' => 5,
                'domainTypeId' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Master in Pharmacy',
                'valueDescription' => 'Master in Pharmacy',
                'nameId' => 6,
                'domainTypeId' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]); 
        DB::table('domainValues')->insert(
            [
                'value' => 'Diploma in Pharmacy',
                'valueDescription' => 'Diploma in Pharmacy',
                'nameId' => 7,
                'domainTypeId' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Hotel Management',
                'valueDescription' => 'Hotel Management',
                'nameId' => 8,
                'domainTypeId' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Deploma in Hospitality',
                'valueDescription' => 'Deploma in Hospitality',
                'nameId' => 7,
                'domainTypeId' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);


        //Scholarship

        DB::table('domainValues')->insert(
            [
                'value' => 'Nursing',
                'valueDescription' => 'Scholarship',
                'nameId' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        
        DB::table('domainValues')->insert(
            [
                'value' => 'HHDLS',
                'valueDescription' => 'Scholarship',
                'nameId' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            
       
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => '10',
        //         'valueDescription' => 'Examination Level 10',
        //         'nameId' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => '12',
        //         'valueDescription' => 'Examination Level 12',
        //         'nameId' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => '13',
        //         'valueDescription' => 'Examination Level 13',
        //         'nameId' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => 'Madhyamik',
        //         'valueDescription' => 'Examination Passed',
        //         'nameId' => 2,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => 'Higher Secondary',
        //         'valueDescription' => 'Examination Passed',
        //         'nameId' => 2,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => 'B.Com',
        //         'valueDescription' => 'Examination Passed',
        //         'nameId' => 2,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => 'WBBSE',
        //         'valueDescription' => 'University/ Board/ Council',
        //         'nameId' => 3,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => 'WBCHSE',
        //         'valueDescription' => 'University/ Board/ Council',
        //         'nameId' => 3,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => 'WBSCTVE&D',
        //         'valueDescription' => 'University/ Board/ Council',
        //         'nameId' => 3,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);


        // DB::table('domainValues')->insert(
        //     [
        //         'value' => 'Nursing',
        //         'valueDescription' => 'Scholarship',
        //         'nameId' => 16,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => 'HHDLS',
        //         'valueDescription' => 'Scholarship',
        //         'nameId' => 16,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);



        // DB::table('domainValues')->insert(
        //     [
        //         'value' => 'Graduate',
        //         'valueDescription' => 'Examination Level',
        //         'nameId' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainValues')->insert(
        //     [
        //         'value' => 'Post Graduate',
        //         'valueDescription' => 'Examination Level',
        //         'nameId' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        
        DB::table('domainValues')->insert(
            [
                'value' => 'Eligibility criteria',
                'valueDescription' => 'Eligibility criteria',
                'nameId' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        DB::table('domainValues')->insert(
            [
                'value' => 'Documentation related queries',
                'valueDescription' => 'Documentation related queries',
                'nameId' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        DB::table('domainValues')->insert(
            [
                'value' => 'Nursing related queries',
                'valueDescription' => 'Nursing related queries',
                'nameId' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        DB::table('domainValues')->insert(
            [
                'value' => 'HHDLSS related queries',
                'valueDescription' => 'HHDLSS related queries',
                'nameId' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        
        DB::table('domainValues')->insert(
            [
                'value' => 'General queries',
                'valueDescription' => 'General queries',
                'nameId' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainValues')->insert(
            [
                'value' => 'Others',
                'valueDescription' => 'Others',
                'nameId' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
