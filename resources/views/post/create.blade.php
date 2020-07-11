@extends('layouts.body')
@section('content')

<form action="{{route('post.store')}}" method="POST">
    @csrf
    <input type="hidden" value="{{$type === 'edit' ? $post->id : null}}" name="id">

    <button type="submit" class="btn btn-primary btn-block mb-4 mt-4 zero-radius">{{$type === 'edit' ? 'Update Post' : 'Save Post'}}</button>
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control zero-radius" name="title" placeholder="Input post title here" value="{{$type === 'edit' ? $post->title : null}}">
        @if($errors->isNotEmpty())
        @foreach ($errors->get('title') as $error)
        <small class="text-danger font-weight-bold">
            {{ $error }}
        </small>
        @endforeach
        @endif
    </div>

    <div class="form-group">
        <label for="title">Post Title</label>
        <select name="category" class="form-control zero-radius">
            <option value="" holder>Select Category</option>
            <option value="news">News</option>
            <option value="music">Music</option>
        </select>
        <small>Choose 1 category per post</small>
    </div>    

    <div>
        <textarea id="content" name="content" hidden>{{$type === 'edit' ? $post->content : null}}</textarea>
    </div>
</form>

@push('scripts')
<script>
    Laraberg.init('content')

</script>
@endpush

@endsection
