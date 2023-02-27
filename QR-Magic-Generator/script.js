// Get the necessary elements from the DOM
let imgbox = document.getElementById("imgbox");
let qrImage = document.getElementById("qrImage");
let qrText = document.getElementById("qrText");
let downloadBtn = document.getElementById("downloadBtn");

// Function to generate the QR code image
function generateQR() {
  // Check if the text input is not empty
  if (qrText.value.length > 0) {
    // Set the source URL of the QR code image using the API with the provided text and color options
    qrImage.src =
      "https://api.qrserver.com/v1/create-qr-code/?size=150x150&bgcolor=FFD700&color=6B3FA0&data=" +
      qrText.value;

    // Show the image container and enable the download button
    imgbox.classList.add("show-img");
    downloadBtn.disabled = false;
  } else {
    // Add error class to the text input and remove it after 1 second
    qrText.classList.add("error");
    setTimeout(() => {
      qrText.classList.remove("error");
    }, 1000);
  }
}
function downloadQR() {
  // Get the source URL of the QR code image
  const qrCodeImage = document.getElementById("qrImage");
  const qrCodeURL = qrCodeImage.getAttribute("src");

  // Fetch the image as a blob
  fetch(qrCodeURL)
    .then((response) => response.blob())
    .then((blob) => {
      // Create a URL for the blob
      const blobURL = window.URL.createObjectURL(blob);

      // Create an anchor element and set its attributes
      const downloadLink = document.createElement("a");
      downloadLink.href = blobURL;
      downloadLink.download = "QR-by-Zeeshan.png";
      downloadLink.style.display = "none";

      // Add the link to the document and simulate a click
      document.body.appendChild(downloadLink);
      downloadLink.click();

      // Clean up by removing the link and releasing the URL object
      document.body.removeChild(downloadLink);
      window.URL.revokeObjectURL(blobURL);
    })
    .catch((error) => console.error(error));
}
