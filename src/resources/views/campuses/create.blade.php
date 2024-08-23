<!-- resources/views/campuses/create.blade.php -->
<form action="{{ route('campuses.store') }}" method="POST">
    @csrf
    <label for="name">Campus Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Add Campus</button>
</form>