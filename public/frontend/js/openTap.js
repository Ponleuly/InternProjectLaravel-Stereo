function openTab(evt, tabName) {
    var i, x, tabcontent;
    x = document.getElementsByClassName("mylibrary-tab");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < x.length; i++) {
      tabcontent[i].className = tabcontent[i].className.replace(" active-tab", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active-tab";
}