function incrementarValor() {

    span = document.getElementsByClassName("quantidade")[0]

    let value = span.textContent;

    span.textContent = Number(value) + 1
}