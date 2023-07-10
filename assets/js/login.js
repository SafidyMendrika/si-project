function login(formDom){
    const form = new FormData(formDom);

    const xhr = createXHR();

    xhr.addEventListener("load",(e)=>{
        console.log("hello");

        console.log(e.target.responseText);
    })
    xhr.open("POST",host+"UserController/loginUser");

    xhr.send(form);
}

