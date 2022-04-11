<?php


namespace App\Http\Repositories;


use App\Http\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{

    public function createUser($data)
    {
        $user = User::create($data);
        return $user;
    }

    public function updateUser($data, $id)
    {
        $user = User::findorFail($id);
        $user->update($data);
        return $user;
    }

    public function getUsers()
    {
        $user = User::paginate(10);
        return $user;
    }

    public function deleteUser($id)
    {
        $user = User::findorFail($id);
        $user->delete();
        return true;
    }
}
