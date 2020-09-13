@extends('layouts.forms')
@section('title')
    Ticketing
@endsection

@section('body')
    <div class="content">
      <form method="POST" action="/events/{{ $event->id }}">
        {{ method_field('PATCH') }}
        @csrf
        <div>
            <label id="name">Event Name</label><br>
            <input type="text" name="name" value="{{ $event->name }}"><br>
            <label id="description">Event Description</label><br />
            <input type="text" name="description" value="{{ $event->description }}"><br>
            <label id="start_date">Start Date</label><br>
            <input type="date" name="start_date"  value="{{ $event->start_date }}"><br>
            <label id="end_date">End Date</label><br>
            <input type="date" name="end_date" value="{{ $event->end_date }}"><br>
            <label id="location">Location</label><br>
            <input type="text" name="location" value="{{ $event->location }}"><br>
        </div>
        <p><button type="submit" class="submit">Submit</button></p>
      </form>
      <a href="/events/{{ $event->id }}" class="submit">Cancel</button>
    </div>
@endsection