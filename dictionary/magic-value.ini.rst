.. _magic-value:
.. meta::
	:description:
		Magic Values: A magic value is a literal value that appears in the code without a clear explanation of its meaning.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Magic Values
	:twitter:description: Magic Values: A magic value is a literal value that appears in the code without a clear explanation of its meaning
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Magic Values
	:og:type: article
	:og:description: A magic value is a literal value that appears in the code without a clear explanation of its meaning
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/magic-value.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/magic-value.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/magic-value.ini.html","name":"Magic Values","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:13:03 +0000","dateModified":"Sun, 12 Jul 2026 20:13:03 +0000","description":"A magic value is a literal value that appears in the code without a clear explanation of its meaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Magic Values.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Magic Values
------------

A magic value is a literal value that appears in the code without a clear explanation of its meaning.

Similar to magic numbers, magic values can be strings, arrays, or other literal types. They should be replaced with named constants or configuration values to improve readability and maintainability.

.. code-block:: php
   
   <?php
   
       // Magic string value
       $role = 'admin';
       
       // Better: use a constant
       const ROLE_ADMIN = 'admin';
       $role = ROLE_ADMIN;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Magic_number_(programming)>`__

Related : :ref:`Magic Numbers <magic-number>`, :ref:`Hard Coded <hard-coded>`, :ref:`Constants <constant>`, :ref:`Code Smell <code-smell>`, :ref:`Readability <readability>`
