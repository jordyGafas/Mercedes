import "@babel/polyfill";
//import "nodelist-foreach-polyfill";

export const openSlides = () => {
  var slider = document.querySelector(".slide-open-container1");
  var button = document.querySelector(
    ".slide-open-container1 .slide-open-toggle"
  );
  var closedContent = document.querySelector(
    ".slide-open-container1 .slide-open-content"
  );
  var openContent = document.querySelector(
    ".slide-open-container1 .slide-open-content-inner-container"
  );
  console.log("button", button);
  if (button != null) {
    button.addEventListener("click", function() {
      closedContent.classList.toggle("closed");
      openContent.classList.toggle("closed");
      button.classList.toggle("closed");
    });
  }

  var slider2 = document.querySelector(".slide-open-container2");
  var button2 = document.querySelector(".slide-open-container2 .slide-open-toggle");
  var closedContent2 = document.querySelector(
    ".slide-open-container2 .slide-open-content"
  );
  var openContent2 = document.querySelector(
    ".slide-open-container2 .slide-open-content-inner-container"
  );
  console.log("button", button2);
  if (button2 != null) {
    button2.addEventListener("click", function() {
      closedContent2.classList.toggle("closed");
      openContent2.classList.toggle("closed");
      button2.classList.toggle("closed");
    });
  }
};
