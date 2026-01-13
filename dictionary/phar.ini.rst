.. _phar:
.. meta::
	:description:
		Phar: Phar is a the PHP Archive.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Phar
	:twitter:description: Phar: Phar is a the PHP Archive
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Phar
	:og:type: article
	:og:description: Phar is a the PHP Archive
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/phar.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Phar","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Phar is a the PHP Archive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Phar.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Phar
----

Phar is a the PHP Archive. It groups multiple files in a single one, and allows the direct execution or the inclusion of the code directly. 

ext/phar is also a PHP extension, used to create and read the PHAR archives. 

Phar archives may be zipped. 


.. code-block:: php
   
   <?php
    $phar = new Phar('myphar.phar');
    $pgz = $phar->convertToExecutable(Phar::TAR, Phar::GZ); // makes myphar.phar.tar.gz
    ?>


`Documentation <https://www.php.net/manual/en/intro.phar.php>`__
