const screenResult = document.querySelector(".result")
let buffer = "0";
let total = 0;
let operator = null;

// Se encarga de recibir operadores o numeros
function buttonClick(value){
    
    if(isNaN(parseInt(value))){
        checkSymbol(value);
    }else{
        checkNumber(value);
    }

    // Se encarga de mostar el valor en la pantalla por cada click que se hace
    screenResult.innerText = buffer;
}

// Agrega el numero al final del string
function checkNumber(value){
    if(buffer === "0"){
        buffer = value;
    }else{
        buffer += value;
    }
}

// Verifica el simbolo ingresado
function checkSymbol(value){
    switch(value){
        case "C":
            buffer = "0";
            total = 0;
            break;
        case "=":
            // Si no hay un operador, no hay operacion aritmetica por hacer
            if(operator === null){
                return;
            }
            // Si existe un operador, se realiza la operacion aritmetica y
            resolveOperation(parseInt(buffer));

            // Se resetea la variable operador y total, y se le pasa el nuevo total al buffer
            operator = null;
            buffer = "" + total;
            total = 0;
            break;
        case "←":
            // Comprueba que existe solo 1 caracter en string ya que al borrarlo se hace 0
            if(buffer.length === 1){
                buffer = "0";
            }else{
                // Borra el ultimo caracter
                buffer = buffer.substring(0,buffer.length - 1);
            }
        default:
            // Aqui llega un operador
            handleMath(value);
            break;
    }
}

// Se encarga de guardar valores
function handleMath(value){
    // Pasa el numero de tipo string a entero
    const intbuffer = parseInt(buffer);

    // Si el valor es el primero en ingresar, lo guarda en la variable total
    if (total === 0){
        total = intbuffer;
    }else {
        // Si ya existe un valor, se puede realizar la operacion aritmetica 
        resolveOperation(intbuffer);
    }

    // Se guarda el operador y se declara el buffer en 0
    operator = value;
    buffer = "0";
}

// Se encarga de resolver las operaciones aritmeticas
function resolveOperation(intbuffer){
    if(operator === "+"){
        total += intbuffer;
    }else if(operator === "-"){
        total -= intbuffer;
    }else if(operator === "×"){
        total *= intbuffer;
    }else{
        total /= intbuffer;
    }
}

// Se encarga de realizar una funcion por cada click que se haga en los botones de la calculadora
function init(){
    document.querySelector(".button-section").addEventListener("click", function(event){
        buttonClick(event.target.innerText);
    });
}

init();