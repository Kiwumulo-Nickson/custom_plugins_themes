<?php
/* Template Name: ClientsTemplate */


get_header();
?>

<p class="register-message" style="display:none"></p>
    <form action="#" method="POST" name="register-form" class="register-form">
      <fieldset> 
          <label><i class="fa fa-file-text-o"></i> Register Form</label>
          <input type="text"  name="new_user_name" placeholder="Username" id="new-username">
          <input type="email"  name="new_user_email" placeholder="Email address" id="new-useremail">
          <input type="password"  name="new_user_password" placeholder="Password" id="new-userpassword">
          <input type="password"  name="re-pwd" placeholder="Re-enter Password" id="re-pwd">
          <input type="button"  class="button" id="register-button" value="Register" >
      </fieldset>
    </form>

<?php get_footer(); ?>