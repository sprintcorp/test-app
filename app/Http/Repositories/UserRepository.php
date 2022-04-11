<?php


namespace App\Http\Repositories;


use App\Http\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{

    public function createUser($data)
    {
        $user = User::create($data);
        return response()->json([
            'message'=>'User added successfully',
            'data'=>$user,
            'status'=>200
        ]);
    }

    public function updateUser($data, $id)
    {
        $user = User::findorFail($id);
        $user->update($data);
        return response()->json([
            'message'=>'User updated successfully',
            'data'=>$user,
            'status'=>200
        ]);
    }

    public function getUsers()
    {
        $users = User::with('userRole')->paginate(10);
        return response()->json([
            'message'=>'Users fetched successfully',
            'data'=>$users,
            'status'=>200
        ]);
    }

    public function deleteUser($id)
    {
        $user = User::findorFail($id);
        $user->delete();
        return response()->json([
            'message'=>'User deleted successfully',
            'status'=>200
        ]);
    }

    public function getUser($id)
    {
        $user = User::with('userRole')->findorFail($id);
        return response()->json([
            'message'=>'User fetched successfully',
            'data'=>$user,
            'status'=>200
        ]);
    }
}
