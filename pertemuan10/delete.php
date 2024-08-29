<?php 

require "helper/functions.php";

// Collect the id from the URL Search Params
$id = $_GET["id"];

if(isset($id) && is_numeric($id)){
    if(hapus($id) > 0) {
        echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
            </script>;
            ";
    } else {
        echo  "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
        </script>;
        ";
    }
}

/*
PROBLEM DISINI  ADALAH MEMANGGIL TAMBAH SETELAH MEMANGGIL FUNGSI HAPUS!

if(hapus($_GET["id"]) > 0) {
    if(tambah($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
            </script>;
            ";
    } else {
        echo  "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
        </script>;
        ";
    }
}
*/

?>

