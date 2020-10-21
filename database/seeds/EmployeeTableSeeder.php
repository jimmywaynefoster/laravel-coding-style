<?php

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert([
            [
                'nip'           =>  '1111',
                'name'          =>  'Michael',
                'position_id'   =>  '1',
                'level_id'      =>  '4'
            ],
            [
                'nip'           =>  '1112',
                'name'          =>  'Robert',
                'position_id'   =>  '2',
                'level_id'      =>  '4'
            ]
        ]);
    }
}
