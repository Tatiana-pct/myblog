<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseTest extends TestCase
{

    use RefreshDatabase;

    public function testValidRegistration()
    {

        $count = User::count();

        $response =$this->post('/register', [
            'email' => '123@123.fr',
            'name'=>'test',
            'password'=> 'password',
            'password_confirmation'=> 'password'
        ]);
        $newCount = User::count();
        $this->assertNotEquals($count, $newCount);
    }
}
