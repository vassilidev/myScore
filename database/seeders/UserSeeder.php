<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Vassili',
            'surname' => 'Joffroy',
            'gender' => 'male',
            'email' => 'vassilidevnet@gmail.com',
            'date_of_birth' => '2002-05-02',
            'note' => 20,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);

        User::factory()->times(10)->create();
    }
}
