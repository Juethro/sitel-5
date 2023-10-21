<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Rooms</title>
</head>

<body>
    <h1>Available Rooms</h1>

    @if($availableRooms->isEmpty())
        <p>Tidak ada kamar yang tersedia untuk tanggal yang diminta.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID Kamar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($availableRooms as $booking)
                <tr>
                    <td>{{ $booking->id_room }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>

</html>