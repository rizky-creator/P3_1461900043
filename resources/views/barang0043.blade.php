<!DOCTYPE html>
<html>
<head>
    <title>Kegiatan 3 RIZKY</title>
    </head>
        <body>
            <h3>CARI BARANG</h3>
            <p>Kolom Pencarian</p>
            <form action="/barang/cari" method="GET">
                <p> Cari Barang Itu  <input type="text" name="lihat" placeholder="isikan disini" value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>

             <a href="/barang/tambah"> + Data Baru </a>
             <table border="1">
<tr>
<th>Id</th>
<th>Nama</th>
<th>Harga</th>
</tr>
@foreach($barang as $b)
<tr>
<td>{{ $b->id }}</td>
<td>{{ $b->nama }}</td>
<td>{{ $b->harga }}</td>
<td>
<a href="/barang/edit/{{ $b->id }}">Edit</a>

<a href="/barang/hapus/{{ $b->id }}">Hapus</a>
</td>
</tr>
@endforeach
</table>
</body>
</html>