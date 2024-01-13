function redirectToSection() {
  // Get the reference to the section element
  var section = document.getElementById("priceSection");

  // Scroll to the section
  section.scrollIntoView({ behavior: "smooth" });
}





/*let menu =document.querySelector('#menu-icon');
let navlist = document.querySelector('.nav-links');

menu.onclick =() => {
menu.classList.toggle('bx-x');
navlist.classList.toggle('open');
}*/


function toggleForm(cardId) {
  // Set the card identifier in the hidden input field
  document.getElementById("card_id").value = cardId;

  // Toggle the visibility of the form
  var form = document.getElementById("contactForm");
  form.style.display = form.style.display === "none" ? "block" : "none";
}

// Stop propagation function to prevent form toggle when clicking on the form itself
function stopPropagation(event) {
  event.stopPropagation();
}



// Select the close button by its id
var closeButton = document.getElementById("close-btn");

// Add an event listener to the close button
closeButton.addEventListener("click", function() {
  // Select the form element by its id
  var form = document.getElementById("contactForm");
  // Set the form element's display to none
  form.style.display = "none";
});



/*hiding form*/


  