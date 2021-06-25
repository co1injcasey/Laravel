@extends('master')


@section('title', 'Homepage')

@section('content')


Post a message:
<br><br>
<form action="/create" method="post">
<input type="text" id="title" name="title" placeholder="Title">
<input type="text" id="content" name="content" placeholder="Content">
{{ csrf_field() }}
<button type="submit">Submit</button>
</form><br>
Recent Messages:
<ul>

@foreach($messages as $message)
<li><h3>
{{ $message->title }} </h3>

 {{ $message->content }} 
 <br> <i>Time:</i>
 {{ $message->created_at->diffForHumans() }}
 <br>
 <a href="/message/{{ $message->id }}">View</a>
 </li>
@endforeach
</ul>


@endsection