<?php
$conn = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


// Function otomatisasi pengambilan data
function query($table, $limit = 5) {
    global $conn;

    // Konfigurasi pagination
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($page - 1) * $limit;

    // Query data dari tabel yang diberikan sebagai parameter
    $sql = "SELECT * FROM $table LIMIT $start, $limit";
    $result = mysqli_query($conn, $sql);

    // Hitung total data
    $total_query = "SELECT COUNT(*) AS total FROM $table";
    $total_result = mysqli_query($conn, $total_query);
    $total_data = mysqli_fetch_assoc($total_result)['total'];
    $total_pages = ceil($total_data / $limit);

    return [
        "data" => $result,
        "start" => $start,
        "total_pages" => $total_pages,
        "total_data" => $total_data,
        "current_page" => $page,
        "limit" => $limit
    ];
}

?>