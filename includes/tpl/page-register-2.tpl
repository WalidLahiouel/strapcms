<body id="client" class="background-accountdetails-<?php echo $_SESSION['jjp']['register'][1]['gender']; ?>"> 
<div id="overlay"></div> 
<img src="http://images.habbo.com/habboweb/%web_build%/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" /> 

<div id="stepnumbers">

    <div class="stepdone">Birthdate &amp; Gender</div>

    <div class="step2focus">Account details</div>

    <div class="step3">Security Check</div>

    <div class="stephabbo"></div>

</div>



<div id="main-container">


		<div id="error-placeholder">%errors%</div>


    <div id="title">

        Account details

    </div>



    <form method="post" action="%www%/quickregister/email_password_submit" id="quickregister-form">

      <div id="inner-container">

        <div class="inner-content bottom-border">

            <div id="email-notice" class="field-content"><span style="font-size:14px; color: #22b9f1;">You <b>need your username</b> and password to log in<b></span></div>

						<div class="field-content clearfix">

                <div class="left">

                    <div class="label" class="registration-text">Username</div>

                    <input type="text" id="email-address" name="bean.name" value="" />

                </div>

                <div class="right">

                    <div class="help">Use this name throughout the hotel!</div>

                </div>

            </div>

            <div class="field-content clearfix">

                <div class="left">

                    <div class="label" class="registration-text">Email Address</div>

                    <input type="text" id="email-address" name="bean.email" value="" />

                </div>

                <div class="right">

                    <div class="help">You need this address later need to login. So use a real address.</div>

                </div>

            </div>



            <div class="field-content clearfix">

                <div class="left">

                    <div class="field">

                        <div class="label" class="registration-text">Password</div>

                        <input type="password" name="bean.password" id="register-password" maxlength="32" value="" />

                    </div>

                    <div class="password-field">

                        <div class="label" class="registration-text">Confirm Password</div>

                        <input type="password" name="bean.retypedPassword" id="register-password2" maxlength="32" value=""  />

                    </div>



                </div>

                <div class="right">

                    <div class="help">Your password must be more than 6 characters long and contain letters and numbers.</div>

                </div>

            </div>

        </div>



        <div class="inner-content top-margin">

			<div class="field-content checkbox ">

			  <label>

			    <input type="checkbox" name="bean.termsOfServiceSelection" id="terms" value="true" class="checkbox-field"/>

			    I accept the Terms of Service

			  </label>

			</div>            


        </div>

      </div>

    </form>





    <div id="select">

        <div class="button">

            <a id="proceed-button" href="#" class="area">Next</a>

            <span class="close"></span>

        </div>

        <a href="%www%/quickregister/cancel" id="back-link">Cancel</a>

   </div>

</div>



<script type="text/javascript">

    document.observe("dom:loaded", function() {

        Event.observe($("back-link"), "click", function() {

            Overlay.show(null,'Loading...');

        });

        Event.observe($("proceed-button"), "click", function() {

            Overlay.show(null,'Loading...');            

            $("quickregister-form").submit();

        });

            $("email-address").focus();

    });

</script>  
 
<script type="text/javascript"> 
    HabboView.run();
</script> 
 
</body> 
</html>