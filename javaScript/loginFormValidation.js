window.addEventListener('DOMContentLoaded',(event)=>{
    const form = document.getElementById('loginform');

    form.addEventListener('submit',function(event){
        const errorTxt = document.querySelector('.error-txt');
        errorTxt.innerHTML='';
        const email=document.getElementById('email').value;
        const pass=document.getElementById('pass').value;


        if(pass.length<8){
            displayError("Password must be at least 8 characters long");
            event.preventDefault();
        }
        
        let errorDisplayed = false; 

        const inputs = form.querySelectorAll('input:not([type="file"])');
        inputs.forEach(input => {
        if (input.value.trim() === "" && !errorDisplayed) {
            displayError("All fields must be filled");
            event.preventDefault();
            errorDisplayed = true;
        }
        });

        if (errorDisplayed) {
            errorTxt.style.display = 'block';
        } else {
            errorTxt.style.display = 'none';
        }
    });
});

function displayError(message){
    const errorDiv=document.createElement('div');
    errorDiv.classList.add('error');
    errorDiv.textContent=message;
    const errorTxt = document.querySelector('.error-txt');
    errorTxt.appendChild(errorDiv);
}