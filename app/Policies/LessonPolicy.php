<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LessonPolicy
{
    use HandlesAuthorization;

    public function view(User $user): bool
    {
        return true;
    }
}
