CREATE DATABASE example;

use example;

CREATE TABLE people (

idPeople INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

firstname VARCHAR(30) NOT NULL,

lastname VARCHAR(30) NOT NULL,

address VARCHAR(50) NOT NULL,

city VARCHAR(30) NOT NULL,

state VARCHAR(30) NOT NULL,

zip VARCHAR(30) NOT NULL,

email VARCHAR(50) NOT NULL,

age INT(3), 

date TIMESTAMP );