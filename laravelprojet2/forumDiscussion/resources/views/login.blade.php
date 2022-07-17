@extends('template')

@section('title', 'Login page')
@section('maintitle')

    <span>LOGIN</span>
@endsection

@section('content')

    <form method="post" action="{{route('loginprocess')}}" accept-charset="UTF-8">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" name="userLogin" id="userLogin" class="form-control" />
            <label class="form-label" for="userLogin">Login</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->


        <!-- Submit button -->
        <button type="submit" id="login_btn" class="btn btn-primary btn-block mb-4">Sign in</button>

        <!-- Register buttons -->
    </form>

@endsection
