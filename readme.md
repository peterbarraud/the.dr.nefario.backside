# Get started with the Dr Nefario Backside

## Create mariadb Database
1. To start mariadb, double-click `start.db.bat`
1. To login as root user, double-click `login.root.bat`
1. Create a database `create database <database-name>`
1. Create a db user with all permissions on this database
```
create user '<user name>'@'localhost' identified by '<password>';
grant all privileges on <database-name>.* to 'newuser'@'localhost';
```
1. Put this into the `services/datainfo.json`

## Log in as User
1. Open the command line in the main folder
*Note*: Double-clicking the login.user.bat doesn't work
1. Execute the following command:
```
login.user -u <username> -p<password> -D <databse name>
```

## Build the data-object model
For each object that you need, create a table and the corresponding .php object and object collection
1. Create database table
The primary field of the table MUST be named id and MUST be auto increment
```
create table <table name> (
    id int not null auto_increment,
    <other fields>
    primary key (id)
);
```
2. Create PHP object
In the services/objectlayer folder, create the php object
Name of the php object MUST be identical to the table and must inherit from `objectbase`
See `appuser.php` for example
3. Create PHP object collection
In the objectlayer folder, create the php objectcollection
Name of the php objectcollection MUST be identical to the table suffixed with `collection` and must inherit from `objectcollectionbase`
See `appusercollection.php` for example

## Build the RestFUL API
In the services folder, you should have `rest.api.php`