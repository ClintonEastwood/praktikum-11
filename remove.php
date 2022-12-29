<?php

require 'connect.php';


$id = $_GET["id"];


if( hapus($id) > 0) {
    echo "
        <script>
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            document.location.href = 'index.php';
        </script>
    ";
}
?>