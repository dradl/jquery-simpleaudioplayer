<html>
	<head>
		<title>jQuery SimpleAudioPlayer Testpage</title>
	</head>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="dist/js/jquery.simpleaudioplayer.js"></script>
	<link rel="stylesheet" href="dist/css/simpleaudioplayer.min.css">

	<script>

		$(document).ready(function() {
			
			$('#a1').simpleAudioPlayer({
				title: "The Beatles - While My Guitar Gently Weeps",
				chapters: [
					{
						"seconds": 60,
						"title": "<strong>Kapitel 1:</strong> Der Anfang"
					},
					{
						"seconds": 120,
						"title": "<strong>Kapitel 2:</strong> Die Mitte"
					},
					{
						"seconds": 180,
						"title": "<strong>Kapitel 3:</strong> Der Höhepunkt"
					},
					{
						"seconds": 200,
						"title": "<strong>Kapitel 4:</strong> Das Ende"
					}
				]
			});

			

		});
	</script>

	<style>
		* {
			box-sizing: border-box;
		}
		body {
			background: #fff;
			margin: 0;
			padding: 0;
		}
		main {
			text-align: center;
			max-width: 1000px;
			width: 90%;
			margin: 0 auto;
			padding: 2em;
		}

		.simpleAudioPlayer {
			margin: 0 auto 2em auto;
		}
	</style>

	<body>

		<main>
			<audio id="a1" src="misc/song1.mp3"></audio>
			<audio id="a2" src="misc/song2.mp3" data-title="The Beatles - Blackbird"></audio>
		</main>

	</body>
</html>