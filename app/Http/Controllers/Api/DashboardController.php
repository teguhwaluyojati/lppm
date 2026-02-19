<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Get dashboard statistics.
     * - Dosen: only their own proposal stats
     * - Others: all proposals stats
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $isDosen = $user->role && $user->role->name === 'dosen';

        $dosenCount = User::whereHas('role', function ($query) {
            $query->where('name', 'dosen');
        })->count();

        $proposalQuery = Proposal::query();
        if ($isDosen) {
            $proposalQuery->where('user_id', $user->id);
        }

        $approvedCount = (clone $proposalQuery)->where('status', 'approved')->count();
        $declinedCount = (clone $proposalQuery)->where('status', 'declined')->count();
        $waitingCount = (clone $proposalQuery)->where('status', 'waiting')->count();
        $totalProposals = (clone $proposalQuery)->count();

        return response()->json([
            'message' => 'Dashboard statistics retrieved successfully.',
            'data' => [
                'total_dosen' => $dosenCount,
                'proposal_approved' => $approvedCount,
                'proposal_declined' => $declinedCount,
                'proposal_waiting' => $waitingCount,
                'total_proposals' => $totalProposals,
            ],
        ]);
    }
}
