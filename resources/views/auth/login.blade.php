<x-guest-layout title="Login" bodyClass="page-login" authTitle="Login">

    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email"/>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password"/>
        </div>
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset"
            >Reset Password</a
            >
        </div>

        <button class="btn btn-primary btn-login w-full">Login</button>
    </form>

    <x-slot:authLink>
        <div class="login-text-dont-have-account">
            Don't have an account? -
            <a href="{{route('signup')}}"> Click here to create one</a>
        </div>
    </x-slot:authLink>

</x-guest-layout>


