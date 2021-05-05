@extends('layout.master')

@section('pageTitle', 'Blog-app | Support')

@section('content')

<p> Name :-  {{ $details['name'] }} </p>
<p> Email :-  {{ $details['email'] }} </p>
<p> Subject :-  {{ $details['subject'] }} </p>
<p> Message :- {{ $details['message'] }} </p>

@endsection


