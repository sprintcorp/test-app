<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_welcome_view_can_be_rendered()
    {
        $view = $this->view('welcome', ['name' => 'welcome']);

        $view->assertSee('name');
    }

    /**
     * Create employee
     *
     * @test
     * @return void
     */
    public function test_can_create_new_employee()
    {
        $user = User::factory()->make();
//        dd($user['role']);

        $data = [
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'username' => $user['username'],
            'employee_id' => $user['employee_id'],
            'phone' => $user['phone'],
            'role' => $user['role'],
            'email' => $user['email'],
            'password_confirmation' => 'qqqqqqqq',
            'password' => 'qqqqqqqq',
        ];

        $response = $this->post("/users",$data);

        $response->assertStatus(200);
    }

    /**
     * Create employee
     *
     * @test
     * @return void
     */
    public function test_can_update_employee()
    {
        $user = User::factory()->create();
        $data = [
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'username' => $user['username'],
            'employee_id' => $user['employee_id'],
            'phone' => $user['phone'],
            'role' => $user['role'],
            'email' => $user['email'],
            'password_confirmation' => 'qqqqqqqq',
            'password' => 'qqqqqqqq',
        ];
        $response = $this->put("/update-user/".$user->id,$data);

        $response->assertStatus(200);
    }


    /**
     * Get Users
     *
     * @test
     * @return void
     */
    public function test_can_get_users()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }



    /**
     * Get User
     *
     * @test
     * @return void
     */
    public function test_can_get_user()
    {
        $user = User::factory()->create();
        $response = $this->get('/users/'.$user->id);

        $response->assertStatus(200);
    }

    /**
     * Get User
     *
     * @test
     * @return void
     */
    public function test_can_delete_user()
    {
        $user = User::factory()->create();
        $response = $this->delete('/users/'.$user->id);

        $response->assertStatus(200);
    }
}
