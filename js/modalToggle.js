var modalToggle = false;
let modalButtonListener = "", modalDivListener = "";
 
//toggle menu open or closed
function toggleModal(modalDivString, modalButtonString){
  
  let modalDiv = document.getElementById(modalDivString);
  let modalButton = document.getElementById(modalButtonString);
  if(!modalToggle){
    modalDiv.classList.toggle("open-modal");
    modalButton.ariaExpanded = true;
    modalToggle = true;
    document.body.classList.add("no-scroll");
    modalDivListener = modalDivString;
    modalButtonListener = modalButtonString;

    modalButton.addEventListener('keydown', (event) => escapeFromModal(event));
    modalDiv.addEventListener('keydown', (event) => escapeFromModal(event));
  }else{
    modalDiv.classList.toggle("open-modal");
    modalButton.ariaExpanded = false;
    modalToggle = false;
    document.body.classList.remove("no-scroll");
    console.log(modalDivListener);
    modalButton.removeEventListener('keydown', escapeFromModal);
    modalDiv.removeEventListener('keydown', escapeFromModal);
    modalDivListener = "";
    modalButtonListener = "";
  }
}

function escapeFromModal(event){
  if(event.key === "Escape" && modalToggle == true)
    {
      toggleModal(modalDivListener, modalButtonListener);
  }
}

window.onload = init;

// onload function
function init() {
}

