@extends('layouts.forms')
@section('title')
    Ticketing
@endsection

@section('body')
    <div class="content">
    	<form method="POST" action="/events">
    		@csrf
    		<div>
		        <label id="name">Event Name</label><br>
		        <input type="text" name="name"><br>
		        <label id="description">Event Description</label><br />
		        <input type="text" name="description"><br>
		        <label id="start_date">Start Date</label><br>
		        <input type="date" name="start_date"><br>
		        <label id="end_date">End Date</label><br>
		        <input type="date" name="end_date"><br>
		        <label id="location">Location</label><br>
		        <input type="text" name="location"><br>
		    </div><br><br>
		    <div>
		    	<label id="tType">Type of Tickets</label><br>
		        <input type="text" name="tType"><br>
		    	<label id="tNum"># of Tickets</label><br>
		        <input type="number" name="tNum" min=1 oninput="validity.valid||(value='');"><br>
		    	<label id="tPrice">Ticket Price</label><br>
		        <input type="number" name="tPrice" min=1 oninput="validity.valid||(value='');"><br>
		    </div>
		    <p>
		    	<button type="submit">Submit</button>
        	</p>
	    </form>
	    <a href="/" class="submit">Cancel</button>
    </div>
@endsection