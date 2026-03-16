.. _uri-extension:
.. meta::
	:description:
		URI Extension: ``uri`` is an extension that provides APIs to securely parse and modify URIs and URLs according to the RFC 3986 and WHATWG URL standards.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: URI Extension
	:twitter:description: URI Extension: ``uri`` is an extension that provides APIs to securely parse and modify URIs and URLs according to the RFC 3986 and WHATWG URL standards
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: URI Extension
	:og:type: article
	:og:description: ``uri`` is an extension that provides APIs to securely parse and modify URIs and URLs according to the RFC 3986 and WHATWG URL standards
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/uri-extension.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"URI Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:46:29 +0000","dateModified":"Mon, 16 Mar 2026 14:46:29 +0000","description":"``uri`` is an extension that provides APIs to securely parse and modify URIs and URLs according to the RFC 3986 and WHATWG URL standards","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/URI Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


URI Extension
-------------

``uri`` is an extension that provides APIs to securely parse and modify URIs and URLs according to the RFC 3986 and WHATWG URL standards. It is powered by the uriparser, RFC 3986, and Lexbor, WHATWG URL, libraries. It offers the ``uri`` class.

This extension is meant to replace the ``parse_url()`` function. It also provides two ways to manipulate, parse and produce, URL, which was not available until PHP 8.5.

.. code-block:: php
   
   <?php
   
   // PHP 8.5 and newer
   use Uri\Rfc3986\Uri;
   
   $uri = new Uri('https://php.net/releases/8.5/en.php');
   var_dump($uri->getHost());
   // string(7) php.net
   
   // PHP 8.4 and older
   $components = parse_url('https://php.net/releases/8.4/en.php');
   var_dump($components['host']);
   // string(7) php.net
   
   ?>


`Documentation <https://www.php.net/manual/en/book.uri.php>`__

See also https://en.wikipedia.org/wiki/WHATWG, https://tools.ietf.org/html/rfc3986, https://www.infoworld.com/article/4094261/php-8-5-enables-secure-uri-and-url-parsing.html, https://www.php.net/manual/en/migration85.new-classes.php

Related : :ref:`Universal Resource Identifier (URI) <uri>`, :ref:`Universal Resource Locator (URL) <url>`, :ref:`URI Class <uri-class>`

Related packages : `league/uri <https://packagist.org/packages/league/uri>`_
