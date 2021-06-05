<!DOCTYPE html>
<html>
<head>
<title>1461900043</title>
</head>
<body>
<h3>Edit Harga</h3>
<a href="/barang"> Kembali</a>
<br/>
<br/>
@foreach($barang as $b)
<form action="/barang/update" method="post">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $b->id }}"> <br/>
Nama <input type="text" required="required" name="nama" value="{{ $b->nama }}"> <br/>
Harga <textarea required="required" name="Harga">{{ $b->harga }}</textarea> <br/>
<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>