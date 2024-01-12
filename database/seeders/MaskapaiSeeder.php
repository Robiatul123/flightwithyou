<?php

namespace Database\Seeders;

use App\Models\Maskapai;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MaskapaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Maskapai::create([
            'kode_maskapai'     => 'GRD-001',
            'nama_maskapai'     => 'Garuda Indonesia',
            'harga'             => '1000000',
        ]);
        Maskapai::create([
            'kode_maskapai'     => 'GRD-002',
            'nama_maskapai'     => 'Garuda Indonesia',
            'harga'             => '1500000',
        ]);
        Maskapai::create([
            'kode_maskapai'     => 'BTK-001',
            'nama_maskapai'     => 'Batik Air',
            'harga'             => '1000000',
        ]);
        Maskapai::create([
            'kode_maskapai'     => 'SRW-001',
            'nama_maskapai'     => 'Sriwijaya Air',
            'harga'             => '1200000',
        ]);
        Maskapai::create([
            'kode_maskapai'     => 'AAI-001',
            'nama_maskapai'     => 'Air Asia',
            'harga'             => '1100000',
        ]);
    }
}
