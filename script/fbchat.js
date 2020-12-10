<!-- Load Facebook SDK for JavaScript -->
<
div id = "fb-root" > < /div> <
script >
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v9.0'
        });
    };

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/da_DK/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk')); < /script>

<!-- Your Chat Plugin code -->
<
div class = "fb-customerchat"
attribution = install_email
page_id = "488623471159931"
theme_color = "#7646ff"
logged_in_greeting = "Hei halløj, hvad ka' vi hjælpe med?"
logged_out_greeting = "Hei halløj, hvad ka' vi hjælpe med?" >
    <
    /div>
