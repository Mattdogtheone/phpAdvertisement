# Advertisements

*Scroll down for Hungarian*

### Requirements for running this project
I used xampp to run an Apache- and a MySQL server.
- For the database, use the advertisements.sql. It has everything to create the database including some dummy/test data
- As of the application it self I have ran It with the help of the xampp Apache server. Pasted the Advertisements folder into the htdocs folder and used the http://localhost/Advertisements/ url

### Using the site
- The first page is the index.php that greets the user and late becomes /home. From this page the user can navigate to the other pages using the navigation bar at the top of the page.
- The second page is the usersview.php which lists the current users from the database and the url becomes /users. On this page the user has the ability to add new users to the database.
- The third and last page is the advertisementsview.php which lists the current advertisements, and the user that uploaded that advertisement and the url becomes /advertisements. On this page, like the /users the visitor of the site is capable of uploading a new advertisement, where they can type in the title and choose the user through a dropdown menu

### The structure of the project
- In the root folder there is the web project in a folder called Advertisements, the .sql for the database, and this README.MD
- In the Advertisements folder there are two other folders called classes and includes. The pages of the sites as Views are in this folder's root as well as the .htaccess and styles.css
- The classes folder contains all the PHP classes that the site uses which are the following:
	- db.class.php: This class makes the PDO for the connection to the database. The two Model classes named User and Advertisement inherits this PDO
	- user.class.phd: This is the Model class of the users table. In here there are the basic functions towards the database which are called 
		- getAllUsers()
		- createUsers()
		- getUserById()
	- userservice.class.php: This is the Service class for the User Model. The functions calles the  functions in the upper class through the instance of a User class
	- usercontroller.class.php: This is the Controller class for the User Model. The functions calles the functions in the upper class through the instance of a UserService class
	- advertisement.class.phd: This is the Model class of the advertisement table. In here there are the basic functions towards the database which are called getAllAdvertisement() and createAdvertisement() 
	- advertisementrservice.class.php: This is the Service class for the Advertisement Model. The functions calles the functions in the upper class through the instance of a Advertisement class
	- advertisementcontroller.class.php: This is the Controller class for the Advertisement Model. The functions calles the  functions in the upper class through the instance of a AdvertisementService class
- The includes folder contains an autoLoader and two parser php:
	- autoloader.inc.php: The function of this file is to not have to write different includes to the Views. Including this file at the beginning of the View will load the necessary file paths to the php.
	- createuser.inc.php: Parses data from the form of the usersview.php to the usercontroller.class.php
	- createadv.inc.php: Parses data from the form of the advertisementsview.php to the usercontroller.class.php

### Using MVC and adding a layer under the Controller layer
I have not fully grasped the idea for this implementation and the information towards the matter was not clear. Every page I visited to find the answer has lead me to different, and most of the time controversial statements, so there is the possibility of the fact, that my work does not meet that requirement.

_________________________________________________________________________

### A program futtatásához szükséges részek
Személy szerint xampp-ot használtam Apache-, illetve MySQL szerver futtatására.
- A projekt fő könyvtárában van az advertisements.sql fájl, amely segítségével létrehozható az adatbázis, illetve van benne pár dummy adat amivel lehet tesztelni
- Xampp-ot használva elég volt számomra a htdocs mappába helyeznem az Advertisements mappát és a http://localhost/Advertisements/ url-en elértem a projektet

### A projekt struktúrája
- A főkönyvtárban található a .sql fájl melynek segÍtségével könnyedén létrehozható az adatbázis. Továbbá itt található a web applikáció mappája, illetve ez a README.MD
- Az Advertisements projektmappán belül található további két mappa, névszerint classes, és includes, valamint az index.php, és a két táblához tartozó View fájlok melyek a következők: usersview.php és advertisementsview.php
- A classes mappa a következő fájlokat tartalmazza:
	- db.class.php: Ez az osztály felelős a kapcsolathoz szükséges PDO létrehozására.
	- user.class.php: Ez a Model réteg osztálya a users táblának, amely egyszerűbb függvényeket tartalmaz. Ezek a függvények a 
		- getAllUser(), mely lekéri az összes felhasználót az adatbázisból
		- createUser(), mely létrehoz új felhasználót
		- getUserById(), mely az id alapján lekéri az ahhoz tartozó felhasználó nevét
	- userservice.class.php: Ez a Service réteg osztálya mely a Controller-től kapott adatot továbbítja a Model felé
	- usercontroller.class.php: Ez a Controller réteg osztálya mely a felhasználó által bevitt adatokat továbbítja a Service felé
	- advertisement.class.php: Ez a Model réteg osztálya a users táblának, amely egyszerűbb függvényeket tartalmaz. Ezek a függvények a 
		- getAllAdvertisement(), mely lekéri az összes feladott hírdetést, illetve azokhoz tartozó felhasználók nevét az adatbázisból
		- createAdvertisement(), mely létrehoz egy új hírdetést a megadott paraméterekkel
	- advertisementservice.class.php: Ez a Service réteg osztálya mely a Controller-től kapott adatot továbbítja a Model felé
	- advertisementcontroller.class.php: Ez a Controller réteg osztálya mely a felhasználó által bevitt adatokat továbbítja a Service felé

### Az MVC használata a projektben
A követemények között lévö elvárás, miszerint "Must have at least 1 layer under the Controller layer" nem teljesen tudtam érteni. Nem az angol nyelvtudás végett volt nehéz, hanem mikor választ kerestem arra a kérdésre, hogy milyen egyéb réteget, hol lehet felhasználni, akkor minden válasz mit találtam különböző, sokszor ellentvető volt. Ennek következtében meg van annak az esélye, hogy ezt a követelményt nem sikerült teljesítenem.