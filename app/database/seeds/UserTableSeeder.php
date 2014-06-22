<?php
/*
* Agregamos un usuario inicial  a la Base de Datos
*/
class UserTableSeeder extends Seeder{
  public function run(){
    User::create(array(
      'username' => 'admin',
      'name' => 'Admin',
      'email' => 'admin@lara-lawyer.com',
      'password' => Hash::make('admin') 
      ));
  }
  
}
