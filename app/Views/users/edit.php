<?= $this->extend('layouts/main.php') ?>

<?= $this->section('content') ?>

<div class="container mt-1 mb-1"  style="height:500px;">
    <div class="row col-7 m-auto bg-dark">
        <div class="card m-0 p-0 bg-light">
            <div class="card-header">
                <h5>Edit User</h5>
            </div>

            <div class="card-body">
                <form action="<?php echo base_url('/user/update/'. $user['id']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT"/>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="<?= $user['name'] ?>" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" value="<?= $user['email'] ?>" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" value="<?= $user['phone'] ?>" name="phone">
                    </div>
                    <button type="submit" class="btn btn-primary float-end m-1">Submit</button>
                    <a href="<?php echo base_url('/users') ?>" class="btn btn-warning float-end m-1">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>



<?= $this->include('layouts/navbar.php') ?>
<?= $this->endSection() ?>