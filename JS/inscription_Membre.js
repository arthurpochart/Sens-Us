const mdpMembre = document.getElementById("M.mdp");
const mdpConfirmMembre = document.getElementById("M.mdp-confirm");
const inscriptionMembre = document.getElementsByClassName("registerbtn")[0];
const labelMdpConfirmMembre = document.getElementById("M.label-mdp-confirm");

let p = document.createElement("p");

mdpMembre.addEventListener("input", longueur);
mdpConfirmMembre.addEventListener("input", longueur);
    
function longueur() {
  if (mdpMembre.value.length >= 6) {
    mdpConfirmMembre.disabled = false;
    if (mdpMembre.value === mdpConfirmMembre.value) {
      inscriptionMembre.disabled = false;
      p.remove();
    } else {
      inscriptionMembre.disabled = true;
      p.textContent = "Les mots de passes sont différents";
      labelMdpConfirmMembre.append(p);
      p.style.color = "red";
      p.textAlign = "center";
    }
  } else {
    mdpConfirmMembre.value = "";
    mdpConfirmMembre.disabled = true;
  }
}
