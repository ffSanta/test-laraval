<x-layout>
    <h1>Register</h1>
    <form method="post" action="/register">
        @csrf
        @method('PUT')
        <label>name</label>
        <input type="text" name="name" required/>
        <label>email</label>
        <input type="email" name="email" required/>
        <label>password</label>
        <input type="password" name="password" required/>
        <button>Register</button>
    </form>
</x-layout>
