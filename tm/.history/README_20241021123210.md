The Task manager application, was designed for users to create and manage specific tasks for various projects they embark on, the application, allows a person to
1. create their profile
2. Login with their email and password
3. Create a project
4. Create tasks and assign it to a specific project
5. Manage project and tasks under it
6. view the completed project history

Steps for installation
1.Install Xampp, visual studio code, and composer

2. a. create a folder in a location of your choice
   b. Copy the tm folder to the folder you have created, right click and select extract here (extract all tm folder files to the folder.

3. click on the start menu and type "env" in the search box, select the edit the system environmental variables
b. select path and click on edit
c. click on new and add this code "C:\ProgramData\ComposerSetup\bin"
d. click ok
e. select on path in user variables and click on edit
f. click on new and add this line of code "C:\Users\shadr\AppData\Roaming\Composer\vendor\bin"

4. open vs code and drag the tm folder into vs code

5. open your the terminal and run "composer update --ignore-platform-reqs"

6. Run "php artisan migrate"
-- your would be asked if you would want to create a database called task_manager, press the enter button to continue.

7. Run "php artisan serve" and enjoy the app

Thank you!

created by shadrach Godwin :)
