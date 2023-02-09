const validateEmail = (email) => {
    usuario = email.value.substring(0, email.value.indexOf("@"));
    dominio = email.value.substring(email.value.indexOf("@")+ 1, email.value.length);

    if ((usuario.length >=1) &&
        (dominio.length >=3) &&
        (usuario.search("@")==-1) &&
        (dominio.search("@")==-1) &&
        (usuario.search(" ")==-1) &&
        (dominio.search(" ")==-1) &&
        (dominio.search(".")!=-1) &&
        (dominio.indexOf(".") >=1)&&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
        //document.getElementById("msgemail").innerHTML="E-mail válido";
        //alert("E-mail valido");
        return true;
    }
    else{
        return false;
        //document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
    }
}

const validatePassword = (password) => {
    if(password.value.length < 4){
        return false;
    }else{
        return true;
    }
}
