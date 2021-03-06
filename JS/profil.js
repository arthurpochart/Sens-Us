const label = document.getElementsByTagName("label");
const modificationPerso = document.getElementById("modificationPerso");
const sauvegardePerso = document.getElementById("sauvegardePerso");

const modificationGroupe = document.getElementById("modificationGroupe");
const sauvegardeGroupe = document.getElementById("sauvegardeGroupe");

function modifierInfosPerso(nbrChamps) {
    let labelInfosPerso = Object.entries(label);
    labelInfosPerso.splice(nbrChamps, (label.length-nbrChamps));

    i = 0;
    for (item of labelInfosPerso) {
        const inputInfosPerso = document.createElement("input");
        const spanInfos = document.createElement("span");
        
        valeurAttribut = item[1].getAttribute("for");
        if (i == 2) {
        inputInfosPerso.setAttribute("type", "email");
        } else {
        inputInfosPerso.setAttribute("type", "text");
        }
        inputInfosPerso.setAttribute("id", valeurAttribut);
        inputInfosPerso.setAttribute("name", valeurAttribut);
        valeurInput = item[1].textContent.split(": ");
        item[1].textContent = "";
        inputInfosPerso.setAttribute("value", valeurInput[1]);

        titreInput = valeurInput[0] + " : ";
        spanInfos.append(titreInput);
        item[1].append(spanInfos);
        item[1].append(inputInfosPerso);
        i += 1;
    }
    modificationPerso.disabled = true;
    sauvegardePerso.disabled = false;
}

function modifierInfosGroupe(nbrChamps) {
    let labelInfosGroupe = Object.entries(label);
    labelInfosGroupe.splice(0, nbrChamps);
    // labelInfosGroupe.splice(-1, 1); Si on veut pas input le champ code Groupe

    i = 0;
    for (item of labelInfosGroupe) {
        const inputInfosGroupe = document.createElement("input");
        const spanInfos = document.createElement("span");

        valeurAttribut = item[1].getAttribute("for");

        inputInfosGroupe.setAttribute("type", "text");
        inputInfosGroupe.setAttribute("id", valeurAttribut);
        inputInfosGroupe.setAttribute("name", valeurAttribut);
        valeurInput = item[1].textContent.split(": ");
        item[1].textContent = "";
        inputInfosGroupe.setAttribute("value", valeurInput[1]);

        titreInput = valeurInput[0] + " : ";
        spanInfos.append(titreInput);
        item[1].append(spanInfos);
        item[1].append(inputInfosGroupe);
        i += 1;
    }
    modificationGroupe.disabled = true;
    sauvegardeGroupe.disabled = false;
}