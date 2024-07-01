<?php

namespace App\Policies;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PedidoPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     * 
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     * 
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedido  $pedido
     * @return mixed
     */
    public function view(User $user, Pedido $pedido): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     * 
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user): bool
    {
        return $user->admin; 
    }

    /**
     * Determine whether the user can update the model.
     * 
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedido  $pedido
     * @return mixed
     */
    public function update(User $user, Pedido $pedido): bool
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can delete the model.
     * 
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedido  $pedido
     * @return mixed
     */
    public function delete(User $user, Pedido $pedido): bool
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pedido $pedido): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pedido $pedido): bool
    {
        //
    }
}
