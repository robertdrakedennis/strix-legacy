<?php

namespace Modules\Core\Traits\Models;

trait AccessesRules
{
    /**
     * Returns rules array.
     *
     * @return array
     */
    public static function getRules(): array
    {
        return static::$rules;
    }

    /**
     * Return only the fields that we are interested in from the request.
     * This will include empty fields as a null value.
     *
     * @return array
     */
    public static function filterRequest(): array
    {
        return \array_keys(static::$rules);
    }
}
