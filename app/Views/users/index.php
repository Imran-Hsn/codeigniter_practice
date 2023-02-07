<?= $this->extend('layouts/main.php') ?>

<?= $this->section('content') ?>
<div class="container align-items-center justify-content-center">
    <div class="row">
        <div class="bg-light col-lg-12 col-md-12 col-sm-12" style="height: auto;">
            <!-- Show submit message -->
            <?php if(session()->getFlashdata('status')) {  ?>

            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?= session()->getFlashdata('status'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>
              
            <div class="card mt-3">
                <div class="card-header">
                    <h5>Users List
                        <a href="<?php echo base_url('/user/create'); ?>" class="btn btn-info float-end">Add</a>
                    </h5>
                </div>

                <div class="card-body">
                    <table class="table text-center">
                        <thead class="table-dark">
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Create Date</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($users) : ?>
                            <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['phone'] ?></td>
                                <td><?php echo $user['created_at'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-info">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/navbar.php') ?>
<?= $this->endsection() ?>