<!DOCTYPE HTML>
<head>
  <title>Belajar Larave</title>
</head>
<body>
  <form action="{{url('form')}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="nama" placeholder="Masukkan Nama"><br>
    <input type="text" name="telpon" placeholder="Nomor Telpon"><br>
    <input type="text" name="kelas" placeholder="Masukan kelas"><br>
    <input type="file" name="file"><br>
    <input type="submit" value="Submit">
  </form>
</body>
