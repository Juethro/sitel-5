<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
</head>

<body>
    <h1>Form Pemesanan</h1>

    <form action="/postBooking" method="POST">
        @csrf 

        <label for="booking_date">Tanggal Pemesanan:</label>
        <input type="date" id="booking_date" name="booking_date" required><br><br>

        <label for="start_date">Tanggal Mulai:</label>
        <input type="date" id="start_date" name="start_date" required><br><br>

        <label for="finish_date">Tanggal Selesai:</label>
        <input type="date" id="finish_date" name="finish_date" required><br><br>

        <label for="id_guest">Pilih Tamu:</label>
        <select id="id_guest" name="id_guest">
            <option value="1">Tamu 1</option>
            <option value="2">Tamu 2</option>
            <option value="3">Tamu 3</option>
        </select><br><br>

        <label for="id_room">Pilih Kamar:</label>
        <select id="id_room" name="id_room">
            <option value="1">Kamar 1</option>
            <option value="2">Kamar 2</option>
            <option value="3">Kamar 3</option>
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
