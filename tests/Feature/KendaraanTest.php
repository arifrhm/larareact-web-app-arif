<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class KendaraanTest extends TestCase
{
    use RefreshDatabase;

    public function testGetAllKendaraan()
    {
        $response = $this->getJson('/api/kendaraan');

        $response->assertStatus(200)
            ->assertJson([
                'status' => 'success',
            ]);
    }

    public function testCreateKendaraan()
    {
        $data = [
            'tahun_keluaran' => 2022,
            'warna' => 'Merah',
            'harga' => 250000000,
        ];

        $response = $this->postJson('/api/kendaraan', $data);

        $response->assertStatus(201)
            ->assertJson([
                'status' => 'success',
            ]);
    }

    public function testUpdateKendaraan()
    {
        $data = [
            'tahun_keluaran' => 2022,
            'warna' => 'Merah',
            'harga' => 250000000,
        ];

        $response = $this->putJson('/api/kendaraan/1', $data);

        $response->assertStatus(200)
            ->assertJson([
                'status' => 'success',
            ]);
    }

    public function testDeleteKendaraan()
    {
        $response = $this->deleteJson('/api/kendaraan/1');

        $response->assertStatus(200)
            ->assertJson([
                'status' => 'success',
            ]);
    }
}
