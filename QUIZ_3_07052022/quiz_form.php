<!DOCTYPE html>

<html>

	<head>
		<title>QUIZ 3</title> 
        
		<meta charset="utf-8"/>		
		
	</head>
<body>
    <div id="form-1">
    <?php 
/*session_start();
if(isset($_GET['google_search']))
    {$search_input = $_GET["google_search"];}

//$_SESSION["form_input"] = $search_input;
//echo $search_input; */
?>
        <form action="form_process.php" method="POST">
            <fieldset>
                <legend><strong>QUIZ FORM 1</strong></legend>
                <input type="text" name="parent" placeholder="Enter PARENT'S name"  style="width: 50%;"><br>
                <input type="text" name="child" placeholder="Enter CHILD'S name"  style="width: 50%;"><br>
                <input type = "submit" name = "submit">
            </fieldset>
        </form>
    </div>
</html>

 


