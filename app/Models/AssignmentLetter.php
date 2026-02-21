<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignmentLetter extends Model
{
    protected $fillable = [
        'proposal_id',
        'file_path',
        'original_name',
        'mime_type',
        'file_size',
        'uploaded_by',
        'uploaded_at',
    ];

    public function proposal(): BelongsTo
    {
        return $this->belongsTo(Proposal::class);
    }

    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
