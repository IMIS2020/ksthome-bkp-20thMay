<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'intuId' => 'SU-000001',
            'name' => 'Super-Admin',
            'dob'       => '1984-01-15',
            'gender'    => 'Male',
            'contactNo' =>'9830258747',
            'email' => 'superadmin@silf.in',
            'password' => Hash::make('Password'),
            'status'   => TRUE,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('admins')->insert([
            'intuId' => 'USER-00001',
            'name' => 'silf-admin1',
            'dob'       => '1999-01-10',
            'gender'    => 'Male',
            'contactNo' =>'9230558747',
            'alternateContactNo' =>'9230558757',
            'email' => 'admin1@silf.in',
            'password' => Hash::make('admin1@silf'),
            'status'   => TRUE,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ]);


         DB::table('admins')->insert([
            'intuId' => 'USER-00002',
            'name' => 'silf-admin2',
            'dob'       => '1996-01-15',
            'gender'    => 'Male',
            'contactNo' =>'9230551747',
            'alternateContactNo' =>'9237558757',
            'email' => 'admin2@silf.in',
            'password' => Hash::make('admin2@silf'),
            'status'   => TRUE,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ]);


         DB::table('admins')->insert([
            'intuId' => 'USER-00003',
            'name' => 'silf-admin3',
            'dob'       => '1996-04-27',
            'gender'    => 'Male',
            'contactNo' =>'9774589123',
            'alternateContactNo' =>'7890445697',
            'email' => 'admin3@silf.in',
            'password' => Hash::make('admin3@silf'),
            'status'   => TRUE,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ]);

        //  DB::table('admins')->insert([
        //     'name' => 'silf-admin1',
        //     'email' => 'admin1@silf.in',
        //     'password' => Hash::make('admin1@silf'),
        //     'contactno' =>'9230558747',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //  ]);

    }
}
