<?php
session_start();
$userType = isset($_SESSION['user_id']) ? 'USER' : 'ADMIN';
function profileInfo(){
    if($GLOBALS['userType']=='USER'){
        echo '
            <i class="fas fa-user-circle fa-4x profile-logo"></i>
            <div class="profile-description">
                <p class="profile-description-text">Welcome User @User</p>
                <p class="profile-online">Online <i class="fas fa-signal"></i></p>
            </div>
        ';
    }else{
        echo '
            <i class="fas fa-user-shield fa-4x"></i>
            <div class="profile-description">
                <p class="profile-description-text">Welcome Admin</p>
            </div>
        ';
    }
}


function sidebarMainButtons(){
    if($GLOBALS['userType']=='USER'){
        echo '
            <div class="button-brand">
                <a id="button-brand" href="dashboard.php"><i class="fas fa-home"></i></a>
            </div>';
    }else{
        
    }
}

function sidebarLinks(){
    if ($GLOBALS['userType']=='USER'){
        echo '
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="change-password.php" class="nav-link"><i class="fas fa-key"></i> Change Password</a>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link"><i class="fas fa-id-card"></i> Profile</a>
            </li>
            <li class="nav-item">
                <a href="get-quote.php" class="nav-link"><i class="fas fa-dollar-sign"></i> Request A Quote</a>
            </li>
            <li class="nav-item">
                <a href="create-ticket.php" class="nav-link"><i class="fas fa-ticket-alt"></i> Create Ticket</a>
            </li>
            <li class="nav-item">
                <a href="view-tickets.php" class="nav-link"><i class="fas fa-ticket-alt"></i> View Tickets</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Log Out</a>
            </li>
        ';
    }else{
        echo '
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="admin-change-password.php" class="nav-link"><i class="fas fa-key"></i> Change Password</a>
            </li>
            <li class="nav-item">
                <a href="manage-users.php" class="nav-link"><i class="fas fa-id-card"></i> Users</a>
            </li>
            <li class="nav-item">
                <a href="manage-tickets.php" class="nav-link"><i class="fas fa-dollar-sign"></i> Manage Tickets</a>
            </li>
            <li class="nav-item">
                <a href="manage-quotes.php" class="nav-link"><i class="fas fa-ticket-alt"></i> Manage Quotes</a>
            </li>
            <li class="nav-item">
                <a href="user-access-log.php" class="nav-link"><i class="fas fa-ticket-alt"></i> User Access Log</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Log Out</a>
            </li>
        ';
    }
}