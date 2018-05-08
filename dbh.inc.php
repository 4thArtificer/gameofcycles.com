<?php

$conn = mysqli_connect('localhost', 'artifice_cUser', 'YRnEx02QCJvVKrP', 'artifice_CommentSection');

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}