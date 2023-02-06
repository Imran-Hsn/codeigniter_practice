<?= $this->extend('layouts/main.php') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="bg-light col-lg-12 col-md-12 col-sm-12" style="height: 550px;">
            <h1 class="text-center mt-3">Users List</h1>

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
                    <?php if($users): ?>
                    <?php foreach($users as $user): ?>
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

<?= $this->include('layouts/navbar.php') ?>
<?= $this->endsection() ?>