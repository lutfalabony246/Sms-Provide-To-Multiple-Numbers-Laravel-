@extends('layouts.app')
@section('content')
<form action="{{url('verify')}}" method="POST">
    @csrf
    <input type="text" name="code"><br>
    <input type="submit" name="code"><br>


</form>