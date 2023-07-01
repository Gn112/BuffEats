/* Máscaras ER */
function mascara(o, f) {
    // limitador
    var tel = document.getElementById("numero_cel").value
    console.log(tel)
    tel = tel.slice(0, 15) //(pode limitar a quantidade de char na entrada pelo java script)
    console.log(tel)
    document.getElementById("numero_cel").value = tel
    tel = document.getElementById("numero_cel").value.slice(0, 11)
    console.log(tel)



    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}
function mtel(v) {
    v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id(el) {
    return document.getElementById(el);
}
window.onload = function () {
    id('numero_cel').onkeyup = function () {
        mascara(this, mtel);
    }
}





function mascara_cpf() {
    //limitador
    var cpf = document.getElementById("cpf").value
    console.log(cpf)
    cpf = cpf.slice(0, 14) //(pode limitar a quantidade de char na entrada pelo java script)
    console.log(cpf)
    document.getElementById("cpf").value = cpf
    cpf = document.getElementById("cpf").value.slice(0, 10)
    console.log(cpf)

    //máscara
    var cpf_formatado = document.getElementById("cpf").value
    if (cpf_formatado[3] != ".") {
        if (cpf_formatado[3] != undefined) {
            document.getElementById("cpf").value = cpf_formatado.slice(0, 3) + "." + cpf_formatado[3]
        }
    }

    if (cpf_formatado[7] != ".") {
        if (cpf_formatado[7] != undefined) {
            document.getElementById("cpf").value = cpf_formatado.slice(0, 7) + "." + cpf_formatado[7]
        }
    }

    if (cpf_formatado[11] != "-") {
        if (cpf_formatado[11] != undefined) {
            document.getElementById("cpf").value = cpf_formatado.slice(0, 11) + "-" + cpf_formatado[11]
        }
    }
}

function mascara_cep() {
    //limitador
    var cep = document.getElementById("cep").value
    console.log(cep)
    cep = cep.slice(0, 9) //(pode limitar a quantidade de char na entrada pelo java script)
    console.log(cep)
    document.getElementById("cep").value = cep
    cep = document.getElementById("cep").value.slice(0, 9)
    console.log(cep)

    //máscara
    var cep_formatado = document.getElementById("cep").value
    if (cep_formatado[5] != "-") {
        if (cep_formatado[5] != undefined) {
            document.getElementById("cep").value = cep_formatado.slice(0, 5) + "-" + cep_formatado[5]
        }
    }

}

