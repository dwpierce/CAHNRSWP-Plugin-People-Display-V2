<div class="wsuprofileTableRowData <?php echo $class; ?>"> 
   	<div class="wsuprofileTableCell photo"><a class="profile-link" data-id="<?php echo $profile->profile_ID;?>" data-name="<?php echo $profile->profile_title->rendered;?>" href="#"><img src="<?php  echo $profile->profile_photo == '' ?  plugins_url('CAHNRSWP-Plugin-People-Display/images/placeholder.png') : $profile->profile_photo  ?>" /></a></div>  	
   	<div class="wsuprofileTableCell name"><a class="profile-link" data-id="<?php echo $profile->profile_ID;?>" data-name="<?php echo $profile->profile_title->rendered;?> href="#"><?php  echo $profile->profile_last_name; ?>, <?php  echo $profile->profile_first_name; ?></a>
    <div class="phone-email"><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a><p />
   <p><?php echo $phone;?></p>
   <a class="profile-link" data-id="<?php echo $profile->profile_ID;?>" data-name="<?php echo $profile->profile_title->rendered;?> href="#">View Full Profile</a>
   	</div>
    </div>
   <div class="wsuprofileTableCell title"><?php echo $title; ?></div> 
    <div class="wsuprofileTableCell department"><?php echo $profile->tag ?></div> 
    <div class="wsuprofileTableCell work-group"><?php  ?></div>
</div>
