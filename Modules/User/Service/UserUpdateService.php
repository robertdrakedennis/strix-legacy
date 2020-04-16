<?php

namespace Modules\User\Service;

use Modules\User\Models\User;

class UserUpdateService
{
    public function handle(array $data, User $user): User
    {
        $user->update($data);

        return $user;
    }
}
