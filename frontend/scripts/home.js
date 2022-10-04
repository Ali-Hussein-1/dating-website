const favorite = document.getElementById("favorite");
const home = document.getElementById("home");
const signinBtn = document.getElementById("signinBtn");
const email = document.getElementById("email");

home.onclick = ()=>{
    window.location.href = "./home.html"
}
    
favorite.onclick = ()=>{
    window.location.href = "./favorite.html"
}

axios
    .get('http://127.0.0.1:8000/api/v1/showall')
    .then((res) => {
        console.log(res);
    })