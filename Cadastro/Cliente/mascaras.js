function mascara_telefone ()
        {
           //limitador
         var tel = document.getElementById("numero_cel").value
            console.log(tel)
          tel=tel.slice(0,15) //(pode limitar a quantidade de char na entrada pelo java script)
            console.log(tel)
          document.getElementById("numero_cel").value=tel
     tel=document.getElementById("numero_cel").value.slice(0,11)
            console.log(tel)
           
            //máscara
            var tel_formatado = document.getElementById("numero_cel").value
            if (tel_formatado[0]!="(")
            {
                if(tel_formatado[0]!=undefined)
                {
                    document.getElementById("numero_cel").value="("+tel_formatado[0];
                }
            }

            if (tel_formatado[3]!=")")
            {
                if(tel_formatado[3]!=undefined)
                {
                    document.getElementById("numero_cel").value=tel_formatado.slice(0,3)+")"+tel_formatado[3]
                }
            }

            if (tel_formatado[5]!=" ")
            {
                if(tel_formatado[5]!=undefined)
                {
                    document.getElementById("numero_cel").value=tel_formatado.slice(0,5)+" "+tel_formatado[5]
                }
            }
                
            if (tel_formatado[10]!="-")
            {
                if(tel_formatado[10]!=undefined)
                {
                    document.getElementById("numero_cel").value=tel_formatado.slice(0,10)+"-"+tel_formatado[10]
                }
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
