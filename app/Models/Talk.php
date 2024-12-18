<?php

namespace App\Models;

use Database\Factories\TalkFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Talk extends Model
{
    /** @use HasFactory<TalkFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
