<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AssignmentLetter;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssignmentLetterController extends Controller
{
    /**
     * Upload assignment letter for a proposal.
     */
    public function store(Request $request, Proposal $proposal)
    {
        $request->validate([
            'file' => ['required', 'file', 'mimes:pdf', 'max:10240'],
        ]);

        $file = $request->file('file');
        $path = Storage::disk('public')->putFile('assignment_letters', $file);

        $letter = AssignmentLetter::create([
            'proposal_id' => $proposal->id,
            'file_path' => $path,
            'original_name' => $file->getClientOriginalName(),
            'mime_type' => $file->getClientMimeType() ?: 'application/pdf',
            'file_size' => $file->getSize(),
            'uploaded_by' => $request->user()->id,
            'uploaded_at' => now(),
        ]);

        // Update status proposal menjadi 'assigned'
        $proposal->update(['status' => 'assigned']);

        return response()->json([
            'message' => 'Surat tugas berhasil diupload.',
            'data' => [
                'id' => $letter->id,
                'file_url' => Storage::disk('public')->url($letter->file_path),
                'original_name' => $letter->original_name,
                'uploaded_at' => $letter->uploaded_at,
            ],
        ], 201);
    }
}
