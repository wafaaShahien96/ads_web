<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'name' => 'Wafaa Shahien',
            'email' => 'admin@admin.com',
            'password' => bcrypt('11445522'),
            ]);
    }
}
