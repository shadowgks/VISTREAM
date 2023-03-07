function Menu(e){
    if(e.getAttribute("class") == 'fa-solid fa-bars'){
        e.classList.remove("fa-bars");
        e.classList.add("fa-xmark");
    }else{
        e.classList.add("fa-bars");
        e.classList.remove("fa-xmark");
    }
} 