<?php
$kelolaJadwalModel = new \App\Models\KelolaJadwalModel(); // Sesuaikan dengan nama model yang Anda gunakan
$activities = $kelolaJadwalModel->findAll(); // Mendapatkan semua data kegiatan dari tabel

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kegiatan KKN</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #001f3f, #003366); /* Gradient background with navy colors */
            margin: 0;
            padding: 0;
            color: #fff; /* Set text color to white */
        }

        .container {
            background: rgba(255, 255, 255, 0.9); /* Slightly less transparent white background for the content container */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        h2{
            color:  #f8f9fa;
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
            background-color: #f8f9fa;
            color: #333;
        }
        th {
            background-color: #001f3f;
            color: #fff;
        }

        tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }

        tbody tr:nth-child(even) {
            background-color: #fff;
        }
        .add-button {
            text-align: left;
            margin-bottom: 20px;
        }

        .add-button a {
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        .add-button a:hover {
            background-color: #218838;
        }

        .edit-form, .delete-form {
            display: inline;
        }

        .edit-form button, .delete-form button {
            background: none;
            border: none;
            color: #007bff;
            cursor: pointer;
            padding: 0;
            font-size: inherit;
        }

        .edit-form button:hover, .delete-form button:hover {
            text-decoration: underline;
        }
    </style>
</head>
<h2>Jadwal Kegiatan KKN</h2>
<body>

<div class="add-button">
    <a href="/kelola_jadwal">Tambah Data</a>
</div>

<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Hari</th>
        <th>Tanggal</th>
        <th>Kegiatan</th>
        <th class="action-column">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($activities as $index => $activity): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $activity['hari']; ?></td>
            <td><?php echo $activity['tanggal']; ?></td>
            <td><?php echo $activity['kegiatan']; ?></td>
            <td class="action-column">
                <!-- Edit Form -->
                <form class="edit-form" action="/kelola_jadwal/edit/<?php echo $activity['id']; ?>" method="GET">
                    <button type="submit">Edit</button>
                </form>

                <!-- Delete Form -->
                <form class="delete-form" action="/kelola_jadwal/delete/<?php echo $activity['id']; ?>" method="POST">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
