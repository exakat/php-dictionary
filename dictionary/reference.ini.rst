.. _reference:
.. meta::
	:description:
		References: References allow creating multiple variables that refer to the same underlying value in memory.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: References
	:twitter:description: References: References allow creating multiple variables that refer to the same underlying value in memory
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: References
	:og:type: article
	:og:description: References allow creating multiple variables that refer to the same underlying value in memory
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reference.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/reference.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/reference.ini.html","name":"References","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"References allow creating multiple variables that refer to the same underlying value in memory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/References.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


References
----------

References allow creating multiple variables that refer to the same underlying value in memory. When using references, any changes made by one variable affect the others that reference the same value. This may be useful in certain situations, such as when it is important to avoid copying large amounts of data or when it is needed to modify the original value through multiple variables. PHP optimizes the transfer of data by postponing duplication of data until they are actually modified: there is no need to use references with readonly data.

.. code-block:: php
   
   <?php
   
       $a = 1;
   
       $b = &$a; 
       $b = 2;
   
       echo $a;
       // displays 2
   
   ?>


`Documentation <https://www.php.net/manual/en/language.references.php>`__

See also `PHP References: How They Work, and When to Use Them <https://www.elated.com/php-references/>`_, `PHP Spotting References <https://www.tutorialspoint.com/php-spotting-references>`_ and `References in PHP <https://erikpoehler.com/2023/01/15/references-in-php/>`_.

Related : :ref:`Variables <variable>`, :ref:`Weak References <weak-reference>`, :ref:`Alias <alias>`, :ref:`Dangling Reference <dangling-reference>`, :ref:`Garbage Collection <garbage-collection>`, :ref:`Recursive Array <recursive-array>`, :ref:`Self-reference <self-reference>`, :ref:`Circular Reference <circular-reference>`, :ref:`Clone <clone>`, :ref:`Pointer <pointer>`
