<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Zap Hotel - Client</title>
        
        <script type="text/javascript">
            var andSoItBegins = (new Date()).getTime();
        </script>

        <link rel="stylesheet" href="http://zaphotel.net/clientutils/common.css">

        <script src="http://zaphotel.net/clientutils/libs2.js"></script>
        <script src="http://zaphotel.net/clientutils/visual.js"></script>
        <script src="http://zaphotel.net/clientutils/libs.js"></script>
        <script src="http://zaphotel.net/clientutils/common.js"></script>
        
        <script type="text/javascript">
            document.habboLoggedIn = %habboLoggedIn%;
            var habboName = "%habboName%";
            var habboId = 0;
            var facebookUser = false;
            var habboReqPath = "";
            var habboStaticFilePath = "http://%cdn%/%hotel%/%web_build%/web-gallery";
            var habboImagerUrl = "http://www.habbo.nl/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "%www%/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "uberClientWnd";
                HabboClient.maximizeWindow = true;
            }
        </script>
        
        <noscript>
            <meta http-equiv="refresh" content="0;url=/client/nojs" />
        </noscript>
        
        <meta http-equiv="Pragma" content="no-cache, no-store" />
        <meta http-equiv="Expires" content="-1" />
        <meta http-equiv="Cache-Control" content="no-cache, no-store" />
        
        <link rel="stylesheet" href="http://zaphotel.net/clientutils/habboflashclient.css">
        <script src="http://zaphotel.net/clientutils/habboflashclient.js"></script>
        <script src="http://zaphotel.net/clientutils/identity.js"></script>
        
        <script type="text/javascript">
            FlashExternalInterface.loginLogEnabled = true;
            
            FlashExternalInterface.logLoginStep("web.view.start");
            
            if (top == self) {
                FlashHabboClient.cacheCheck();
            }
            var flashvars = {
                    "client.allow.cross.domain" : "0", 
                    "client.notify.cross.domain" : "1", 
                    "connection.info.host" : "64.31.13.30", 
                    "connection.info.port" : "8932", 
                    "site.url" : "http://zaphotel.net", 
                    "url.prefix" : "http://zaphotel.net", 
                    "client.reload.url" : "http://zaphotel.net/login_popup", 
                    "client.fatal.error.url" : "http://zaphotel.net/flash_client_error", 
                    "client.connection.failed.url" : "http://zaphotel.net/client", 
                    "external.variables.txt" : "http://zaphotel.net/lolcats/bflyswfs/external_variables.txt", 
                    "external.texts.txt" : "http://zaphotel.net/externals.php?id=external_flash_texts", 
                    "external.override.texts.txt" : "", 
                    "external.override.variables.txt" : "", 
                    "productdata.load.url" : "http://zaphotel.net/lolcats/bflyswfs/productdata.txt", 
                    "furnidata.load.url" : "http://zaphotel.net/lolcats/bflyswfs/furnidata.txt", 
                    "sso.ticket" : "%sso_ticket%", 
                    "processlog.enabled" : "1", 
                    "account_id" : "19927505", 
                    "client.starting" : "Please wait! Zap is Loading.", 
                    "flash.client.url" : "http://zaphotel.net/client.php", 
                    "user.hash" : "199275052dbf5f89adb0a643bf16b0ea1cd646db", 
                    "facebook.user" : "1", 
                    "has.identity" : "1", 
                    "flash.client.origin" : "popup" 
            };
            var params = {
                "base" : "http://zaphotel.net/lolcats/bflyswfs/",
                "allowScriptAccess" : "always",
                "menu" : "false"                
            };

                if (!(HabbletLoader.needsFlashKbWorkaround())) {
                    params["wmode"] = "opaque";
                }

            FlashExternalInterface.signoutUrl = "https://zaphotel.net/account/logout";

            var clientUrl = "http://zaphotel.net/lolcats/bflyswfs/Working.swf";
            swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "http://%cdn%/%hotel%/%web_build%/web-gallery/flash/expressInstall.swf", flashvars, params, null, FlashExternalInterface.embedSwfCallback);

            window.onbeforeunload = unloading;
            function unloading() {
                var clientObject;
                if (navigator.appName.indexOf("Microsoft") != -1) {
                    clientObject = window["flash-container"];
                } else {
                    clientObject = document["flash-container"];
                }
                try {
                    clientObject.unloading();
                } catch (e) {}
            }
            window.onresize = function() {
                HabboClient.storeWindowSize();
            }.debounce(0.5);
        </script>
    </head>
    
    <body id="client" class="flashclient">
        <div id="overlay"></div>
        
        <div id="client-ui" >
            <div id="flash-wrapper">
                <div id="flash-container">
                    <script type="text/javascript">
                        $('content').show();
                    </script>
                    
                    <noscript>
                        <div style="width: 400px; margin: 20px auto 0 auto; text-align: center">
                            <p>If you are not automatically redirected, please <a href="/client/nojs">click here</a></p>
                        </div>
                    </noscript>
                </div>
            </div>
            
            <div id="content" class="client-content"></div>            
        </div>
        
        <script type="text/javascript">
            RightClick.init("flash-wrapper", "flash-container");
            if (window.opener && window.opener != window && window.opener.location.href == "/") {
                window.opener.location.replace("/me");
            }
            $(document.body).addClassName("js");
            HabboClient.startPingListener();
            Pinger.start(true);
            HabboClient.resizeToFitScreenIfNeeded();
        </script>
        
        <script type="text/javascript">
            HabboView.run();
        </script>
    </body>
</html>