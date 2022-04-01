function verif1() {
  var NCIN = document.getElementById("NCIN");
  var Nom = document.getElementById("Nom");
  var Prenom = document.getElementById("Prenom");
  var Tel = document.getElementById("Tel");
  if (NCIN.value.length != 8) {
    alert("NCIN est une chaine de 8 chiffres");
    NCIN.focus;
    return false;
  }
  if (verifapl(Nom.value) == false || verifapl(Prenom.value) == false) {
    alert("Nom et Prenom est une chaine de caractaire de minimum 3 lettres");
    Nom.focus;
    return false;
  }
  if (Tel.value.length != 8 || verifnum(Tel.value) == false) {
    alert(
      "numero de tel est composer de 8 chiffres et le premier est different de 0-1-6"
    );
    Tel.focus;
    return false;
  }
}
function verifapl(txt) {
  var lettre = /^[A-Za-z ]+$/;
  var check = txt.match(lettre);
  if (check && txt.length >= 3) {
    return true;
  } else {
    return false;
  }
}
function verifnum(txt) {
  if (isNaN(txt)) {
    return false;
  }
  let n = txt[0];
  if (n == "0" || n == "1" || n == "6") {
    return false;
  } else {
    return true;
  }
}
function verif2() {
  var n = document.getElementById("n");
  var TU = document.getElementById("TU");
  if (n.value.length != 3 || isNaN(n.value)) {
    alert("numero de serie doit etre composer de 3 chiffres");
    n.focus;
    return false;
  }
  if (!between(parseInt(TU.value), 1, 9999) || isNaN(TU.value)) {
    alert(between(parseInt(TU.value), 1, 9999));
    n.focus;
    return false;
  }
}
function between(x, min, max) {
  return x >= min && x <= max;
}
