<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name'=>'Alex Volpe',
                'birthday'=>'2006-12-12',
                'created_at'=>date("Y-m-d H:m:s"),
                'updated_at'=>date("Y-m-d H:m:s")],
            [
                'name'=>'Mattia Rizza',
                'birthday'=>'2006-11-08',
                'created_at'=>date("Y-m-d H:m:s"),
                'updated_at'=>date("Y-m-d H:m:s")],
        ]);
    }
}
