@extends('layouts.forms')
@section('title')
    Register
@endsection

@section('body')
    <div class="content">
      <form method="POST" action="/events">
        @csrf
        <div>
            <label id="name">Name</label><br>
            <input type="text" name="name"><br>
            <label id="email">Email</label><br />
            <input type="text" name="email"><br>
            <label id="birth_date">Date of birth</label><br>
            <input type="date" name="birth_date"><br>
        </div>
        <p><button type="submit">Submit</button></p>
      </form>
    </div>
@endsection