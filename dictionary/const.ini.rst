.. _const:
.. meta::
	:description:
		Const: ``const`` is a PHP keyword, that creates constant definitions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Const
	:twitter:description: Const: ``const`` is a PHP keyword, that creates constant definitions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Const
	:og:type: article
	:og:description: ``const`` is a PHP keyword, that creates constant definitions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/const.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Const","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"``const`` is a PHP keyword, that creates constant definitions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Const.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Const
-----

``const`` is a PHP keyword, that creates constant definitions. 

``const`` is allowed inside classes, interfaces, enumerations and traits, to create static constants. ``const`` is also allowed in the global scope, to create global constants. 

``const`` is only allowed in the body of a classes, interfaces, enumerations and traits, and the first level of a main file. It is not possible to create conditioned constants with a if-then structure and const : this requires an include. 


.. code-block:: php
   
   <?php if ($a == 5): ?>
   A is equal to 5
   <?php endif; ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.alternative-syntax.php>`__

Related : :ref:`Class <class>`, :ref:`Trait <trait>`, :ref:`define() <define>`, :ref:`Conditioned Structures <conditioned>`, :ref:`Static Constant <static-constant>`, :ref:`include <include>`
