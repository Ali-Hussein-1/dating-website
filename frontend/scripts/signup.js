const signupEmail = document.getElementById("signupEmail");
const signupPassword = document.getElementById("signupPassword");
const signupName = document.getElementById("signupName");
const signupGender = document.getElementById("signupGender");
const signupLocation = document.getElementById("signupLocation");
const signupAge = document.getElementById("signupAge");
const signupBtn = document.getElementById("signupBtn");


signupBtn.onclick = ()=>{
    console.log("hi");
    let formdata = new URLSearchParams();
    formdata.append("email",signupEmail.value);
    formdata.append("password",signupPassword.value);
    formdata.append("name",signupName.value);
    formdata.append("gender",signupGender.value);
    formdata.append("location",signupLocation.value);
    formdata.append("age",signupAge.value);
    formdata.append("bio",'No bio');
    formdata.append("image",'URL');

    axios
        .post('http://127.0.0.1:8000/api/v1/signup', formdata)
            .then((res) => {
                console.log(res.data.data[0]);
                })
            }