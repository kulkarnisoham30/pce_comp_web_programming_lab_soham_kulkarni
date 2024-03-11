function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var atposition = email.indexOf("@");
    var dotposition = email.lastIndexOf(".");
    
    if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {
        alert("Please enter a valid email address");
        return false;
    }
    
    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
    }
    return true;
}
