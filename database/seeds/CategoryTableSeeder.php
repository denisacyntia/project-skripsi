<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert("INSERT INTO `categories`(`id`,`name`,`created_at`,`updated_at`) VALUES
        (1, 'Diri', '2020-05-29 12:55:01', '2020-05-29 12:55:01'),
        (2, 'Keluarga', '2020-05-29 12:55:01', '2020-05-29 12:55:01'),
        (3, 'Keuangan', '2020-05-29 12:55:01', '2020-05-29 12:55:01'),
        (4, 'Pekerjaan', '2020-05-29 12:55:01', '2020-05-29 12:55:01'),
        (5, 'Percintaan', '2020-05-29 12:55:01', '2020-05-29 12:55:01'),
        (6, 'Pertemanan', '2020-05-29 12:55:01', '2020-05-29 12:55:01')");
    }
}
