function validateForm() {  
        var name = document.myform.name.value;  
        var password = document.myform.password.value;  
        var email = document.getElementById("email").value;
        var phone = document.myform.phone.value;
        var atposition = email.indexOf("@");
        var dotposition = email.lastIndexOf(".");
          
        if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {
            alert("Please enter a valid email address");
            return false;
        }

        if (name == null || name == "") {  
            alert("Name can't be blank");  
            return false;  
        } else if (password.length < 6) {  
            alert("Password must be at least 6 characters long.");  
            return false;  
        } 
    
        if (phone.length !== 10) {
            alert("Phone number must be exactly 10 digits long.");
            return false;
        }
    
        return true; // Form is valid if it reaches this point
    }
    
 
