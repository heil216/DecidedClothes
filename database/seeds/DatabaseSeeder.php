<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clothescolors')->insert([
            [
                'name' => 'ホワイト',
            ],
            [
                'name' => 'ブラック',
            ],
            [
                'name' => 'グレー',
            ],
            [
            'name' => 'レッド',
            ],
            [
            'name' => 'オレンジ',
            ],
            [
            'name' => 'イエロー',
            ],
            [
            'name' => 'ベージュ',
            ],
            [
            'name' => 'ライトグリーン',
            ],
            [
            'name' => 'グリーン',
            ],
            [
            'name' => 'カーキ',
            ],
            [
            'name' => 'ライトブルー',
            ],
            [
            'name' => 'ブルー',
            ],
            [
            'name' => 'ネイビー',
            ],
            [
            'name' => 'パープル',
            ],
            [
            'name' => 'ピンク',
            ],
            [
            'name' => 'ブラウン',
            ],
        ]);
    }
}
