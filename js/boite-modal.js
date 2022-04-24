/*(function()
{
    let collectionBoutonSuite = document.querySelectorAll(".cours__desc__suite");
    console.log('nombre de bouton suite : ' + collectionBoutonSuite.length);

    for(const bouton of collectionBoutonSuite)
    {
        bouton.addEventListener("mousedown", function() {boite__modale.classList.add('ouvrir')}); 
    }


})();*/
(function() {
    //console.log("vive la boite modale");
    let boite__modale = document.querySelector(".boite__modale");
    let cours__desc__ouvrir = document.querySelectorAll(".cours__desc__suite");
    let boite__modale__text = document.querySelector(".boite__modale__text");
    //console.log(coursdescouvrir.length);

    for (const bout of cours__desc__ouvrir) {
        //console.log(bout.tagName)
        bout.addEventListener('mousedown', function(){
            //console.log(this.parentNode.parentNode.className)
            boite__modale.classList.add('ouvrir')
            // console.log(this.parentNode.parentNode.children[0].innerHTML);
            boite__modale__text.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
            //console.log(boite__modale.classList)
        })
    }
    const btn__Fermer__Modal = document.querySelector('.boite__modale__fermeture');
        btn__Fermer__Modal.addEventListener('mousedown', () => boite__modale.classList.remove('ouvrir'));
})()