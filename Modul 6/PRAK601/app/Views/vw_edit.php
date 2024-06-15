<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <?= $title ?>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <?= validation_list_errors() ?>
                    <?= form_open('buku/update/'. $post['id']); ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" name="penulis" placeholder="Masukkan Penulis">
                        </div>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Penerbit">
                        </div>
                        <div class="form-group">
                            <label>Tahun Terbit</label>
                            <input type="number" class="form-control" name="tahun_terbit" placeholder="Masukkan Tahun Terbit">
                        </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                        <a href="<?= base_url('/') ?>" class="btn btn-link">Back</a>
                    </div>
                    <?= form_close(); ?>

                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extra-js') ?>
<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#post_content').summernote({
            tabsize: 2,
            height: 500
        });
    })
</script>
<?= $this->endSection() ?>