document.addEventListener("DOMContentLoaded", function () {

    //telefone
    function mascaraTelefone(event) {
        let valor = event.target.value.replace(/\D/g, "");
        if (valor.length <= 2) {
            valor = `(${valor}`;
        } else if (valor.length <= 7) {
            valor = `(${valor.slice(0, 2)}) ${valor.slice(2)}`;
        } else {
            valor = `(${valor.slice(0, 2)}) ${valor.slice(2, 7)}-${valor.slice(7, 11)}`;
        }
        event.target.value = valor;
    }

    //CPF
    function mascaraCPF(event) {
        let valor = event.target.value.replace(/\D/g, "");
        if (valor.length <= 3) {
            valor = `${valor}`;
        } else if (valor.length <= 6) {
            valor = `${valor.slice(0, 3)}.${valor.slice(3)}`;
        } else if (valor.length <= 9) {
            valor = `${valor.slice(0, 3)}.${valor.slice(3, 6)}.${valor.slice(6)}`;
        } else {
            valor = `${valor.slice(0, 3)}.${valor.slice(3, 6)}.${valor.slice(6, 9)}-${valor.slice(9, 11)}`;
        }
        event.target.value = valor;
    }

    //CEP
    function mascaraCEP(event) {
        let valor = event.target.value.replace(/\D/g, "");
        if (valor.length <= 5) {
            valor = `${valor.slice(0, 2)}.${valor.slice(2)}`;
        } else {
            valor = `${valor.slice(0, 2)}.${valor.slice(2, 5)}-${valor.slice(5, 8)}`;
        }
        event.target.value = valor;
    }

    document.getElementById("tel").addEventListener("input", mascaraTelefone);  
    document.getElementById("cpf").addEventListener("input", mascaraCPF);
    document.getElementById("cep").addEventListener("input", mascaraCEP);

});
