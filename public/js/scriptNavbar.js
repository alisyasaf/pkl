// const menu = document.getElementById('menu-label');
// const sidebar = document.getElementsByClassName('sidebar')[0];


// get the sidebar element
const sidebar = document.getElementsByClassName('sidebar')[0];

// get the toggle button element
const toggleButton = document.querySelector("#menu-checkbox");

// check if the sidebar state is stored in local storage
const sidebarState = localStorage.getItem("sidebarState");

// update the sidebar based on the stored state
if (sidebarState === "mini") {
  sidebar.classList.add("hide");
  toggleButton.checked = true;
} else {
  sidebar.classList.remove("hide");
  toggleButton.checked = false;
}

// add an event listener to the toggle button
toggleButton.addEventListener("change", function () {
  if (this.checked) {
    // store the mini state in local storage
    localStorage.setItem("sidebarState", "mini");
    sidebar.classList.add("hide");
  } else {
    // store the large state in local storage
    localStorage.setItem("sidebarState", "large");
    sidebar.classList.remove("hide");
  }
});



// menu.addEventListener('click', function(){
//     sidebar.classList.toggle('hide');
//     console.log('ok');
// })
