 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<style>
    form i {
    margin-left: -30px;
    cursor: pointer;
}
</style>
<section class="container" style="background:">
         <div class="row mt-30">
          <div class="col-lg-6 col-md-6 col-sm-6 offset-md-3 ">
            <div class="product-card mb-30 ">
              <h3 style="background-color:;">
                <p style="text-shadow: 2px 2px 4px #000000;color: red;font-size:20px;padding-top:5px;" class="text-center">Member Login</p>
                <hr style="color:green;">
              </h3>
               <!--<form class="md-float-material form-material" action="<?php echo base_url('MemberPanel');?>" id="InputForm"  method="post">-->
               <!--     <div class = "row col-md-6 offset-md-3">-->
               <!--         <?php echo $error_msg;?>-->
               <!--     </div>-->
               <!--     <div class="row">-->
                      
               <!--       <div class="col-md-12">-->
               <!--         <div class="form-group">-->
               <!--           <div class="input-wrap">-->
               <!--             <div class="icon"><span class="fa fa-user"></span></div>-->
               <!--             <input type="text" name="user_name" class="form-control" required=""-->
               <!--                         placeholder="Your User Name">-->
               <!--           </div>-->
               <!--         </div>-->
               <!--       </div>-->
               <!--     </div>-->
               <!--      <div class="row">-->
               <!--       <div class="col-md-12">-->
               <!--         <div class="form-group">-->
               <!--           <div class="input-wrap">-->
               <!--             <div class="icon"><span class="fa fa-user"></span></div>-->
               <!--            <input type="password" name="password" id="password"  class="form-control" required=""-->
               <!--                         placeholder="Password">-->
               <!--            <i class="bi bi-eye-slash" id="togglePassword"></i>-->
               <!--           </div>-->
               <!--         </div>-->
               <!--       </div>-->

                                      
           
               <!--     </div>-->
                    
                    
                    
  

               <!--      <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-10" style="position: center;">Login</button>-->

               <!--   </form>-->
       <form method="post" action="<?php echo base_url('MemberPanel');?>">
        
        <div class="row">
            <div class = "col-md-12">
                <h5>Please, Enter Your <font color = "blue">User Name</font> and <font color ="red">Passoword</font> here</h5>
            </div>
        <div class = "col-md-12">
        
          <label for="username">Username:</label>
          <input type="text" name="user_name" id="username" placeholder = "enter your user name">
          
          <!--<div class = "row col-md-6 offset-md-3">-->
                        <?php if(isset($username_msg)){echo $username_msg;}?>
          <!--</div>-->
        
        </div>
        </div>
        <div class="row">
        <div class = "col-md-12">
        
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" placeholder = "enter your password" />
          <i class="bi bi-eye-slash" id="togglePassword"></i>
        
        <!--<div class = "row col-md-6 offset-md-3">-->
                        <?php echo $error_msg;?>
        <!--</div>-->
        
        </div>
            <br>
        </div>
        
        <button type="submit" id="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-10" >Log In</button>
         </form>
            
        <div class = "row">
              <div class = "col-md-6"  position = "center" style =" margin: auto; width: 50%;padding: 10px;" class = "text-center">
                  <a href = "<?php echo base_url('ForgetPassword');?>" style = "color:red; font-weight:bold;">Forget Password</a>|
                  <a href = "<?php echo base_url('signup');?>" style = "color:green; font-weight:bold;">Join Now</a>
              </div>
        </div>
          
      
            </div>
          </div>
          
        </div>
        
      </section>
      
      <script>
          const togglePassword = document.querySelector('#togglePassword');
          const password = document.querySelector('#password');
          
          togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('bi-eye');
            });

      </script>
