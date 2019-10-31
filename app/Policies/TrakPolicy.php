<?php

namespace App\Policies;

use App\User;
use App\Trak;
use Illuminate\Auth\Access\HandlesAuthorization;

class TrakPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any traks.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the trak.
     *
     * @param  \App\User  $user
     * @param  \App\Trak  $trak
     * @return mixed
     */
    public function view(User $user, Trak $trak)
    {
        //
    }

    /**
     * Determine whether the user can create traks.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the trak.
     *
     * @param  \App\User  $user
     * @param  \App\Trak  $trak
     * @return mixed
     */
    public function update(User $user, Trak $trak)
    {
        return $trak->owner_id == $user->id;
    }

    /**
     * Determine whether the user can delete the trak.
     *
     * @param  \App\User  $user
     * @param  \App\Trak  $trak
     * @return mixed
     */
    public function delete(User $user, Trak $trak)
    {
          return $trak->owner_id == $user->id;
    }

    /**
     * Determine whether the user can restore the trak.
     *
     * @param  \App\User  $user
     * @param  \App\Trak  $trak
     * @return mixed
     */
    public function restore(User $user, Trak $trak)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the trak.
     *
     * @param  \App\User  $user
     * @param  \App\Trak  $trak
     * @return mixed
     */
    public function forceDelete(User $user, Trak $trak)
    {
        //
    }
}
