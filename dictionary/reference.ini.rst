.. _reference:
.. meta::
	:description:
		References: References references allow to create multiple variables that refer to the same underlying value in memory.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: References
	:twitter:description: References: References references allow to create multiple variables that refer to the same underlying value in memory
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: References
	:og:type: article
	:og:description: References references allow to create multiple variables that refer to the same underlying value in memory
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reference.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"References","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Feb 2026 15:36:43 +0000","dateModified":"Mon, 09 Feb 2026 15:36:43 +0000","description":"References references allow to create multiple variables that refer to the same underlying value in memory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/References.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


References
----------

References references allow to create multiple variables that refer to the same underlying value in memory. When using references, any changes made to one variable affect the others that reference the same value. This may be useful in certain situations, such as when it is important to avoid copying large amounts of data or when it is needed to modify the original value through multiple variables. PHP optimizes the transfert of data by postponing duplication of data until they are actually modified: there is no need to use references with readonly data.

.. code-block:: php
   
   <?php
   
   $a = 1;
   
   $b = &$a; 
   $b = 2;
   
   echo $a;
   // displays 2
   ?>


`Documentation <https://www.php.net/manual/en/language.references.php>`__

See also https://www.elated.com/php-references/, https://www.tutorialspoint.com/php-spotting-references, https://erikpoehler.com/2023/01/15/references-in-php/

Related : :ref:`Variables <variable>`, :ref:`Weak References <weak-reference>`, :ref:`Alias <alias>`, :ref:`Dangling Reference <dangling-reference>`, :ref:`Garbage Collection <garbage-collection>`, :ref:`Recursive Array <recursive-array>`, :ref:`Self-reference <self-reference>`
