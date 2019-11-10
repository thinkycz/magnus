<?php

namespace App\Policies;

use App\Lector;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LectorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any lectors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can view the lector.
     *
     * @param  \App\User  $user
     * @param  \App\Lector  $lector
     * @return mixed
     */
    public function view(User $user, Lector $lector)
    {
        return $user->is_admin || $user->is($lector->user);
    }

    /**
     * Determine whether the user can create lectors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can update the lector.
     *
     * @param  \App\User  $user
     * @param  \App\Lector  $lector
     * @return mixed
     */
    public function update(User $user, Lector $lector)
    {
        return $user->is_admin || $user->is($lector);
    }

    /**
     * Determine whether the user can delete the lector.
     *
     * @param  \App\User  $user
     * @param  \App\Lector  $lector
     * @return mixed
     */
    public function delete(User $user, Lector $lector)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can restore the lector.
     *
     * @param  \App\User  $user
     * @param  \App\Lector  $lector
     * @return mixed
     */
    public function restore(User $user, Lector $lector)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can permanently delete the lector.
     *
     * @param  \App\User  $user
     * @param  \App\Lector  $lector
     * @return mixed
     */
    public function forceDelete(User $user, Lector $lector)
    {
        return $user->is_admin;
    }
}
