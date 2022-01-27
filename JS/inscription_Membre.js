const mdpMembre = document.getElementById("M.mdp");
const mdpConfirmMembre = document.getElementById("M.mdp-confirm");
const inscriptionMembre = document.getElementsByClassName("registerbtn")[0];

const labelMdpMembre = document.getElementById("M.label-mdp");
const labelMdpConfirmMembre = document.getElementById("M.label-mdp-confirm");

const labelEmailMembre = document.getElementById("M.label-email");
const labelEmailConfirmMembre = document.getElementById("M.label-email-confirm");
const emailMembre = document.getElementById("M.email");
const emailConfirmMembre = document.getElementById("M.email-confirm");

let p = document.createElement("p");

mdpMembre.addEventListener("input", longueur);
mdpConfirmMembre.addEventListener("input", longueur);

emailMembre.addEventListener("input", email);
emailConfirmMembre.addEventListener("input", email);
    
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
    p.textContent = "6 caractères minimum !";
    labelMdpMembre.append(p);
    p.style.color = "red";
    p.textAlign = "center";
    mdpConfirmMembre.value = "";
    mdpConfirmMembre.disabled = true;
  }
}

function email() {
  if (emailMembre.value.length >= 8) {
    emailConfirmMembre.disabled = false;
    if (emailMembre.value === emailConfirmMembre.value) {
      p.remove();
    } else {
      inscriptionMembre.disabled = true;
      p.textContent = "Les adresses mails sont différents";
      labelEmailConfirmMembre.append(p);
      p.style.color = "red";
      p.textAlign = "center";
    }
  } else {
    p.textContent = "Votre adresse email est trop courte donc invalide !";
    labelEmailMembre.append(p);
    p.style.color = "red";
    p.textAlign = "center";
    emailConfirmMembre.value = "";
    emailConfirmMembre.disabled = true;
  }
}