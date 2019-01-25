	 $(document).ready(
	     function() {
	         $(".navbar-collapse").hide();
	         $(".input-group").hide();
	         $(".info").children("i").removeClass("fa-pencil-square-o");
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
	         info.show(200);
	         inputGroup.hide(200);
	         //console.log(info);
	         console.log("Canceled");
	     }
	 )

	 $(".info").click(
	     function() {
	         var infoValue = $.trim($(this).text());

	         var inputText = $(this).parents(".table-col").children(".input-group");

	         if ($(this).is(":hidden")) {

	         } else {
	             inputText.find("input:text").val("");
	             inputText.find("input:text").attr("placeholder", infoValue);
	             console.log("Copied to input-group")
	         }
	         //console.log(inputText);
	         $(this).hide(100);
	         inputText.show(100);
	     }
	 )

	 $(".navbar-toggler-icon").click(
	     function() {
	         $(".navbar-collapse").toggle(300);
	     }
	 )