The webpage does not support solr yet but solr is functional


MySQL instuctions with webpage instructions

1) Enter "" commands into terminal if linux version is Ubuntu or similar for version of linux being used

2) "su - " to be root user for easier installation and configuration

3) Install the following packages with these terminal commands
   MySQL with "apt-get install mysql-server" 
   PHP with "apt-get install php5-mysql" and "apt-get install php5 php-pear"
   Apache with "apt-get install libapache2-mod-auth-mysql"

4) Start Apache server with "/etc/init.d/apache2 restart"

5) Go to the Apache server directory with "cd /var/www/html/"

6) Copy contents of postgraduate_application_website folder into the directory and change permission to be completley executable with "chmod 777 login_page.html" Repeat for login_page_style.css, home_page.html, home_page_style.css, applicant_list.php, applicant_list_style.css, applicant_info.php, applicant_info_style.css, pdfIcon, com and test.pdf

7) Set up MySQL with password = password, if not change passwords in relevant files (both .php)

8) Open MySQL with "mysql -u root -p" and enter password

9) Enter "source data.txt" where data.txt is the full path of where data.txt is installed

10) Restart Apache server with "/etc/init.d/apache2 restart"

11) Enter http://localhost/login_page.html into your web browser to begin testing

12) Fields are operation but lack functionality, so just click the login button

13) Select Applicant list

14) Select "more info" to select a specific applicant's information

15) Click on pdf document to open dummy pdf 

16) You can navigate back to the home page




Solr instuctions

1) Install solr-5.5.0

2) Download jdbc from dev.mysql.com/get/Downloads/Connector-J/mysql-connector-java-5.1.32.tar.gz and unzip it

3) Enter all "" in the terminal

4) Enter "cd ~/solr-5.5.0" to go to solr directory

5) Enter "bin/solr start" to start solr server

6) Enter "bin/solr create_core -c test2 -d basic_configs" to create database

7) Enter "cd ~/solr-5.5.0/server/solr/test2/conf" to get into the database configuration files

8) Replace solrconfig.xml and managed-schema with the respectively named files provided to congfigure solr to import a MySQL database and the fields it will save the values in.

9) Copy db-data-config.xml into conf directory, to instruct solr on how to import the table, change the password to your MySQL password in the file

10) Make a lib directory in "~/solr-5.5.0/server/solr/test2"

11) Enter "cp -i /home/julio/mysql-connector-java-5.1.38/mysql-connector-java-5.1.38-bin.jar /home/julio/solr-5.5.0/server/solr/test2/lib" to copy the jdbc. The first path is the location of the files on your computer and the second is the location of the library directory you created in the previous step.

12) Go back to the solr-5.5.0 dir with "cd ~/solr-5.5.0" and enter "bin/solr restart" to update solr

13) Enter http://localhost:8983/solr/test2/dataimport?command=full-import in your internet browser address bar to import the MySQL database to solr

14 A) Enter http://localhost:8983/solr/test2/select?q=*%3A*&wt=json&indent=true into internet browser address bar to peform a select * from test2 query

OR

14 B) Enter http://localhost:8983/solr to pull up the solr admin page. Go to the core selector and select test2

15 B) Find the Query tab in the menu on the left and push it.

16 B) Push the excecute button at the bottom and all values in the database will appear
