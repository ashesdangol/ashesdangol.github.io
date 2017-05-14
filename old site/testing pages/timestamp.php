<?php
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');
// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('jS F Y h:i:s A');

/*
CREATE TABLE feedbacks
(
id int NOT NULL AUTO_INCREMENT,
NAME varchar(255) NOT NULL,
COUNTRY varchar(255) NOT NULL,
FEEDBACK TEXT NOT NULL,
Time varchar(255),
APPROVED int NOT NULL,
PRIMARY KEY (id)
);
*/
?>