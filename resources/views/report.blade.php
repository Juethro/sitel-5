<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>

    <style>
        body{
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .report-div{
            border-radius: 18px;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .report-title-div{
            background-color: rgb(101, 101, 255);
            padding: 1em;
        }

        .report-title{
            color: white;
        }

        .submit-btn{
            align-self:flex-end;
            border:0;
            background-color: rgb(101, 101, 255);
            color: white;
            font-weight: 100;
            padding:1em;
            border-radius: 18px;
            /* box-shadow: 0px 10px 0px 0px rgba(0,0,0,0.5); */
        }

    </style>
</head>
<body>
    <section class="report-div">
        <div class="report-title-div">
            <h1 class="report-title">Report</h1>
        </div>

        @if ($message = Session::get('message'))
            <p style="padding:1em; border-radius:18px; color:green;">{{ $message }}</p>
        @endif
        <form action="{{route('submit.form')}}" method="POST" style="padding-top:1em; display:flex; flex-direction:column; width:100%;">
            @csrf <!-- Untuk melindungi dari serangan Cross-Site Request Forgery (CSRF) -->
            <div style="display:flex; flex-direction:column;">
                <label for="description">Deskripsi Keluhan:</label>
                <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

            </div>
            <div style="width:100%; display:flex; flex-direction:row; align-items:flex-end; ">
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </section>
</body>
</html> 