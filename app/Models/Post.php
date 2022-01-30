<?php

namespace App\Models;

use App\Models\Concern\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, HasUuid;

    protected $fillable = [
        'title',
        'uuid',
        'body',
        'user_id'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
