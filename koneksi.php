<?php
try {
	$con = mysqli_connect("localhost", "root", "", "beasiswa"); // host, user, pw, db
} catch (\Exception $e) {
	echo "err: " . $e->getMessage();
}
