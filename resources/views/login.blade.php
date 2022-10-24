@extends('layouts.app')
@section('title')
LOGIN
@endsection

@section('content')

<h1>login</h1>
<form action="/login" method="post">
{{csrf_field()}}
Your Name : <input type="text" name="name" value="" >
Email : <input type="email" name="email" value="" >
<input type="submit" value="Register">
</form>

@endsection