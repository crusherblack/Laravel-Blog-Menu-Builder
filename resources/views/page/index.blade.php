@extends('layouts.body')
@section('content')
    {{$post->title}}
    {!!$post->content!!}
@endsection