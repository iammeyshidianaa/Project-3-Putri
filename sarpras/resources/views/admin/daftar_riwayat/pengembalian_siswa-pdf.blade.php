<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Riwayat Pengembalian Barang Siswa</h1>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nama Barang / Merek</th>
            <th>Jumlah</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
        </tr>
        @php
        $no=1;
        @endphp
        @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->namapeminjam }}</td>
            <td>{{ $row->kelas }}</td>
            <td>{{ $row->namabarang3 }}</td>
            <td>{{ $row->jumlah}}</td>
            <td>{{ $row->tanggalpinjam}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
