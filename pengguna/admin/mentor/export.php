<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['id_admin'])) {
    // Pengguna belum login, arahkan kembali ke halaman masuk.php
    header("Location: ../../../login");
    exit; // Pastikan untuk menghentikan eksekusi skrip setelah mengarahkan
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../assets/img/2-logo.png">
    <title>
        PPA | Mentor PPA
    </title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Custom CSS for light theme -->
    <style>
        body {
            background-color: white;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .container-fluid {
            padding: 20px;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ddd;
            padding: 16px;
            text-align: center;
        }

        .card-body {
            max-height: 400px;
            /* Tentukan tinggi maksimum card */
            overflow-y: auto;
            /* Membuat konten tabel dapat di-scroll secara vertikal */
        }

        /* Kustomisasi tampilan scrollbar */
        .card-body::-webkit-scrollbar {
            width: 8px;
            /* Lebar scrollbar */
        }

        .card-body::-webkit-scrollbar-thumb {
            background-color: #888;
            /* Warna scrollbar */
            border-radius: 10px;
            /* Membuat ujung scrollbar bulat */
        }

        .card-body::-webkit-scrollbar-thumb:hover {
            background-color: #555;
            /* Warna scrollbar saat dihover */
        }

        .card-body::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            /* Warna track (jalur) scrollbar */
        }


        .table {
            margin: 0;
            width: 100%;
            background-color: #fff;
        }

        .table thead th {
            border-bottom: 2px solid #ddd;
            background-color: #f1f1f1;
            color: #333;
        }

        .table tbody tr {
            border-bottom: 1px solid #ddd;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tbody td {
            padding: 10px;
            text-align: center;
        }

        h3 {
            margin-bottom: 20px;
            font-weight: 700;
            color: #333;
        }

        .text-center {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
</head>

<body>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h3 class="text-center">Data Mentor</h3>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="example" class="table align-items-center mb-0 display nowrap">
                                <thead class=" text-primary">
                                    <tr>
                                        <th class="text-center">Nomor</th>
                                        <th class="text-center">ID Mentor</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Tempat & Tanggal Lahir</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Nomor Hp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../../../koneksi.php';
                                    $search_query = isset($_GET['search_query']) ? $_GET['search_query'] : '';
                                    $query = "SELECT * FROM mentor";
                                    if (!empty($search_query)) {
                                        $query .= " WHERE nama LIKE '%$search_query%' OR tempat_lahir LIKE '%$search_query%' OR tanggal_lahir LIKE '%$search_query%' OR jk LIKE '%$search_query%' OR nomor_hp LIKE '%$search_query%'";
                                    }
                                    $query .= " ORDER BY id_mentor DESC";
                                    $result = mysqli_query($koneksi, $query);
                                    $counter = 1;
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td class='text-center'>" . $counter . "</td>";
                                            echo "<td class='text-center'>" . $row['id_mentor'] . "</td>";
                                            echo "<td class='text-center'>" . $row['nama'] . "</td>";
                                            echo "<td class='text-center'>" . $row['tempat_lahir'] . " / " . $row['tanggal_lahir'] . "</td>";
                                            echo "<td class='text-center'>" . $row['jk'] . "</td>";
                                            echo "<td class='text-center'>" . $row['nomor_hp'] . "</td>";
                                            echo "</tr>";
                                            $counter++;
                                        }
                                    } else {
                                        echo "<td class='text-center'><h3>Gagal mengambil data dari database</h3></td>";
                                    }
                                    mysqli_close($koneksi);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tautan ke file jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <!-- Tautan ke file JavaScript DataTables -->
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
        <!-- Tautan ke file JavaScript untuk ekspor -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
        <script>
            new DataTable('#example', {
                layout: {
                    topStart: {
                        buttons: [{
                            extend: 'pdfHtml5',
                            text: 'PDF A3',
                            customize: function(doc) {
                                doc.pageSize = 'A3';
                                doc.content[1].table.headerRows = 1;
                                doc.content[1].table.body[0].forEach(function(col) {
                                    col.fillColor = '#cccccc';
                                });
                            }
                        }, {
                            extend: 'pdfHtml5',
                            text: 'PDF A4',
                            customize: function(doc) {
                                doc.pageSize = 'A4';
                                doc.content[1].table.headerRows = 1;
                                doc.content[1].table.body[0].forEach(function(col) {
                                    col.fillColor = '#cccccc';
                                });
                            }
                        }, 'copy', 'csv', 'excel', 'print']
                    }
                }
            });
        </script>
</body>

</html>