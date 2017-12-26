<?php

use Illuminate\Database\Seeder;

class VCurrencyMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('v_currency_m')->insert([
            'v_currency_m_id' => 10,
            'short_name' => 'BTC',
            'name' => 'Bitcoin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
