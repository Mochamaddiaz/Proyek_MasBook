<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-7 loginform">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img">
                <h3>Welcome to STEVEN</h3>
                <p>Make your event much happier with <br>STIS Event Organizer</p>
                <a href="/auth/register" class="btn btn-primary signup-btn">Sign Up</a>
            </div>
            <div class="col-lg-6 card-body pt-5">
                <h2 style="text-align: center; font-weight: bold;" class="pb-2">Sign In</h2>
                <form>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="col-md-11 my-4" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="col-md-11" id="password" placeholder="Password">
                    </div>
                    <a href="/auth/forgetpw" class="forgot">Forgot your password?</a>
                    <br>
                    <button type="submit" class="col-md-12 mt-2 btn login-btn">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="forget" id="forget">
    <form action="" class="forget-content animate col-lg-6">
        <div class="close">
            <span onclick="document.getElementById('forget').style.display='none'" class="close-btn" title="Close Modal">&times;</span>
        </div>
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

<script>
    var forget = document.getElementById('forget');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == forget) {
            forget.style.display = "none";
        }
    }
</script>
<?= $this->endSection(); ?>