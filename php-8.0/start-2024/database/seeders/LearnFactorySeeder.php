<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Learn as LearnFactoryModel;
use Database\Factories\LearnFactory;

class LearnFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LearnFactoryModel::factory(LearnFactory::class)->create();
        // LearnFactory::create([
        //     'name' => 'Xuân Trường',
        //     'result' => "xt000307vn@gmail.com",
        // ]);
    }
}
