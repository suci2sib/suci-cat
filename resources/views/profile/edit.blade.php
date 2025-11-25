<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>

<h1>Edit Profile</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

{{-- Tampilkan foto profil lama --}}
@if($user->profile_picture)
    <img src="{{ Storage::url($user->profile_picture) }}" width="200"><br><br>

    {{-- Tombol hapus foto --}}
    <form action="{{ route('profile.destroy') }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Profile Picture</button>
    </form>
@endif

<br>

{{-- Form upload foto baru --}}
<form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <label>Upload New Picture:</label>
    <input type="file" name="profile_picture"><br><br>

    <button type="submit">Update Profile</button>
</form>

<br>
<a href="{{ route('profile.show') }}">Back to Profile</a>

</body>
</html>
