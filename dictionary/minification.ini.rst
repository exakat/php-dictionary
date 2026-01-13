.. _minification:
.. _minified:
.. _minify:
.. _unminify:
.. meta::
	:description:
		Minification: Minification is the process to remove elements that are useless in a PHP code, without changing its execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Minification
	:twitter:description: Minification: Minification is the process to remove elements that are useless in a PHP code, without changing its execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Minification
	:og:type: article
	:og:description: Minification is the process to remove elements that are useless in a PHP code, without changing its execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/minification.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Minification","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Dec 2025 06:26:42 +0000","dateModified":"Tue, 30 Dec 2025 06:26:42 +0000","description":"Minification is the process to remove elements that are useless in a PHP code, without changing its execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Minification.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Minification
------------

Minification is the process to remove elements that are useless in a PHP code, without changing its execution.

For example, whitespaces and comments may be removed from PHP code: it makes the code much smaller, but also, less readable.

Minified code has a smaller footprint on the disk, and may be faster to load, read and process. In PHP, it has very limited impact, and is not considered an optimisation technic. 

Minification is applied successfully on HTML, CSS, SVG, XML, JSON, Javascript, and image formats.

Minification may be used for obfuscation.

Unminify is the contrary to minify.

.. code-block:: php
   
   <?php
   
   // minified version
   for($i=0; $i<10;++$i){print$i\n;}
   
   // minified version
   for($i = 0; $i < 10; ++$i) {
       // This displays a number
       print $i\n;
   }
   
   // structure that cannot be minified
   echo 1 . 2; // displays 12 
   echo 1.2; // displays 1.2 
   
   ?>


See also https://rabbitloader.com/articles/minify-php/, https://php-minify.com/, https://dev.to/hexydec/the-state-of-minification-in-php-how-1-project-grew-into-6-536i

Related : :ref:`Obfuscation <obfuscation>`

Related packages : `php-code-minifier/php-code-minifier  <https://packagist.org/packages/php-code-minifier/php-code-minifier >`_
