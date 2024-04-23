<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::factory(8)->create();
        // Staff::create([
        //     'id' => '1',
        //     'nip' => '231402061',
        //     'email' => 'kielsitum@gmail.com',
        //     'nama' => 'Yehezkiel Situmorang',
        //     'tanggal_lahir' => '2005-02-28',
        //     'no_hp' => '08111023149'
        // ]);
    }
}
