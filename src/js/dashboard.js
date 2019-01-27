/*
 * Initialize constant
 */
let hideTime = 500;
let showTime = 500;
let toggleTime = 300;
let delayTime = 600;

var $regexname = /^([a-zA-Z]{3,16})$/;
var $regexid = /^(\d{3,16})$/;
var $regxemail = /^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$/;
var $regxgender = /^(?:m|M|male|Male|f|F|female|Female|FEMALE|MALE)$/;

/*
 * Copy the info in the division where class is info to the input:text(hidden input text field);
 */
function copyToInput() {
    var inputGroup = $(".table-col").find("input:text");
    inputGroup.each(
            function() {
                var infoText = $.trim($(this).parents(".table-col").find(".info").text());
                $(this).val(infoText);
                // console.log($(this).val());
            }
        )
        //console.log("copyToInput run!");
}


/*
 * Initialize the page
 * Hide all the input field and hide the navigation bar, initialize the <i></i> (font-awesome)
 */
$(document).ready(
    function() {
        copyToInput();
        $(".navbar-collapse").hide();
        // $(".input-group").hide();
        $(".info").children("i").removeClass("fa-pencil-square-o");
    }
)

/* Update the data to the server when update button clicked
 * Data validation by using regular expression
 * Determine the regular expression and errorMessage base on the attribute name
 * Execute the regular expression
 * Submit the form 
 */

$(".btn-update").click(
    function() {
        console.log("updateBtn Clicked");
        var tableCol = $(this).parents(".table-col");
        var input = tableCol.children(".input-group").find("input:text");
        var infoTabs = tableCol.find(".info");
        var $regExp;
        var errorMsg;

        console.log(input.attr("name"));

        switch (input.attr("name")) {
            case 'id':
                $regExp = $regexid;
                errorMsg = "1. The id should be integer\n2. The length of the id should be 3 - 16 digit";
                break;
            case 'givenName':
            case 'familyName':
            case 'firstClub':
            case 'secondClub':
            case 'thirdClub':
                $regExp = $regexname;
                errorMsg = "1. The name should be all letter\n2. The length of the name should be 3 - 16 letter";
                break;
            case 'email':
                $regExp = $regxemail;
                errorMsg = "1. The example: xxx11@gmail.com\n2. The email must include '@gmail.com'\n3. Minimum 5 letter or number before 'gmail.com'";
                break;
            default:
                validateGender();
                return false;

        }
        //console.log($regExp);
        //console.log(input);
        if (!input.val().match($regExp)) {
            alert(errorMsg);
        } else {
            infoTabs.text(input.val());
            //console.log(infoTabs.text());
            //console.log(tableCol);
            tableCol.children(".input-group").hide(hideTime).delay(delayTime);
            tableCol.children(".info").show(showTime).delay(delayTime);
            alert(input.val() + " has been updated!");
            $("#updateUser").submit();
        }
    }
)

function validateGender() {
    copyToInput();
    var male = $("#male");
    var female = $("#female");
    if (male.is(":checked")) {
        console.log(male);
        $("#updateUser").submit();
    } else if (female.is(":checked")) {
        console.log(female);
        $("#updateUser").submit();
    } else {
        alert("Please select correct gender!");
    }



}


/*
 * Showed edit icon when the mouse is hover on the info tabs
 */
$(".info").hover(
    function() {
        $(this).children("i").css("color", "red");
        $(this).children("i").addClass("fa-pencil-square-o text-success");
    },
    function() {
        $(this).children("i").css("color", "");
        $(this).children("i").removeClass("fa-pencil-square-o");
    }
)

/*
 * Hide the input field when cancel button is clicked
 */
$(".cancelBtn").click(
    function() {
        var info = $(this).parents(".table-col").children(".info");
        var inputGroup = $(this).parents(".input-group");
        info.show(showTime).delay(delayTime);
        inputGroup.hide(hideTime).delay(delayTime);
        //console.log(info);
        //console.log("Canceled");
    }
)

/*
 * Pop up the hidden input field when clicked
 */
$(".info").click(
    function() {
        var infoValue = $.trim($(this).text());

        var inputText = $(this).parents(".table-col").children(".input-group");

        if ($(this).is(":hidden")) {

        } else {
            inputText.find("input:text").val(infoValue);
            inputText.find("input:text").attr("placeholder", infoValue);
            //console.log("Copied to input-group")
        }
        //console.log(inputText);
        $(this).hide(hideTime).delay(delayTime);
        inputText.show(showTime).delay(delayTime);
    }
)

/*
 * Allow the responsive navbar toggle according to the time decided 
 */
$(".navbar-toggler-icon").click(
    function() {
        $(".navbar-collapse").toggle(toggleTime);
    }
)

/*
 *======================================Club Column new script ===========================
 */

/*
 * Copy the info in the division where class is info to the input:text(hidden input text field);
 */

function copyToInputCca() {
    var inputGroup = $(".table-col").find("input:text");
    inputGroup.each(
            function() {
                var infoText = $.trim($(this).parents(".table-col").find(".info-cca").text());
                $(this).val(infoText);
                // console.log($(this).val());
            }
        )
        //console.log("copyToInput run!");
}

let isEdit = true;
$(".btn-edit").click(
    function() {
        copyToInputCca();
        console.log("btn-edit clicked!");
        $(".info-cca").toggle(toggleTime);
        var inputGroup = $("#club").find(".input-group");
        inputGroup.toggle(toggleTime);
        if (isEdit == true) {
            $(this).removeClass("btn-success").addClass("btn-danger");
            $(this).children("i").removeClass("fa-pencil-square-o").addClass("fa-remove");
            $(this).children(".btn-value").text("Cancel");
            isEdit = false;
        } else {
            $(this).removeClass("btn-danger").addClass("btn-success");
            $(this).children("i").removeClass("fa-remove").addClass("fa-pencil-square-o");
            $(this).children(".btn-value").text("Edit");
            isEdit = true;
        }

    })