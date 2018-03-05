<?php 
	if(!isset($baomat)){exit();}
?>
<div class="body-login">
  <div class="container">
    <div class="login-form">
      <h3> Admin</h3>
        <fieldset>
          <form method="post" >
            <input type="text" name="taikhoan" placeholder="Tài Khoản"> 
            <input type="password" name="matkhau"> 
            <input type="hidden" name="dangnhapquantri" value="dangnhapquantri" >
            <div class="button-login">
            <input type="submit" value="Login" >
            </div>
          </form>
        </fieldset>
     </div> 
  </div>
</div>
	