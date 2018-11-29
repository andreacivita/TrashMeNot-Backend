<?php

use Illuminate\Database\Seeder;

class NegozianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('negozi')->insert([
            'nome' => "Negozio 1",
            'piva' => "22900",
            'user_id' => "1",
        ]);
    }
}