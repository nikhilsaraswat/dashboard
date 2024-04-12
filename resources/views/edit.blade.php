<form method="POST" action="/edit/{{ $item->id }}">
    @csrf
    @method('PUT')
    <input type="text" name="username" value="{{ $item->username }}">
    <button type="submit">Update</button>
</form>