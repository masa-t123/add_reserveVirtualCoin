<?php

use Illuminate\Database\Seeder;

class ExchangeMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exchange_m')->insert([
            'exchange_m_id' => 10,
            'name' => 'Zaif',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
