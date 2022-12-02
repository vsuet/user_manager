const form_auth = document.getElementById('auth');
const input_login = document.getElementById('login');
const input_password = document.getElementById('password');
const output = document.getElementById('output');

form_auth.addEventListener('reset', (e) => {
    e.preventDefault();

    input_login.value = '';
    input_password.value = '';
});

form_auth.addEventListener('submit', async (e) => {
    e.preventDefault();

    let auth = {
        login: input_login.value,
        password: input_password.value
    };
    let auth_json = JSON.stringify(auth);

    const url = 'controller.php';
    let response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: auth_json
    });
    let result = await response.json();
    output.innerHTML = `<p class="${result.status}">${result.message}</p>`;
    console.log(result.user);
});