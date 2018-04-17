<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	//para repetir seeder infinitas sin añadir de mas
    	$this->truncateTables([
            'users',
        ]);
        //paracrearlosseeders de user
        $this->call(UserSeeder::class);
    }

    // funcion para truncar las tablas cada vez que se cargue el php artisan migrate
    // practicamente para volerlas a crear
    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
 
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
 
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }


}
