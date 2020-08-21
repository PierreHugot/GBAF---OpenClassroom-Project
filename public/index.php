<?php

if(empty($_GET['page']) || $_GET['page']=="accueil"){
    include("../templates/home.php");

}elseif($_GET['page']=="login"){
    include("../templates/login.php");
}
elseif($_GET['page']=="partner"){
    include("../templates/partner.php");
}
elseif($_GET['page']=="register"){
    include("../templates/register.php");
}
elseif($_GET['page']=="reset_password"){
    include("../templates/reset_password.php");
}
elseif($_GET['page']=="secret_question"){
    include("../templates/secret_question.php");
}
elseif($_GET['page']=="forgot_password"){
    include("../templates/forgot_password.php");
}
else{
    include("../templates/404.php");
}