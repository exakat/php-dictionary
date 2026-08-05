# Active Record
Active Record is a design pattern commonly used in development. It provides an object-oriented approach to interact with a database table or view. In the Active Record pattern, each table or view in the database is represented by a corresponding class in the PHP code.

The main purpose of Active Record is to encapsulate the database access logic within the objects themselves. This means that an Active Record object not only represents a single row of data, but it also includes methods to perform CRUD, or Create, Read, Update, Delete, operations on that data.

With Active Record, developers can easily create, retrieve, update, and delete records from the database by invoking methods on the corresponding objects. The Active Record object abstracts away the SQL queries and provides a more intuitive and object-oriented way to work with the data.

Additionally, Active Record allows developers to add domain logic to the objects. This means that business rules and validations can be implemented directly within the Active Record classes. For example, it is possible to define methods to validate input, perform calculations, or enforce certain constraints on the data.

Active Record is often used in conjunction with other design patterns, such as the Data Mapper pattern. While Active Record focuses on the direct interaction between objects and the database, the Data Mapper pattern separates the database access logic into a separate layer, providing more flexibility and decoupling between the domain objects and the persistence layer.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/active-record.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/active-record.ini.html","name":"Active Record","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:35:11 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Active Record is a design pattern commonly used in development","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Active Record.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Active_record_pattern)**
## See Also

+ [Active Record](https://www.martinfowler.com/eaaCatalog/activeRecord.html)
+ [Getting started with Eloquent in Laravel: (for Beginners)syste](https://www.linkedin.com/pulse/getting-started-eloquent-laravel-beginners-youssef-saleem/)

## Related

+ [Data Mapper](data-mapper.ini.html)
+ [Create, Read, Update And Delete (CRUD)](crud.ini.html)
+ [Structured Query Language (SQL)](sql.ini.html)

## Related packages

+ [yiisoft/yii2-redis](https://packagist.org/packages/yiisoft/yii2-redis)
