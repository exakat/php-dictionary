.. _url:

Universal Resource Locator (URL)
--------------------------------

Universal Resource Locator is a string that represents a resource, where to find it, how to access it. 

The full URL include the following information : 

+ protocol : for example, http, https, mongodb, zip
+ user : the username for authentication purposes
+ pass : the password associated with the username
+ server : the name or the address of the server where the resource reside
+ path : the location of the resource on the server
+ query : extra parameters to reach the resource
+ fragment : the location of the resource inside the previous address (server + path)

PHP has several functions dedicated to processing URL, such as parse_url() and http_build_query(). 

PHP also makes use of URL as a generalisation for file path. For example, file_get_contents() and fopen() both work on local and remote files, via URL.

PHP is able to process different protocols with its internal Protocols and Wrappers, using the file system functions.



.. code-block:: php
   
   
   <?php
   
   print_r(parse_url('https://www.php.net/'));
   
   /*
   Array
   (
       [scheme] => https
       [host] => www.php.net
       [path] => /
   )
   */
   
   // fetch the PHP home page
   $html = file_get_contents('https://www.php.net/'); 
   ?>


`Documentation <https://en.wikipedia.org/wiki/URL>`__

See also `URL Functions <https://www.php.net/manual/en/ref.url.php>`_, `Supported Protocols and Wrappers <https://www.php.net/manual/en/wrappers.php>`_

Related : :ref:`SSL <ssl>`, :ref:`File <file>`
