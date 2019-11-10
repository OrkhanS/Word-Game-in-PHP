# Word Game

Word Game is a simple game written on PHP, JavaScript and HTML. This is my first PHP project.


## To Run

Download the files above and to use the simple game please add your database settings into the files below:


```bash
server.php
server2.php
server3.php
oyunserver.php
```

## Details

This a simple game without graphics where you can register your account and add words and translations. There are three main PHP files after registration:

#### insertingwords.php  
Here, I just asked the user, words and translations and then send them to server3.php. In server3.php file I added them into database with his/her id next to them.
```php 
//server3.php
$sql = "INSERT INTO words (az, eng, user_id) VALUES('$words', '$words_az', '$user_id')";
		include 'insertingwords.php';
		if (mysqli_query($con, $sql) === TRUE) 
		{
		    echo "New record created successfully";
		} 
```
#### oyun_server.php
In insertingwords.php file, if the user clicks to **Play Game** button, it will be directed to oyun.php file where they choose the language that they want to answer questions and with form tag, application goes to oyun_server.php. This file gets the words of the user and sends them to oyun_main.php in specific order he/she wants. 
#### oyun_main.php  
To show the words of the user, here I have used PHP and JavaScript, I created a quiz type game with words and told the user his score at the end.
#### server.php
This file is for sign in.
#### server2.php    
This file is for sign up.


## License
[![license](https://img.shields.io/github/license/DAVFoundation/captain-n3m0.svg?style=flat-square)](https://github.com/DAVFoundation/captain-n3m0/blob/master/LICENSE)
