<?php

require_once "../movie.php";
$movie = new Movie();

$movie->deleteMovie();
echo "<script>alert('Data Berhasil Di Hapus'); window.location.href='index.php'</script>";