<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DocMasterSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC001',
                'docDesc' => 'Application Form - System Generated',
                'docType' => 'SysGenerated',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC002',
                'docDesc' => 'Application Form',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '2'
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC003',
                'docDesc' => 'Proof of admission in a recognized institute/ admission call letter issued by the institute',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC004',
                'docDesc' => 'Annexure-I ',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '2',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC005',
                'docDesc' => 'Annexure-I - System Generated',
                'docType' => 'SysGenerated',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC006',
                'docDesc' => 'Annexure-II - certificate from colony leader',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC007',
                'docDesc' => 'Passport size photograph',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC008',
                'docDesc' => 'Self attested Birth certificate/ proof of age',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC018',
                'docDesc' => 'Self attested Proof of Address',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
        ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC009',
                'docDesc' => 'Self attested marksheet for 10th',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC010',
                'docDesc' => 'Self attested marksheet for 12th',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC011',
                'docDesc' => 'Self attested marksheet for Graduation',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC012',
                'docDesc' => 'Self attested Leprosy Certificate of Mother',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC013',
                'docDesc' => 'Self attested Disability Certificate of Mother',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC014',
                'docDesc' => 'Self attested Leprosy Certificate of Father',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC015',
                'docDesc' => 'Self attested Disability Certificate of Father',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC016',
                'docDesc' => 'Self attested Leprosy Certificate of Self',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);
        DB::table('docMaster')->insert(
            [
                'docShortName' => 'DOC017',
                'docDesc' => 'Self attested Disability Certificate of Self',
                'docType' => 'Uploaded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processStepId' => 1,
                'requiredFor' => '3',
            ]);

            
    }
}
