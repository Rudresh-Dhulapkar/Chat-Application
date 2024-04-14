window.addEventListener('DOMContentLoaded', (event) => {
    const form = document.getElementById('signupform');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const errorTxt = document.querySelector('.error-txt');
        errorTxt.innerHTML = '';

        const fname = document.getElementById('fname').value;
        const lname = document.getElementById('lname').value;
        const email = document.getElementById('email').value;
        const pass = document.getElementById('pass').value;

        let errorDisplayed = false;

        if (!/^[a-zA-Z]+$/.test(fname) || !/^[a-zA-Z]+$/.test(lname)) {
            displayError("Name can only contain letters");
            errorDisplayed = true;
        }

        if (pass.length < 8) {
            displayError("Password must be at least 8 characters long");
            errorDisplayed = true;
        }

        const inputs = form.querySelectorAll('input:not([type="file"])');
        inputs.forEach(input => {
            if (input.value.trim() === "" && !errorDisplayed) {
                displayError("All fields must be filled");
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

function displayError(message) {
    const errorDiv = document.createElement('div');
    errorDiv.classList.add('error');
    errorDiv.textContent = message;
    const errorTxt = document.querySelector('.error-txt');
    errorTxt.appendChild(errorDiv);
}