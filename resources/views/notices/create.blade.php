@extends('app')

@section('content')

	<h1>Create a DMCA notice</h1>

	{!! Form::open() !!}
		<div class='form-group'>
			{!! Form::label('provider', 'Provider') !!}
			{!! Form::select('provider', $providers, null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('link', 'Link') !!}
			{!! Form::text('link', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('original_link', 'Original Link') !!}
			{!! Form::text('original_link', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('description', 'Description') !!}
			{!! Form::text('description', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::submit('Preview Notice', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

@stop