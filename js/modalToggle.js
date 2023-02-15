var modalToggle = false;
let modalButtonListener = "", modalDivListener = "";
 
//toggle menu open or closed
function toggleModal(modalDivString, modalButtonString){
  
  let modalDiv = document.getElementById(modalDivString);
  let modalButton = document.getElementById(modalButtonString);
  if(!modalToggle){
    modalDiv.classList.add("open-modal");
    modalButton.ariaExpanded = true;
    modalToggle = true;

    modalDivListener = modalDivString;
    modalButtonListener = modalButtonString;

    modalButton.addEventListener('keydown', (event) => escapeFromModal(event));
    modalDiv.addEventListener('keydown', (event) => escapeFromModal(event));
  }else{
    modalDiv.classList.remove("open-modal");
    modalButton.ariaExpanded = false;
    modalToggle = false;

    console.log("I am here");
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

