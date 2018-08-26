# importSqlWithPhp

Sometimes there are times when you can not use **PhpMyAdmin** or any database program, and you have to use other options to import the Sql file into your database. Here, you can import with both the old mysql_query and the new mysqli_query in Php.

You need to do followings on both methods; upload Sql file and php file at the same place and run the php file through the site address. You can also run console commands through the server.

Update **$filename** with the name of sql. Update the **$mysql_host** variable with the database server. If the database server is not different, you can leave it as it is. **$mysql_username** and **$mysql_password** are the username and password for your database. **$mysql_database** is the database name. Update it as needed.
