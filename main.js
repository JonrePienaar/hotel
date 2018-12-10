
    function validate() {
        var name = $("#nameEntered").val();
        var email = $("#emailEntered").val();
        var days = $("#days").val();
        var hotel = $("#hotels").val();
        checkName = validateName(name);
        checkEmail = validateEmail(email);
        checkDays = validateDays(days);

        if(checkName == false || checkDays == false || checkEmail == false){
            location = location;
            return;
        }


        calculate(name, email, days, hotel);


        $.ajax({
            url: "functions.php",
            dataType: "php",
            data: {
            "email": email
                },
            success: function(data)
                    {
                        // alert("success!");
                    }
        });
    return true;
}
        

function showAlert(){
    alert("this is the alert    ");
}


function validateName(stringf) {
    if (stringf=="")
{
    alert("Family name must be filled out");
    return false;
}
else if (stringf.length > 35)
{
    alert("Family name cannot be more than 35 characters");
    return false;
}
else if (/[^a-zA-Z0-9\-]/.test( stringf ))
{
    alert("Family name can only contain alphanumeric characters and hypehns(-)")
    return false;
}
return true;
}


function validateEmail(mail) {
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}


function validateDays(days){
    if(days == "" || days == 0){
        alert("Please enter a valid number of days to visit the hotel.")
    }
}

function calculate(name, email, days, hotel){
    if(hotel == "two"){
        var hotelPrice = 365.00;
        hotel = "Two Oceans";
    } else if (hotel == "random"){
        var hotelPrice = 4000.00;
        hotel = "Just a random hotel";
    } else {
        var hotelPrice = 190000.00;
        hotel = "The really expensive hotel.";
    }
    var total = days * hotelPrice;



    showResults(hotel, hotelPrice, email, total, days);
}


 function showResults(chosenHotel, hotelprice, email, total, days) {
    document.querySelector(".text").append("Thank you for using TRAVEL-MASTER");
    document.querySelector(".text1").append("Staying at ");
    document.querySelector(".text2").append(" for ");
    document.querySelector(".text3").append(" days will cost you R");
    document.querySelector(".text4").append(" in total at R");
    document.querySelector(".text5").append(" per night. ");
    document.querySelector(".text6").append("Further information will be sent to: ");
    document.querySelector(".hotelResult").append(chosenHotel);
    document.querySelector(".daysResult").append(days);
    document.querySelector(".totalCostResult").append(total);
    document.querySelector(".perNightResult").append(hotelprice);
    document.querySelector(".email").append(email);

    check = "yup";

    return;
 }
