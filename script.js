//gives a tooltip to the PSA at the bottom of the form's container  
function makeTextContentsATooltip(targetElement, elementText){
    targetElement.title = elementText; 
}

const dataPolicyDisclaimer = document.querySelector(".data-policy-disclaimer > h6"); 
makeTextContentsATooltip( dataPolicyDisclaimer, dataPolicyDisclaimer.innerText )
  






//snackbar
function createSnackBar() {
  let s = document.createElement('div');
  s.id = 'snackbar';
  s.textContent = 'Error : All fields need to be filled out';
  document.body.append(s);
}
// init
createSnackBar();
let snackBarTimeout;

function showSnackBar(e) {
  const snackbar = document.querySelector('#snackbar');
  snackbar.classList.add('show');

  clearTimeout(snackBarTimeout);

  snackBarTimeout = setTimeout(() => {
    snackbar.classList.remove('show');
  }, 1500);
}

function submitSuccessful(){
    document.getElementsByTagName("form")[0].reset()
}

function validateForm(e){
    e.preventDefault()
    const inputs = Array.from ( document.getElementsByTagName('input') );
    const inputsToValidate = inputs.filter( el => el.classList.contains("validate-field") );
    
    let isInvalidFieldValue; 
    inputsToValidate.forEach( textInput => {
        
        
        if( textInput.value.search(/\s*[\w\d]+\s*/) === -1 ){
           isInvalidFieldValue = true 
        }
    })
    
    
    if( isInvalidFieldValue ){
        showSnackBar()
    }else if( isInvalidFieldValue === undefined ){
        submitSuccessful()           
    } 
    
}



const submitButtons = Array.from( document.getElementsByClassName('submit') );
submitButtons.forEach( btn => { 
    btn.addEventListener('click', validateForm); 
})