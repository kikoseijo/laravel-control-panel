<?php

namespace App\Interactions\Back;


use App\Repositories\Back\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Ksoft\Klaravel\Larapp;

class UserCreate 
{
    /**
     * {@inheritdoc}
     */
    public function validator(array $data)
    {
        return Validator::make($data, User::$rules);
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array $data)
    {
        // $data['slug'] = str_slug(array_get($data, 'name'));

        return Larapp::interact(
            UserRepository::class.'@create',
            [$data]
        );
    }
}
