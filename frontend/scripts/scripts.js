const signup = document.getElementById("signup");
const loginEmail = document.getElementById("email");
const loginPassword = document.getElementById("email");
const email = document.getElementById("email");

signup.onclick = ()=>{
    window.location.href = "./signup.html"}


signinBtn.addEventListener('click', () => {

    let formData = new FormData([]);
    axios
        .post('http://127.0.0.1:8000/api/v1/login', formData)
            .then((res) => {
                if (res.data[0].email == email.value) { {
                        localStorage.setItem('userId', result.data[0].user_id);
                        localStorage.setItem('user_email', result.data[0].client_email);
                        window.location.href = './home.html';
                    };
                }
            })
            .catch((err) => console.log(err));
    });