const login = (data) =>{
    if(validateEmail(document.getElementById('email-login')) && validatePassword(document.getElementById('password')) === true){
        var email = document.getElementById('email-login').value;
        var password = document.getElementById('password').value;

        var input = new Object;
        input.email = email;
        input.password = password;

        var options = {
            method: 'POST',
            body: JSON.stringify(input),
            headers: {
                "Content-type": "application/json",
                "Accept": "application/json"
            }

        };
        const url = `http://localhost:8000/api/user/login`;

        let response = fetch(url, options)
            .then((res) => {
                res.json()
                .then((res)=>{
                    if(res.authenticated === true){
                        window.location.href = `http://localhost:9000/auth/login?id=${res.user_id}`
                    }else{
                        modalError('login');
                    }
                });
            })
            .catch((error) => {
                modalError("register");
            });
        }else{
            console.log('email ou senha incorreto');
        }
}
const cpfMask = (cpf) => {
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
}

const setTable = (data) => {
    for(let i = 0; i < data.length; i++){
        var tr = `<tr><td class="text-left">${data[i].id}</td><td class="text-left">${data[i].nome}</td><td class="text-left"><button class="button-edit${i} button-table" onclick="modalData('update',${data[i].id})"><img src="img/icons/pencil.png" alt="Envelope icon" width="18px" height="18px"></button></td><td class="text-left"><button class="button-edit${i} button-table" onclick="delete_person(${data[i].id})"><img src="img/icons/trash-can.png" alt="Envelope icon" width="18px" height="18px"></button></td></tr>`
        $(".table-hover").append(tr);
    }
    //document.querySelector('.table-hover').innerHTML = tr;
    //document.querySelector(`.trash${0}`).src='{{ asset("/img/icons/pencil.png") }}'
}
const register_person = () => {
    showLoading();
    var nome = document.getElementById('nome-cliente').value;

    var input = new Object;
    input.nome = nome;

    var options = {
        method: 'POST',
        body: JSON.stringify(input),
        headers: {
            "Content-type": "application/json",
            "Accept": "application/json"
        }

    };
    const url = `http://localhost:8000/api/person`;

    let response = fetch(url, options)
        .then((res) => {
            res.json()
            .then((res)=>{
                modalSucess("register");
                hideLoading()
            });
        })
        .catch((error) => {
            modalError("register");
            hideLoading();
        });
}
const update_person = (id) => {


    showLoading();


    var input = new Object;
    input.nome = document.querySelector("#nome-cliente").value;

    var options = {
        method: 'PUT',
        body: JSON.stringify(input),
        headers: {
            "Content-type": "application/json",
            "Accept": "application/json"
        }

    };
    const url = `http://localhost:8000/api/person/${id}`;

    let response = fetch(url, options)
        .then((res) => {
            res.json()
            .then((res)=>{
                modalSucess("update");
                hideLoading();
            });
        })
        .catch((error) => {
            modalError("update");
            hideLoading();
        });
}
const delete_person = (id) => {
showLoading();

    var options = {
        method: 'DELETE',
        headers: {
            "Content-type": "application/json",
            "Accept": "application/json"
        }

    };
    const url = `http://localhost:8000/api/person/${id}`;

    let response = fetch(url, options)
        .then((res) => {
            res.json()
            .then((res)=>{
                modalSucess("delete");
                hideLoading();
            });
        })
        .catch((error) => {
            modalError("delete");
            hideLoading();
        });
}
const get_all_person = () => {
showLoading();
    var options = {
        method: 'GET',
        headers: {
            "Content-type": "application/json",
            "Accept": "application/json"
        }

    };
    const url = `http://localhost:8000/api/person`;

    let response = fetch(url, options)
        .then((res) => {
            res.json()
            .then((res)=>{
                setTable(res);
                hideLoading();
            });
        })
        .catch((error) => {
            modalError("register");
            hideLoading();
        });
}

const hideModal = () => {
    window.location.reload();
    var modalContainer = document.querySelector('.modal-container');
    modalContainer.style.display = "none";
}

const showLoading = () =>{
    $(".modal-container-loading").css("display", "flex");
}
const hideLoading = () =>{
    $(".modal-container-loading").css("display", "none");
}


const modalSucess =(param) =>{
    $(".modal-container").css("display", "flex");
    $(".modal-popup").empty();
    if(param === "register"){
        $(".modal-popup").append(`<div id="message"><h2 style="padding-bottom: 50px;">Usuário cadastrado com sucesso!</h2></div><button type="button" id="button-modal" class="button-primary" style="width: 98px;" onclick="hideModal()">Ok</button>`);
    }else if(param === "update"){
        $(".modal-popup").append(`<div id="message"><h2 style="padding-bottom: 50px;">Usuário atualizado com sucesso!</h2></div><button type="button" id="button-modal" class="button-primary" style="width: 98px;" onclick="hideModal()">Ok</button>`);
    }else if(param === "delete"){
        $(".modal-popup").append(`<div id="message"><h2 style="padding-bottom: 50px;">Usuário removido!</h2></div><button type="button" id="button-modal" class="button-primary" style="width: 98px;" onclick="hideModal()">Ok</button>`);
    }
}

const modalError = (param) =>{
    $(".modal-popup").empty();
    $(".modal-container").css("display", "flex");
    if(param === "register"){
        $(".modal-popup").append(`<div id="message"><h2 style="padding-bottom: 50px;">Houve um erro ao tentar fazer o registro :(</h2></div><button type="button" id="button-modal" class="button-primary" style="width: 98px;" onclick="hideModal()">Ok</button>`);
    }else if(param === "update"){
        $(".modal-popup").append(`<div id="message"><h2 style="padding-bottom: 50px;">Houve um erro ao tentar atualizar :(</h2></div><button type="button" id="button-modal" class="button-primary" style="width: 98px;" onclick="hideModal()">Ok</button>`);
    }else if(param === "delete"){
        $(".modal-popup").append(`<div id="message"><h2 style="padding-bottom: 50px;">Houve um erro ao deletar :(</h2></div><button type="button" id="button-modal" class="button-primary" style="width: 98px;" onclick="hideModal()">Ok</button>`);
    }else if(param === "login"){
        $(".modal-popup").append(`<div id="message"><h2 style="padding-bottom: 50px;">Email ou senha incorreto(s)</h2></div><button type="button" id="button-modal" class="button-primary" style="width: 98px;" onclick="hideModal()">Ok</button>`)
    }
}

const modalData = (param, id) => {

    $(".modal-container").css("display", "flex");
    $(".modal-popup").empty();

    if(param === "register"){
        $(".modal-popup").append(`<div id="message"><h2 style="padding-bottom: 30px;">Adicionar cliente</h2></div><label for="nome-cliente">Nome:</label> <input type="text" name="nome-cliente" class="input-text" id="nome-cliente"/> <div><button onclick="register_person()" class="button-primary">Adicionar</button></div>`)
    }else if(param === "update"){
        $(".modal-popup").append(`<div id="message"><h2>Atualizar cliente</h2></div><label for="nome-cliente">Nome:</label> <input type="text" name="nome-cliente" class="input-text" id="nome-cliente"/> <div><button id="save-edit" class="button-primary" onclick="update_person(${id})">Salvar</button></div>`)

    }else{
        $(".modal-popup").append('<div id="message"><h2>Excluir cliente</h2></div><div><button>Excluir</button></div>')
    }
}

