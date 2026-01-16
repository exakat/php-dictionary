.. _$HTTP_RAW_POST_DATA:
.. meta::
	:description:
		$HTTP_RAW_POST_DATA: ``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $HTTP_RAW_POST_DATA
	:twitter:description: $HTTP_RAW_POST_DATA: ``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $HTTP_RAW_POST_DATA
	:og:type: article
	:og:description: ``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$HTTP_RAW_POST_DATA.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$HTTP_RAW_POST_DATA","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 17:16:37 +0000","dateModified":"Fri, 16 Jan 2026 17:16:37 +0000","description":"``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$HTTP_RAW_POST_DATA.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$HTTP_RAW_POST_DATA
-------------------

``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request. 

Since PHP 7.0, ``php://input`` should be used instead of ``$HTTP_RAW_POST_DATA``.

.. code-block:: php
   
   <?php
   
       // $a->file was filled with $_FILES at some point
       move_uploaded_file($a->file['tmp_name'], $target);
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.files.php>`__

Removed in PHP 
