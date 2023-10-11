<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {
        $statistics = Statistic::all();
        return view('apps.statistics.index', compact('statistics'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'statistics' => 'required|array',
            'statistics.*' => 'integer',
        ]);

        $statistics = Statistic::all();

        foreach ($request->input('statistics') as $label => $value) {
            $statistic = $statistics->where('label', $label)->first();
            $statistic->update(['value' => $value]);
        }

        return response()->json(['message' => 'Data statistik berhasil diperbarui.']);
    }
}
