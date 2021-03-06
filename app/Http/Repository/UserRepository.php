<?php

namespace Suyabay\Http\Repository;

use Suyabay\User;

class UserRepository
{

    /**
    * Return all user from the database
    */
    public function getAllUsers()
    {
        return User::all();
    }

    /**
    * Return all online users
    */
    public function getOnlineUsers()
    {
        return $this->getAllUsers()->where('active', 1);
    }

    /**
    * Return all offline users
    */
    public function getOfflineUsers()
    {
        return $this->getAllUsers()->where('active', 0);
    }

    public function findUser($id)
    {
        return User::find($id);
    }
}
