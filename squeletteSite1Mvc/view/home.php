<?php
ob_start();
?>
	<link rel="stylesheet" type="text/css" href="../public/css/home.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1000px)" href="../public/lcss/lhome.css">
	<link rel="icon" type="image/png">
	<title>  - Accueil</title>
<?php
$head = ob_get_clean();

ob_start();
?>

		<div id="MainBox">
			
			<div class="introBox">
				<h1 class="title">Titre</h1>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac feugiat sed lectus vestibulum mattis ullamcorper.</p>
			</div>
	

			<div class="diaporamaBox">
				<!--image slider start-->
				    <div class="slider">
				      <div class="slides">
				        <!--radio buttons start-->
				        <input type="radio" name="radio-btn" id="radio1">
				        <input type="radio" name="radio-btn" id="radio2">
				        <input type="radio" name="radio-btn" id="radio3">
				        <input type="radio" name="radio-btn" id="radio4">
				        <!--radio buttons end-->
				        <!--slide images start-->
				        <div class="slide first">
				          <img src="../public/img/AbueloTortilla.jpg" alt="">
				        </div>
				        <div class="slide">
				          <img src="../public/img/avocadoTortillas.png" alt="">
				        </div>
				        <div class="slide">
				          <img src="../public/img/desasTortillas.jpg" alt="">
				        </div>
				        <div class="slide">
				          <img src="../public/img/legumasTortillas.png" alt="">
				        </div>
				        <!--slide images end-->
				        <!--automatic navigation start-->
				        <div class="navigation-auto">
				          <div class="auto-btn1"></div>
				          <div class="auto-btn2"></div>
				          <div class="auto-btn3"></div>
				          <div class="auto-btn4"></div>
				        </div>
				        <!--automatic navigation end-->
				      </div>
				      <!--manual navigation start-->
				      <div class="navigation-manual">
				        <label for="radio1" class="manual-btn"></label>
				        <label for="radio2" class="manual-btn"></label>
				        <label for="radio3" class="manual-btn"></label>
				        <label for="radio4" class="manual-btn"></label>
				      </div>
				      <!--manual navigation end-->
				    </div>
				    <!--image slider end-->

				    <script type="text/javascript">
				    var counter = 1;
				    setInterval(function(){
				      document.getElementById('radio' + counter).checked = true;
				      counter++;
				      if(counter > 4){
				        counter = 1;
				      }
				    }, 5000);
				    </script>
			</div>

            <div class="secondTextBox">
                <p class="secondText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa massa ultricies mi quis hendrerit. Malesuada nunc vel risus commodo viverra maecenas accumsan lacus. Porttitor lacus luctus accumsan tortor posuere ac. Pulvinar pellentesque habitant morbi tristique senectus. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Eu augue ut lectus arcu. Urna nec tincidunt praesent semper feugiat nibh sed pulvinar. Maecenas sed enim ut sem viverra aliquet eget sit.</p>
            </div>

		</div>

<?php
$content = ob_get_clean();