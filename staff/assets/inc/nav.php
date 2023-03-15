<?php
/*
    *Load naviagation partial with logged in staff session
    */
check_login();
if (isset($_SESSION['id'])) {
    // Get the user's ID and other details from the session
    $user_id = $_SESSION['id'];
    $result = "SELECT * FROM tbl_staff WHERE id = ?";
    $stmt = $mysqli->prepare($result);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_object();
    $stmt->close();
}

$id = $_SESSION['id'];
$ret = "SELECT * FROM  tbl_staff  WHERE id = ? ";
$stmt = $mysqli->prepare($ret);
$stmt->bind_param('i', $id);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($row = $res->fetch_object()) {
    //set automatically logged in user default image if they have not updated their pics
    if ($row->pic == '') {
        $profile_picture = "
                <img src='../sudo/assets/profile_img/user_icon.png' class='md-user-image' alt='User Image'>
            ";
    } else {
        $profile_picture = "<img src='../sudo/assets/profile_img/$row->pic' class='md-user-image' alt='User Image'>
            ";
    }

    //Implementation Of Messages and Notifications

    /*
        Notifications Counter
    */
    $result = "SELECT count(*) FROM il_notifications "; //get the number of notifications for logged in user
    $stmt = $mysqli->prepare($result);
    $stmt->execute();
    $stmt->bind_result($notifications_cnt);
    $stmt->fetch();
    $stmt->close();

    //total messanges and notifications
    $total_alerts =  $notifications_cnt;
?>

    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">

                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>

                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">fullscreen</i></a></li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge"><?php echo $total_alerts; ?></span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge">
                                <div class="md-card-content">
                                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">
                                        <li class="uk-width-2-2"><a href="#" class="js-uk-prevent uk-text-small">Alerts (<?php echo $notifications_cnt; ?>)</a></li>
                                    </ul>
                                    <ul id="header_alerts" class="uk-switcher uk-margin">


                                        <li>
                                            <ul class="md-list md-list-addon">
                                                <?php
                                                //display all notifications
                                                $ret = "SELECT * FROM  il_notifications ";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute(); //ok
                                                $res = $stmt->get_result();
                                                while ($row = $res->fetch_object()) {
                                                    //Trim timestamp to DD:MM:YYYY - h:m
                                                    $time = $row->created_at;


                                                ?>

                                                    <li>
                                                        <div class="md-list-addon-element">
                                                            <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><?php echo date("d-M-Y h:m:s", strtotime($time)); ?></span>
                                                            <span class="uk-text-small uk-text-muted "><?php echo $row->content; ?></span>
                                                        </div>
                                                    </li>

                                                <?php } ?>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image">
                                <?php echo $profile_picture; ?>
                            </a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="pages_staff_profile.php">My profile</a></li>
                                    <li><a href="pages_staff_settings.php">Settings</a></li>
                                    <li><a href="pages_staff_logout.php">Log Out</a></li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>

<?php } ?>