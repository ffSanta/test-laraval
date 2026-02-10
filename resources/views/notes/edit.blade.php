<x-layout>
    <h1>Edit Note</h1>
    <form method="post" action="/notes/{{$note->id}}">
        @csrf
        @method('PATCH')
        <label>title</label>
        <input type="text" name="title" value="{{$note->title}}"/>
        <div>
            <label>description</label>
            <textarea rows="3" name="description">{{$note->description}}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
    <p>{{$note->id}}</p>
    <a href="/notes/{{$note->id}}/delete">Delete</a>
</x-layout>
