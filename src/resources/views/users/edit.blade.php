@foreach($campuses as $campus)
<label>
    <input type="checkbox" name="campuses[]" value="{{ $campus->id }}" {{ $user->campuses->contains($campus->id) ?
    'checked' : '' }}>
    {{ $campus->name }}
</label>
@endforeach