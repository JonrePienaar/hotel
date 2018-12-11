function validate() {
    // var name = $("#nameEntered").val();
    console.log("first validate function running.");
    var name = $("#emailEntered").val();
    var days = $("#days").val();
    var hotel = $("#hotels").val();
    checkName = validateName(name);
    // checkEmail = validateEmail(email);
    checkDays = validateDays(days);

    if(checkName == false || checkDays == false){
        location = location;
        return;
    }


    calculate(name, days, hotel);


    // $.ajax({
    //     url: "functions.php",
    //     dataType: "php",
    //     data: {
    //     "email": email
    //         },
    //     success: function(data)
    //             {
    //                 // alert("success!");
    //             }
    // });
    return true;
}
    

function validateName(stringf) {
    //  console.log("validate name running.");
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


    // function validateEmail(mail) {
    // if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
    // return (true)
    // }
    // alert("You have entered an invalid email address!")
    // return (false)
    // }


    function validateDays(days){
        // console.log("validate days running.");
        if(days == "" || days == 0){
        alert("Please enter a valid number of days to visit the hotel.")
        }
    }

    function calculate(name, days, hotel){
        // console.log("calculate running.");
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



        showResults(name, hotel, hotelPrice, total, days);
}


function showResults(name, chosenHotel, hotelprice, total, days) {
    $(".remove").html("");
        // console.log("show results running.");
    document.querySelector(".text").append("Thank you ");
    document.querySelector(".text").append("for using TRAVEL-MASTER");
    document.querySelector(".text1").append("Staying at ");
    document.querySelector(".text2").append(" for ");
    document.querySelector(".text3").append(" days will cost you R");
    document.querySelector(".text4").append(" in total at R");
    document.querySelector(".text5").append(" per night. ");
    document.querySelector(".text6").append("Further information will be sent to via email.");
    document.querySelector(".hotelResult").append(chosenHotel);
    document.querySelector(".daysResult").append(days);
    document.querySelector(".totalCostResult").append(total);
    document.querySelector(".perNightResult").append(hotelprice);
    document.querySelector(".nameOfPerson").append(name);
    // document.querySelector(".email").append(email);

    check = "yup";

    addEmail();

    return;
}

function addEmail() {
    // console.log("email running");
    $(".remove").html('<div class="container"><div class="row"><div class="col-lg-3"></div> <div class="col-lg-6"><h3 style="text-align:center; margin-top:30px;">Please enter the email you want further queries to be sent to below:</h3><form method="POST"><input name="email" style="margin-left:50px; margin-top:15px;" id="emailEntered" type="email" class=" name wideness form-control" style="margin: 20px;" placeholder="Enter email..." /><button name="submit" style="margin-top:10px; margin-left:35px;" class="submit" type="submit" id="submit" value="submit">SUBMIT</button></form></div></div></div><div class="col-lg-3"></div>');
}

