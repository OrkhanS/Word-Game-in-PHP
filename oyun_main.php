<?php 
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<div>
	<h3 style="display: inline-block;">SUAL</h3>&nbsp; 
	<h3 style="display: inline-block;">Cavab</h3>
</div>


<form>
	<p id="hello11"></p>
	<input id="myBtn" type="text" name="answer">
	<button onclick="myfunc()" style="display: inline-block;" type="button" name="submit">Submit</button>
	<p style="display: inline-block;">Your score is: </p>
	<p id="hello22"></p>
</form>
<script>
		 var score = 0;
		 var x = <?php echo $_SESSION['x'] ?> ;
		 var y = <?php echo $_SESSION['y'] ?> ;
		 var sual = JSON.stringify(x);
		 var cavab = JSON.stringify(y);
		 var array_sual = JSON.parse(sual);
		 var array_cavab = JSON.parse(cavab);
		 var number = Math.floor(Math.random() * array_sual.length-1) + 1;
		 console.log(number);
		 console.log(array_sual[number].eng);
		 console.log(array_cavab[number].az);
		 console.log(x);
		 var number_checker = [];

		function myfunc()
		{
			var asd = document.getElementById("myBtn").value;
			console.log(asd);


			if(asd == array_cavab[number].az)
		 	{
		 		score++;
		 		document.getElementById('hello22').innerHTML = score;
		 	}
		}
		

		 for(i = 0; i < array_sual.length; i++)
		 {
		 	while(number_checker.indexOf('number') != -1)
		 	{
		 		number = Math.floor(Math.random() * array_sual.length-1) + 1;
		 	}
		 	number_checker[i] = number;
			
		 	document.getElementById('hello11').innerHTML = array_sual[number].eng;
		 }



</script>
</body>
</html>