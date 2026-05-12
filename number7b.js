function changeName()
{
    // Input value lena
    var newName =
    document.getElementById("name").value;

    // H1 update karna
    document.getElementById("heading").innerHTML =
    "Hello " + newName;
} 