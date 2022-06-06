function incrementarValor() {

    let span = document.getElementsByClassName("quantidade")[0];

    // Checks if element exists
    if (span) {

        // Gets current counter value
        let value = span.textContent;

        // If the current value is undeterminer, sets it to 1
        if (isNaN(value)) {
            span.textContent = "1";
        } else {

            // Else adds 1 to current value and updates counter
            span.textContent = Number(value) + 1;
        }
    }
}