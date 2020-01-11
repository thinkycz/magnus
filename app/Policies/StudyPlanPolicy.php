<?php

namespace App\Policies;

use App\StudyPlan;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudyPlanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any study plans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can view the study plan.
     *
     * @param  \App\User  $user
     * @param  \App\StudyPlan  $studyPlan
     * @return mixed
     */
    public function view(User $user, StudyPlan $studyPlan)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can create study plans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can update the study plan.
     *
     * @param  \App\User  $user
     * @param  \App\StudyPlan  $studyPlan
     * @return mixed
     */
    public function update(User $user, StudyPlan $studyPlan)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can delete the study plan.
     *
     * @param  \App\User  $user
     * @param  \App\StudyPlan  $studyPlan
     * @return mixed
     */
    public function delete(User $user, StudyPlan $studyPlan)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can restore the study plan.
     *
     * @param  \App\User  $user
     * @param  \App\StudyPlan  $studyPlan
     * @return mixed
     */
    public function restore(User $user, StudyPlan $studyPlan)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can permanently delete the study plan.
     *
     * @param  \App\User  $user
     * @param  \App\StudyPlan  $studyPlan
     * @return mixed
     */
    public function forceDelete(User $user, StudyPlan $studyPlan)
    {
        return $user->is_admin;
    }
}
