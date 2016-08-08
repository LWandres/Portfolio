<html>
<head>
	<title>JavaScript OOP Example</title>

	<!-- external CDNS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel='stylesheet' type='text/css'>
	<link href="/../../assets/css/OOPDemo.css" rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

</head>

<body>
	<svg id="svg" xmlns="http://www.w3.org/2000/svg"></svg>

	<div id="instructions">
		<h2>WELCOME TO THE CIRCLES OOP DEMO</h2>
		<p>This site demonstrates simple Object Oriented Programming in action.<br>
		   Click, or hold down the mouse momentarily anywhere on the blue screen to get started!</p>
		<p>Note: Please use Google Chrome for this demo.<br>
			 This site also plays audio, so be sure to have your headphones ready.</p>
		<button id="submit" name="submit">OKAY, GOT IT. LET'S DO THIS.</button>
	</div>

		<!-- //Audio for Don't Stop Believing -->
		<audio preload="none" id="C" src="/../../assets/audio/C.mp3"></audio>
		<audio preload="none" id="D" src="/../../assets/audio/Dmaj.mp3"></audio>
		<audio preload="none" id="E" src="/../../assets/audio/Emaj.mp3"></audio>
		<audio preload="none" id="F" src="/../../assets/audio/Fmaj.mp3"></audio>
		<audio preload="none" id="G" src="/../../assets/audio/Gmaj.mp3"></audio>
		<audio preload="none" id="A" src="/../../assets/audio/Amaj.mp3"></audio>
		<audio preload="none" id="B" src="/../../assets/audio/Bmaj.mp3"></audio>
		<audio preload="none" id="C5" src="/../../assets/audio/C5maj.mp3"></audio>


	<script>
		//Instructions Pop Up
		$(document).ready(function() {
			$("#instructions").show();
			$("#submit").click(function() {
				$("#instructions").hide();
			});
		});

		//Tracks click-hold time. Longer click times will make the resulting circles larger.
		var time = 0;
		(function() {

			var mousedown_time;

			function getTime() {
				var date = new Date();
				return date.getTime();
			}

			document.onmousedown = function(e) {
				mousedown_time = getTime();
			}
			document.onmouseup = function(e) {
				time_pressed = getTime() - mousedown_time;
				console.log('You held your mouse down for', time_pressed, 'miliseconds.');
				time = time_pressed;
			}

			//Google Analytics
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-82133906-1', 'auto');
			  ga('send', 'pageview');

		})();

		//sets counter to iterate through notes array below.
		var notescount = 0;
		//gets random color for cirlces.
		function getRandomColor() {
			var letters = '0123456789ABCDEF'.split('');
			var color = '#';
			for (var i = 0; i < 6; i++) {
				color += letters[Math.floor(Math.random() * 16)];
			}
			return color;
		}

		function Circle(cx, cy, html_id, r) {
			var html_id = html_id;
			this.info = {
				cx: cx,
				cy: cy,
				radius: 10 * (time / 100)
			};

			//generates a random number to initialize velocity with
			var randomNumberBetween = function(min, max) {
				return Math.random() * (max - min) + min;
			}

			this.initialize = function() {
				//give a random velocity for the circle
				this.info.velocity = {
					x: randomNumberBetween(-3, 3),
					y: randomNumberBetween(-3, 3)
				}

				//create a circle
				var circle = makeSVG('circle', {
					cx: this.info.cx,
					cy: this.info.cy,
					r: this.info.radius,
					id: html_id,
					style: "fill: white"
				});

				//add a circle to the svg screen
				document.getElementById('svg').appendChild(circle);
			}

			//checks to see the status of the circles/ detects collisions
			this.update = function(time) {
				var el = document.getElementById(html_id);

				//Array of Melody Notes
				var notes = ["F", "E", "D", "F", "E", "F", "E", "F", "G", "A", "G", "A", "E", "D", "C", "F", "E", "F", "E", "D", "C", "G", "B",
						"C5"
					] // Don't Stop Believing Chorus

				//Function to play Don't Stop Believing Melody
				function play() {
					//Checks if series has reached end of array, it not increments count by 1
					if (notescount < notes.length) {
						var element = notes[notescount];
						var audio = document.getElementById(element);
						//Prevents collisions from skipping notes due to already playing notes.
						if (audio.paused) {
							audio.play();
							notescount += 1;
						}
					} else { //If notes are at end of array, reset starting count to the beginning.
						notescount = 0;
						var element = notes[notescount];
						var audio = document.getElementById(element);

						//Prevents collisions from skipping notes in the array due to already playing audio.
						if (audio.paused) {
							audio.play();
							notescount += 1;
						}
					}
				}

				//Checks for Left/Right Screen Collision
				if (this.info.cx + this.info.radius > document.body.clientWidth || this.info.cx - this.info.radius < 0) {
					//Reverses velocity on collision
					this.info.velocity.x = this.info.velocity.x * -1;
					//Plays notes in array on collision- excludes initial circle
					if (el.id != 0) {
						play();
					}
					//Changes circle color on collision
					var newcolor = getRandomColor();
					el.setAttribute("style", "fill:" + newcolor);
				}

				//Checks for Top and Bottom Screen Collision
				if (this.info.cy + this.info.radius > document.body.clientHeight || this.info.cy - this.info.radius < 0) {
					//Reverses velocity on collision
					this.info.velocity.y = this.info.velocity.y * -1;
					//Changes circle color on collision
					var newcolor = getRandomColor();
					el.setAttribute("style", "fill:" + newcolor);
					//Plays notes in array on collision- excludes initial circle
					if (el.id != 0) {
						play();
					}
				}

				this.info.cx = this.info.cx + this.info.velocity.x * time;
				this.info.cy = this.info.cy + this.info.velocity.y * time;

				el.setAttribute("cx", this.info.cx);
				el.setAttribute("cy", this.info.cy);
				el.setAttribute("r", this.info.radius);
			}

			//creates the SVG element and returns it
			var makeSVG = function(tag, attrs) {
				var el = document.createElementNS('http://www.w3.org/2000/svg', tag);
				for (var k in attrs) {
					el.setAttribute(k, attrs[k]);
				}
				return el;
			}

			this.initialize();
		}

		function PlayGround() {
			var counter = 0; //counts the number of circles created
			var circles = []; //array that will hold all the circles created in the app

			//A loop that updates the circle's position on the screen
			this.loop = function() {
				for (circle in circles) {
					circles[circle].update(1);
				}
			}

			//Creates a new instance of a circle and adds it to the full circle array
			this.createNewCircle = function(x, y) {
				var new_circle = new Circle(x, y, counter++);
				circles.push(new_circle);
			}

			this.createNewCircle(document.body.clientWidth, document.body.clientHeight);
		}

		// instantiates the playground environment
		var playground = new PlayGround();
		setInterval(playground.loop, 15);

		// event listener for circle creation
		document.onclick = function(e) {
			playground.createNewCircle(e.x, e.y);
		}

		window.onbeforeunload = function() {
			circles = [];
		};
	</script>

</body>

</html>
