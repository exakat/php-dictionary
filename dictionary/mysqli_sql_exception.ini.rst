.. _mysqli_sql_exception:
.. meta::
	:description:
		mysqli_sql_exception: mysqli_sql_exception is thrown when a mysqli related error is found.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: mysqli_sql_exception
	:twitter:description: mysqli_sql_exception: mysqli_sql_exception is thrown when a mysqli related error is found
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: mysqli_sql_exception
	:og:type: article
	:og:description: mysqli_sql_exception is thrown when a mysqli related error is found
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mysqli_sql_exception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"mysqli_sql_exception","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:20:47 +0000","dateModified":"Tue, 20 Jan 2026 07:20:47 +0000","description":"mysqli_sql_exception is thrown when a mysqli related error is found","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/mysqli_sql_exception.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


mysqli_sql_exception
--------------------

mysqli_sql_exception is thrown when a mysqli related error is found. 

When an error occurs during a database operation using the MySQLi extension, such as a failed database connection or a syntax error in a query, a mysqli_sql_exception exception can be thrown.

Methods like ``commit``, ``query``, ``prepare``, ``execute_query``, ``rollback``, ``real_query``, ``real_connect``, ``__construct``,  ``reap_async_query`` all throw exceptions when the strict mode is activated.

.. code-block:: php
   
   <?php
   
   	$mysqli = new Mysqli($host, $user, $pass);
   	
       try {
   	    $mysqli->execute_query();
       } catch(mysqli_sql_exception $e) {
           echo $e->getMessage().\\\n\;
       }
   ?>


`Documentation <https://www.php.net/manual/en/class.argumentcounterror.php>`__

Related : :ref:`throw <throw>`, :ref:`Try-catch <try-catch>`
