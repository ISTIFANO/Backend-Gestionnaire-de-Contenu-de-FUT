


const frLocalstorage = JSON.parse(localStorage.getItem('formationSelect'));


switch (frLocalstorage) {
  case '433':

    container.style.gridTemplateAreas =
      '". . gk . ." ' +
      '". cb1 . cb2 ." ' +
      '"lb . . . rb" ' +
      '". . dm . ." ' +
      '"cml . . . cmr" ' +
      '"lw . cf . rw"';
    break;
  case '442':
    console.log("formationAZ");

    container.style.gridTemplateAreas =
      '". . gk . ." ' +
      '". cb1 . cb2 ." ' +
      '"lb . . . rb" ' +
      '"lw cml . dm cmr" ' +
      '". . . . . " ' +
      '". cf . rw ."';
    break;
  case '352':

    container.style.gridTemplateAreas =
      '". . gk . ." ' +
      '" lb .cb1 . cb2" ' +
      '" . . . . . " ' +
      '"lw cml dm cmr rb" ' +
      '" . . . . ." ' +
      '" . cf . rw ."';
    break;
}
document.getElementById('formation').querySelectorAll('option').forEach(element => {

  if (element.value == frLocalstorage) {
    element.selected = true;
  } else {
    element.selected = false;
  }
});


function changeFormation() {
  console.log("formation1A");

  const formation = document.getElementById('formation').value;
  const container = document.getElementById('container');
  if (localStorage.setItem('formationSelect', JSON.stringify(formation)) !== formation) {

    localStorage.setItem('formationSelect', JSON.stringify(formation));
  }


  const frLocalstorage = JSON.parse(localStorage.getItem('formationSelect'))


  switch (frLocalstorage) {
    case '433':
      container.style.gridTemplateAreas =
        '". . gk . ." ' +
        '". cb1 . cb2 ." ' +
        '"lb . . . rb" ' +
        '". . dm . ." ' +
        '"cml . . . cmr" ' +
        '"lw . cf . rw"';
      break;
    case '442':
      console.log("formationAZ");

      container.style.gridTemplateAreas =
        '". . gk . ." ' +
        '". cb1 . cb2 ." ' +
        '"lb . . . rb" ' +
        '"lw cml . dm cmr" ' +
        '". . . . . " ' +
        '". cf . rw ."';
      break;
    case '352':

      container.style.gridTemplateAreas =
        '". . gk . ." ' +
        '" lb .cb1 . cb2" ' +
        '" . . . . . " ' +
        '"lw cml dm cmr rb" ' +
        '" . . . . ." ' +
        '" . cf . rw ."';
      break;
  }
}


function showModal() {
  document.getElementById("modal").style.display = "block";
}


function closeModal() {
  document.getElementById("modal").style.display = "none";
}

window.onclick = function(event) {
  var modal = document.getElementById("modal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function showModalEdit() {
  // console.log(ui);
  
  document.getElementById("modalEdit").style.display = "block";
}


function closeModalEdit() {
  document.getElementById("modalEdit").style.display = "none";
}

window.onclick = function(event) {
  var modal = document.getElementById("modalEdit");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}