var hostname = window.location.hostname;
var protocol = window.location.protocol;
var port = window.location.port;
var pathname = window.location.pathname;

var url_base = protocol + '//' + hostname + ':' + port;

var login_path = '/dri/api/api-auth/login/?next=';
var logout_path = '/dri/api/api-auth/logout/?next=';




getUser();

$( "#accordion" ).accordion({
  active: 0,
  heightStyle: "fill"
});

function getUser() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var dadosJSON = JSON.parse(this.responseText);
            setUsername(dadosJSON.username)
        } else if (this.readyState == 4 && this.status != 200) {
            console.log(this.readyState, this.status);
            setUsername();
        }
    };
    xhttp.open("GET", "/dri/api/logged/get_logged/?format=json", true);
    xhttp.send();
}

function setUsername(username) {
    var loginLink = document.getElementsByClassName('login-link')[0];
    var loginLinkText = document.getElementsByClassName('login-link-text')[0];
    var divLoginMenu = document.getElementsByClassName('login-menu')[0];
    if (username) {
        var userLogin = document.createElement('span');
        userLogin.innerHTML = username;
        userLogin.classList.add('user-login');
        divLoginMenu.insertBefore(userLogin, loginLink);
        loginLinkText.innerHTML = 'Logout';
        loginLink.getAttributeNode('href').value = url_base + logout_path + pathname;
    } else {
        console.log('Else do deslogado');
        var userLogin;
        userLogin = document.getElementsByClassName('user-login')[0];
        if (userLogin) {
            userLogin.remove();
        }
        loginLinkText.innerHTML = 'Login';
        loginLink.getAttributeNode('href').value = url_base + login_path + pathname;
    }

}

function showVideo(evt) {
    var item = evt.currentTarget;
    var ytbID = item.getAttribute("data-idytb");
    var embed_url = "https://youtube.com/embed/" + ytbID;
    var ytb_frame = document.getElementById("ytb-frame");
    var video_title = document.getElementById("video-title");
    ytb_frame.className = "active";
    ytb_frame.setAttribute("src", embed_url);
    video_title.innerHTML = item.innerHTML;
}
