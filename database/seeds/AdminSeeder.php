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
            'name'   => 'Super-Admin',
            'firstname' => 'Super',
            'lastname'  => 'Admin',
            'gender'    => 'Male',
            'contactNo' =>'9830258747',
            'email' => 'superadmin@silf.in',
            'password' => Hash::make('Password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('admins')->insert([
            'intuId' => 'USER-00002',
            'name' => 'silf-admin1',
            'firstname' => 'silf',
            'lastname' => '-admin1',
            'gender'    => 'Male',
            'contactNo' =>'9230558747',
            'email' => 'admin1@silf.in',
            'password' => Hash::make('admin1@silf'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ]);

        //  DB::table('admins')->insert([
        //     'intuId' => 'USER-00003',
        //     'name' => 'silf-admin2',
        //     'firstname' => 'silf',
        //     'lastname' => '-admin2',
        //     'gender'    => 'Male',
        //     'contactNo' =>'9231558747',
        //     'email' => 'admin2@silf.in',
        //     'password' => Hash::make('admin2@silf'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //  ]);
    }
}
