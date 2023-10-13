<form action="{{ route('checkAvailability') }}" method="post">
    @csrf
    <label for="start_date">Tanggal Awal:</label>
    <input type="date" id="start_date" name="start_date" required><br>

    <label for="end_date">Tanggal Akhir:</label>
    <input type="date" id="end_date" name="end_date" required><br>

    <button type="submit">Cari Kamar Tersedia</button>
</form>