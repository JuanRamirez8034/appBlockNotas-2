function myFun (){
    checko = document.getElementById('activadirectorio').checked;
    if(checko){
        document.getElementById('directorios').disabled = false;
    }else{
        document.getElementById('directorios').disabled = true;
    }
}