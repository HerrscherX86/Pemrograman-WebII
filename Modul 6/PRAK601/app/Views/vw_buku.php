<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CI-Lib@KiaFizz7</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <?php if (session()->get('logged_in')) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome, <?php echo session()->get('username'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login/logout'); ?>">Logout</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('register'); ?>">Register</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Novel CRUD @KiaFizz7
                    <a href="<?php echo base_url('buku/create'); ?>" class="btn btn-primary btn-sm float-right">Insert Data</a>
                </div>
                <div class="card-body">

                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php } ?>

                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php } ?>

                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Judul</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php if (!empty($posts) && is_array($posts)) { ?>
                                <?php foreach ($posts as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['judul']; ?></td>
                                        <<td><?php echo $row['penulis']; ?></td>
                                        <td><?php echo $row['penerbit']; ?></td>
                                        <td><?php echo $row['tahun_terbit']; ?></td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"  
                                                action="<?php echo base_url('buku/delete/' . $row['id']); ?>" method="POST">  
                                                <input type="hidden" name="{csrf_token}" value="{csrf_hash}">
                                                <input type="hidden" name="_method" value="DELETE"> 
                                                <a href="<?php echo base_url('buku/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>  
                                            </form>  
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4" class="text-center">No post found.</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?= $pager->links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extra-js') ?>
<script>
    $(document).ready(function() {
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');
    })
</script>
<?= $this->endSection() ?>