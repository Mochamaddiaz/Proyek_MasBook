<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-7 loginform">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img">
                <h3>Welcome to STEVEN</h3>
                <p>Make your event much happier with <br>STIS Event Organizer</p>
                <a href="/auth" class="btn btn-primary signup-btn">Sign In</a>
            </div>
            <div class="col-lg-6 card-body pt-5">
                <h2 style="text-align: center; font-weight: bold;" class="pb-2">Sign Up</h2>
                <form>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="col-md-11 my-2" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-user-circle"></i>
                        <input type="text" class="col-md-11 mb-2" id="fname" name="fname" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone-alt"></i>
                        <input type="text" class="col-md-11 mb-2" id="phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="col-md-11 mb-2" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="col-md-11 mb-2" id="confirm" name="confirm" placeholder="Confirm Password" required>
                    </div>
                    <div class="error" id="error">

                    </div>
                    <button type="submit" class="col-md-12 mt-2 btn login-btn" onclick="check()">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function check() {
        var email = document.getElementById("email");
        var uname = document.getElementById("username");
        var phone = document.getElementById("phone");
        var pword = document.getElementById("password");
        var confirm = document.getElementById("confirm");
        var error = document.getElementById("error");

        if (uname.value.length < 4) {
            error.innerHTML = "*Input username at least 4 character";
            if (Number.isInteger(phone.value) == false) {
                error.innerHTML = "Phone number must be integer";
                if (pword.value < 8) {
                    error.innerHTML = "*Input password at least 8 character";
                    if (confirm.value != pword.value) {
                        error.innerHTML = "*Confirm Password must be same as Password";
                        return false;
                    } else {
                        error.innerHTML = "";
                        return true;
                    }

                    return false;
                } else {
                    error.innerHTML = "";
                    return true;
                }
                return false;
            } else {
                error.innerHTML = "";
                return true;
            }
            return false;
        } else {
            error.innerHTML = "";
            return true;
        }

    }
</script>
<?= $this->endSection(); ?>