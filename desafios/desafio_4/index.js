function incrementarValor(){
    let sp = document.getElementsByClassName("quantidade")[0];
    let val = parseInt(sp.textContent);
    val++;
    sp.textContent = val;
}