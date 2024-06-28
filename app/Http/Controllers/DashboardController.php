<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showVotingStatistics(Request $request)
    {
        $votes = Vote::query();
        if ($request->has('user_name')) {
            $userName = $request->input('user_name');
            $votes->whereHas('user', function ($query) use ($userName) {
                $query->where('name', 'like', '%' . $userName . '%');
            });
        }
        if ($request->has('option_name')) {
            $optionName = $request->input('option_name');
            $votes->whereHas('option', function ($query) use ($optionName) {
                $query->where('name', 'like', '%' . $optionName . '%');
            });
        }
        $filteredVotes = $votes->get();
        $topVotes = Vote::select('option_id', \DB::raw('count(*) as total_votes'))
                        ->groupBy('option_id')
                        ->orderByDesc('total_votes')
                        ->limit(5)
                        ->with('option')
                        ->get();
        return view('dashboard', [
            'filteredVotes' => $filteredVotes,
            'topVotes' => $topVotes,
        ]);
    }
}
