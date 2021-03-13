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
            'name' => 'admin',
            'email' => 'admin@imisapp.com',
            'password' => Hash::make('password'),
            'contactno' =>'7890123456',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            
            
        ]);
    }
}
