function limparFormulario(){
    document.getElementById("meuFormulario").reset();
}

function enviarMédia(event) {

    event.preventDefault();


    let nota1 = document.getElementById("nota1").value;
    let nota2 = document.getElementById("nota2").value;
    let nota3 = document.getElementById("nota3").value;

    
    let form = document.createElement("form");
    form.method = "POST";
    form.action = "destino.php";


    let input1 = document.createElement("input");
    input1.type = "hidden";
    input1.name = "nota1";
    input1.value = nota1;

    let input2 = document.createElement("input");
    input2.type = "hidden";
    input2.name = "nota2";
    input2.value = nota2;

    let input3 = document.createElement("input");
    input3.type = "hidden";
    input3.name = "nota3";
    input3.value = nota3;

    
    form.appendChild(input1);
    form.appendChild(input2);
    form.appendChild(input3);

  
    document.body.appendChild(form);
    form.submit();
}
