    const form = document.getElementById('form');
    const inp = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-requiredLogin');
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    //Função para alterar as cores das bordas do input
    function setError(index){
        inp[index].style.border = '2px solid #e63636';
        spans[index].style.display ='block';

    }
    function removeError(index){
        inp[index].style.border = '';
        spans[index].style.display ='none';
    }
    
    //Função do span
    function emailValidate(){
        if(!emailRegex.test(inp[0].value)){
            setError(0);
        }
        else{
            removeError(0);
        }
    }
    function mainPasswordvalidate(){
        if(inp[1].value.length < 8){
            setError(1);
        }
        else{
            removeError(1);
        }
    }