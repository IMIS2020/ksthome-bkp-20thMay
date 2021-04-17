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
                'name' => 'ExamLevel-10',
                'description' => '10th Level',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'ExamLevel-12',
                'description' => '12th Level',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'ExamLevel-Graduate',
                'description' => 'Bachelors',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'AdmissionLevel-Bachelors-Nursing',
                'description' => 'Bachelors',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'AdmissionLevel-Bachelors-HHDLS',
                'description' => 'Bachelors',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'AdmissionLevel-Masters-HHDLS',
                'description' => 'Masters',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'AdmissionLevel-Diploma-HHDLS',
                'description' => 'Diploma',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'AdmissionLevel-Certificate-HHDLS',
                'description' => 'Certificate',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'ExamPassed',
                'description' => 'Examination Passed',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'UnivBoard',
                'description' => 'University/Board',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'AdmissionCourse-Bachelors-Nursing',
                'description' => 'Bachelors',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'AdmissionCourse-Bachelors-HHDLS',
                'description' => 'Bachelors',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'AdmissionCourse-Masters-HHDLS',
                'description' => 'Masters',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'AdmissionCourse-Diploma-HHDLS',
                'description' => 'Diploma',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('domainName')->insert(
            [
                'name' => 'AdmissionCourse-Certificate-HHDLS',
                'description' => 'Certificate',
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
        DB::table('domainName')->insert(    
            [
                'name' => 'CourseName',
                'description' => 'desc 5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    
        // DB::table('domainName')->insert(    
        //     [
        //         'name' => 'ExamPassed',
        //         'description' => 'desc 2',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainName')->insert(    
        //     [
        //         'name' => 'UnivBoard',
        //         'description' => 'desc 3',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainName')->insert(    
        //     [
        //         'name' => 'Scholarship',
        //         'description' => 'desc 4',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainName')->insert(    
        //     [
        //         'name' => 'CourseLevel',
        //         'description' => 'desc 5',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('domainName')->insert(    
        //     [
        //         'name' => 'CourseName',
        //         'description' => 'desc 5',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
    }
}
