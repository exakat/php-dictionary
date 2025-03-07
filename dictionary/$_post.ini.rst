.. _$_post:
.. meta::
	:description:
		$_POST: An associative array of variables, transmitted to the current script via the HTTP POST method, with the MIME types `application/x-www-form-urlencoded` or `multipart/form-data`.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $_POST
	:twitter:description: $_POST: An associative array of variables, transmitted to the current script via the HTTP POST method, with the MIME types `application/x-www-form-urlencoded` or `multipart/form-data`
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $_POST
	:og:type: article
	:og:description: An associative array of variables, transmitted to the current script via the HTTP POST method, with the MIME types `application/x-www-form-urlencoded` or `multipart/form-data`
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$_post.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$_POST","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"An associative array of variables, transmitted to the current script via the HTTP POST method, with the MIME types `application\/x-www-form-urlencoded` or `multipart\/form-data`","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$_POST.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$_POST
------

An associative array of variables, transmitted to the current script via the HTTP POST method, with the MIME types `application/x-www-form-urlencoded` or `multipart/form-data`.

The received values are all strings or arrays. They are strings by default, and other scalar types needs a casting. The values are arrays when the URL uses the `[]` format. 

$_POST is a superglobal : it is always available, in every scope.

Values inside $_POST are always strings, or arrays.



.. code-block:: php
   
   <?php
   
   // POST x=1
   $_POST['x'] === '1';
   
   // POST y=abc
   $_POST['y'] === 'abc';
   
   // POST z[]=def
   // POST z[]=ghi
   $_POST['z'] === array('def', 'ghi');
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.post.php>`__

Related : :ref:`$_GET <$_get>`, :ref:`$_REQUEST <$_request>`, :ref:`$_COOKIE <$_cookie>`, :ref:`$_ENV <$_env>`, :ref:`$_SERVER <$_server>`, :ref:`Form <form>`, :ref:`Incoming Data <incoming-data>`
