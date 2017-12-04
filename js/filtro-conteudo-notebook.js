filterSelection("all")
function filterSelection(materia) {
  var element, i;
  element = document.getElementsByClassName("filterDiv");
  if (materia == "all") materia = "";
  for (i = 0; i < element.length; i++) {
    removeClasse(element[i], "show");
    if (element[i].className.indexOf(materia) > -1) addClasse(element[i], "show");
  }
}

function addClasse(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function removeClasse(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}
