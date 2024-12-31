.. _pdoexception:
.. meta::
	:description:
		PDOException: PDOException represents an error raised by PDO.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PDOException
	:twitter:description: PDOException: PDOException represents an error raised by PDO
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PDOException
	:og:type: article
	:og:description: PDOException represents an error raised by PDO
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pdoexception.ini.html
	:og:locale: en


PDOException
------------

PDOException represents an error raised by PDO. You should not throw a PDOException from your own code. 

.. code-block:: php
   
   <?php
       try {
         $pdo = new PDO('sqlite:myfile.sqlite');
       } catch(PDOException $e) {
           die('Unable to open database connection');
       } 
   ?>


`Documentation <https://www.php.net/manual/en/class.pdoexception.php>`__
