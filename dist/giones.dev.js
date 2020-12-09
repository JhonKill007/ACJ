"use strict";

function mascara_cedula() {
  var cedula = document.getElementById("numero");

  if (cedula.value.length == 3) {
    cedula.value += "-";
  } else if (cedula.value.length == 7) {
    cedula.value += "-";
  }
}