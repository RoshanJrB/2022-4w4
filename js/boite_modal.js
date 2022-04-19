(function()
{
    let collectionBoutonSuite = document.querySelectorAll(".cours__desc__suite");
    console.log('nombre de bouton suite : ' + collectionBoutonSuite.length);

    for(const bouton of collectionBoutonSuite)
    {
        bouton.addEventListener("mousedown", function() {console.log(this.tagName)}); 
    }


})();