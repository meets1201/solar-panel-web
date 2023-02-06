<!DOCTYPE html>
<html>
<head>
	<title>solar panel</title>
	<link rel="stylesheet" href="solar panel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
		<section id="banner">
            <img src="image/logo.jpg" class="logo">
            <div class="banner-text">
                    <h1>welcome</h1>
                    <p><t>Mighty Solar</t></p>
                    <div class="banner-btn">
                        <a href="sign up.php"><b><span></span>sign up</b></a>
                    </div>
                </div>
            </section>
            <div>
            <h1 align="center">Specialize In Researching And Developing, Manufacturing, Selling Solar Mounting Systems.</h1>
            <p align="center">Devote to offering globally first class solar pv mounting system solution.</p>
        </div>
        <div id="sidenav">
                <nav>
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="about us.php">about us</a></li>
                        <li><a href="projects.php">projects</a></li>
                        <li><a href="contact us.php">contact us</a></li>
                    </ul>
                </nav>
            </div>
        <div id="manubtn">
            <img src="image/menu-squared-2.png" id="manu">
        </div>
        <script>
            manubtn.onclick = function(){
                if(sidenav.style.right == "-250px") {
                    sidenav.style.right = "0";
                    manu.src = "image/close-window.png";
                }
                else{
                    sidenav.style.right = "-250px";
                    manu.src = "image/menu-squared-2.png";
                }
            }
        </script>
        <div align="center">
        <img src="image/solar photo 1.jpg"> 
        <p><b>solar water pump structure</b></p>                   
        <img src="image/solar photo 2.jpg">  
        <p><b>solar ground mounting structure</b></p>
        <img src="image/solar photo 3.jpg">
        <p><b>solar roofop mounted structure</b></p>
        <img src="image/solar photo 4.jpg">
        <p><b>helical anchors</b></p>
        </div>
                   

</body>
</html>