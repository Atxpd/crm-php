<?php require_once('header.php') ?>
<?php require_once('includes/changePassword.php') ?>
<div class="">
    <h1>Change Password</h1>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="" method="post">
            <div style="display: <?php ($resultString=='0') ? printf('') : printf('none') ?>" class="alert alert-danger">Failed to Update Password</div>
            <div style="display: <?php ($resultString=='1') ? printf('') : printf('none') ?>" class="alert alert-success">Password Updated Correctly</div>

            <div class="form-group">
                    <label for="current">Current Password</label>
                    <input type="password" name="current" id="current" class="form-control" autocomplete="false">
                </div>
                <div class="form-group" id="newPassword">
                    <label for="new">New Password</label>
                    <input type="password" name="new" id="new" class="form-control" autocomplete="false" onchange="checkPasswords()">
                </div>
                <div class="form-group">
                    <label for="confirm">Confirm Password</label>
                    <input type="password" name="confirm" id="confirm" class="form-control" autocomplete="false" onchange="checkPasswords()">
                </div>
                <div class="form-group mt-3">
                    <input type="submit" value="Change Password" class="btn btn-primary col-12">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    let alerts = document.querySelectorAll('.alert');
    for (k=0;k<alerts.length;k++){
        if(alerts[k].style.display ==''){
           let myAlert = alerts[k];
            setTimeout(()=>{
                myAlert.style.display = 'none'
            },1500);
        }
    }
    let newPassword = document.getElementById('new');
    let confirmPassword = document.getElementById('confirm');
    let frmGroup=document.getElementById('newPassword');
    let alert =  document.createElement('span');
    alert.style.color = 'red';
    alert.innerHTML = 'Passwords must match'

    function checkPasswords(){
        if(newPassword.value!=confirmPassword.value && !frmGroup.contains(alert)){
            frmGroup.appendChild(alert);
        }else{
            frmGroup.removeChild(alert);
        }
    }
</script>


<?php require_once('footer.php') ?>