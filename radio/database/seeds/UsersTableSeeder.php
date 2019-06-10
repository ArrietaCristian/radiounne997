<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        self::seedUsers();
        $this->command->info('Tabla users inicializada con datos!');
               
}

 private function seedUsers(){
        DB::table('users')->delete();
        User::create(array('name'=>'Admin', 'email'=>'admin@gmail.com', 'password'=> bcrypt('123')));
        User::create(array('name' => 'cristian', 'email' => 'cristian10juv@gmail.com', 'password'=> bcrypt('123')));
    }

}

      