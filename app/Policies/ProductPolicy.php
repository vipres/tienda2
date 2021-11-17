<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
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
        public function read(User $user, Product $product)
        {
            if(empty($product->shop)){
                return false;
            }
            return $user->id == $product->shop->user_id;
        }

        public function edit(User $user, Product $product)
        {
            if(empty($product->shop)){
                return false;
            }
            return $user->id == $product->shop->user_id;
        }


        public function add(User $user)
        {
            return $user->hasRole('seller');
        }

        public function delete(User $user, Product $product)
        {
            if(empty($product->shop)){
                return false;
            }
            return $user->id == $product->shop->user_id;
        }
    }

