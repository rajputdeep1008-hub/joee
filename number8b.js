function calculate()
{
    // Variables
    var num1 = parseFloat(document.getElementById("num1").value);
    var num2 = parseFloat(document.getElementById("num2").value);

    var operation = document.getElementById("operation").value;

    var result;

    // Switch Case
    switch(operation)
    {
        case "+":
            result = num1 + num2;
            break;

        case "-":
            result = num1 - num2;
            break;

        case "*": 
            result = num1 * num2;
            break;

        case "/":
            result = num1 / num2;
            break;

        default:
            result = "Invalid Operation";
    }

    document.getElementById("result").innerHTML =
    "Result = " + result;
}