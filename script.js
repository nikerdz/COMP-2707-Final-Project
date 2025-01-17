/*Back to Top Button Functions*/
let mybutton = document.getElementById("topButton");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
}

/*Tutorial Search Functions*/
const searchInput = document.getElementById('searchInput');
const tilesContainer = document.querySelector('.tiles');

function filterTiles(searchTerm) {
    const tiles = tilesContainer.querySelectorAll('.tile');
    tiles.forEach(tile => {
        const text = tile.innerText.toLowerCase();
        if (text.includes(searchTerm.toLowerCase())) {
            tile.style.display = 'block';
        } else {
            tile.style.display = 'none';
        }
    });
}

searchInput.addEventListener('input', function() {
    filterTiles(this.value.trim());
});

/*Validate Feedback Form Functions*/
function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (name.trim() == "" || email.trim() == "" || message.trim() == "") {
      alert("Please fill in all fields.");
      return false;
  } else if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return false;
  }
  return true;
}