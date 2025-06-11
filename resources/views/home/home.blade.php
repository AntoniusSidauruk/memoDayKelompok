<!DOCTYPE html>
<html>
<head>
    <title>MemoDay - Hari Penting</title>
</head>
<body>
    <h1>Daftar Hari Penting</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('hari_penting.store') }}" method="POST">
        @csrf
        <label>Nama Event:</label><br>
        <input type="text" name="nama_event"><br><br>

        <label>Tanggal:</label><br>
        <input type="date" name="tanggal"><br><br>

        <label>Kategori:</label><br>
        <select name="kategori">
            <option value="Ulang Tahun">Ulang Tahun</option>
            <option value="Libur Nasional">Libur Nasional</option>
            <option value="Deadline">Deadline</option>
            <option value="Lainnya">Lainnya</option>
        </select><br><br>

        <label>Catatan (Opsional):</label><br>
        <textarea name="catatan"></textarea><br><br>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
