const email_validate  = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
const password_validate = /.{6,}/gmi;

let email = document.getElementById('email');
let password = document.getElementById('password');
let button = document.getElementById('button');

let mail; // == NULL OR FALSE
let passw;


if(!mail || !passw){
    button.setAttribute('disabled', false); // ou TRUE car devrait etre non cliquable mais fonctionne quand meme avec false 
    button.style.backgroundColor = 'grey';
}


email.addEventListener('keyup', (e) => {
    mail = email.value.match(email_validate);
    console.log(mail)
    if(mail && passw){
        button.removeAttribute('disabled')
        button.style.backgroundColor = 'green'
    }else{
        button.setAttribute('disabled', false)
        button.style.backgroundColor = 'grey';
    }
    
})

password.addEventListener('keyup', (e) => {
    passw = password.value.match(password_validate);
    console.log(passw)
    if(mail && passw){
        button.removeAttribute('disabled')
        button.style.backgroundColor = 'green'
    }else{
        button.setAttribute('disabled', false)
        button.style.backgroundColor = 'grey';
    }
    
})