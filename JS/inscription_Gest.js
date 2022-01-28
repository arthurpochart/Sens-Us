const mdpGest = document.getElementById("C.mdp");
const mdpConfirmGest = document.getElementById("C.mdp-confirm");
const inscriptionGest = document.getElementsByClassName("registerbtn")[0];

const labelMdpGest = document.getElementById("C.label-mdp");
const labelMdpConfirmGest = document.getElementById("C.label-mdp-confirm");


const labelEmailGest = document.getElementById("C.label-email");
const labelEmailConfirmGest = document.getElementById("C.label-email-confirm");
const emailGest = document.getElementById("C.email");
const emailConfirmGest = document.getElementById("C.email-confirm");

let p = document.createElement("p");

mdpGest.addEventListener("input", longueur);
mdpConfirmGest.addEventListener("input", longueur);

emailGest.addEventListener("input", email);
emailConfirmGest.addEventListener("input", email);

function longueur() {
    if (mdpGest.value.length >= 6) {
        mdpConfirmGest.disabled = false;
        if (mdpGest.value === mdpConfirmGest.value) {
          inscriptionGest.disabled = false;
          p.remove();
        } else {
          inscriptionGest.disabled = true;
          p.textContent = "Les mots de passes sont différents";
          labelMdpConfirmGest.append(p);
          p.style.color = "red";
          p.textAlign = "center";
        }
    } else {
        p.textContent = "6 caractères minimum !";
        labelMdpGest.append(p);
        p.style.color = "red";
        p.textAlign = "center";
        mdpConfirmGest.value = "";
        mdpConfirmGest.disabled = true;
    }
}

function email() {
  if (emailGest.value.length >= 8) {
    emailConfirmGest.disabled = false;
    if (emailGest.value === emailConfirmGest.value) {
      p.remove();
    } else {
      inscriptionGest.disabled = true;
      p.textContent = "Les adresses mails sont différents";
      labelEmailConfirmGest.append(p);
      p.style.color = "red";
      p.textAlign = "center";
    }
  } else {
    p.textContent = "Votre adresse email est trop courte donc invalide !";
    labelEmailGest.append(p);
    p.style.color = "red";
    p.textAlign = "center";
    emailConfirmGest.value = "";
    emailConfirmGest.disabled = true;
  }
}