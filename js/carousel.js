(function () {
    const modal = document.querySelector('.boite__modale');

    const images = document.querySelectorAll('.galerie img');
    const btnFermerModal = document.querySelector('.boite__modale__fermeture');
    const modalTexte = document.querySelector('.boite__modale__text');
    for (const image of images) {
        image.addEventListener('mousedown', () => {
            if (modal.classList.contains('ouvrir')) {
                modalTexte.querySelector('img').remove();
            }
            let newImg = document.createElement('img');
            newImg.setAttribute('src', image.getAttribute('src'));
            modalTexte.appendChild(newImg);
            modal.classList.add('ouvrir');
        });
    }
    btnFermerModal.addEventListener('mousedown', () => {
        modal.classList.remove('ouvrir');
        const imgASupprimer = modalTexte.querySelector('img');
        imgASupprimer.remove();
    });
})()