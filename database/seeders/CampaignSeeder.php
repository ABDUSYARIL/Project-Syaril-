<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
    'title' => 'Bantu Anak Yatim Piatu',
    'description' => 'Mari bersama-sama memberikan bantuan kepada anak-anak yatim piatu yang membutuhkan. Setiap sumbangan akan sangat berarti bagi mereka.',
    'target_donation' => 10000000,
    'collected_donation' => 0,
    'deadline' => '2026-12-31',
]); // ← ini yang kurang

Campaign::create([
    'title' => 'Bantu Korban Bencana Alam',
    'description' => 'Bencana alam seringkali meninggalkan banyak korban yang membutuhkan bantuan. Mari kita bersama-sama memberikan dukungan kepada mereka yang terdampak.',
    'target_donation' => 20000000,
    'collected_donation' => 0,
    'deadline' => '2026-12-31',
]);
    }
}
