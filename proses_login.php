<?php
include 'koneksi.php';


function checkUserType($username)
{
    global $koneksi;
    $query_admin = "SELECT * FROM admin WHERE username = '$username'";
    $query_pimpinan = "SELECT * FROM pimpinan WHERE username = '$username'";
    $query_orang_tua = "SELECT * FROM orang_tua WHERE username = '$username'";
    $query_sponsor = "SELECT * FROM sponsor WHERE username = '$username'";


    $result_admin = mysqli_query($koneksi, $query_admin);
    $result_pimpinan = mysqli_query($koneksi, $query_pimpinan);
    $result_orang_tua = mysqli_query($koneksi, $query_orang_tua);
    $result_sponsor = mysqli_query($koneksi, $query_sponsor);

    if (mysqli_num_rows($result_admin) > 0) {
        return "admin";
    } elseif (mysqli_num_rows($result_pimpinan) > 0) {
        return "pimpinan";
    } elseif (mysqli_num_rows($result_orang_tua) > 0) {
        return "orang_tua";
    } elseif (mysqli_num_rows($result_sponsor) > 0) {
        return "sponsor";
    } else {
        return "not_found";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan validasi data
    if (empty($username) && empty($password)) {
        echo "tidak_ada_data";
        exit();
    }
    if (empty($username)) {
        echo "username_tidak_ada";
        exit();
    }

    if (empty($password)) {
        echo "password_tidak_ada";
        exit();
    }


    $userType = checkUserType($username);
    if ($userType !== "not_found") {
        $query_user = "SELECT * FROM $userType WHERE username = '$username'";
        $result_user = mysqli_query($koneksi, $query_user);

        if (mysqli_num_rows($result_user) > 0) {
            $row = mysqli_fetch_assoc($result_user);
            $hashed_password = $row['password'];

            if ($password === $hashed_password) {

                // Process login for other user types
                session_start();
                $_SESSION['username'] = $username;

                switch ($userType) {
                    case "admin":
                        $_SESSION['id_admin'] = $row['id_admin'];
                        break;
                    case "pimpinan":
                        $_SESSION['id_pimpinan'] = $row['id_pimpinan'];
                        $id_pimpinan = $row['id_pimpinan'];
                        break;
                    case "orang_tua":
                        $_SESSION['id_orang_tua'] = $row['id_orang_tua'];
                        break;
                    case "sponsor":
                        $_SESSION['id_sponsor'] = $row['id_sponsor'];
                        break;
                    default:
                        break;
                }

                // Success response
                switch ($userType) {
                    case "admin":
                        echo "success:" . $username . ":" . $userType . ":" . "pengguna/admin/admin";
                        break;
                    case "pimpinan":
                        echo "success:" . $username . ":" . $userType . ":" . "pengguna/pimpinan/pimpinan";
                        break;
                    case "orang_tua":
                        echo "success:" . $username . ":" . $userType . ":" . "pengguna/orang_tua/orang_tua";
                        break;
                    case "sponsor":
                        echo "success:" . $username . ":" . $userType . ":" . "pengguna/sponsor/sponsor";
                        break;
                    default:
                        echo "success:" . $username . ":" . $userType . ":" . "login";
                        break;
                }
            } else {
                echo "error_password";
            }
        } else {
            echo "error_username";
        }
    } else {
        echo "error_username";
    }
}