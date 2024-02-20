const GetCOl = () =>{
     const RandomNumber = Math.floor(Math.random() * 1677215 );
     // this number is to make the random-number suitable for the hexa-decimal color code 
     const randomcode = "#" + RandomNumber.toString(16);
     // Multiplying by 16 meaans we are making a random code to hex-color 
    //  console.log(RandomNumber, randomcode);
    document.body.style.background = randomcode;
    document.getElementById("colorcode").innerText= randomcode;
// copying the color-code to clip-board
     navigator.clipboard.writeText(randomcode);
}
// event call 
document.getElementById("btn").addEventListener("click", GetCOl);
// initial call 
GetCOl();