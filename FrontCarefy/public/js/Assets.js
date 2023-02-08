const modalSucess = (motivo) =>{
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

const modalData = (param, nome) => {
    let modalContainer = document.querySelector('.modal-container');
    let modalContent = document.querySelector('.modal-popup');
    let modalMessage = document.querySelector('#message');
    if(param === "register"){
        modalContainer.style.display = "flex";
        //modalMessage.innerHTML = '<h2>Adicionar cliente</h2>'
        modalContent.innerHTML = '<div id="message"><h2>Adicionar cliente</h2></div><label for="nome-cliente">Nome:</label> <input type="text" name="nome-cliente" class="input-text" id="nome-cliente"/> <div><button>Adicionar</button></div>'
    }else if(param === "update"){
        modalContainer.style.display = "flex";
        //modalMessage.innerHTML = '<h2>Adicionar cliente</h2>'
        modalContent.innerHTML = '<div id="message"><h2>Atualizar cliente</h2></div><label for="nome-cliente">Nome:</label> <input type="text" name="nome-cliente" class="input-text" id="nome-cliente"/> <div><button>Salvar</button></div>'
    }else{
        modalContainer.style.display = "flex";
        //modalMessage.innerHTML = '<h2>Adicionar cliente</h2>'
        modalContent.innerHTML = '<div id="message"><h2>Excluir cliente</h2></div><label for="nome-cliente">Nome:</label> <input type="text" name="nome-cliente" class="input-text" id="nome-cliente"/> <div><button>Excluir</button></div>'
    }
}
