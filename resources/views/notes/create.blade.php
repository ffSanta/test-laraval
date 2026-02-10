<x-layout>
    <h1>Create page</h1>
    <form method="POST" action="/notes/store">
        @csrf
        @method('PUT')
        <label>title</label>
        <input type="text" name="title"/>
        <div>
        <label>description</label>
        <textarea rows="3" name="description"></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
</x-layout>

