<style>
    @import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap');

	h1{
		color: #201F1E;
		font-family: 'ADLaM Display',sans-serif;
		font-weight: bold;
		font-size: 48px;
		text-align: left;
	}

	p{
		color: #201F1E;
		font-family: "ADLaM Display",sans-serif;
		font-weight: 400;
		font-size: 24px;
		line-height: 1.3;
		text-align: left;
		
	}

	h2{
		color: #000000;
		font-family: "ADLaM Display",sans-serif;
		font-weight: bold;
		font-size: 30px;
		line-height: 1.3;
		text-align: left;
	}

	p1{
		color: #606060;
		font-family: "ADLaM Display",sans-serif;
		font-weight: 400;
		font-size: 24px;
		line-height: 1.3;
		text-align: justify;
        
	}

	a{
		width: 200px;
		height: 129px;
		color: #C0C0C0;
		font-family: "ADLaM Display";
		font-weight: 400;
		font-size: 36px;
		line-height: 1.3;
		text-align: left;
		float:left,30px;
		
	}

	.Mission.active {
		color: blue;
		width: 252px;
		height: 103px;
		padding: 8px 8px 8px 8px;
		background: #FFFFFF00;
		border-color: #1464F6;
		border-width: 4px;
		border-style: solid;
		border-radius: 45px 45px 45px 45px;
	}

	.Approach.active {
		color: blue;
		width: 252px;
		height: 103px;
		padding: 8px 8px 8px 8px;
		background: #FFFFFF00;
		border-color: #1464F6;
		border-width: 4px;
		border-style: solid;
		border-radius: 45px 45px 45px 45px;

	}
	.create{
		width: 205px;
		height: 29px;
		color: #000000;
		font-family: "ADLaM Display";
		font-weight: 400;
		font-size: 24px;
		line-height: 1.3;
		text-align: left;

	}

	#box {
		width: 736px;
		height: 911px;
		padding: 8px 8px 8px 8px;
		background: linear-gradient(180deg, rgb(123, 187, 255) 0%, rgb(233, 246, 254) 100%);
		border-color: #201F1E;
		border-width: 1px;
		border-style: solid;
		border-radius: 149px 149px 149px 149px;
	} 
	input[type=text]{
		width: 50px;
		height: 45px;
		padding: 4px 8px 4px 8px;
		background: #FFFFFF;
		color: #C0C0C0;
		border-color: #232323;
		border-width: 1px;
		border-style: solid;
		border-radius: 13px 13px 13px 13px;
		font-family: "ADLaM Display";
		font-weight: 400;
		font-size: 24px;
		text-align: left;
	}

	.create{
		width: 205px;
		height: 29px;
		color: #000000;
		font-family: "ADLaM Display";
		font-weight: 400;
		font-size: 24px;
		line-height: 1.3;
		text-align: left;
	}
	#sumbit{
		width: 282px;
		height: 69px;
		padding: 8px 8px 8px 8px;
		background: #037AFF;
		color: #FFFFFF;
		border-color: #006CE5;
		border-width: 1px;
		border-style: solid;
		border-radius: 39px 39px 39px 39px;
		font-family: "ADLaM Display";
		font-weight: 400;
		font-size: 36px;
		line-height: 1.3;
		text-align: center;
		
	}
	.headertext {
        color: #ffffff;
        font-family: "ADLaM Display";
        font-weight: 200;
        font-size: 24px;
        text-decoration: none;
        text-align: right;
        margin-left: 20px;
        margin-right: 20px;
        }
        
    .header {
     	display: flex;
        justify-content: flex-end;
        align-items: center;
        width: auto;
        height: 100px;
        background: #0683fd;
        border-color: #0683fd;
        border-width: 1px;
        border-style: solid;
        }
    .dropdown{
         position: relative;
        display: inline-block;
    }
 
    .dropdown-content{
        display:none;
		font-size: 24px;
        position:absolute;
        background-color: #f9f9f9;
        min-width:100px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
    }
 
    .dropdown-content a{
        color: black;
		font-size: 24px;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        font-family: "ADLaM Display";
    }
 
    .dropdown-content a:hover{
        background-color: #ddd;
    }
 
    .dropdown:hover .dropdown-content{
        display:block;
    }
    *,
    *::before,
    *::after {
    box-sizing: border-box;
    }

    :root {
        --clr-light: #97d5ea;/*the backgroung color*/
        --clr-dark: #4b61a3;/*the color of the word*/
        --clr-primary: #d0d781;
        --clr-accent: #0864c7;
        --foreground: var(--clr-dark);
        --background: var(--clr-light);
    }

    .darkmode {
        --clr-light:  #74cac6;/*the color of the word*/
        --clr-dark: #546fb9;/*the backgrounf color*/
        --clr-primary: #6d7420;
        --clr-accent: #55ccea;
        --foreground: var(--clr-light);
        --background: var(--clr-dark);
        }


    body {
        background: var(--background);
        color: var(--foreground);
    }    

    .dark-mode-toggle {
        position: absolute;
        z-index: 100;
        top: 1em;
        right: 1em;
        color: var(--foreground);
        border: 0px solid currentColor;
        padding: 4px;
        background: transparent;
        cursor: pointer;
        border-radius: 5px;
        width: 160px;
        height: 70px;
        margin-top:50px;
        margin-right:-13px;
    }
    .upper {
        background: var(--background);
        color: var(--foreground);
        width:100px;
        height:100px;
    }    
	.item1 { grid-area: header;}
    .item2 { grid-area: menu; }
    .item3 { grid-area: main;margin-left:100px; margin-top:-50px;text-align:center}

    

    .grid-container {
        display: grid;
        grid-template-areas:
            'header header header header header header'
            'menu main main main right right'
            'menu footer footer footer footer footer';
        gap: 10px;
        padding: 10px;
    }

    .grid-container > div {
        text-align: justify;
        padding: 20px 0;
        font-size: 30px;
    }

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>


<script>
    function showMission() {
        document.getElementById("mission").style.display = "block";
        document.getElementById("approach").style.display = "none";
        document.querySelector('.Mission').classList.add('active');
        document.querySelector('.Approach').classList.remove('active');
        
    }

    function showApproach() {
        document.getElementById("mission").style.display = "none";
        document.getElementById("approach").style.display = "block";
        document.querySelector('.Approach').classList.add('active');
        document.querySelector('.Mission').classList.remove('active');
    }
</script>
</head>
<body>

<div class="header">
        <img style="width: 170px; height: 100px; margin-right:60px;" src="logo.png" alt="">
        <div>
            <a href="homepagebeforelogin.php" style="margin-left: 1000px;" class="headertext">Home</a>  
            <div class="dropdown">
                <a href="" class="headertext">About Us</a>
                <div class="dropdown-content">
                    <a href="aboutusbeforelogin.php">Mission & Approach</a>
                    <a href="contactus_without.php">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
<div class="grid-container">
  <div class="item1">
  <h1>About Us</h1>
    <p>
        Welcome to our language learning website! 
        We are dedicated to providing accessible and interactive language learning experiences for learners of all levels. 
        Our platform offers comprehensive courses, interactive materials, personalized learning, and a supportive community. 
        Our team is committed to continuously improving our website to offer the best learning resources.
    </p>
  </div>
  <div class="item2">
  	<a class="Mission" onclick="showMission()">Mission</a> <br> <br>
    <a class="Approach" onclick="showApproach()">Approach</a>
  </div>
  <div class="item3">
		<div button id="mission" style="display:none;">
			<?php
				echo '<h2>Personalized Education</h2> 
				<p1>
					In today\'s world, we can study how everyone learns to create a better school system for each person. 
					Our goal is to give each student their own special teacher using technology. 
					This means making learning unique to each student. 
					Technology helps us give instant feedback and change how we teach to fit each student.
				</p1>
				<h2>Empowering Through Fun Learning</h2>
				<p1>
					We are committed to making learning languages fun and exciting for everyone. 
					Our goal is to add fun, creativity, and interactive activities to our teaching method, so that people can love learning languages and exploring different cultures. 
					We aim to help learners succeed in a lively and enjoyable learning setting.
				</p1>
				<h2>Fostering a Love for Languages</h2> 
				<p1>
					Our goal is to help people love languages and different cultures by making learning fun and personal. 
					We want everyone to enjoy learning languages and understand and respect other cultures.
				</p1>';
			?>
		</div>

		<div button id="approach" style="display:none;">
			<?php
				echo '<h2>Interactive Quizzes</h2>
				<p1>
					Our interactive quizzes are designed to make learning fun and effective. 
					Test your vocabulary, grammar, and listening skills while receiving instant feedback to track your progress.
				</p1>

				<h2>Personalized Learning Experience</h2>
				<p1>
					We understand that every learner is unique.Thats why we offer personalized learning paths that adapt to your proficiency level and learning goals. 
					Our tailored approach ensures that you receive content and exercises that match your individual needs.
				</p1>'
			?>
		</div>
  </div>
    
</div>





</body>
</html>
