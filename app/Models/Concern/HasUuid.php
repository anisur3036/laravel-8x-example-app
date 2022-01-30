<?php

namespace App\Models\Concern;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid()
    {
        static::creating( function (Model $model) {
            return $model->uuid = Str::uuid()->toString();
        });
    }
}
