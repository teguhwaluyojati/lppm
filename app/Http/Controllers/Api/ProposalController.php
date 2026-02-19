<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProposalController extends Controller
{
    /**
     * List proposals based on user role.
     * - Dosen: only their own proposals
     * - Others: all proposals
     */
    public function index(Request $request)
    {
        $user = $request->user();
        
        $query = Proposal::with(['user', 'reviewer'])
            ->orderBy('created_at', 'desc');
        
        if ($user->role && $user->role->name === 'dosen') {
            $query->where('user_id', $user->id);
        }
        
        $proposals = $query->get();
        
        return response()->json([
            'message' => 'Proposals retrieved successfully.',
            'data' => $proposals->map(fn($p) => [
                'id' => $p->id,
                'title' => $p->title,
                'description' => $p->description,
                'file_url' => Storage::disk('public')->url($p->file_path),
                'original_name' => $p->original_name,
                'mime_type' => $p->mime_type,
                'file_size' => $p->file_size,
                'status' => $p->status,
                'created_at' => $p->created_at,
                'updated_at' => $p->updated_at,
                'user' => [
                    'id' => $p->user->id,
                    'name' => $p->user->name,
                    'email' => $p->user->email,
                ],
                'reviewer' => $p->reviewer ? [
                    'id' => $p->reviewer->id,
                    'name' => $p->reviewer->name,
                    'email' => $p->reviewer->email,
                ] : null,
                'reviewed_at' => $p->reviewed_at,
            ]),
        ]);
    }

    /**
     * Store a new proposal PDF for the authenticated dosen.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'file' => ['required', 'file', 'mimes:pdf', 'max:10240'],
            'title' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        $file = $validated['file'];
        $path = Storage::disk('public')->putFile('proposals', $file);

        $proposal = Proposal::create([
            'user_id' => $request->user()->id,
            'title' => $validated['title'] ?? null,
            'description' => $validated['description'] ?? null,
            'original_name' => $file->getClientOriginalName(),
            'file_path' => $path,
            'mime_type' => $file->getClientMimeType() ?: 'application/pdf',
            'file_size' => $file->getSize(),
            'status' => 'waiting',
        ]);

        return response()->json([
            'message' => 'Proposal uploaded successfully.',
            'data' => [
                'id' => $proposal->id,
                'title' => $proposal->title,
                'description' => $proposal->description,
                'file_url' => Storage::disk('public')->url($proposal->file_path),
                'original_name' => $proposal->original_name,
                'mime_type' => $proposal->mime_type,
                'file_size' => $proposal->file_size,
                'status' => $proposal->status,
                'created_at' => $proposal->created_at,
            ],
        ], 201);
    }

    /**
     * Update proposal status by kepala_lppm.
     */
    public function updateStatus(Request $request, Proposal $proposal)
    {
        $validated = $request->validate([
            'status' => ['required', 'string', 'in:approved,declined'],
        ]);

        $proposal->update([
            'status' => $validated['status'],
            'reviewed_by' => $request->user()->id,
            'reviewed_at' => now(),
        ]);

        return response()->json([
            'message' => 'Proposal status updated successfully.',
            'data' => [
                'id' => $proposal->id,
                'status' => $proposal->status,
                'reviewed_by' => $proposal->reviewed_by,
                'reviewed_at' => $proposal->reviewed_at,
                'updated_at' => $proposal->updated_at,
            ],
        ]);
    }
}
