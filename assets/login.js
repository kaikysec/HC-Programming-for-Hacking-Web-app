// Vai ser chamado ao clicar no botao de login
function fazerLogin() {
    // Responsavel por pegar as infos dos campos de login, enviar um JSON para o backend e validar os dados
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    var data = {
        'username': username,
        'password': password
    }

    console.log(`Login: ${username}`)
    console.log(`Password: ${password}`)

    if(username && password) {
        
        fetch("/login",
            {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
            body: JSON.stringify(data) //pegar um objeto e transformar em json (serialização)
            });

    } else{
        alert('Preencha todos os campos')
    }

}