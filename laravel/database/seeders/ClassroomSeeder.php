<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ClassRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        //disable foreignkey
        Schema::disableForeignkeyConstraints();

        ClassRoom::truncate();

        Schema::enableForeignkeyConstraints();


        $data = [
            [
            'namee' => 'rpl a',
            ],
            [
                'namee' => 'rpl b',

            ],
            [
                'namee' => 'rpl c',
            ],

        ];

        foreach ($data  as $value) {
            ClassRoom::insert([
                'namee' => $value['namee'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }







        //

        // ClassRoom:: insert([
        //     'namee' => 'tkj c',
        //     'create_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);


        // //query builder

        // DB::table('class')->insert([
        //     'name' => 'tkj d',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);


        // ]);
    }
}
