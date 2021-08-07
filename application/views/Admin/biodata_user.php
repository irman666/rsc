<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Biodata User</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profil/') . $user['image']; ?>" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $biodata['name_bio']; ?></h5>
                    <p class="card-text"><?= $biodata['ttl']; ?></p>
                    <p class="card-text"><?= $biodata['jk']; ?></p>
                    <p class="card-text"><?= $biodata['alamat']; ?></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->