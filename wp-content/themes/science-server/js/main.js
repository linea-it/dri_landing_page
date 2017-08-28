$(document).ready(function(){
    $('.user-login').text(get_login_dri());
});

function get_login_dri() {
    $.ajax({
        url: "http://desportal.cosmology.illinois.edu:8080/dri/api/logged/get_logged/?format=json",
        type: "GET",
        beforeSend: function(xhr){
            xhr.setRequestHeader('X-CSRFToken', get_cookie('csrftoken'));
        },
        success: function(data) { return data['username']; }
    });
}

function get_cookie(cname) {
    var name = cname + '=';
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            console.log(c);
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                console.log('pegou');
                return c.substring(name.length, c.length);
            }
        }
        return '';
}
