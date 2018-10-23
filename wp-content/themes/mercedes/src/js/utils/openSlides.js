import "@babel/polyfill";
//import "nodelist-foreach-polyfill";

export const openSlides = () => {
  const slider = document.querySelector(".slide-open-container1");
  const button = document.querySelector(
    ".slide-open-container1 .slide-open-toggle"
  );
  const closedContent = document.querySelector(
    ".slide-open-container1 .slide-open-content"
  );
  const openContent = document.querySelector(
    ".slide-open-container1 .slide-open-content-inner-container"
  );
  console.log("button", button)
  if (button != null) {
    button.addEventListener("click", function() {
     closedContent.classList.toggle("closed");
     openContent.classList.toggle("closed");
     button.classList.toggle("closed");
    });
  }
};
