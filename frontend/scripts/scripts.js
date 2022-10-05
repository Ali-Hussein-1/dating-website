// Declaring some constants
const signup = document.getElementById("signup");
const loginEmail = document.getElementById("loginEmail");
const loginPassword = document.getElementById("loginPassword");
const signinBtn = document.getElementById("signinBtn");

// an onclick event to take to the signup page upon clicking (signup) in the login page
signup.onclick = ()=>{
    window.location.href = "./signup.html"}

// signin linking
signinBtn.addEventListener('click', () => {

    let formdata = new URLSearchParams();
    formdata.append("email",loginEmail.value);
    formdata.append("password",loginPassword.value);
    axios
        .post('http://127.0.0.1:8000/api/v1/login', formdata)
            .then((res) => {
                if (res.data["message"][0]) { {
                        localStorage.setItem('userId', res.data.message[0].id);
                        localStorage.setItem('user_email', res.data.message[0].email);
                        
                        window.location.replace('home.html');
                    };
                }
                else{
                   
                    window.location.href ='signup.html';
                    
                }
            })
            .catch((err) => console.log(err));
    });


    
    

        