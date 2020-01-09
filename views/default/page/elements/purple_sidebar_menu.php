<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
$site_name = $site->name;
$user = elgg_get_logged_in_user_entity();
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                    <?php if (elgg_is_logged_in())
                                         {
                                             ?>
                <div class="nav-profile-image">
                  <img src="<?php echo $user->getIconURL('small');?>" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                  
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"> <?php echo $user->name?></span>
                  <span class="text-secondary text-small"> <?php echo $user->email?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                <?php }
                                             ?>
              </a>
            </li>
            
            
            <?php
                                 echo elgg_view_menu('site');
                                 
                                 ?> 
          </ul>
        </nav>