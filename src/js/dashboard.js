let hideTime = 600;
let showTime = 600;
let toggleTime = 300;
let delayTime = 600;

var $regexname = /^([a-zA-Z]{3,16})$/;
var $regexid = /^(\d{3,16})$/;
var $regxemail = /^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$/;
var $regxgender = /^(?:m|M|male|Male|f|F|female|Female|FEMALE|MALE)$/;

function copyToInput() {
    var inputGroup = $(".table-col").find("input:text");
    inputGroup.each(
        function() {
            var infoText = $.trim($(this).parents(".table-col").find(".info").text());
            $(this).val();
            console.log($(this).val(infoText));
        }
    )
    console.log("copyToInput run!");
}

$(document).ready(
    function() {
        copyToInput();
        $(".navbar-collapse").hide();
        $(".input-group").hide();
        $(".info").children("i").removeClass("fa-pencil-square-o");
    }
)

$(".btn-update").click(
    function() {
        // console.log("updateBtn Clicked");
        var tableCol = $(this).parents(".table-col");
        var input = tableCol.children(".input-group").find("input:text");
        var infoTabs = tableCol.find(".info");
        var $regExp;
        var errorMsg;

        switch (input.attr("name")) {
            case 'id':
                $regExp = $regexid;
                errorMsg = "1. The id should be integer\n2. The length of the id should be 3 - 16 digit";
                break;
            case 'givenName':
            case 'familyName':
                $regExp = $regexname;
                errorMsg = "1. The name should be all letter\n2. The length of the name should be 3 - 16 letter";
                break;
            case 'email':
                $regExp = $regxemail;
                errorMsg = "1. The example: xxx11@gmail.com\n2. The email must include '@gmail.com'\n3. Minimum 5 letter or number before 'gmail.com'";
                break;
            case 'gender':
                $regExp = $regxgender;
                errorMsg = "1. Male, MALE, M, m\n2. Female, FEMALE, F, f";
                break;

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
            copyToInput();
            $("#updateUser").submit();
        }
    }
)

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

$(".navbar-toggler-icon").click(
    function() {
        $(".navbar-collapse").toggle(toggleTime);
    }
)