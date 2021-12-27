<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:male,female,other'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'date_of_birth' => ['required', 'string', 'date'],
            'cgu' => ['required'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'gender' => $input['gender'],
            'name' => $input['name'],
            'surname' => $input['surname'],
            'date_of_birth' => $input['date_of_birth'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
