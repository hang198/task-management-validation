@extends('home')
@section('content')
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            @if($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label>Content</label>
            <input type="text" name="content" class="form-control" value="{{ old('content') }}">
            @if($errors->has('content'))
                <span class="text-danger">{{ $errors->first('content') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="text"  name="image" class="form-control" value="{{ old('image') }}">
            @if($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label>Due_date</label>
            <input type="text" name="due_date" class="form-control" value="{{ old('due_date') }}">
            @if($errors->has('due_date'))
                <span class="text-danger">{{ $errors->first('due_date') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">OK</button>
    </form>
    @endsection
