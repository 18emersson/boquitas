<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'numero_documento' =>['nullable', 'string', 'max:20'],
            'tipo_documento' =>['required', 'string', 'max:20'],
            'telefono' =>['nullable', 'string', 'max:20'],
        

            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'apellido'=>$input['apellido'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'numero_documento'=>$input['numero_documento'],
            'tipo_documento'=>$input['tipo_documento'],
            'telefono'=>$input['telefono'],
         

        ]);
    }
}
