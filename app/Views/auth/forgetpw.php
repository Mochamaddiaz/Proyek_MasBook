<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="forget" id="forget">
    <form action="" class="forget-content animate col-lg-6">
        <div class="title-forget">
            <h2>Forget Your Password</h2>
            <p class="col-md-7">No Problem! Just enter your email below and we will send instructions to reset your password.</p>
        </div>
        <div class="form-group">
            <i class="fas fa-envelope"></i>
            <input type="email" class="col-md-6 my-2" id="email" name="email" placeholder="Email" required>
        </div>
        <button type="submit" class="col-md-4 mt-1 btn send-btn">Send Instructions</button>
    </form>
</div>
<?= $this->endSection(); ?>