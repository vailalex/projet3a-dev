$( "#erreur_login" )
        .css({

            "display":"none",
    
    })


$( "#erreur_confirmation" )
        .css({

            "display":"none",
    
    })


function login(){

$.post("modele/login.php", { 
							
                            mdp_login : $("#mdp_login").val(),
                            mail_login : $("#mail_login").val()
                            } ,
    function(data){


if (data=="erreur"){


    $("#erreur_login").slideDown("slow");
}

else window.location.replace("accueil.php");
}




);



}



$("#bouton_login").click(function( event ) {

if($("#mail_login").val()==""){

$("#erreur_login").slideDown("slow");


return false;
}

else if($("#mdp_login").val()==""){

$("#erreur_login").slideDown("slow");


return false;
}



else  login();

    return false;


});
