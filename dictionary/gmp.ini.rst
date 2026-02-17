.. _gmp:
.. meta::
	:description:
		GNU Multiple Precision (GMP): ``gmp`` is a PHP extension that stands for "GNU Multiple Precision".
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: GNU Multiple Precision (GMP)
	:twitter:description: GNU Multiple Precision (GMP): ``gmp`` is a PHP extension that stands for "GNU Multiple Precision"
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: GNU Multiple Precision (GMP)
	:og:type: article
	:og:description: ``gmp`` is a PHP extension that stands for "GNU Multiple Precision"
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/gmp.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"GNU Multiple Precision (GMP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 13 Feb 2026 12:51:12 +0000","dateModified":"Fri, 13 Feb 2026 12:51:12 +0000","description":"``gmp`` is a PHP extension that stands for \"GNU Multiple Precision\"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/GNU Multiple Precision (GMP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


GNU Multiple Precision (GMP)
----------------------------

``gmp`` is a PHP extension that stands for "GNU Multiple Precision". It provides functionality to process mathematically arbitrary-length integers .

The ``gmp`` extension allows the basic calculations, like addition, multiplication,... some advanced math functions such as square roots, prime test, legendre symbol, GCD, etc.

.. code-block:: php
   
   <?php
   
       echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;
       // TRANSLIT : This is the Euro symbol 'EUR'.
   
   ?>


`Documentation <https://www.php.net/manual/en/book.gmp.php>`__

See also https://gmplib.org/, https://reintech.io/blog/beginners-guide-php-gmp-library-arbitrary-precision-arithmetic

Related : :ref:`Bcmath <bcmath>`
