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
                        console.log('usuário não encontrado')
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

const setTable = (data) => {
    for(let i = 0; i < data.length; i++){
        var tr = `<tr><td class="text-left">${data[i].nome}</td><td class="text-left"><button class="button-edit${i} button-table" onclick="modalData('update',${data[i].id})"><img src="img/icons/pencil.png" alt="Envelope icon" width="18px" height="18px"></button></td><td class="text-left"><button class="button-edit${i} button-table" onclick="delete_person(${data[i].id})"><img src="img/icons/trash-can.png" alt="Envelope icon" width="18px" height="18px"></button></td></tr>`
        $(".table-hover").append(tr);
    }
    //document.querySelector('.table-hover').innerHTML = tr;
    //document.querySelector(`.trash${0}`).src='{{ asset("/img/icons/pencil.png") }}'
}
const register_person = () => {
    var nome = document.getElementById('nome-cliente').value;
    var cpf = document.getElementById('cpf').value;

    var input = new Object;
    input.nome = nome;
    input.cpf = cpf;

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
            });
        })
        .catch((error) => {
            modalError("register");
        });
}
const update_person = (id) => {
    var changedField = document.querySelectorAll('.changed');

    var input = new Object;
    for(let i = 0; i < changedField.length; i++){
        input[`${changedField[i].name}`] = changedField[i].value
    }

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
            });
        })
        .catch((error) => {
            modalError("update");
        });
}
const delete_person = (id) => {


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
            });
        })
        .catch((error) => {
            modalError("delete");
        });
}
const get_all_person = () => {

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
                modalSucess("register");
                setTable(res);
            });
        })
        .catch((error) => {
            modalError("register");
        });
}

const modalSucess = (param) =>{
    if(param === "register"){
        console.log("usuário cadastrado")
    }else if(param === "update"){
        console.log("usuário editado")
    }else if(param === "delete"){
        console.log("usuário usuário removido")
    }
}

const modalError = (param) =>{
    if(param === "register"){
        console.log("houve um erro ao tentar cadastrar usuário")
    }else if(param === "update"){
        console.log("houve um erro ao tentar editar usuário")
    }else if(param === "delete"){
        console.log("houve um erro ao tentar excluir usuário")
    }
}

const modalData = (param, id) => {
    let modalContainer = document.querySelector('.modal-container');
    let modalContent = document.querySelector('.modal-popup');
    let modalMessage = document.querySelector('#message');
    if(param === "register"){
        modalContainer.style.display = "flex";
        //modalMessage.innerHTML = '<h2>Adicionar cliente</h2>'
        modalContent.innerHTML = `<div id="message"><h2>Adicionar cliente</h2></div><label for="nome-cliente">Nome:</label> <input type="text" name="nome-cliente" class="input-text" id="nome-cliente"/> <label for="cpf">CPF:</label> <input type="text" name="cpf" class="input-text" id="cpf"/><div><button onclick="register_person()">Adicionar</button></div>`

    }else if(param === "update"){
        modalContainer.style.display = "flex";
        //modalMessage.innerHTML = '<h2>Adicionar cliente</h2>'
        modalContent.innerHTML = '<div id="message"><h2>Atualizar cliente</h2></div><label for="nome-cliente">Nome:</label> <input type="text" name="nome-cliente" class="input-text" id="nome-cliente"/> <label for="cpf">CPF:</label> <input type="text" name="cpf" class="input-text" id="cpf"/><div><button onclick="update_person(2)">Salvar</button></div>'
    }else{
        modalContainer.style.display = "flex";
        //modalMessage.innerHTML = '<h2>Adicionar cliente</h2>'
        modalContent.innerHTML = '<div id="message"><h2>Excluir cliente</h2></div><div><button>Excluir</button></div>'
    }
}

