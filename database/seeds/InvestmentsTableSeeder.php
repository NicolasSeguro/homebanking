<?php

use Illuminate\Database\Seeder;

class InvestmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('investments')->insert([
            'empresa' => 'Microsoft',
            'acciones' => 100000,
            'valor' => 100,
            'total' => 10000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('investments')->insert([
            'empresa' => 'Google',
            'acciones' => 100000,
            'valor' => 100,
            'total' => 10000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('investments')->insert([
            'empresa' => 'Uber',
            'acciones' => 100000,
            'valor' => 100,
            'total' => 10000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('investments')->insert([
            'empresa' => 'MercadoLibre',
            'acciones' => 100000,
            'valor' => 100,
            'total' => 10000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('investments')->insert([
            'empresa' => 'Facebook',
            'acciones' => 100000,
            'valor' => 100,
            'total' => 10000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
