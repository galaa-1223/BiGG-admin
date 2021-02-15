<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use App\Models\Department;

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = Department::create([
            'name' => 'Ider',
            'email' => 'ider@yahoo.com',
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
