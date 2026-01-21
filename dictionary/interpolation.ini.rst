.. _interpolation:
.. meta::
	:description:
		Interpolation: Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interpolation
	:twitter:description: Interpolation: Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Interpolation
	:og:type: article
	:og:description: Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/interpolation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Interpolation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Interpolation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Interpolation
-------------

Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax.

.. code-block:: php
   
   <?php
   $string = \world\;
   echo \Hello $string\; 
   // displays Hello world
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`__

See also https://www.phpflow.com/php/how-to-use-string-interpolation-in-php/

Related : :ref:`String <string>`, :ref:`Concatenation <concatenation>`, :ref:`Heredocs <heredoc>`, :ref:`Variables <variable>`
