



const LoginButton = document.getElementById('BaliLogo');

const loginWrapper = document.getElementById('LoginWrapper');

function showLogin() {
    if (loginWrapper.style.display === 'none') {
        loginWrapper.style.display = 'flex';
        loginWrapper.style.animation = 'slideIn 2s ease-in';
    } else {
        loginWrapper.style.animation = 'slideOut 2s ease-out';
        setTimeout(() => {
            loginWrapper.style.display = 'none';
        }, 2000);
    }
}

showLogin();


LoginButton.addEventListener('click', showLogin)
