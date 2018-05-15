<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//usandoconstructormysql
        // DB::table('users')->insert([
        //     'name' => 'Daniel',
        //     'password' => bcrypt('123'),
        // ]);

    	//coneloquentlaravel
        User::create([
            'name' => 'Daniel',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Jhon',
            'password' => ('123'),
        ]);
        User::create([
            'name' => 'Marisol',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Fernan',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Laura',
            'password' => bcrypt('111'),
        ]);

    }
}
