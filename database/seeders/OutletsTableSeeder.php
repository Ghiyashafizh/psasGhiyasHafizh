<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Outlet;

class OutletsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Outlet::create([
            'code' =>  Str::random(),
            'name' => 'Ghiyas',
            'status' => 'aktif',
            'address' => 'jl. bogor timur no.1',
            'phone' => '0811111111',
        ]);
        \App\Models\Outlet::create([
            'code' => Str::random(),
            'name' => 'Razan',
            'status' => 'berlangsung',
            'address' => 'jl. bogor timur no.2',
            'phone' => '0811222222',
        ]);
        \App\Models\Outlet::create([
            'code' => Str::random(),
            'name' => 'Zaka',
            'status' => 'aktif',
            'address' => 'jl. bogor timur no.3',
            'phone' => '0811333333',
        ]);
        \App\Models\Outlet::create([
            'code' => Str::random(),
            'name' => 'Akbar',
            'status' => 'aktif',
            'address' => 'jl. bogor timur no.4',
            'phone' => '0811444444',
        ]);
        \App\Models\Outlet::create([
            'code' => Str::random(),
            'name' => 'Amelia',
            'status' => 'berlangsung',
            'address' => 'jl. bogor timur no.5',
            'phone' => '0811555555',
        ]);
        
    }
}