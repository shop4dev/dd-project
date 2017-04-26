Synopsis:

This is a simple todo list (task manager), built with symfony. You can have  your personal account, create a list of todo's and create todo's themselves. You can edit, delete and shuffle todo's. You can also see how much time you have left on your todo, if you look at the icon on your todo. In the future you will be able to create teams, create todo's for those teams and have multiple people see, what needs to be done.



How to launch the project:

If you want to launch the project, you must have:
	1. php;
	2. some server (apache);
	3. composer;
	4. symfony;
	5. git;
	6. PhpStorm recommended;
	7. Linux recommended;
After you install these programs, you must get the project from git, located here:
https://github.com/shop4dev/dd-project
You can use git clone, or some program to clone the existing project from git.
Then you must open the terminal in your project folder and type:
composer install
This will isntall all the required items, that you will need with this project.
After that, you will need to go to your localhost/phpmyadmin and create a database, called "todo"
Then you need to open the parameters.yml file, located in your_project/app/config/parameters.yml and change these values accordingly, so you could connect to your database:
    database_name: todo
    database_user: user (usually root)
    database_password: password (usually empty)
Once this is done, you will need to update your database with the required tables by entering
the command in the terminal: app/console doctrine:schema:update --force.
In your phpmyadmin there should already be tables filled with attributes.
After that, you need to enter this command to launch the server:
php bin/console server:start

Well done! You have succesfully lauched the project!


Contributors:
Emanuelis Capas, Petras Bartušis, Tomasz Markowski,

A Symfony project created on April 11, 2017, 11:31 am.
