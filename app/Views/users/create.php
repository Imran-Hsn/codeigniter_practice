<?= $this->extend('layouts/main.php') ?>

<?= $this->section('content') ?>

<div class="container mt-1 mb-1">
    <div class="row col-7 m-auto bg-dark" style="height:auto;">
        <div class="card m-0 p-0">
            <div class="card-header">
                <h5>Add new user</h5>
            </div>

            <div class="card-body">
                <form action="<?php echo base_url('/user/store')  ?>" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your email address" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" placeholder="Enter your password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>



<?= $this->include('layouts/navbar.php') ?>
<?= $this->endSection() ?>