<?php

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::insert([
            [
                'name'      =>  'Akunting'
            ],
            [
                'name'      =>  'Administrasi'
            ],
            [
                'name'      =>  'Marketing'
            ],
        ]);
    }
}
