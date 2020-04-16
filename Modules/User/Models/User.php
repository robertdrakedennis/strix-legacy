<?php

namespace Modules\User\Models;

use Illuminate\Notifications\Notifiable;
use Modules\Core\Traits\Models\AccessesRules;
use Modules\Core\Traits\Helpers\GeneratesUuid;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Modules\User\Models\User.
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User query()
 * @mixin \Eloquent
 * @property string $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\User\Models\User whereUpdatedAt($value)
 * @property-read \Modules\User\Models\SteamAccount $steamAccount
 */
class User extends Authenticatable
{
    use Notifiable, GeneratesUuid, AccessesRules;

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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function steamAccount(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(SteamAccount::class);
    }
}
