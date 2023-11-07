<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- our style -->
  {{-- <link rel="stylesheet" href="style/style.css"> --}}

  <!-- google fonts poppin -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  
  <style>
    *{
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
    color: white;
    margin-left: 115px;
    margin-top: -110px;
}

.biodata p {
    font-size: 12px;
    line-height: 1px;
}

.biodata h5 {
    margin-top: -15px;
    font-family: 'Poppins', sans-serif;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    width: 324px;
    height: 204px;
    margin: auto;
    text-align: center;
    background-image: url('/images/idcard.png');
    background-size: cover;
}

.foto{
    width: 86px;
    padding-top: 65px;
    padding-right: 197px;
}

.qrcode {
    /* width: 33px; */
    margin-top: -4px;
    padding-left: 277px;
}

  </style>
</head>
<body onload="window.print()">
    <div class="card">
      <img src="{{ asset('file/foto/'.$anggota->foto) }}" alt="" class="foto">
      <p class="qrcode">{!! QrCode::size(32)->generate('https://tmcc-indonesia.ord/'.$anggota->id) !!}</p>
      <div class="biodata">
        <h5>{{ $anggota->name }}</h5>
        <p style="font-size: 12px;"> 
            @if ($anggota->id_kategori_anggota == 1)
            A - {{ str_pad($anggota->id, 5, '0', STR_PAD_LEFT) }}
            @elseif($anggota->id_kategori_anggota == 2)
            B - {{ str_pad($anggota->id, 5, '0', STR_PAD_LEFT) }}
            @else
            K - {{ str_pad($anggota->id, 5, '0', STR_PAD_LEFT) }}
            @endif</p>
        <p style="font-size: 10px;">{{ $anggota->nama_region }}</p>
        <p style="font-size: 9px;">{{ $anggota->nama_chapter }}</p>
      </div>
    </div>
</body>
</html>