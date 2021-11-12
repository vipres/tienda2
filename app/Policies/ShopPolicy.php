<?php

namespace App\Policies;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
{
    if ($user->hasRole('admin')) {
        return true;
    }
}
    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function read(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    public function edit(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }


    public function add(User $user)
    {
        //
    }

    public function delete(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    
}
