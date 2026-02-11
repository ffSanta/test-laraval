<x-layout>
    <h1>LogIn</h1>
    <form method="post" action="/login">
        @csrf
        @method('PUT')
        <label>email</label>
        <input type="email" name="email" required/>
        <label>password</label>
        <input type="password" name="password" required/>
        <button>Login</button>
    </form>
</x-layout>
