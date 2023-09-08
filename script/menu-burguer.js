function mudouTamanho() {
    if (window.innerWidth >= 768) {
        escureceMenuAtivo.style.display = 'none'
        containerConteudoSaibaMais.style.display = 'block'
    } else {
        escureceMenuAtivo.style.display = 'none'
        containerConteudoSaibaMais.style.display = 'none'
        saibaMais.style.visibility = 'visible'
        itensMenu.style.right = '-260px'
    }
}

function clickMenu() {
    if (itensMenu.style.right == '0px') {
        itensMenu.style.right = '-260px'
    } else {
        escureceMenuAtivo.style.display = 'block'
        itensMenu.style.right = '0px'
        containerConteudoSaibaMais.style.display = 'none'
        saibaMais.style.visibility = 'visible'
    }
}

function clickFechaMenu() {
    itensMenu.style.right = '-260px'
    escureceMenuAtivo.style.display = 'none'
}

