<nav class="navbar navbar-expand-lg navbar-fixed-top" style="background-color: #005350;" >
    <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img src="https://pngimage.net/wp-content/uploads/2018/06/white-menu-icon-png-8.png" width="40" height="35" class="d-inline-block-align-top" alt="Image Logo"/>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a style="color: #FFFFFF" class="navbar-brand" href="<?php echo site_url('dashboard')?>">Home</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a style="color: #FFFFFF" class="nav-link text-light" href="<?php echo site_url('booking/now') ?>"> Now Playing</a>
            </li>
            <li class="nav-item">
                <a style="color: #FFFFFF" class="nav-link text-light" href="<?php echo site_url('booking/teater') ?>">Theaters</a>
            </li>
            <li class="nav-item">
                <a style="color: #FFFFFF" class="nav-link text-light" href="<?php echo site_url('booking/soon') ?>">Coming Soon</a>
            </li>
        </ul>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <div class="navbar-form navbar-right">
            <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="btn btn-light"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
    </div>
</nav>