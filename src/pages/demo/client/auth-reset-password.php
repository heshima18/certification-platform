<?php require_once('../inc/opener.php') ?>
<!-- Page -->
<link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css">
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <div class="card">
                <div class="card-body">
                    <div class="app-brand justify-content-center">
                        <a href="index.php" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <img src="../assets/svg/logo.svg" alt="Demo">
                            </span>
                            <span class="app-brand-text demo text-body fw-bolder">Demo</span>
                        </a>
                    </div>
                    <h4 class="mb-2">Reset Password 🔒</h4>
                    <p class="mb-4">for <span class="fw-bold">john.doe@email.com</span></p>
                    <form id="formAuthentication" class="mb-3" action="auth-login-basic.php" method="POST">
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">New Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="confirm-password">Confirm Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="confirm-password" class="form-control" name="confirm-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100 mb-3">
                            Set new password
                        </button>
                        <div class="text-center">
                            <a href="auth-login-basic.php">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Back to login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../inc/closer.php') ?>
<!-- Page JS -->
<script src="../assets/js/pages-auth.js"></script>