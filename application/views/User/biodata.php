 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Form Biodata</h1>
     <?= $this->session->flashdata('message'); ?>
     <form class="user" method="post" action="<?= base_url('user/biodata') ?>">
         <div class="col-md-8">
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="name_bio" name="name_bio" placeholder="Nama Lengkap Anda.." value="<?= set_value('name_bio'); ?>"><small class="text-danger"><?= form_error('name_bio') ?></small>
             </div>
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="ttl" name="ttl" placeholder="Tempat Tanggal Lahir Anda.." value="<?= set_value('ttl'); ?>"><small class=" text-danger"><?= form_error('ttl') ?></small>
             </div>
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="jk" name="jk" placeholder="Jenis Kelamin Anda.." value="<?= set_value('jk'); ?>"><small class=" text-danger"><?= form_error('jk') ?></small>
             </div>
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat Anda.." value="<?= set_value('alamat'); ?>"><small class=" text-danger"><?= form_error('alamat') ?></small>
             </div>


             <button type="submit" class="btn btn-primary btn-user btn-block">
                 Simpan Biodata
             </button>
         </div>
         <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->