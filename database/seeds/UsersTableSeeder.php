<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->truncate();
      
      //update users set role='admin' where email='miike@example.com';
      factory(App\User::class,20)->create([
        'role' => 'user'
      ]); //funcion para crear 20 usuarios normales
      factory(App\User::class,5)->create([
        'role' => 'editor'
      ]); //funcion para crear 5 usuarios editor
    }
}
