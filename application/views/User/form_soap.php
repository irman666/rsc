 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Form SOAP</h1>
     <?= $this->session->flashdata('message'); ?>
     <form class="user" method="post" action="<?= base_url('user/form_soap') ?>">
         <div class="col-md-8">
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="name_pasien" name="name_pasien" placeholder="Nama Lengkap Anda.." value="<?= set_value('name_pasien'); ?>"><small class="text-danger"><?= form_error('name_pasien') ?></small>
             </div>
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="umur" name="umur" placeholder="Umur Anda.." value="<?= set_value('umur'); ?>"><small class=" text-danger"><?= form_error('umur') ?></small>
             </div>
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="jk" name="jk" placeholder="Jenis Kelamin Anda.." value="<?= set_value('jk'); ?>"><small class=" text-danger"><?= form_error('jk') ?></small>
             </div>
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat Anda.." value="<?= set_value('alamat'); ?>"><small class=" text-danger"><?= form_error('alamat') ?></small>
             </div>
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="bb" name="bb" placeholder="Berat Badan Anda.." value="<?= set_value('bb'); ?>"><small class=" text-danger"><?= form_error('bb') ?></small>
             </div>
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="tb" name="tb" placeholder="Tinggi Badan Anda.." value="<?= set_value('tb'); ?>"><small class=" text-danger"><?= form_error('tb') ?></small>
             </div>
             <div class="form-group">
                 <input type="text" class="form-control form-control-user" id="keluhan" name="keluhan" placeholder="Keluhan Anda.." value="<?= set_value('keluhan'); ?>"><small class=" text-danger"><?= form_error('keluhan') ?></small>
             </div>

             <button type="submit" class="btn btn-primary btn-user btn-block">
                 Simpan SOAP
             </button>
         </div>
         <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->