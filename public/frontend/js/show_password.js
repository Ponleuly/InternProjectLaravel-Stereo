function show_pass() {
    var x = document.getElementById("password");
    
    if (x.type === "password") {
        x.type = "text";
        document.getElementById("show-hide-pass").innerText = "visibility";
    } else {
      x.type = "password";
        document.getElementById("show-hide-pass").innerText = "visibility_off";
    }
}
function show_cpass() {
    var x = document.getElementById("cpassword");
    if (x.type === "password") {
        x.type = "text";
        document.getElementById("show-hide-cpass").innerText = "visibility";
    } else {
        x.type = "password";
        document.getElementById("show-hide-cpass").innerText = "visibility_off";
    }
}