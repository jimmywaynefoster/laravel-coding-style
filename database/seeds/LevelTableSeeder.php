<?php

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::insert([
            [
                'name'  =>  'Direktur'
            ],
            [
                'name'  =>  'Manajer'
            ],
            [
                'name'  =>  'SPV'
            ],
            [
                'name'  =>  'Staff'
            ]
        ]);
    }
}
