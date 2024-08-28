<?php 

require 'functions.php';
$id = $_GET["id"];

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
?>