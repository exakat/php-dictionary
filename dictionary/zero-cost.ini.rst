.. _zero-cost:
.. meta::
	:description:
		Zero Cost: ``zero cost`` most commonly refers to zero-cost assertions, a feature introduced in PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Zero Cost
	:twitter:description: Zero Cost: ``zero cost`` most commonly refers to zero-cost assertions, a feature introduced in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Zero Cost
	:og:type: article
	:og:description: ``zero cost`` most commonly refers to zero-cost assertions, a feature introduced in PHP 7
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/zero-cost.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Zero Cost","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 30 Mar 2026 08:20:21 +0000","dateModified":"Mon, 30 Mar 2026 08:20:21 +0000","description":"``zero cost`` most commonly refers to zero-cost assertions, a feature introduced in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Zero Cost.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Zero Cost
---------

``zero cost`` most commonly refers to zero-cost assertions, a feature introduced in PHP 7.0.

Zero cost assertions means that they can be turned off, and do not add any execution penalty. 

Until PHP 7.0, assertions could be switched off, but their parsing and non-execution would still require some condition checks. Since PHP 7.0, disabled assertions are not even compiled into bytecode: they are completely removed from the code.

Zero-cost is associated with compiled languages, which are able to remove such code at compile time, with the correction options, debug or not. 

Some PHP packages and applications claim to be zero-cost. They are using some well place execution to reduce the impact on the execution time, like Kphp, which compiles to C++ a subset of PHP.

.. code-block:: php
   
   <?php
   
       assert($a !== 0, '$a must not be zero.');
   
   ?>


See also https://vkcom.github.io/kphp/

Related : :ref:`Assertions <assertion>`

Related packages : `olvlvl/composer-attribute-collector <https://packagist.org/packages/olvlvl/composer-attribute-collector>`_
