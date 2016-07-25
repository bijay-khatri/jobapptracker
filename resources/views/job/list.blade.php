@extends('layout')

@section('title')
	Add Job Application
@stop

@section('content')
	<h2>List of Your Job Applications</h2>
	<table class="table">
		<th>S.No</th>
		<th>Applied Date</th>
		<th>Position</th>
		<th>Company</th>
		<th>Description</th>
		<th>Status</th>
		<th>Operation</th>

		@foreach($applications as $key => $app)
		<tr>
			<td>{{$key+1}}
			<td>{{$app->applied_on}}</td>
			<td>{{$app->position->name}}</td>
			<td>{{$app->company->name}}</td>
			<td>{{$app->description}}</td>
			<td>Unknwon</td>
			<td>
			<a href="/application/edit/{{$app->id}}"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp;&nbsp; 
			<a href="/application/delete/{{$app->id}}"><span class="glyphicon glyphicon-remove"></span></a></td>
		</tr>
		@endforeach
	</table>
@stop