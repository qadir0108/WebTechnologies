// This function is named changeColor and does not take any arguments.
function changeColor() {
  // Sets the background color of the body element to a randomly generated RGB value.
  document.body.style.backgroundColor =
    'rgb(' + Math.round(Math.random() * 255) +
    ',' + Math.round(Math.random() * 255) +
    ',' + Math.round(Math.random() * 255) + ')';
}
function copyColor() {
  // Getting  the current background color of the body 
  var color = document.body.style.backgroundColor;
  // Copying the current color to the clipboard using the Clipboard API.
  navigator.clipboard.writeText(color);  
  // Displays an alert indicating the color has been copied.
  alert('Color copied to clipboard!');
}
