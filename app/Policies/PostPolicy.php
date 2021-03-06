<?php

namespace App\Policies;

use App\User;
use App\blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
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
     * @param  \App\blog  $blog
     * @return mixed
     */
    public function view(User $user, blog $blog)
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
        $id=$user->id;
        if($id==1){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\blog  $blog
     * @return mixed
     */
    public function update(User $user, blog $blog)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\blog  $blog
     * @return mixed
     */
    public function delete(User $user, blog $blog)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\blog  $blog
     * @return mixed
     */
    public function restore(User $user, blog $blog)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\blog  $blog
     * @return mixed
     */
    public function forceDelete(User $user, blog $blog)
    {
        //
    }
}
