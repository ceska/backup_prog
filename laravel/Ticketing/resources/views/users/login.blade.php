@extends('layouts.forms')
@section('title')
    Login
@endsection

@section('body')
    <div class="content">
      <form method="POST" action="/login">
        @csrf
        <div>
            <label id="email">Email</label><br>
            <input type="text" name="email"><br>
            <label id="password">Password</label><br />
            <input type="password" name="password"><br>
        </div>
        <p><button type="submit">Login</button></p>
      </form>
    </div>
@endsection