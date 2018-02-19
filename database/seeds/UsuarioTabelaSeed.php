<?php

use Illuminate\Database\Seeder;

class UsuarioTabelaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Usuario', 20)->create();
    }
}
