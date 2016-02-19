function calendar()
{
    
    var input = document.getElementById("date").value;
    var date = new Date(input);
    var day = date.getUTCDate();
    var month = date.getUTCMonth() + 1;
    var year = date.getUTCFullYear();
   


    //check if date is whithin the range
    var valid = true;
    var date1 = new Date("9/1/2015");
    var date2 = new Date("8/31/2016");

    if (date < date1 || date > date2){
        valid = false;
    }

    if (valid == false){
        document.getElementById("output").innerHTML = "This date is outside of the current academic year range.";
    }else{

        
        var calendar = new Array();
        
        for (i = 1; i <= 12; i++){
            calendar[i] = new Array();
            for (j = 1; j <= 31; j++){
                calendar[i][j] = "";
            }
        }

        calendar[9][7] = ["Labor Day", "<img src='http://www.websterapartments.org/wp-content/uploads/2015/09/Labor-Day-.png'>"];
        calendar[10][12] = ["Fall Recess", "<img src='http://www.byui.edu/images/education-human-dev/Fall.jpg'>"];

        for (k = 25; k < 30; k++){
            calendar[11][k] = ["Thanksgiving Recess", "<img src='http://images2.miaminewtimes.com/imager/let-someone-else-cook-this-thanksgiving/u/original/6607888/thanksgiving_dinner.jpg'>"];
        }

        for (k = 24; k <= 31; k++){
            calendar[12][k] = ["Winter Recess", "<img src='http://mississaugakids.com/wp-content/uploads/2012/12/Winter-Break-Camp.jpg'>"];
        }

        for (k = 1; k < 4; k++){
            calendar[1][k] = ["Winter Recess", "<img src='http://mississaugakids.com/wp-content/uploads/2012/12/Winter-Break-Camp.jpg'>"];
        }

        calendar[1][18] = ["Martin Luther King, Jr. Day", "<img src='http://pretendcity.org/wp-content/uploads/2014/12/content_mlk_mgn.jpg'>"];
        calendar[2][15] = ["President's Day", "<img src='http://slickwillyskarts.com/wp/wp-content/uploads/2014/02/Presidents-Day-2014.jpg'>"];

        for (k = 14; k < 21; k++){
            calendar[3][k] = ["Spring Recess", "<img src='http://www.urbancultivator.net/wp-content/uploads/2015/03/Spring-Wallpaper-Free-Desktop.jpg'>"];
        }

        calendar[5][30] = ["Memorial Day", "<img src='https://tranquilshores.org/wp-content/uploads/2015/05/Happy-Memorial-Day.jpg'>"]
        calendar[7][4] = ["Independence Day", "<img src='http://i.huffpost.com/gen/1244316/images/o-FIREWORKS-ACCIDENTS-facebook.jpg'>"]

        var monthName = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]

        if (calendar[month][day] == ""){
            document.getElementById("output").innerHTML = monthName[month-1] + " " + day + " is not a school holiday at NYU. <br><img src='http://dailyplateofcrazy.com/wp-content/uploads/2013/03/Tired-College-Student.png'>";
        } else{
            document.getElementById("output").innerHTML = monthName[month-1] + " " + day + " is " + calendar[month][day][0] + ". This is a holiday at NYU.<br><br>"+ calendar[month][day][1];
        }
    }
    

}