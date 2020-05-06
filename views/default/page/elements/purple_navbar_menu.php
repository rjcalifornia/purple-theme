<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$user = elgg_get_logged_in_user_entity();
$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
$site_name = $site->name;
?>
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="<?php echo $site_url?>"><img src="<?php echo $site_url?>mod/purple-theme/vendors/assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="<?php echo $site_url?>"><img src="<?php echo $site_url?>mod/purple-theme/vendors/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="<?php echo $site_url?>search" method="get">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text"  name="q" class="form-control bg-transparent border-0" placeholder="<?php echo elgg_echo('purple:search'); ?>">
                 <input type="hidden" name="search_type" value="all">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
               <?php if (elgg_is_logged_in())
                                         {
                                             ?>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?php echo $user->getIconURL('small');?>" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"> <?php echo $user->username?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                  
                <a class="dropdown-item" href="<?php echo $site_url ?>profile/<?php echo $user->username;?>/edit/">
                  <i class="mdi mdi-account-box-outline mr-2 text-success"></i> 
                      <?php echo elgg_echo('purple:edit_profile'); ?> 
                </a>
                  
                  
                  <a class="dropdown-item" href="<?php echo $site_url ?>settings/user/<?php echo $user->username;?>/">
                  <i class="mdi mdi-blur mr-2 text-success"></i> 
                  <?php echo elgg_echo('purple:settings'); ?>
                  </a>
                  
                  <a class="dropdown-item" href="<?php echo $site_url ?>profile/<?php echo $user->username;?>/">
                  <i class="mdi mdi-account-circle mr-2 text-success"></i> 
                  <?php echo elgg_echo('purple:profile'); ?>
                  </a>
                   
                  
                <div class="dropdown-divider"></div>
                <?php


if (elgg_is_admin_logged_in())
{   
    ?>
                
                 <a class="dropdown-item" href="<?php echo $site_url ?>admin/">
                  <i class="mdi mdi-bulletin-board mr-2 text-primary"></i> 
                  <?php echo elgg_echo('purple:administration'); ?>
                </a>
                
                 <?php
}
?>
                
                <a class="dropdown-item" href="<?php echo $site_url ?>action/logout/">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> 
                  <?php echo elgg_echo('purple:logout'); ?>
                </a>
              </div>
            </li>
             <?php }
                                             ?>
            
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="<?php echo $site_url ?>/messages/inbox/<?php echo $user->username;?>/">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              
            </li>
            <?php if (elgg_is_logged_in())
                                         {
                                             ?>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="<?php echo $site_url ?>action/logout/">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
             <?php }
                                            else
                                            { 
                                                ?>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="<?php echo $site_url ?>login/">
                <i class="mdi mdi-login"></i>
              </a>
            </li>
            
            
             <?php }
                                             ?>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>