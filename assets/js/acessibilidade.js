const caixaDeTextos = document.querySelector('#conteudo')

function diminuirLetra(targetElement) {
    let actualFontSize = (window.getComputedStyle(targetElement).fontSize).replace("px", "")

    parseInt(actualFontSize) - 1 < 16 //Tamanho minimo para font-size = 16 caso seja menor que isso set como 16
        ? targetElement.style.fontSize = 16
        : targetElement.style.fontSize = (parseInt(actualFontSize) - 1) + "px";
}

function aumentarLetra(targetElement) {
    let actualFontSize = (window.getComputedStyle(targetElement).fontSize).replace("px", "")

    parseInt(actualFontSize) + 1 > 1000 //Tamanho maximo do font-size sugiro que coloquemos ~22px
        ? targetElement.style.fontSize = 1000
        : targetElement.style.fontSize = (parseInt(actualFontSize) + 1) + "px";
}