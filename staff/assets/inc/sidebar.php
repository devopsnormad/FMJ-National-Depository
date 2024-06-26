<aside id="sidebar_main">

    <a href="pages_staff_dashboard.php">
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
            </div>
        </div>
    </a>

    <div class="menu_section">
        <h5 style="margin-bottom:0; padding-left:1rem;"><em class="text-primary">Welcome back, </em><strong><?= $user->name ?></strong></h5>
        <hr />
        <ul>
            <!--Dashboard-->
            <li title="Dashboard">
                <a href="pages_staff_dashboard.php">
                    <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                    <span class="menu_title">Dashboard</span>
                </a>

            </li>
            <?php if ($user->role == 'supervisor') : ?>
                <li title="Manage Treaty">
                    <a href="pages_supervisor_manage_treaty.php">
                        <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                        <span class="menu_title">Manage Treaty</span>
                    </a>

                </li>
            <?php endif; ?>
            <?php if ($user->role == 'staff') : ?>
                <li title="Upload Treaty">
                    <a href="pages_staff_new_treaty.php">
                        <span class="menu_icon"><i class="material-icons">&#xE2C3;</i></span>
                        <span class="menu_title">Upload Treaty</span>
                    </a>
                </li>
                <li title="Manage Treaty">
                    <a href="pages_staff_manage_treaty.php">
                        <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                        <span class="menu_title">Manage Treaty</span>
                    </a>

                </li>
                <li title="Treaty Categories">
                    <a href="pages_staff_audit_treaty_categories.php">
                        <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                        <span class="menu_title">Treaty Categories</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</aside>