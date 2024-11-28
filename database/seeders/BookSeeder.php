<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title'=>'Come paccare PDI in 10 semplici step',
                'description'=>'Un libro guida che ti insegnera l importanza di paccare quello schifo di PDI',
                'pages'=>'146',
                'author_id'=>'1',
                'category_id'=>'2',
                'created_at'=>date("Y-m-d H:m:s"),
                'updated_at'=>date("Y-m-d H:m:s")],
            [
                'title'=>'La vita da sistemista',
                'description'=>'Un romanzo che ti farà commuovere raccontandoti la triste vita di un sistemista alla cpt',
                'pages'=>'593',
                'author_id'=>'2',
                'category_id'=>'1',
                'created_at'=>date("Y-m-d H:m:s"),
                'updated_at'=>date("Y-m-d H:m:s")],
            [
                'title'=>'In cucina con rizza',
                'description'=>'Impara a cucinare con il sistemista di trevano',
                'pages'=>'332',
                'author_id'=>'2',
                'category_id'=>'2',
                'created_at'=>date("Y-m-d H:m:s"),
                'updated_at'=>date("Y-m-d H:m:s")],
        ]);
    }
}
