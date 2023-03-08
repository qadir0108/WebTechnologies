// Get elements from the DOM
let color1 = document.getElementById("color1");
let color2 = document.getElementById("color2");
let gradient_box = document.getElementById("gradient-box");
let color_code = document.getElementById("color-code");
let copybtn = document.getElementById("copyBtn");

// Function that changes the gradient when the input values are changed
function changeGradient() {
    // Set the gradient box background to the linear gradient generated using the input values
    gradient_box.style.background = `linear-gradient(45deg, ${color1.value}, ${color2.value})`;
    // Update the color code value with the current gradient
    color_code.value = `${gradient_box.style.background} ;`
}

// Event listeners for color inputs
color1.addEventListener("input", changeGradient);
color2.addEventListener("input", changeGradient);

// Event listener for copy button
copyBtn.addEventListener("click", () => {
    // Select the color code text
    color_code.select();
    // Copy the selected text to the clipboard
    document.execCommand("copy");
    // Show alert that code has been copied
    alert("Code Copied To Clipboard");
});
