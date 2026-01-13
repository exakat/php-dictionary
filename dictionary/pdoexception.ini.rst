.. _pdoexception:
.. meta::
	:description:
		PDOException: ``PDOException`` represents an error raised by PDO.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PDOException
	:twitter:description: PDOException: ``PDOException`` represents an error raised by PDO
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PDOException
	:og:type: article
	:og:description: ``PDOException`` represents an error raised by PDO
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pdoexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PDOException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 19 Apr 2025 08:48:32 +0000","dateModified":"Sat, 19 Apr 2025 08:48:32 +0000","description":"``PDOException`` represents an error raised by PDO","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PDOException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PDOException
------------

``PDOException`` represents an error raised by PDO. It is recommended to never throw a ``PDOException`` from custom code, and only catch such exception, emitted directly by the PHP engine.

.. code-block:: php
   
   <?php
       try {
         $pdo = new PDO('sqlite:myfile.sqlite');
       } catch(PDOException $e) {
           die('Unable to open database connection');
       } 
   ?>


`Documentation <https://www.php.net/manual/en/class.pdoexception.php>`__
