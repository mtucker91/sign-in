function loadingBar() {
    var elem = document.getElementById("bar-foreground");   
    var width = 0;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
            location.replace('https://mtdesigns.netau.net/test/sign-in/home.php');
        }
        else {
            width++; 
            elem.style.width = width + '%'; 
            document.getElementById("percenttxt").innerHTML = width * 1  + '%';
        }
    }
}

function showLoadingBar() {
    $('#loginForm').fadeOut(1000, function(){
        $('#lbholder').fadeIn(500,function(){
            loadingBar();
        });
    });
    
}



$(function() {
$('#login').click(function(e){
    event.preventDefault();

        // get values from FORM
        var username = $("input#username").val();
        var password = $("input#password").val();
        if ( $("input#ckb1").prop( "checked" ) ){
            var rememberme = 1;
        } else {
            var rememberme = 0;
        }
        
        //var rememberme = $("input#remember-me").val();

        $.ajax({
            //when ready to use this, include "model/" within the url area
            url: "model/authenticate.php",
            type: "POST",
            data: {
                username: username,
                password: password,
                rememberme: rememberme
            },
            //cache: false,
            //async: false,
            success: function(msg) {
                
                if(msg == "success"){
                    //showLoadingBar().done(function(){console.log('showLoadingBar function completed');});
                    showLoadingBar();
                    //loadingBar().done(function(){console.log('loadingBar function completed');});
                    //location.replace('https://mtdesigns.netau.net/test/sign-in/home.php');
                    //alert("after the relocation");
                    //showLoadingBar();
                }
                else{
                    // Fail message
                    $('#errmsg').html("<div class='alert alert-danger'>");
                    $('#errmsg > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#errmsg > .alert-danger').append("<strong>Error!</strong> " + msg + ". ");
                    $('#errmsg > .alert-danger').append('</div>');
                    //clear all fields
                    $('#password').val('');
                    $('#password').focus();
                }
            },
            error: function(msg) {
                

            }
        })
    })
});
