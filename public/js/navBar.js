document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.getElementById('menu-toggle');
    var closeMenuButton = document.getElementById('close-menu');
    var menu = document.getElementById('menu');

    menuToggle.addEventListener('click', function(event) {
        toggleMenu();
        event.stopPropagation(); // Prevent the click event from propagating to document
    });

    closeMenuButton.addEventListener('click', function(event) {
        toggleMenu();
        event.stopPropagation(); // Prevent the click event from propagating to document
    });

    window.onclick = function(event) {
        if (event.target === menu) {
            toggleMenu();
        }
    };

    function toggleMenu() {
        menu.classList.toggle('hidden');
        menuToggle.classList.toggle('hidden');
    }
});


/* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("block");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
