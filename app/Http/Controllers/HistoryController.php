<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function truncate()
    {
        try {
            DB::table('vehicle_maps')->truncate();

            return response()->json([
                'success' => true,
                'message' => 'Semua data berhasil dihapus.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
