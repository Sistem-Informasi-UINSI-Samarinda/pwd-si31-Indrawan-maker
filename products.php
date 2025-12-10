<?php include 'includes/meta.php'; ?>
<?php include 'includes/header.php'; ?>

<?php 

include 'config/koneksi.php';
$tes = "SELECT * FROM roti";
$roti = mysqli_query($conn, $tes);


?>

    <main>
        <section class="product-container">
            <h2>Pilihan Roti</h2>
            <div class="card-product-container">
                <?php foreach ($roti as $rotiObj) {?>
                <div class="card-product">
                    <img src="uploads/<?=$rotiObj["foto_roti"]; ?>" alt="">
                    <div>
                        <h4><?= $rotiObj["nama_roti"];?></h4>
                        <p><?= $rotiObj["deskripsi_roti"];?></p>
                    </div>
                </div>
                <?php }?>
            </div>
        </section>
    </main>


<?php include 'includes/footer.php'; ?>