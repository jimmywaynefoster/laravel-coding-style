<?php

use App\Models\Score;
use Illuminate\Database\Seeder;

class ScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Score::insert([
            [
                'name'      =>  'Memuaskan',
                'value'     =>  '2'
            ],
            [
                'name'      =>  'Baik',
                'value'     =>  '1'
            ],
            [
                'name'      =>  'Cukup',
                'value'     =>  '0'
            ],
            [
                'name'      =>  'Kurang',
                'value'     =>  '0'
            ],
        ]);
    }
}
