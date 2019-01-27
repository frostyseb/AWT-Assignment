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
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
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
    <div id="app" style="margin:50px auto">
        <main class="py-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-header bg-primary"><b>Event Handler</b></div>
                            <div class="card-body" style="background-color:lightskyblue;">
    <table class="table table-responsive-md table-sm table-bordered" id="organize">
        <thead class="bg-primary">
            <tr>
            <th>Quest ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Quest Email</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr class="row1">
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            </tr>
        </tbody>
    </table>

    <span>
        <button id="add_row" class="btn btn-danger" style="float:right;"> + </button>       
        <button class="btn btn-primary" id="submit">Submit</button>
    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--Scripts for the table-->
    <!--The submit button is to show on the console log [WIP]-->
    <script>
        $('#organize').SetEditable({
            $addButton: $('#add_row'),
            columnsEd: null,
            onEdit: function() {}, 
            onDelete: function() {}, 
            onBeforeDelete: function() {},
            onAdd: function() {} 
        });

        $('#submit').on('click',function() {
            var td = TableToCSV('organize', ',');
            console.log(td);
            var lines = td.split("\n");
            var data_value = [];
            for(i=0;i<lines.length;i++)
            {
                data_value[i] = lines[i].split(",");
            }

            for(i=0;i<data_value.length;i++)
            {
                if(data_value[i]>1)
                {
                    console.log(data_value[i][2]);
                    console.log(data_value[i].length);
                }

            }
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