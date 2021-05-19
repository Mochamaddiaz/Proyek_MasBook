<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-4 resetform">
    <div class="container card">
        <h2 class="card-header" style="background-color: whitesmoke;">Reset Your Password</h2>
        <form action="" class="card-body">
            <div class="greenbox mb-2 text-success">
                <p class="p-2">A security token has been emailed to you. Enter it in the box below to continue.</p>
            </div>
            <p>Enter the code you received via email, your email address, and your new password.</p>
            <div class="form-group">
                <label for="token">Token</label>
                <input type="text" class="col-md-12" id="token" placeholder="Token">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="col-md-12" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="col-md-12 mt-3" id="newpassword" placeholder="New Password">
            </div>
            <div class="form-group">
                <input type="password" class="col-md-12 mt-2" id="repeatpassword" placeholder="Repeat New Password">
            </div>
            <button type="submit" class="btn btn-primary col-md-12 mt-2">Reset Password</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>