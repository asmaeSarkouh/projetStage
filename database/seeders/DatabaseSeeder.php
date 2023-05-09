<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $type=
         [
            ['title'=>'camera'],['title'=>'ordinateur'],
            ['title'=>'imprimante'],[ 'title'=>'ecran'],
            ['title'=>'souris'],['title'=>'unité central'],
            ['title'=>'clavier'],['title'=>'scanner'],
            ['title'=>'hauts parlaur'],['title'=>'cable imprimante'],
            ['title'=>'cable vga'],['title'=>'data show'],['title'=>'router'],
         ];
         foreach ($type as $t) {
            Type::factory()->create([
                'title' => $t['title']
        ]);}
        // $probleme=[
        //     ['title'=>''],['title'=>''],
        //     ['title'=>''],['title'=>''],
        //     ['title'=>''],['title'=>''],
        //     ['title'=>''],['title'=>''],
        // ];
        // foreach ($probleme as $p) {
        //     Type::factory()->create([
        //         'title' => $p['title']
        // ]);}
    }
}
