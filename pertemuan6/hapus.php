<?php 

require 'fungsi.php';

$id = $_GET["id"];

if( hapus($id)>0 ):
    echo "<script>
                alert('Data dihapus!');
                document.location.href='index.php';
            </script>
        ";
endif;

?>