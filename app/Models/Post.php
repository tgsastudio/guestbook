<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $primaryKey = 'post_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replys(): HasMany
    {
        return $this->hasMany(Reply::class, 'post_id');
    }
}
