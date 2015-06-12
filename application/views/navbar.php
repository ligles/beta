<?php
/**
 * Author: FZAB
 * 
 */?>

<div class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">CRM</a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach($menuItems as $menuItem): ?>
                    <li class="<?php if($activeMenu == $menuItem) echo 'active';?>">
                    <a href="<?php echo site_url($menuItem);?>"><?php echo $menuItem;?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!$this->aauth->is_loggedin()) : ?>
                    <li><a href="<?php echo base_url() . "Login/logout"; ?>"><span class="glyphicon glyphicon-off"></span></a></li>
                <?php endif; ?>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>