function mascara_nomeEmpresa(){
    var empresa = document.getElementById("nome_empresa").value
    console.log(empresa)
    empresa = empresa.slice(0, 18) //(pode limitar a quantidade de char na entrada pelo java script)
    console.log(empresa)
    document.getElementById("nome_empresa").value = empresa
    empresa = document.getElementById("nome_empresa").value.slice(0, 14)
    console.log(empresa)

}

function mascara_cnpj() {
    //limitador
    var cnpj = document.getElementById("CNPJ").value
    console.log(cnpj)
    cnpj = cnpj.slice(0, 18) //(pode limitar a quantidade de char na entrada pelo java script)
    console.log(cnpj)
    document.getElementById("CNPJ").value = cnpj
    cnpj = document.getElementById("CNPJ").value.slice(0, 14)
    console.log(cnpj)

    //máscara
    var cnpj_formatado = document.getElementById("CNPJ").value
    if (cnpj_formatado[2] != ".") {
        if (cnpj_formatado[2] != undefined) {
            document.getElementById("CNPJ").value = cnpj_formatado.slice(0, 2) + "." + cnpj_formatado[2]
        }
    }

    if (cnpj_formatado[6] != ".") {
        if (cnpj_formatado[6] != undefined) {
            document.getElementById("CNPJ").value = cnpj_formatado.slice(0, 6) + "." + cnpj_formatado[6]
        }
    }

    if (cnpj_formatado[10] != "/") {
        if (cnpj_formatado[10] != undefined) {
            document.getElementById("CNPJ").value = cnpj_formatado.slice(0, 10) + "/" + cnpj_formatado[10]
        }
    }
    if (cnpj_formatado[15] != "-") {
        if (cnpj_formatado[15] != undefined) {
            document.getElementById("CNPJ").value = cnpj_formatado.slice(0, 15) + "-" + cnpj_formatado[15]
        }
    }
}

// Mascara Cel
function mascara(o, f) {
    // limitador
    var tel = document.getElementById("num_contato").value
    console.log(tel)
    tel = tel.slice(0, 15) //(pode limitar a quantidade de char na entrada pelo java script)
    console.log(tel)
    document.getElementById("num_contato").value = tel
    tel = document.getElementById("num_contato").value.slice(0, 11)
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
    id('num_contato').onkeyup = function () {
        mascara(this, mtel);
    }
}

// Mascara CEP
function mascara_cep() {
    //limitador
    var cep = document.getElementById("CEP").value
    console.log(cep)
    cep = cep.slice(0, 9) //(pode limitar a quantidade de char na entrada pelo java script)
    console.log(cep)
    document.getElementById("CEP").value = cep
    cep = document.getElementById("CEP").value.slice(0, 9)
    console.log(cep)

    //máscara
    var cep_formatado = document.getElementById("CEP").value
    if (cep_formatado[5] != "-") {
        if (cep_formatado[5] != undefined) {
            document.getElementById("CEP").value = cep_formatado.slice(0, 5) + "-" + cep_formatado[5]
        }
    }

}