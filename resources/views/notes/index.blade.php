<x-layout title="HOME PAGE">
    <h1>Home page</h1>
    @foreach($noteList as $note)
        <p>{{$note->title}}</p>
        <p>{{$note->description}}</p>
        <p><a href="/notes/{{$note->id}}">Edit</a></p>
    @endforeach
</x-layout>
