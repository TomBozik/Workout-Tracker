<?php

namespace App\Policies;

use App\Set;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SetPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Set  $set
     * @return mixed
     */
    public function view(User $user, Set $set)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->can('create sets')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Set  $set
     * @return mixed
     */
    public function update(User $user, Set $set)
    {
        if ($user->can('edit own sets')) {
            return $user->id == $set->user_id;
        }

        if ($user->can('edit any sets')) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Set  $set
     * @return mixed
     */
    public function delete(User $user, Set $set)
    {
        if ($user->can('delete own sets')) {
            return $user->id == $set->user_id;
        }

        if ($user->can('delete any sets')) {
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Set  $set
     * @return mixed
     */
    public function restore(User $user, Set $set)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Set  $set
     * @return mixed
     */
    public function forceDelete(User $user, Set $set)
    {
        //
    }
}
