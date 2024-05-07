<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Xuân Trường',
            'email' => "xt000307vn@gmail.com",
            'password' => "$2y$10$X/0IBRPg3fS3/Hy9l3chUebLQxVqJ.pKgbBihKNKBrPTuWct9j76K",
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Tuấn Anh',
            'email' => "tuananh@gmail.com",
            'password' => "$2y$10$X/0IBRPg3fS3/Hy9l3chUebLQxVqJ.pKgbBihKNKBrPTuWct9j76K",
            'role_id' => 2
        ]);
    }
}
