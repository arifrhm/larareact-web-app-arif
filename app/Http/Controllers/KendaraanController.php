<?php

namespace App\Http\Controllers;

use App\Services\KendaraanService;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    protected $kendaraanService;

    public function __construct(KendaraanService $kendaraanService)
    {
        $this->kendaraanService = $kendaraanService;
    }

    public function index()
    {
        $kendaraan = $this->kendaraanService->getAllKendaraan();
        return response()->json([
            'status' => 'success',
            'data' => $kendaraan,
        ]);
    }

    public function show($id)
    {
        $kendaraan = $this->kendaraanService->getKendaraanById($id);
        return response()->json([
            'status' => 'success',
            'data' => $kendaraan,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->only(['tahun_keluaran', 'warna', 'harga']);
        $kendaraan = $this->kendaraanService->createKendaraan($data);
        return response()->json([
            'status' => 'success',
            'data' => $kendaraan,
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['tahun_keluaran', 'warna', 'harga']);
        $kendaraan = $this->kendaraanService->updateKendaraan($id, $data);
        return response()->json([
            'status' => 'success',
            'data' => $kendaraan,
        ]);
    }

    public function destroy($id)
    {
        $this->kendaraanService->deleteKendaraan($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Kendaraan deleted successfully.',
        ]);
    }
}
