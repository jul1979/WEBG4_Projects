<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;

    public function repos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Repo::class);
    }
}
