<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tamu</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Daftar Tamu</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Koneksi ke database
            $conn = mysqli_connect("localhost", "root", "", "bukutamu");
            
            // Periksa koneksi
            if (!$conn) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }
            
            // Ambil data dari tabel tamu2
            $sql = "SELECT * FROM tamu2";
            $result = mysqli_query($conn, $sql);
            
            // Tampilkan data di tabel
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['mobile'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?name=" . $row['name'] . "'>Edit</a>";
                    echo "<a href='delete.php?name=" . $row['name'] . "'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
            
            // Tutup koneksi
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>
</html>
