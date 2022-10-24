
@extends('layouts.app')
@section('title')
LOGIN
@endsection

@section('content')
<h1>profile</h1>
<h2>Welcome {{session()->get('name')}}</h2>
<a href="/profile/logout">Log Out</a>
@endsection