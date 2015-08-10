# easy-db-layer
This tool provides simple and powerful structure and functionality to work with MySQL database

## Structure
You need to create PHP class for each database table. That class must implement DatabaseTables interface. You can take TestTable class as example.

Change $tableName value to your database table name.

$fields array represents mapping of database table fields and data keys in application.

After it you can write functions to manage your table data. Use DBconnection class instance functions to query to database.
