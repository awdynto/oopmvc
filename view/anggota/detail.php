<!-- file : oopmvc/view/anggota/detail.php -->
<?php $judul = $row['nama'] ?>

<?php ob_start(); ?>

<h1><?php echo $anggota['nama']; ?></h1>
<p>Nama : <?php echo $anggota['nama']; ?></p>
<p>Tgl lahir : <?php echo $anggota['tanggal_lahir']; ?></p>
<p>Kota lahir : <?php echo $anggota['kota_lahir']; ?></p>

<?php $isi = ob_get_clean(); ?>

<?php include 'view/template.php'; ?>


