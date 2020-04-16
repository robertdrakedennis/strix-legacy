<?php

namespace Modules\Core\Traits\Helpers;

use Illuminate\Support\Str;

trait GeneratesUuid
{
    /**
     * Any model that is in the creating / bootable state will have a UUID 4 created for their primary key.
     */
    protected static function bootGeneratesUuid()
    {
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = static::generateUUID();
        });
    }

    /**
     * Generates UUID4.
     *
     * @return string
     */
    public static function generateUUID()
    {
        return (string) Str::uuid();
    }
}
