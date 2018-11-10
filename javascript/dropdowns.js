/*
 * Used for interactions with the dropdowns
 * Source: https://www.w3schools.com/howto/howto_js_dropdown.asp
 */

/*
 * When the user clicks on the SortBy button,
 * toggle between hiding and showing the dropdown content
 */
function SortByDropdown() {
    document.getElementById("SortByDropdown").classList.toggle("show");
}

/*
 * When the user clicks on the ResultsPerPage button,
 * toggle between hiding and showing the dropdown content
 */
function ResultsPerPageDropdown() {
  document.getElementById("ResultsPerPageDropdown").classList.toggle("show");
}

/*
 * Close the dropdown if the user clicks outside of it
 * TO DO: If the another dropdown is clicked on, the original dropdown will stay
 *        opened.
 */
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
