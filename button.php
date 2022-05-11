<!DOCTYPE html>

<!-- Start of HTML -->
<html lang="en">

<head>
    <title>Enquiry</title>
    <meta charset="utf-8" />
    <meta name="author" content="Jason Kho" />
    <meta name="description" content="About" />
    <link rel="stylesheet" type="text/css" href="button.css" />
    <script src="script.js"></script>
</head>

<!-- Start of Body -->
<body>

<!-- Article -->
<article>
    <div class="tit1">
        <h1>Select a Delivery Time:</h1>
    </div>
    <div class="form_back">
        <form name="Enquiry Form" id="enquiry" action="confirm.php" method="post" novalidate="novalidate">
            <input type="time" id="time" name="time">
                <input type="submit" value="Submit" />
                <input type="reset" value="Reset" />
        </form>
        
    </div>
    
</article>


</body>
</html>