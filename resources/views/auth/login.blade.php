<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="my-4" style="width: 290px; margin: auto!important;">
        @csrf

        <h5 class="text-main-color my-2 text-center" style="font-size: 42px; font-weight: bold">Login</h5>
        <!-- Email Address -->
        <div>
            <label for="email" class="fw-bold text-main-color my-1">Email</label>
            <br>
            <input type="email" class="form-control"
                   name="email"
                   value="{{old("email")}}"
                   placeholder="Enter Email">

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="fw-bold text-main-color my-1">Password</label>
            <br>
            <input type="password" class="form-control" name="password" placeholder="Enter Password">

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--          <div class="text-center">--}}
              <button class="btn btn-warning text-center w-100" style="background: #ef8c1f!important"> Login </button>
{{--          </div>--}}
        </div>
    </form>
</x-guest-layout>
