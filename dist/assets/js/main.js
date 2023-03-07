function Menu(e){
    const link = document.querySelector('#links-nav');
    if(e.getAttribute("class") == 'fa-solid fa-bars'){
        e.classList.remove("fa-bars");
        e.classList.add("fa-xmark");
        console.log(link);
        //link show
        link.classList.add('top-[80px]');
    }else{
        e.classList.add("fa-bars");
        e.classList.remove("fa-xmark");
        //link show
        link.classList.remove('top-[80px]');
    }
} 