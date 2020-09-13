@extends('layout')
@section('title')
    {{ $event->name }}
@endsection

@section('body')
    <div class="content">
        <div class="subtitle m-b-md">
            {{ $event->name }}
        </div>

        <div class="links">
        	<p>
        		Status:
        		<span>
        			{{ $event->status == "Unavailable" ? "Fully booked" : $event->status }}
        		</span>
        	</p>
        	<p>From {{ $event->start_date }} to {{ $event->end_date }}</p>
        	<p>Description: {{ $event->description }}</p>
            <p>
                <!-- if customer acct -->
            	@if ($event->status == "Available")
    	        	<a href="/events/{{ $event->id }}/buy" class="highlight">Buy Ticket</a>&nbsp;
            	@endif
                <!-- endif -->
                <!-- if logged in + event belongs to seller -->
                <a href="/events/{{ $event->id }}/edit" class="highlight">Edit Event</a>&nbsp;
                <a href="/" class="highlight">Edit Tickets</a>
                <!-- endif -->
            </p>
        </div>
    </div>
@endsection