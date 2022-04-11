<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\UserInterface;
use App\Http\Requests\UserRequest;
//use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct(protected UserInterface $user){}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        Alert::success('Success Title', 'Success Message');
        return $this->user->getUsers();
//        return view('welcome',compact('users'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        return $this->user->createUser($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        return $this->user->updateUser($request->all(),$id);
    }

    public function show($id)
    {
        return $this->user->getUser($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->user->deleteUser($id);
    }
}
