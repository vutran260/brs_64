<?php

use Illuminate\Database\Seeder;
use App\Models\Mark;

class MarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mark::truncate();
        factory(Mark::class, 50)->create();
    }
}
