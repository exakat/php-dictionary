.. _pharexception:
.. meta::
	:description:
		PharException: The PharException class is a phar-specific exception.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PharException
	:twitter:description: PharException: The PharException class is a phar-specific exception
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PharException
	:og:type: article
	:og:description: The PharException class is a phar-specific exception
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pharexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"PharException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Nov 2025 18:08:39 +0000","dateModified":"Sun, 09 Nov 2025 18:08:39 +0000","description":"The PharException class is a phar-specific exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PharException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PharException
-------------

The PharException class is a phar-specific exception. It is raised my many Phar-related methods, and are generally differentiated based on their message, rather than having different types of exception. For example, ``'Cannot call constructor twice'`` or ``'Phar creation or opening failed'``.

.. code-block:: php
   
   <?php
   
   $phar = new Phar($myPhar);
   try {
     $phar->extractTo($directory, 'directory/', true);
   } catch (PharException $ex) {
       print "An error happened while extracting the phar";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.pharexception.php>`__

See also https://blog.airbrake.io/blog/php-exception-handling/pharexception

Related : :ref:`Exception <exception>`
