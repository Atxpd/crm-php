<?php require_once('header.php') ?>
<?php require_once('includes/getQuote.php') ?>
<style>
    .input-group-text {
        width: 130px;
    }

    .col-6 .d-flex {
        margin-top: 0px;
    }

    .services {
        justify-content: space-around;
    }
</style>
<div class="mx-5 pb-5">
    <h1>Request A Quote</h1>
    <small>Please click below mention services of your interest to receive quotation for the same:</small>
    <form action="" method="post">
        <div style="display: <?php ($resultString == '0') ? printf('') : printf('none') ?>" class="alert alert-danger">Failed to Add Quote</div>
        <div style="display: <?php ($resultString == '1') ? printf('') : printf('none') ?>" class="alert alert-success">Quote Added Successfully</div>

        <div class="row mt-5">
            <div class="col-6 d-flex">
                <span class="input-group-text">Name</span>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $user->name ?>">
            </div>
            <div class="col-6 d-flex">
                <span class="input-group-text">Email</span>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $user->email ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-6 d-flex">
                <span class="input-group-text">Contact no</span>
                <input type="tel" name="contact" id="contact" class="form-control" value="<?php echo $user->contact ?>">
            </div>
            <div class="col-6 d-flex">
                <span class="input-group-text">Company</span>
                <input type="text" name="company" id="company" class="form-control">
            </div>
        </div>
        <hr>
        <div class="row services mb-3">
            Service Required:
        </div>
        <div class="row">
            <div class="col-6">
                <?php service("webDesign", "Website Design & Development") ?>
            </div>
            <div class="col-6">
                <?php service("cms", "CMS (Content Management System)") ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php service("seo", "SEO (Search Engine Optimization)") ?>
            </div>
            <div class="col-6">
                <?php service("smo", "SMO (Social Media Optimization)") ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php service("staticWeb", "Static Website Design") ?>
            </div>
            <div class="col-6">
                <?php service("dynamicWeb", "Dynamic Website Design") ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php service("flashWeb", "Flash Website Development") ?>
            </div>
            <div class="col-6">
                <?php service("domainReg", "Domain Registration") ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php service("webHosting", "Web Hosting Services") ?>
            </div>
            <div class="col-6">
                <?php service("webMaintenance", "Website Maintenance") ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php service("ecomm", "Ecommerce Development") ?>
            </div>
            <div class="col-6">
                <?php service("animation", "Walk Through Animation") ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php service("payment", "Online Payment Integration") ?>
            </div>
            <div class="col-6">
                <?php service("logo", "Logo Design") ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php service("dashboard", "Dash board Application") ?>
            </div>
            <div class="col-6">
                <?php service("openSource", "Open Source Customization") ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php service("newsLetter", "NewsLetter Design") ?>
            </div>
            <div class="col-6">
                <?php service("other", "Others") ?>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="query" class="form-label-input">Query</label>
                <textarea class="form-control" name="query" id="query" rows="3"></textarea>
            </div>
        </div>

        <div class="row mt-2">
            <input type="submit" value="Submit" class="btn btn-primary col-12">
        </div>
    </form>
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
</script>


<?php require_once('footer.php') ?>