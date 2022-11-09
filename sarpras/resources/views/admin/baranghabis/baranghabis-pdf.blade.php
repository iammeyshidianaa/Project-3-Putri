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

    <h1>Data Barang Habis</h1>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>Nama Barang / Merek</th>
            <th>Stok Barang</th>
            <th>Satuan Stok</th>
            <th>Deskripsi</th>
        </tr>
        @php
        $no=1;
        @endphp
        @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->nama_barang1 }}</td>
            <td>{{ $row->stok1 }}</td>
            <td>{{ $row->satuan1 }}</td>
            <td>{{ $row->deskripsi1 }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
