<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Event Handling</title>

	<!--Bootstrap js-->
	<?php include 'includes/bootstrapH.inc.php'; ?>

	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Indie+Flower|Comfortaa|Special+Elite" rel="stylesheet">

	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Scripts for editable table-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="bootstable/bootstable.js"></script>
	
	<!--CSS Stylesheet-->
	<link rel="stylesheet" href="src/css/styles_main_page.css" type="text/css">

</head>

<?php include 'simpleNav.php';?>

<script src="suggest.js"></script>

<body>

    <table class="table" id="organize">
        <thead>
            <tr>
            <th>Quest ID</th>
            <th>Course</th>
            <th>Intake</th>
            <th>Quest Email</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row1">
            <td>Testing</td>
            <td>Testing</td>
            <td>Testing</td>
            <td>Testing</td>
            </tr>
        </tbody>
    </table>

    <span>
        <button id="add_row">Add a Row</button>
    </span>

    <script>
        $('#organize').SetEditable({
            $addButton: $('#add_row')
        });

        var data = TableToCSV('#organize',',');

        $('#organize').SetEditable({
            $addButton: $('#add_row'),
            columnsEd: null
        });

        $('#organize').SetEditable({
            onEdit: function() {}, 
            onDelete: function() {}, 
            onBeforeDelete: function() {},
            onAdd: function() {} 
        });
    </script>

    

	<?php include 'includes/bootstrapF.inc.php'; ?>

</body>

<script>
	$(document).ready(
		function () {
			$(".navbar-collapse").hide();
		}
	)
	$(".navbar-toggler-icon").click(
		function () {
			$(".navbar-collapse").toggle(500).delay(200);
		}
	)
</script>

</html>