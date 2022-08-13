<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repo extends Model
{
    use HasFactory;

    public function contributor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Contributor::class);
    }

    public function commits(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Commit::class);
    }


}
