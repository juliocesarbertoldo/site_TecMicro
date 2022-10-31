function clickMenu() {
    if (itensMenu.style.display == 'block') {
        itensMenu.style.display = 'none'
        itenSubMenuSistema.style.display = 'none'
        itenSubMenuDownloads.style.display = 'none'
    } else {
        itensMenu.style.display = 'block'
    }
}

function clickSubMenuSistema() {
    if (itenSubMenuSistema.style.display == 'block') {
        itenSubMenuSistema.style.display = 'none'
    } else {
        itenSubMenuSistema.style.display = 'block'
    }
}

function clickSubMenuDownloads() {
    if (itenSubMenuDownloads.style.display == 'block') {
        itenSubMenuDownloads.style.display = 'none'
    } else {
        itenSubMenuDownloads.style.display = 'block'
    }
}