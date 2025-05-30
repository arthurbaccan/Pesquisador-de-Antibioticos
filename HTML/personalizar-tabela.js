/*responsividade da tabela*/
function verificarTamanhoTela() {
    if (window.innerWidth < 1300) {
        document.getElementById("teste1").textContent = "Antibiótico";
        document.getElementById("teste2").textContent = "Gram Positiva";
        document.getElementById("teste3").textContent = "Gram Negativa";
        document.getElementById("teste4").textContent = "Moforlogia";
    } 
    else {
        document.getElementById("teste1").textContent = "Tipo de Antibiótico";
        document.getElementById("teste2").textContent = "Ataca Gram Positiva";
        document.getElementById("teste3").textContent = "Ataca Gram Negativa";
        document.getElementById("teste4").textContent = "Moforlogia";
    }
  }
  
  window.addEventListener('resize', verificarTamanhoTela);
  verificarTamanhoTela(); 

/*função para mostrar filtros: Nome*/
var displayFlexNome = false;
function mostrarFiltrosNome() {

    if(displayFlexNome == false) {
        document.getElementById("filNome").style.display = "flex";
        displayFlexNome = true;

        displayFlexAntibiotico = false;
        document.getElementById("filAntibiotico").style.display = "none";

        displayFlexGramPositiva = false;
        document.getElementById("filGramPositiva").style.display = "none";

        displayFlexGramNegativa = false;
        document.getElementById("filGramNegativa").style.display = "none";

        displayFlexMorfologia = false;
        document.getElementById("filMorfologia").style.display = "none";
    }
    else {
        document.getElementById("filNome").style.display = "none";
        displayFlexNome = false;
    }

}

/*função para mostrar filtros: Antibiotico*/
var displayFlexAntibiotico = false;
function mostrarFiltrosAntibiotico() {

    if(displayFlexAntibiotico == false) {
        document.getElementById("filAntibiotico").style.display = "flex";
        displayFlexAntibiotico = true;

        displayFlexNome = false;
        document.getElementById("filNome").style.display = "none";

        displayFlexGramPositiva = false;
        document.getElementById("filGramPositiva").style.display = "none";

        displayFlexGramNegativa = false;
        document.getElementById("filGramNegativa").style.display = "none";

        displayFlexMorfologia = false;
        document.getElementById("filMorfologia").style.display = "none";
    }
    else {
        document.getElementById("filAntibiotico").style.display = "none";
        displayFlexAntibiotico = false;
    }

}

/*função para mostrar filtros: Gram Positiva*/
var displayFlexGramPositiva = false;
function mostrarGramPositiva() {

    if(displayFlexGramPositiva == false) {
        document.getElementById("filGramPositiva").style.display = "flex";
        displayFlexGramPositiva = true;

        displayFlexNome = false;
        document.getElementById("filNome").style.display = "none";

        displayFlexAntibiotico = false;
        document.getElementById("filAntibiotico").style.display = "none";

        displayFlexGramNegativa = false;
        document.getElementById("filGramNegativa").style.display = "none";

        displayFlexMorfologia = false;
        document.getElementById("filMorfologia").style.display = "none";
    }
    else {
        document.getElementById("filGramPositiva").style.display = "none";
        displayFlexGramPositiva = false;
    }

}

/*função para mostrar filtros: Gram Negativa*/
var displayFlexGramNegativa = false;
function mostrarGramNegativa() {

    if(displayFlexGramNegativa == false) {
        document.getElementById("filGramNegativa").style.display = "flex";
        displayFlexGramNegativa = true;

        displayFlexNome = false;
        document.getElementById("filNome").style.display = "none";

        displayFlexAntibiotico = false;
        document.getElementById("filAntibiotico").style.display = "none";

        displayFlexGramPositiva = false;
        document.getElementById("filGramPositiva").style.display = "none";

        displayFlexMorfologia = false;
        document.getElementById("filMorfologia").style.display = "none";
    }
    else {
        document.getElementById("filGramNegativa").style.display = "none";
        displayFlexGramNegativa = false;
    }

}

/*função para mostrar filtros: Morfologia*/
var displayFlexMorfologia = false;
function mostrarMorfologia() {

    if(displayFlexMorfologia == false) {
        document.getElementById("filMorfologia").style.display = "flex";
        displayFlexMorfologia = true;

        displayFlexNome = false;
        document.getElementById("filNome").style.display = "none";

        displayFlexAntibiotico = false;
        document.getElementById("filAntibiotico").style.display = "none";

        displayFlexGramPositiva = false;
        document.getElementById("filGramPositiva").style.display = "none";

        displayFlexGramNegativa = false;
        document.getElementById("filGramNegativa").style.display = "none";
    }
    else {
        document.getElementById("filMorfologia").style.display = "none";
        displayFlexMorfologia = false;
    }
}