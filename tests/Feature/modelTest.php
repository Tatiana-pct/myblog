<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class modelTest extends TestCase
{

    use RefreshDatabase;
    public function testValidRegistration()
    {
        $faker = Factory::create();
        $email = $faker->unique()->email;
        $count = User::count();

        $response =$this->post('/register', [
           'email' => $email,
            'name'=>'test',
            'password'=> 'password',
            'password_confirmation'=> 'password'
        ]);
        $newCount = User::count();
        $this->assertNotEquals($count, $newCount);
    }

    public function testInvalideregistration()
    {
        $response = $this->post('/register',[
            'email' => '',
            'name'=>'test',
            'password'=> 'password',
            'password_confirmation'=> 'password'
        ]);

        $response->assertSessionHasErrors();

    }
}
