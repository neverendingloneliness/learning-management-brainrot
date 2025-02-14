document.addEventListener('DOMContentLoaded', function () {
    const passIn = document.getElementById('password');
    const btn = document.getElementById('togglePassword');
    btn.addEventListener('click', function () {
        const type =
        passIn.getAttribute('type') === 'password' ? 'text' : 'password';
        passIn.setAttribute('type', type);

        if (type === 'password'){
            btn.classList.remove('fa-eye-slash')
            btn.classList.add('fa-eye')
        } else {
            btn.classList.remove('fa-eye')
            btn.classList.add('fa-eye-slash')
        }
    });
    // const loginForm = document.getElementById('loginForm');
    // loginForm.addEventListener('submit', function (event) {
    //     event.preventDefault();
    //     loginForm.reset(); 
    //     alert('Form submitted');
    // });
});
