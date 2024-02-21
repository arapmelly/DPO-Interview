#### Discuss different methods for connecting to a database in PHP. Describe the differences between MySQLi and PDO. Provide an example of how to perform a basic database query using one of these methods.

 - **MySQLi** : offers both procedural and object-oriented interfaces for interacting with MySQL databases
 - **PDO** : a database abstraction layer that provides a consistent interface for accessing various database systems.It supports multiple database drivers
 - **ORM** : Object Relational Mapping libraries provide abstraction layers on top of database connections e.g Doctrine, Eloquent
 
**Difference Between PDO and MySQLi**
 - **MySQLi** is an extension specifically designed for **MySQL** databases while **PDO** is a general database abstraction layer that supports multiple databases.
 - **MySQLi**  offers both  **OO**  and  **procedural**  styles. **PDO**  uses an  **OO**  API consistently.
 - **PDO** supports **named parameters** in prepared statements while **MySQLi** does not natively support named parameters
 - **PDO** boasts a wider range of driver support. It can connect to **multiple databases** while **MySQLi** has only one driver: **MySQL**

**Example (MySQLi)**:


    $connection = mysqli_connect("hostname", "username", "password", "database");


