<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h3>Data barang</h3>
    <p>Cari : </p>
    <form action="/barang/store" method="post">
        {{ csrf_field() }}
            Id <input type="text" name="id" required="required"> <br/>
            Nama <input type="text" name="nama" required="required"> <br/>
            Harga <textarea name="harga" required="required"></textarea> <br/>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>