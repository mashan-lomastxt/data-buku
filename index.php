<?php 
include 'koneksi.php';
?>

<!-- kode CDN -->
<link rel="stylesheet" type="text/css" 
href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="mt-3 pl-5 pr-5">
    <!-- Kode Header atau judul -->
    <h3 class="text-center mt-2">DATA BUKU</h3>

    <table id="myTable" class="display"> <!-- id myTable harus sama dengan nama tabel -->
        <thead> <!-- kode untuk memulai menuliskan kepala tabel -->
            <tr> <!-- kode untuk memulai menuliskan baris tabel -->
                <th>No</th> <!-- kode untuk membuat kolom pada tabel -->
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
            </tr> <!-- kode untuk mengakhiri baris tabel -->
        </thead> <!-- kode untuk mengakhiri kepala tabel -->

        <tbody>
            <?php
            $no = 1;
            $data = $kon->query("SELECT * FROM penulis");
            foreach ($data as $d) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['judul'] ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['penerbit']; ?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <button>
        Tambah Data
    </button>
</div>


<script 
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
 $(document).ready( function () {
  $('#myTable').DataTable();
 } );
</script>