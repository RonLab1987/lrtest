<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Test;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('TestSeeder');

        Model::reguard();
    }
}

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->delete();
        
        Test::create(['text' => 'test <b>row</b>', 'number' => 1 ]);
        Test::create(['text' => 'test row', 'number' => 2 ]);
        Test::create(['text' => 'test <b>row</b>', 'number' => 3 ]);
        Test::create(['text' => 'test row', 'number' => 4 ]);
        Test::create(['text' => 'test <b>row</b>', 'number' => 5 ]);
        Test::create(['text' => 'test row', 'number' => 6 ]);
       
    }
}
