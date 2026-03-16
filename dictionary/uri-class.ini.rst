.. _uri-class:
.. meta::
	:description:
		URI Class: The ``URI`` class is the class provided by the uri extension.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: URI Class
	:twitter:description: URI Class: The ``URI`` class is the class provided by the uri extension
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: URI Class
	:og:type: article
	:og:description: The ``URI`` class is the class provided by the uri extension
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/uri-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Attempt to unset static property %s::$%s.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Attempt to unset static property %s::$%s.html","name":"URI Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:46:29 +0000","dateModified":"Mon, 16 Mar 2026 14:46:29 +0000","description":"The ``URI`` class is the class provided by the uri extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/URI Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


URI Class
---------

The ``URI`` class is the class provided by the uri extension. It is build with a string, as URL, and parses it in smaller part with its methods.

.. code-block:: php
   
   <?php
   
   use Uri\Rfc3986\Uri;
    
   $url = new Uri('https://www.php.net:443/phpinfo');
   
   ?>


See also https://laravel-news.com/php-85-introduces-a-new-uri-extension
