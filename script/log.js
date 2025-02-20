const form = document.getElementById('form')
form.addEventListener("submit", prevent=>{
    prevent.preventDefault()
    validateInputs()
})
function validateInputs(){
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById("message")
    let message;

    valid1 = "Abiolayusuf";
    valid2= "abiolayusuf@12345"
    
    if (username.trim() === valid1 && password.trim() === valid2){
        document.getElementById('success').innerHTML = 'sucessful login';
        // redirect code in page
        window.location.href = '../dash.php'
        return false;
    }
    else if (username.trim() ==="") {
          message = "username and password cannot be blank" 
          errorMessage.textContent =message
        }
    else if (username !==valid1) {
        message ="Invalid username"
        errorMessage.textContent =message
    }
    
   else if (password.trim() ==="") {
        message = "password cannot be blank"
        errorMessage.textContent=message
    }
    else if (password.trim() !==valid2) {
        message = "please check the password"
        errorMessage.style.color="rgba(235, 8, 8, 0.908) "
        errorMessage.textContent=message
    }
    else{
        message="Successfully Login"
        errorMessage.style.color="rgba(0, 128, 0, 0.818)"
        errorMessage.textContent= message
        window.location.href = '../dash.php'
        
    }
}