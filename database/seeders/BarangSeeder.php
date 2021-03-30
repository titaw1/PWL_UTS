<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Barang::insert([
            [
                'kode_barang' => 'KDB01',
                'nama_barang' => 'Taro Net',
                'kategori_barang' => 'Snack',
                'harga' => 8500,
                'qty' => 175
            ],
            [
                'kode_barang' => 'KDB02',
                'nama_barang' => 'Vaseline Super Food',
                'kategori_barang' => 'Body Care',
                'harga' => 29750,
                'qty' => 520
            ],
            [
                'kode_barang' => 'KDB03',
                'nama_barang' => 'Fiesta Spicy Wing',
                'kategori_barang' => 'Makanan',
                'harga' => 57000,
                'qty' => 107
            ],
            [
                'kode_barang' => 'KDB04',
                'nama_barang' => 'Nestle Bear Brand',
                'kategori_barang' => 'Minuman',
                'harga' => 9600,
                'qty' => 819
            ],
            [
                'kode_barang' => 'KDB05',
                'nama_barang' => 'Head & Shoulders Shampoo Smooth and Silky',
                'kategori_barang' => 'Body Care',
                'harga' => 47200,
                'qty' => 90
            ],
            [
                'kode_barang' => 'KDB06',
                'nama_barang' => 'Shinzui Body Wash Kirey 500 ml',
                'kategori_barang' => 'Body Care',
                'harga' => 30499,
                'qty' => 601
            ],
            [
                'kode_barang' => 'KDB07',
                'nama_barang' => 'Sari Roti Gandum',
                'kategori_barang' => 'Makanan',
                'harga' => 20000,
                'qty' => 36
            ],
            [
                'kode_barang' => 'KDB08',
                'nama_barang' => 'Pop Mie Goreng Gledek',
                'kategori_barang' => 'Makanan',
                'harga' => 5400,
                'qty' => 200
            ],
            [
                'kode_barang' => 'KDB09',
                'nama_barang' => 'Sprite dengan Lemon Lime',
                'kategori_barang' => 'Minuman',
                'harga' => 3888,
                'qty' => 79
            ],
            [
                'kode_barang' => 'KDB010',
                'nama_barang' => 'Coca Cola 1,5 liter ',
                'kategori_barang' => 'Minuman',
                'harga' => 22500,
                'qty' => 22
            ],
            [
                'kode_barang' => 'KDB011',
                'nama_barang' => 'Sensitive Expert by Pepsodent',
                'kategori_barang' => 'Body Care',
                'harga' => 19900,
                'qty' => 478
            ],
            [
                'kode_barang' => 'KDB012',
                'nama_barang' => 'Vitalis Eau De Cologne Magnifique 100 ml',
                'kategori_barang' => 'Body Care',
                'harga' => 37600,
                'qty' => 75
            ],
            [
                'kode_barang' => 'KDB013',
                'nama_barang' => 'SAMYANG Original Hot Chicken',
                'kategori_barang' => 'Makanan',
                'harga' => 17500,
                'qty' => 87
            ],
            [
                'kode_barang' => 'KDB014',
                'nama_barang' => 'Squeeze Cimory Rasa Strawberry',
                'kategori_barang' => 'Minuman',
                'harga' => 13500,
                'qty' => 55
            ],
            [
                'kode_barang' => 'KDB015',
                'nama_barang' => 'Purbasari Lulur Mandi Putih',
                'kategori_barang' => 'Body Care',
                'harga' => 12000,
                'qty' => 73
            ],
            [
                'kode_barang' => 'KDB016',
                'nama_barang' => 'Marcks Bedak Tabur',
                'kategori_barang' => 'Body Care',
                'harga' => 21400,
                'qty' => 29
            ],
            [
                'kode_barang' => 'KDB017',
                'nama_barang' => 'Lifebuoy Bar Soap Lemon isi 4',
                'kategori_barang' => 'Body Care',
                'harga' => 17700,
                'qty' => 17
            ],
            [
                'kode_barang' => 'KDB018',
                'nama_barang' => 'Frisian Flag Coconut Delight',
                'kategori_barang' => 'Minuman',
                'harga' => 10900,
                'qty' => 65
            ],
            [
                'kode_barang' => 'KDB019',
                'nama_barang' => 'Fruit Tea Strawberry 500 ml',
                'kategori_barang' => 'Minuman',
                'harga' => 7500,
                'qty' => 126
            ],
            [
                'kode_barang' => 'KDB020',
                'nama_barang' => 'French Fries 2000',
                'kategori_barang' => 'Snack',
                'harga' => 12000,
                'qty' => 134
            ]
        ]);
    }
}
