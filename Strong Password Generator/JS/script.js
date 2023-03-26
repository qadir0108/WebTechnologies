// Getting the HTML elements we need to interact with
let inputSlider = document.getElementById("inputSlider");
let sliderValue = document.getElementById("sliderValue");
let passBox = document.getElementById("passBox");
let lowercase = document.getElementById("lowercase");
let uppercase = document.getElementById("uppercase");
let numbers = document.getElementById("numbers");
let symbols = document.getElementById("symbols");
let genBtn = document.getElementById("genBtn");
let copyIcon = document.getElementById("copyIcon");


// Showing input slider value 
// Add an event listener to the inputSlider to update the textContent of the sliderValue element as the slider is moved
sliderValue.textContent = inputSlider.value;
inputSlider.addEventListener('input', ()=>{
    sliderValue.textContent = inputSlider.value;
});

// Add an event listener to the generate button to call the generatePassword function and set the result as the value of the passBox element
genBtn.addEventListener('click', ()=>{
    passBox.value = generatePassword();
})

// Define variables containing strings of all possible characters for each character type
let lowerChars = "abcdefghijklmnopqrstuvwxyz";
let upperChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
let allNumbers = "0123456789";
let allSymbols = "~!@#$%^&*"; 

// Function to generate Password
function generatePassword(){
    let genPassword = ""; // Create an empty string to build the generated password
    let allChars = ""; // Create an empty string to hold all possible characters based on user input

    // Check each character type checkbox to see if it is checked, and if it is, add its characters to the allChars string
    allChars  += lowercase.checked ? lowerChars : "";
    allChars  += uppercase.checked ? upperChars : "";
    allChars  += numbers.checked ? allNumbers : "";
    allChars  += symbols.checked ? allSymbols : "";

    // If none of the character type checkboxes are checked, return an empty string
    if(allChars == "" || allChars.length == 0){
        return genPassword;
    }

    // Use a while loop to generate a password of length equal to the inputSlider value
    let i = 1;
    while(i<=inputSlider.value){
        genPassword += allChars.charAt(Math.floor(Math.random() * allChars.length)); // Append a random character from the allChars string to the genPassword string
        i++;
    }

    return genPassword; // Return the generated password string
}

// Add an event listener to the copy icon to copy the value of the passBox element to the clipboard when clicked
copyIcon.addEventListener('click', ()=>{
    if(passBox.value != "" || passBox.value.length >=1){
        navigator.clipboard.writeText(passBox.value);
        copyIcon.innerText = "check";
        copyIcon.title = "Password Copied";

        setTimeout(()=>{
            copyIcon.innerHTML = "content_copy";
            copyIcon.title = "";
        }, 3000)
    } else {
        // alert("Please generate a password first!");
        swal("PassShake says", "Please generate password first!", "warning", {
  button: "Aww yiss!",
});
    }
});


