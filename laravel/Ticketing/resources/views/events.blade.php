@extends('layout')
@section('title')
    Ticketing
@endsection

@section('body')
    <div class="content">
        <div class="title m-b-md">
            Vivantix
        </div>
        <div class="subtitle">
            Events
        </div>

            <div>
                Welcome to Vivantix!<br>
                <!-- if logged in --> 
                <a href="/events/create" class="highlight">Add an Event</a>&nbsp;
                <a href="/" class="highlight">View Your Events</a><br>
                <!-- endif -->
                <a href="/refresh" class="highlight">Refresh Events</a>
            </div>

        <p>Incoming</p>

        <div>
        	@foreach ($events as $event)
            @if ($event->status == "Available")
            <a href="/events/{{ $event->id }}">{{ $event->name }}</a><br>
            @endif
            @endforeach
        </div>

        <p>Unavailable</p>

        <div>
            @foreach ($events as $event)
            @if ($event->status == "Unavailable")
            <a href="/events/{{ $event->id }}">{{ $event->name }}</a><br>
            @endif
            @endforeach
        </div>

        <p>Archived</p>

        <div>
            @foreach ($events as $event)
            @if ($event->status == "Archived")
            <a href="/events/{{ $event->id }}">{{ $event->name }}</a><br>
            @endif
            @endforeach
        </div>
    </div>
@endsection