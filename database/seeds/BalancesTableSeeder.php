<?php

use Illuminate\Database\Seeder;

class BalancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('balances')->insert([
            'fecha' => NOW(),
            'desc' => "Salario",
            'importe' => 1000000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
