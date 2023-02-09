let num = 0;

const value = document.querySelector(".value");
const btns = document.querySelectorAll(".btn");
/*it will return all nodes in console, and the nodelist is accessed by the index-number and the index is accessed by the for-each loop, so i will use for-each loop here:  */

btns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    const styles = e.currentTarget.classList;
    if (styles.contains("decrease")) {
      num--;
    } else if (styles.contains("increase")) {
      num++;
    } else {
      num = 0;
    }
    // styling the color on values
    value.textContent = num;
    if (num > 0) {
      value.style.color = "green";
    } else if (num < 0) {
      value.style.color = "red";
    } else {
      value.style.color = "black";
    }
  });
});
