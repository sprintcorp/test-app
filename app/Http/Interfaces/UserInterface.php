<?php


namespace App\Http\Interfaces;


interface UserInterface
{
    public function createUser($data);
    public function updateUser($data,$id);
    public function getUsers();
    public function deleteUser($id);
    public function getUser($id);
}
