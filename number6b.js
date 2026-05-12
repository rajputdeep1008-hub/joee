function validateForm()
{
    // Variables
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;

    // Check empty name
    if(name == "") 
    {
        alert("Name field is empty");
        return false;
    }

    // Check empty email
    if(email == "")
    {
        alert("Email field is empty");
        return false;
    }

    // Validate email format
    if(email.includes("@") == false)
    {
        alert("Invalid Email");
        return false;
    }

    alert("Form Submitted Successfully");

    return true;
}