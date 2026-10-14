<?php

namespace Database\Factories;

use App\Models\pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<pesanan>
 */
class pesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tanggalPesanan = fake()->dateTimeBetween('-1 hour', 'now');
        return [
            'menu_id' => pesanan::inRandomOrder()->value('id'),
            'nama_pelanggan' => pesanan::inRandomOrder()->value('id'),
            'nomor_meja' => pesanan::inRandomOrder()->value('id'),
            'jumlah' => pesanan::inRandomOrder()->value('id'),
            'total_harga' => pesanan::inRandomOrder()->value('id'),
            'menu_id' => menu::inRandomOrder()->value('id'),
            'tanggal_pinjam' => $tanggalPinjam,
            'tanggal_kembali' => fake()->optional(0.7)->dateTimeBetween(
                $tanggalPinjam,
                'now'
            ),
        ];
    }
}
