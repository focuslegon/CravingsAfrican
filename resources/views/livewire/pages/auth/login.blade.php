<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirect(route('dashboard'), navigate: false);

    }
}; ?>


<div class="container d-flex justify-content-center">
    <div class="col-md-6">
        <!-- Session Status -->
        <div class="mb-4">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <form wire:submit.prevent="login">
            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">{{ __('Username') }}</label>
                <input wire:model="form.username" id="username" class="form-control" type="text" name="username" required autofocus autocomplete="username">
                @if ($errors->has('form.username'))
                    <div class="mt-2 text-danger">
                        {{ $errors->first('form.username') }}
                    </div>
                @endif
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input wire:model="form.password" id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                @if ($errors->has('form.password'))
                    <div class="mt-2 text-danger">
                        {{ $errors->first('form.password') }}
                    </div>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input wire:model="form.remember" id="remember" type="checkbox" class="form-check-input" name="remember">
                <label for="remember" class="form-check-label">{{ __('Remember me') }}</label>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                @if (Route::has('password.request'))
                    <a class=" text-decoration-none" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="btn btn-primary">
                    {{ __('Log in') }}
                </button>
            </div>

            @if (Route::has('register'))
                <div class="">
                    <a class="text-decoration-none btn btn-gray" href="{{ route('register') }}">
                        {{ __('Register Account') }}
                    </a>
                </div>
            @endif
        </form>
    </div>
</div>
