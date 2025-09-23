<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <p><strong>Nama:</strong> {{ $name }}</p>
    <p><strong>Umur:</strong> {{ $my_age }} tahun</p>
    <p><strong>Hobi:</strong>
        <ul>
            @foreach($hobbies as $hobby)
                <li>{{ $hobby }}</li>
            @endforeach
        </ul>
    </p>
    <p><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda }}</p>
    <p><strong>Jarak Hari dari Tanggal Wisuda:</strong> {{ $time_to_study_left }} hari</p>
    <p><strong>Semester Saat Ini:</strong> {{ $current_semester }}</p>
    <p><strong>Pesan:</strong> {{ $study_message }}</p>
    <p><strong>Cita-cita:</strong> {{ $future_goal }}</p>
</body>
</html>
