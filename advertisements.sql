--Creating the database named advertisements
CREATE DATABASE advertisements;

--Creating the table named users
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--Creating the table named advertisements
CREATE TABLE `advertisements` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `title` varchar(75) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`userid`) REFERENCES users(id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--Inserting dummy data to users
INSERT INTO users (name) VALUES ('JohnDoe');
INSERT INTO users (name) VALUES ('JaneDoe');
INSERT INTO users (name) VALUES ('Example');

--Inserting dummy data to advertisements
INSERT INTO advertisements (userid, title) VALUES ('1', 'Help wanted!');
INSERT INTO advertisements (userid, title) VALUES ('2', 'Looking for hiring!');
INSERT INTO advertisements (userid, title) VALUES ('3', 'Test!');