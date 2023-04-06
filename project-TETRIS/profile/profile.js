
// Get the textarea element
const userStatusTextarea = document.getElementById("userStatus");

userStatusTextarea.addEventListener("keydown", function(event) {
  if (event.key === "Enter" && !event.shiftKey) {
    event.preventDefault();
    const form = document.querySelector("form");
    form.submit();
  }
}, {capture: true});


