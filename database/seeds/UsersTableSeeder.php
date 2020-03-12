<?php
use App\User;

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
        $users=factory(App\User::class,3)->create()
        ->each(function($user){
            $user->librerias()->save(factory(App\Libreria::class)->make());
        });

        //factory(\App\User::class,4)->create();


        /*User::Create([
            'name'       =>'Anita',
            'direccion'  =>[
                "Calle"  =>24,
                "Barrio" =>'Mochila'
            ],
            'email'      =>'anita@gmail.com',
            'password'   =>'hola12345678',
        ]);*/


        /*$direccion=["calle 42"];
        $prueba=json_encode($direccion);
        \DB::insert("INSERT INTO users(name,direccion,email,password)
        VALUES ('Anita',$prueba,'anita@gmail.com','hola12345678')");*/
    }
}
