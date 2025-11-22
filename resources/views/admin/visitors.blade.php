@extends('layouts.admin')

@section('title', 'Data Pengunjung')

@section('content')
    <div class="content-header">
        <h1>Dashboard Pengunjung</h1>
    </div>

    {{-- === PEMBUNGKUS UNTUK MEMBATASI LEBAR KONTEN === --}}
    <div class="dashboard-compact">

        {{-- 1. KARTU INDIKATOR --}}
        <div class="stats-grid">
            <div class="stat-card green">
                <div class="stat-icon"><i class="fas fa-users"></i></div>
                <div class="stat-info">
                    <h3>Total Kunjungan</h3>
                    <p>{{ number_format($totalVisitors) }}</p>
                </div>
            </div>
            <div class="stat-card orange">
                <div class="stat-icon"><i class="fas fa-calendar-day"></i></div>
                <div class="stat-info">
                    <h3>Hari Ini</h3>
                    <p>{{ number_format($visitorsToday) }}</p>
                </div>
            </div>
            <div class="stat-card blue">
                <div class="stat-icon"><i class="fas fa-calendar-alt"></i></div>
                <div class="stat-info">
                    <h3>Bulan Ini</h3>
                    <p>{{ number_format($visitorsThisMonth) }}</p>
                </div>
            </div>
        </div>

        {{-- 2. AREA GRAFIK --}}
        <div class="chart-container-box">
            <h3>Statistik Kunjungan (7 Hari Terakhir)</h3>
            <div class="chart-wrapper">
                <canvas id="visitorChart"></canvas>
            </div>
        </div>

    </div> 
    {{-- === AKHIR PEMBUNGKUS === --}}

    {{-- 3. TABEL DATA --}}
    <div class="table-container" style="margin-top: 30px;">
        <h3 style="padding: 20px; margin: 0; border-bottom: 1px solid #eee;">Riwayat Log Pengunjung</h3>
        <div style="overflow-x: auto;"> <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th>Tanggal & Waktu</th>
                        <th>IP Address</th>
                        <th>Browser / Device</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($visitors as $index => $visitor)
                        <tr>
                            <td>{{ $visitors->firstItem() + $index }}</td>
                            <td>
                                <div style="font-weight: bold;">{{ \Carbon\Carbon::parse($visitor->date)->format('d M Y') }}</div>
                                <div style="font-size: 0.85rem; color: #888;">{{ $visitor->created_at->format('H:i:s') }}</div>
                            </td>
                            <td>
                                <span style="background: #eef2f7; padding: 4px 8px; border-radius: 4px; font-family: monospace;">
                                    {{ $visitor->ip_address }}
                                </span>
                            </td>
                            <td style="font-size: 0.9rem; color: #555;">
                                {{ Str::limit($visitor->user_agent, 80) }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" style="text-align: center; padding: 30px;">Belum ada data pengunjung.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div style="padding: 20px;">
            {{ $visitors->links() }}
        </div>
    </div>

    {{-- 4. SCRIPT CHART.JS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('visitorChart').getContext('2d');
        const visitorChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($chartLabels) !!},
                datasets: [{
                    label: 'Jumlah Pengunjung',
                    data: {!! json_encode($chartValues) !!},
                    backgroundColor: 'rgba(44, 87, 71, 0.2)',
                    borderColor: '#2C5747',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#2C5747',
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false, // PENTING: Agar tinggi bisa diatur CSS
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { stepSize: 1 }
                    },
                    x: {
                        grid: { display: false } // Biar lebih bersih
                    }
                },
                plugins: {
                    legend: { display: false }
                }
            }
        });
    </script>

    {{-- 5. CSS KHUSUS HALAMAN INI --}}
    <style>
        /* Container Pembatas Lebar */
        .dashboard-compact {
            width: 100%;
            max-width: 100%; /* Jangan melebihi container utama */
            box-sizing: border-box;
        }

        /* Grid Kartu */
        .stats-grid {
            display: grid;
            /* Responsif: kolom akan menyesuaikan otomatis */
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); 
            gap: 20px;
            margin-bottom: 20px;
            width: 100%;
        }

        /* Kartu Statistik */
        .stat-card {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            transition: transform 0.2s;
            min-width: 0; /* Mencegah flex item meluap */
        }
        .stat-card:hover { transform: translateY(-3px); }

        .stat-icon {
            width: 50px; height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-right: 15px;
            color: #fff;
            flex-shrink: 0;
        }

        .stat-info h3 { 
            margin: 0 0 4px 0; 
            font-size: 12px; 
            color: #888; 
            text-transform: uppercase; 
            letter-spacing: 0.5px;
            font-weight: 600;
        }
        .stat-info p { 
            margin: 0; 
            font-size: 24px; 
            font-weight: 700; 
            color: #333; 
            line-height: 1.1;
        }

        /* Warna Kartu */
        .stat-card.green .stat-icon { background: linear-gradient(135deg, #2C5747, #4a8f73); }
        .stat-card.orange .stat-icon { background: linear-gradient(135deg, #ff9f43, #ffca85); }
        .stat-card.blue .stat-icon { background: linear-gradient(135deg, #0abde3, #5fcdfa); }

        /* Kotak Grafik */
        .chart-container-box {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            width: 100%;
            box-sizing: border-box;
        }
        .chart-container-box h3 { 
            margin: 0 0 15px 0; 
            font-size: 16px; 
            color: #333; 
        }
        .chart-wrapper {
            position: relative;
            height: 250px; /* Tinggi grafik yang pas */
            width: 100%;
        }
    </style>
@endsection