@extends('layout')

@section('title')
	Add Job Application
@stop

@section('content')
	<form calss="form" action="/application/add" method="POST">
	{{csrf_field()}}
	<div class="form-group">
		<label for="applied_on">Applied Date: </label>
		<input type="date" name="applied_on" class="form-control" value="{{$application->applied_on}}">
	</div>
	<div class="form-group">
  		<label for="description">Details:</label>
  		<textarea class="form-control" rows="5" name="description">{{$application->description}}</textarea>
	</div>
	<div class="form-group">
		<label for="position">Select Position:</label>
		<select class="form-control" name="position_id" id="position">
		@unless(empty($positions))
		    @foreach($positions as $position)
		    	<option value="{{$position->id}}" {{$application->position_id == $position->id ? 'selected="selected"' : ''}}>{{$position->name}}</option>
		    @endforeach
		@endunless
		</select>
	</div>
		<div class="form-group">
		<label for="position">Select Company:</label>
		<select class="form-control" name="company_id" id="company">
		@unless(empty($companies))
		    @foreach($companies as $company)
		    	<option value="{{$company->id}}" {{$application->company_id == $company->id ? 'selected="selected"' : ''}}>{{$company->name}}</option>
		    @endforeach
		@endunless
		</select>
	</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">Save</button>
	</div>
	@unless(empty($application->id))
		<input name="id" type="hidden" value="{{$application->id}}"/>
	@endunless
	</form>
@stop

@section('footer')
©2016 - Job Application Tracker
@stop