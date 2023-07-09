<?php require_once('../inc/opener.php') ?>
<!-- Page -->
<link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css">
<div class="authentication-wrapper authentication-basic px-4">
    <div class="authentication-inner">
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
                <h3 class="mb-2">Verify your email ✉️</h3>
                <p class="text-start">
                    Account activation link sent to your email address: hello@example.com Please follow the link inside to
                    continue.
                </p>
                <a class="btn btn-primary w-100 my-3" href="index.php">
                    Skip for now
                </a>
                <p class="text-center">Didn't get the mail?
                    <a href="javascript:void(0);">
                        Resend
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php require_once('../inc/closer.php') ?>
<!-- Page JS -->
<script src="../assets/js/pages-auth.js"></script>