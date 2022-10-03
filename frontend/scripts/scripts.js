const workshop_pages = {};

workshop_pages.baseURL = "http://127.0.0.1:8000/api/v0.1";

workshop_pages.Console = (title, values, oneValue = true) => {
    console.log('---' + title + '---');
    if(oneValue){
        console.log(values);
    }else{
        for(let i =0; i< values.length; i++){
            console.log(values[i]);
        }
    }
    console.log('--/' + title + '---');
}

workshop_pages.getAPI = async (api_url) => {
    try{
        return await axios(api_url);
    }catch(error){
        workshop_pages.Console("Error from GET API", error);
    }
}

workshop_pages.postAPI = async (api_url, api_data, api_token = null) => {
    try{
        return await axios.post(
            api_url,
            api_data,
            { headers:{
                    'Authorization' : "token " + api_token
                }
            }
        );
    }catch(error){
        workshop_pages.Console("Error from POST API", error);
    }
}

workshop_pages.loadFor = (page) => {
    eval("workshop_pages.load_" + page + "();");
}


const signup = document.getElementById("signup");
signup.onclick = ()=>{
    window.location.href = "./signup.html"
}