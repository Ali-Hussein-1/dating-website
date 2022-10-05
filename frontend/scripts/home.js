const favorite = document.getElementById("favorite");
const home = document.getElementById("home");
const signinBtn = document.getElementById("signinBtn");
const email = document.getElementById("email");
const container = document.getElementById("container");



home.onclick = () => {
    window.location.href = "./home.html"
}

favorite.onclick = () => {
    window.location.href = "./favorite.html"
}

axios
    .get('http://127.0.0.1:8000/api/v1/showall')
    .then((res) => {
        let arr = res.data.data;
        arr.forEach(box => {
            container.innerHTML += `<div class="boxes" id="box" data-value="${box.id}">
            <div class="img-box">
                <img src="${box.image}" alt="Not found">
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
            <div class="icons-box">
                <i class="material-icons favorite" data-value="${box.id}">favorite</i>
                <i class="material-icons block">block</i>
            </div>
        </div>`;

        });
        const favoriteIcon = document.querySelectorAll(".favorite");
        favoriteIcon.forEach(element => {
            let userId = localStorage.getItem('userId');
            let formdata = new URLSearchParams();
            formdata.append('id_1', userId);
            formdata.append('id_2', element.getAttribute("data-value"));
            element.onclick = () => {
                axios
                    .post('http://127.0.0.1:8000/api/v1/addfavorite',formdata)
                    .then((res) => {
                        console.log(res);
        
                    });
            }
        });
        const blockIcon = document.querySelectorAll(".block");
        blockIcon.forEach(element => {
            let userId = localStorage.getItem('userId');
            let formdata = new URLSearchParams();
            formdata.append("blocker_id",userId);
            formdata.append("blocked_id",element.getAttribute("data-value"));
            element.onclick = () => {
                axios
                    .post('http://127.0.0.1:8000/api/v1/addblock',formdata)
                    .then((res) => {
                        console.log(res);
                    });
                };
            });

    })