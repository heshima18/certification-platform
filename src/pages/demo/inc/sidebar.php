<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.php" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="../assets/svg/logo.svg" alt="Demo" srcset="">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Demo</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
            </a>
        </li>
        <li class="menu-item <?= $active ? "active open" : "" ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div>Active Container</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?= $active ? "active" : "" ?>">
                    <a href="app-active.php" class="menu-link">
                        <div>Active Element</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Pages</span>
        </li>
        <li class="menu-item">
            <a href="app-calendar.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div>Calendar</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-users.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>Users</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-access-roles.php" class="menu-link">
                <i class='menu-icon tf-icons bx bx-check-shield'></i>
                <div>Roles</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div>Pages</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-profile-user.php" class="menu-link">
                        <div>User Profile</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div>Account Settings</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pages-account-settings-account.php" class="menu-link">
                                <div>Account</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-account-settings-security.php" class="menu-link">
                                <div>Security</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-account-settings-notifications.php" class="menu-link">
                                <div>Notifications</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Misc">Misc</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pages-misc-error.php" class="menu-link" target="_blank">
                                <div data-i18n="Error">Error</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-misc-under-maintenance.php" class="menu-link" target="_blank">
                                <div data-i18n="Under Maintenance">Under Maintenance</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div>Authentications</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="auth-login.php" class="menu-link" target="_blank">
                        <div>Login</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-register.php" class="menu-link" target="_blank">
                        <div>Register</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-verify-email.php" class="menu-link" target="_blank">
                        <div>Verify Email</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-reset-password.php" class="menu-link" target="_blank">
                        <div>Reset Password</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-forgot-password.php" class="menu-link" target="_blank">
                        <div>Forgot Password</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-two-steps.php" class="menu-link" target="_blank">
                        <div>Two Steps</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="modal-examples.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-window-open"></i>
                <div>Modal Examples</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div>Cards</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="cards-basic.php" class="menu-link">
                        <div>Basic</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="cards-advance.php" class="menu-link">
                        <div>Advance</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div>User interface</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="ui-accordion.php" class="menu-link">
                        <div>Accordion</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-alerts.php" class="menu-link">
                        <div>Alerts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-badges.php" class="menu-link">
                        <div>Badges</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-buttons.php" class="menu-link">
                        <div>Buttons</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-carousel.php" class="menu-link">
                        <div>Carousel</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-collapse.php" class="menu-link">
                        <div>Collapse</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-dropdowns.php" class="menu-link">
                        <div>Dropdowns</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-list-groups.php" class="menu-link">
                        <div>List groups</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-modals.php" class="menu-link">
                        <div>Modals</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-offcanvas.php" class="menu-link">
                        <div>Offcanvas</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-pagination-breadcrumbs.php" class="menu-link">
                        <div>Pagination &amp; Breadcrumbs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-progress.php" class="menu-link">
                        <div>Progress</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-spinners.php" class="menu-link">
                        <div>Spinners</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-tabs-pills.php" class="menu-link">
                        <div>Tabs &amp; Pills</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-toasts.php" class="menu-link">
                        <div>Toasts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-tooltips-popovers.php" class="menu-link">
                        <div>Tooltips &amp; popovers</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-typography.php" class="menu-link">
                        <div>Typography</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="boxicons.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div>Boxicons</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Forms &amp; Tables</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>Form Elements</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="forms-basic-inputs.php" class="menu-link">
                        <div>Basic Inputs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-input-groups.php" class="menu-link">
                        <div>Input groups</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="form-validation.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                <div data-i18n="Form Validation">Form Validation</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="tables-basic.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tables</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Charts</span>
        </li>
        <li class="menu-item">
            <a href="charts-apex.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chart"></i>
                <div data-i18n="Charts">Apex Charts</div>
            </a>
        </li>
    </ul>
</aside>