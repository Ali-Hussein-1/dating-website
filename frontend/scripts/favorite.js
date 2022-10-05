// Declaring some constants
const favorite = document.getElementById("favorite");
const home = document.getElementById("home");
const container = document.getElementById("container");

// an onclick event to take to the home page 
home.onclick = ()=>{
    window.location.href = "./home.html"
}
    
// an onclick event to take to the favorites page 
favorite.onclick = ()=>{
    window.location.href = "./favorite.html"
}

// Displaying favorite users by axios(linking to the DB)
axios
    .get('http://127.0.0.1:8000/api/v1/getfavorite')
    .then((res) => {
        console.log(res.data);
        let arr = res.data;
        arr.forEach(box => {
            container.innerHTML += ` <div class="boxes">
            <div class="img-box">
                <img src="./assets/random male 1.jpeg male 2.jpg" alt="Not found">
            </div>
            <div>
                Name:${box.name}
            </div>
            <div>
                Email:${box.email}
            </div>
            <div>
                Location:${box.location}
            </div>
            <div>
                Age:${box.age}
            </div>
            <div>
                Bio:${box.bio}
            </div>
        </div>`;          
        });
    })