<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- google fonts poppin -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <!-- <style>
        * {
            -webkit-print-color-adjust: exact !important;
            /* Chrome, Safari 6 – 15.3, Edge */
            color-adjust: exact !important;
            /* Firefox 48 – 96 */
            print-color-adjust: exact !important;
            /* Firefox 97+, Safari 15.4+ */
        }

        .biodata {
            text-align: left;
            width: 150px;
            color: black;
            margin-left: 115px;
            margin-top: -110px;
        }

        .biodata p {
            font-size: 12px;
            line-height: 1px;
            margin-top: -20px;
            margin-left: -103px;
        }

        .biodata h5 {
            margin-top: 120px;
            margin-left: -93px;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 119px;
            height: 188px;
            margin: auto;
            text-align: center;
            background-image: url('/images/idcard.png');
            background-size: cover;
        }

        .foto {
            width: 120px;
        }

        .qrcode {
            /* width: 33px; */
            margin-top: -100px;
            padding-left: 1px;
            padding-top: 0.8px;
        }
    </style> -->
    <style>
        #bg {
            max-width: 5.398cm;
            max-height: 8.56cm;
        }

        .qrcode {
            margin-top: -159px;
            margin-left: 72px;
        }

        .biodata {
            text-align: center;
            margin-top: 30px;
            margin-left: -45px;
        }

        .biodata p {
            line-height: 5px;
            text-transform: uppercase;
        }

    </style>
    <title>{{ $title }}</title>
</head>

<body onload="window.print()">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3 mb-3">
                <img src="{{ asset('bg_kartu/bg.png') }}" alt="" id="bg">
                <p class="qrcode">{!! QrCode::size(60)->generate($ID_peserta); !!}</p>
                <div class="biodata">
                    <h5>{{ $ID_peserta }}</h5>
                    <p style="font-size: 12px;">{{ $data->nama_peserta }}</p>
                </div>
            </div>
        </div>
    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>