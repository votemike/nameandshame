<?php

use Illuminate\Database\Seeder;

class ReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toInsert = [
            ['reason' => 'Hogging middle lane'],
            ['reason' => 'Jumping red light'],
            ['reason' => 'Swerving'],
            ['reason' => 'Speeding'],
            ['reason' => 'Braking too hard'],
            ['reason' => 'Distracted while driving'],
            ['reason' => 'Cutting up'],
            ['reason' => 'Too many passengers'],
            ['reason' => 'Other']
        ];

        DB::table('reasons')->insert($toInsert);
    }
}
