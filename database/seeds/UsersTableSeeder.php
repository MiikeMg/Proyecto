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
      /*DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
       */
      DB::table('users')->truncate();
      
      factory(App\User::class)->create([
        'name' => 'Miike',
        'email' => 'Miike@miike.com',
        'password' => 'miikee',
        'role' => 'admin'
      ]);
      
      factory(App\User::class,20)->create([
        'role' => 'user'
      ]); //funcion para crear 20 usuarios normales
      factory(App\User::class,5)->create([
        'role' => 'editor'
      ]); //funcion para crear 5 usuarios editor
    }
}
