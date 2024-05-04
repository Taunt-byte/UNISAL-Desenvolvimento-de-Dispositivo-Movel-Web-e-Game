function validaFormUsuario() {

    var msgErr = document.getElementById("erros_form");

    try {
        var nome = document.forms["formUsuario"]["nome"].value;
        if (nome == null || nome == "") {
            throw "Campo nome obrigatório!";
        }

        var email = document.forms["formUsuario"]["email"].value;
        var arroba = email.indexOf("@");
        var ponto = email.indexOf(".");

        if (arroba < 1 || ponto < 1) {
            throw "Campo e-mail inválido!";
        }

        var telefone = document.forms["formUsuario"]["telefone"].value;
        if (telefone == null || telefone == "") {
            throw "Campo telefone obrigatório!";
        }

        var usuario = document.forms["formUsuario"]["usuario"].value;
        if (usuario == null || usuario == "") {
            throw "Campo usuário obrigatório!";
        }

        var senha = document.forms["formUsuario"]["senha"].value;
        if (senha == null || senha == "") {
            throw "Campo senha obrigatório!";
        }        
        
        return true;
    }
    catch (err) {
        msgErr.innerHTML = "Erro: " + err;
        return false;
    }

}


function confirmaExcluir() {
    var conf = confirm("Confirma a exclusão do registro?");
    if (conf)
        return true;
    else
        return false;
}





