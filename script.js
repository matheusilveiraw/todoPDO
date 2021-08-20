function chamarPg(url) { 

    let ajax = new XMLHttpRequest();

    ajax.open('GET', url)

    ajax.onreadystatechange = () => { 
        console.log(ajax.readyState) 
        if(ajax.readyState == 4 && ajax.status == 200) {
            
            document.getElementById('conteudoAjax').innerHTML = ajax.responseText
        }

        if(ajax.readyState == 4 && ajax.status == 404) {
            //ERRO
            document.getElementById('conteudoAjax').innerHTML = 'tente novamente mais tarde'
        }
    }

    ajax.send()
}