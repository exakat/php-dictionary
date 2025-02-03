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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"PDOException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"PDOException represents an error raised by PDO","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PDOException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
