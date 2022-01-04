const mdpGest = document.getElementById("C.mdp");
const mdpConfirmGest = document.getElementById("C.mdp-confirm");
const inscriptionGest = document.getElementsByClassName("registerbtn")[0];
const labelMdpConfirmGest = document.getElementById("C.label-mdp-confirm");

let p = document.createElement("p");

mdpGest.addEventListener("input", longueur);
mdpConfirmGest.addEventListener("input", longueur);

function longueur() {
    if (mdpGest.value.length >= 6) {
        mdpConfirmGest.disabled = false;
        if (mdpGest.value === mdpConfirmGest.value) {
          inscriptionGest.disabled = false;
          p.remove();
        } else {
          inscriptionMembre.disabled = true;
          p.textContent = "Les mots de passes sont différents";
          labelMdpConfirmGest.append(p);
          p.style.color = "red";
          p.textAlign = "center";
        }
    } else {
        mdpConfirmGest.value = "";
        mdpConfirmGest.disabled = true;
    }
}