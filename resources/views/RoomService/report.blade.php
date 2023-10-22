<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>

</head>
<body>
    <section class="report-div">
        <div class="report-title-div">
            <h1 class="report-title">Report</h1>
        </div>

        @if ($message = Session::get('message'))
            <p>{{ $message }}</p>
        @endif
        <form action="{{route('submit.form')}}" method="POST" >
            @csrf
            <div>
                <label for="description">Deskripsi Keluhan:</label>
                <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

            </div>
            <div >
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </section>
</body>
</html> 