<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Village;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'role' => ['required'],
            'nama' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
            'nik' => ['required', 'string', 'max:16', Rule::unique('users', 'nik')],
            'jenis_kelamin' => ['required'],
            'agama' => ['required', 'string'],
            'suku' => ['required', 'string'],
            'telepon' => ['nullable', 'string', 'max:15'],
            'kelurahan' => ['required'],
            'alamat' => ['required', 'string'],
            'rt' => ['nullable', 'string', 'max:3'],
            'rw' => ['nullable', 'string', 'max:3'],
            'tps' => ['nullable', 'string', 'max:4'],
            'agreement' => ['accepted'],
        ]);

        $attributes['password'] = bcrypt($attributes['password'] );
        $attributes['referal'] = strtoupper(Str::random(6));
        // dd($attributes);
        session()->flash('success', 'Your account has been created.');
        $user = User::create($attributes);
        Auth::login($user); 
        return redirect('/dashboard');
    }
}
