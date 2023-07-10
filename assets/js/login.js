function login(formDom){
    const form = new FormData(formDom);

    const xhr = createXHR();

    xhr.addEventListener("load",(e)=>{
        const obj = JSON.parse(e.target.responseText);

        if (obj != false){

            window.location.href = host+"GoalController"
        }
    })
    xhr.open("POST",host+"UserController/loginUser");

    xhr.send(form);
}

