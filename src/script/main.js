


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

