.. _docblock:
.. meta::
	:description:
		Docblock: A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Docblock
	:twitter:description: Docblock: A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Docblock
	:og:type: article
	:og:description: A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/docblock.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Docblock","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Docblock.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Docblock
--------

A docblock, or docblock comment, is a special kind of comment used to document any structure: classes, constants, traits, interfaces, variables, functions, methods, and properties. It is written in a specific format and is typically placed just before the element it describes. Docblocks are used by tools like phpDocumentor, PHPDoc, and IDEs to generate documentation and provide code hints.

Docblock improve readability, enables IDE features and automate reference documentation generation.

.. code-block:: php
   
   <?php
   
   /**
    * A brief description of the function.
    *
    * A more detailed description, if needed.
    *
    * @param type $parameter_name Description of the parameter
    * @return type Description of the return value
    */
   function exampleFunction($parameter_name) {
       // Function code here
       return $result;
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/PHPDoc>`__

See also https://docs.phpdoc.org/guide/references/phpdoc/index.html#phpdoc-reference

Related : :ref:`Self-documenting <self-documenting>`, :ref:`Documentation <documentation>`, :ref:`Readability <readability>`

Related packages : `phpdocumentor/phpdocumentor <https://packagist.org/packages/phpdocumentor/phpdocumentor>`_, `php-di/phpdoc-reader <https://packagist.org/packages/php-di/phpdoc-reader>`_, `phpowermove/docblock <https://packagist.org/packages/phpowermove/docblock>`_
