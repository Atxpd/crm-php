<?php require_once('header.php') ?>
<?php require_once('includes/profile.php') ?>
<div>
    <div class="row ms-3">
        <div class="col-4">
            <h1>My Profile</h1>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col-6">
            <div style="display: <?php $resultString == '1' ? printf('') : printf('none') ?>;"      class="alert alert-success">Profile Updated</div>
            <div style="display: <?php $resultString == '0' ? printf('') : printf('none') ?>;" class="alert alert-danger">Failed to Update Profile</div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $user->name ?>">
                </div>
                <div class="form-group">
                    <label for="email">Primary Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $user->email ?>">
                </div>
                <div class="form-group">
                    <label for="altEmail">Alternate Email</label>
                    <input type="email" name="altEmail" id="altEmail" class="form-control" value="<?php echo $user->altEmail ?>">
                </div>
                <div class="form-group">
                    <label for="contact">Contact no</label>
                    <input type="tel" name="contact" id="contact" class="form-control" value="<?php echo $user->contact ?>">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                        <option <?php ($user->gender=='male') ? printf('selected') : printf('') ?> value="male">Male</option>
                        <option <?php ($user->gender=='female') ? printf('selected') : printf('') ?> value="female">Female</option>
                        <option <?php ($user->gender=='other') ? printf('selected') : printf('') ?> value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" id="addresss" rows="5"><?php echo $user->address ?></textarea>
                </div>
                <div class="form-group mt-2">
                    <input type="submit" value="Update" class="btn btn-primary col-12">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    let alerts = document.querySelectorAll(".alert");
    console.log(alerts);
    for (k=0;k<alerts.length;k++){
        myAlert = alerts[k];
        console.log(myAlert);
        console.log(myAlert.style.display)
        if(myAlert.style.display==''){
            setTimeout(()=>{myAlert.style.display='none'},1500);
        }
    }
</script>


<?php require_once('footer.php') ?>