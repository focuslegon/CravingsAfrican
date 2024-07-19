<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $username = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'username' => ['required', 'string', 'lowercase', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard'), navigate: false);

    }
}; ?>

<div class="container d-flex justify-content-center">
    <div class="col-md-6">
        <form wire:submit.prevent="register">
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input wire:model="name" id="name" class="form-control" type="text" name="name" required autofocus autocomplete="name">
                @if ($errors->has('name'))
                    <div class="mt-2 text-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input wire:model="email" id="email" class="form-control" type="email" name="email" required autocomplete="username">
                @if ($errors->has('email'))
                    <div class="mt-2 text-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>

             <!-- username Address -->
             <div class="mb-3">
                <label for="username" class="form-label">{{ __('Username') }}</label>
                <input wire:model="username" id="username" class="form-control" type="text" name="username" required autocomplete="username">
                @if ($errors->has('username'))
                    <div class="mt-2 text-danger">
                        {{ $errors->first('username') }}
                    </div>
                @endif
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input wire:model="password" id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                @if ($errors->has('password'))
                    <div class="mt-2 text-danger">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input wire:model="password_confirmation" id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                @if ($errors->has('password_confirmation'))
                    <div class="mt-2 text-danger">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                @endif
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <a class=" text-decoration-none" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>

