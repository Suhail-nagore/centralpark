// Function to open the popup
function openPopup() {
  document.getElementById("popup-container").style.display = "block";
}

// Function to close the popup
function closePopup() {
  document.getElementById("popup-container").style.display = "none";
}

// Event listener for the specific <a> tag with the id "open-popup"
document
  .getElementById("open-popup")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default behavior of following the link
    openPopup();
  });

// Event listener for the close button
document.getElementById("close-popup").addEventListener("click", closePopup);

// Event listener to close the popup when clicking outside of it
window.addEventListener("click", function (event) {
  var popup = document.getElementById("popup-content");
  if (event.target == popup) {
    closePopup();
  }
});
