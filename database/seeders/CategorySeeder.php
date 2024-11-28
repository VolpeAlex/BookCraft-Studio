<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name'=>'Romanzo',
                'created_at'=>date("Y-m-d H:m:s"),
                'updated_at'=>date("Y-m-d H:m:s")],
            [
                'name'=>'Guida',
                'created_at'=>date("Y-m-d H:m:s"),
                'updated_at'=>date("Y-m-d H:m:s")],
        ]);
    }
}
