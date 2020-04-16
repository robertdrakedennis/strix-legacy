<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Traits\Models\AccessesRules;
use Modules\Core\Traits\Helpers\GeneratesUuid;

/**
 * Modules\User\Models\SteamAccount.
 *
 * @property-read \Modules\User\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\SteamAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\SteamAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\SteamAccount query()
 * @mixin \Eloquent
 */
class SteamAccount extends Model
{
    use GeneratesUuid, AccessesRules;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'steamId', 'steamId2', 'steamId3', 'accountId', 'accountUrl', 'joined',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'joined' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
