<body id="client" class="background-captcha"> 
<div id="overlay"></div> 
<img src="http://images.habbo.com/habboweb/%web_build%/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" /> 

<div id="stepnumbers">

    <div class="stepdone">Birthdate &amp; Gender</div>

    <div class="stepdone">Account details</div>

    <div class="step3focus">Security Check</div>

    <div class="stephabbo"></div>

</div>



<div id="main-container">

		<div id="error-placeholder">%errors%</div>


    <div id="bubble-container" class="cbb">

        <div id="bubble-content" class="rounded">

             <div id="bubble-title">

                Security Check

            </div>

            <div id="captcha-image-container" style="height: 150px;">

							<form id="captcha-form" method="post" action="%www%/quickregister/captcha_submit" onsubmit="Overlay.show(null,'Loading...');">
							
                %recaptcha_html%

            </div>    

        </div>

    </div>



    <div class="delimiter_smooth">

        <div class="flat">&nbsp;</div>

        <div class="arrow">&nbsp;</div>

        <div class="flat">&nbsp;</div>

    </div>



    <div id="inner-container">

       <div id="recaptcha-input-title">Please type the 2 words in the box above</div>

    </div>



    <div id="select">

        <a href="%www%/quickregister/cancel" id="back-link">Cancel</a>

        <div class="button">

            <a id="proceed-button" href="#" class="area">Finish!</a>

            <span class="close"></span>

        </div>

   </div>



    <script type="text/javascript">



        document.observe("dom:loaded", function() {

          if($("proceed-button")) {

                $("proceed-button").observe("click", function(e) {

                    Event.stop(e);

                    Overlay.show(null,'Loading...');

                    $("captcha-form").submit();

                });



                Event.observe($("back-link"), "click", function() {

                    Overlay.show(null,'Loading...');

                });                  

            }

            

            $("recaptcha_response_field").focus();

        });

    </script>




</div> 
 
<script type="text/javascript"> 
    HabboView.run();
</script> 
 
</body> 
</html>