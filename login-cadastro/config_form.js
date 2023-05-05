    const form = document.getElementById('form');
    const inp = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-required');
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
    function nameValidate(){
        if(inp[0].value.length < 2){
            setError(0);
        }
        else{
            removeError(0)
        }
    }

    function emailValidate(){
        if(!emailRegex.test(inp[1].value)){
            setError(1);
        }
        else{
            removeError(1);
        }
    }
    function telValidate(){
        if(inp[2].value.length < 10){
            setError(2);
        }
        else{
            removeError(2);
        }
    }
    function mainPasswordvalidate(){
        if(inp[3].value.length < 8){
            setError(3);
        }
        else{
            removeError(3);
        }
    }
    function confirmPasswordvalidate(){
        if(inp[4].value.length < 8 ){
            setError(4);
        }
        else{
            removeError(4);
        }
    }
    //Verifica se senha e confirmação de senha são iguais
    function validatePassword() {
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;
        if (password != confirm_password) {
            alert("As senhas não coincidem. Por favor, tente novamente.");
            return false;
        }
    }
    // Mácara para permitir somente números padrão telefone
    function masktelephone(telephone) {
        telephone.value = telephone.value.replace(/\D/g, '');
        telephone.value = telephone.value.replace(/^(\d{2})(\d)/g, '($1) $2');
        telephone.value = telephone.value.replace(/(\d)(\d{4})$/, '$1-$2');
    }

    
