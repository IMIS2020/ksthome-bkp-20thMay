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
        // DB::table('admins')->insert([
        //     'name' => 'Super-Admin',
        //     'email' => 'superadmin@silf.in',
        //     'password' => Hash::make('Password'),
        //     'contactno' =>'9830258747',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        DB::table('admins')->insert([
            'name' => 'silf-admin3',
            'email' => 'admin3@silf.in',
            'password' => Hash::make('admin3@silf'),
            'contactno' =>'9830258748',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

         DB::table('admins')->insert([
            'name' => 'silf-admin1',
            'email' => 'admin1@silf.in',
            'password' => Hash::make('admin1@silf'),
            'contactno' =>'9230558747',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ]);

         DB::table('admins')->insert([
            'name' => 'silf-admin2',
            'email' => 'admin2@silf.in',
            'password' => Hash::make('admin2@silf'),
            'contactno' =>'9830258746',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
