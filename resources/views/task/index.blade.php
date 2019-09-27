@extends('home')
@section('content')
<table class="table">
    <caption>List of users</caption>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Image</th>
        <th scope="col">Due_date</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    @foreach($tasks as $key=>$task)
    <tbody>
    <tr>
        <th scope="row">{{ ++$key }}</th>
        <td>{{ $task->title }}</td>
        <td>{{ $task->content }}</td>
        <td><img src="{{ asset('storage/image/'.$task->image) }}" alt="" width="30" height="30"></td>
        <td>{{ $task->due_date }}</td>
        <td>
            <a href=""><button class="btn btn-primary">Show</button></a>
            <a href=""><button class="btn btn-success">Edit</button></a>
            <a href=""><button class="btn btn-danger">Delete</button></a>
        </td>
    </tr>
    </tbody>
        @endforeach
</table>
<a href="{{ route('tasks.create') }}"><button class="btn btn-primary">Create</button></a>
@endsection
