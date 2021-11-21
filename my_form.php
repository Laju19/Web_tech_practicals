<!DOCTYPE html>

<html>

	<head>
		<title>WEEK 10 LAB</title> 
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<meta charset="utf-8"/>		
		
	</head>
<body>
    <div id="search-box-1">
    <?php 
session_start();
if(isset($_GET['google_search']))
    {$search_input = $_GET["google_search"];}

$_SESSION["form_input"] = $search_input;
//echo $search_input; 
?>
        <form>
            <fieldset>
                <legend><strong>GOOGLE FORM 1</strong></legend>
                <button type="submit"><i class="fa fa-search"></i></button>
                <input type="text" name="google_search" placeholder="Enter your search word or URL here" value="<?php echo $search_input?>" style="width: 50%;"><br>
                <input type = "submit" name = "submit">
            </fieldset>
        </form>
    </div>

 


<div id="search-box-2">
        <form action = "results_page.php">
            <fieldset>
                <legend><strong>GOOGLE FORM 2</strong></legend>
                <button type="submit"><i class="fa fa-search"></i></button>
                <input type="text" name="google_search" placeholder="Enter search word or URL here" style="width: 50%;"><br>
                <input type = "submit" name = "submit">
            </fieldset>
        </form>
    </div>
    </html>