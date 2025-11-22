<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // <-- Tambahkan ini untuk query grafik

class VisitorController extends Controller
{
    public function index()
    {
        // 1. Data untuk Tabel (Pagination)
        $visitors = Visitor::latest()->paginate(20);

        // 2. Data untuk Indikator (Kartu Atas)
        $totalVisitors = Visitor::count();
        $visitorsToday = Visitor::whereDate('date', today())->count();
        $visitorsThisMonth = Visitor::whereMonth('date', now()->month)->count();

        // 3. Data untuk Grafik (7 Hari Terakhir)
        // Kita mengelompokkan data berdasarkan tanggal dan menghitung jumlahnya
        $chartData = Visitor::select('date', DB::raw('count(*) as total'))
            ->where('date', '>=', now()->subDays(7)) // Ambil 7 hari ke belakang
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        // Memisahkan tanggal dan total untuk dikirim ke Chart.js
        $chartLabels = $chartData->pluck('date')->map(function($date) {
            return \Carbon\Carbon::parse($date)->format('d M'); // Format jadi "20 Oct"
        });
        $chartValues = $chartData->pluck('total');

        return view('admin.visitors', [
            'visitors' => $visitors,
            'totalVisitors' => $totalVisitors,
            'visitorsToday' => $visitorsToday,
            'visitorsThisMonth' => $visitorsThisMonth,
            'chartLabels' => $chartLabels,
            'chartValues' => $chartValues,
        ]);
    }
}