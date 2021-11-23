<?php
if(session_status() == PHP_SESSION_ACTIVE){

}else{
    session_start();
}
$userType = isset($_SESSION['user_id']) ? 'USER' : 'ADMIN';

function dashboardItems(){
    if($GLOBALS['userType']=='USER'){
        echo '
            <div class="card text-center">
                <div class="card-header">
                    Tickets
                </div>
                <div class="card-body">
                    <p class="card-text"><i class="fas fa-ticket-alt fa-8x"></i></p>
                    <a href="view-tickets.php" class="btn btn-primary">View Tickets</a>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    Quotes
                </div>
                <div class="card-body">
                    <p class="card-text"><i class="fas fa-dollar-sign fa-8x"></i></p>
                    <a href="get-quote.php" class="btn btn-primary">Get Quote</a>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    Profile
                </div>
                <div class="card-body">
                    <p class="card-text"><i class="fas fa-user-circle fa-8x"></i></p>
                    <a href="profile.php" class="btn btn-primary">My Profile</a>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    Create
                </div>
                <div class="card-body">
                    <p class="card-text"><i class="fas fa-plus-circle fa-8x"></i></p>
                    <a href="create-ticket.php" class="btn btn-primary">Create</a>
                </div>
            </div>
        ';
    }else{

        echo '
            <div class="card text-center">
                <div class="card-header">
                    Overal Visitors
                </div>
                <div class="card-body">
                    <p class="card-text"><i class="fas fa-ticket-alt fa-8x"></i></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Overall Visitors: 5</li>
                        <li class="list-group-item">Today: 0</li>
                    </ul>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    Registered Users
                </div>
                <div class="card-body">
                    <p class="card-text"><i class="fas fa-dollar-sign fa-8x"></i></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Registered Users: 2</li>
                        <li class="list-group-item">Today: 0</li>
                    </ul>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    <a style="text-decoration: none;" href="manage-quotes.php" class="text-dark">Quote Requests</a>
                </div>
                <div class="card-body">
                    <p class="card-text"><i class="fas fa-user-circle fa-8x"></i></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Overall Quotes: 1</li>
                        <li class="list-group-item">New Quotes: 0</li>
                        <li class="list-group-item">In Progress: 0</li>
                    </ul>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    <a style="text-decoration: none;" href="manage-tickets.php" class="text-dark">Overall Tickets</a>
                </div>
                <div class="card-body">
                    <p class="card-text"><i class="fas fa-plus-circle fa-8x"></i></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">All Tickets: 1</li>
                        <li class="list-group-item">Pending Tickets: 0</li>
                    </ul>
                </div>
            </div>
        ';

    }
}