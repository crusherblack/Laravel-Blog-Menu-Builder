@extends('layouts.body')
@section('content')
<a href="{{route('post.create')}}" class="btn btn-info mt-4 btn-sm mb-3">Create Post</a>

<table class="table table-sm table-striped table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $index=>$item)
        <tr>
        <td>{{++$index}}</td>
            <td>{{$item->title}}</td>
            <td>{{url($item->slug)}}</td>
            <td><a href="{{route('post.edit', $item->id)}}"
                class="btn btn-primary btn-sm">Edit</a></li> <a href="{{route('open-page', $item->slug)}}"
                    class="btn btn-success btn-sm" target="_blank">Open Page</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
