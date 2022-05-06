(function () {
    console.log("Vive le caroussel");
    const carrousel = document.querySelector('.boite__carrousel');
    const images = document.querySelectorAll('.galerie img');
    const btnFermerCarrousel = document.querySelector('.boite__carrousel__fermeture');
    const navigation = document.querySelector('.boite__carrousel__navigation');
    let index = 0;
    const elmImg = document.createElement('img');
    carrousel.appendChild(elmImg);

    for (const image of images) {
        const btn = document.createElement('button');
        btn.dataset.index = index++;
        navigation.append(btn);
        btn.addEventListener('mousedown', () => {
            elmImg.setAttribute('src', images[btn.dataset.index].getAttribute('src'));
            
        });

        image.addEventListener('mousedown', () => {
            elmImg.setAttribute('src', image.getAttribute('src'));
            carrousel.classList.add('ouvrir');
        });
    }
    btnFermerCarrousel.addEventListener('mousedown', () => {
        carrousel.classList.remove('ouvrir');
    });
})()