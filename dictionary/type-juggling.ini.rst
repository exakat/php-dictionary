.. _type-juggling:
.. meta::
	:description:
		Type Juggling: Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type Juggling
	:twitter:description: Type Juggling: Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Type Juggling
	:og:type: article
	:og:description: Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/type-juggling.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Type Juggling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Apr 2025 07:02:02 +0000","dateModified":"Mon, 21 Apr 2025 07:02:02 +0000","description":"Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Type Juggling.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Type Juggling
-------------

Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation.

For example, integers are translated into string when displayed, or kept as integers to be used with math operations. 

Type juggling is usually done automatically, without user intervention. Explicit type juggling is achieved with the cast operators.


.. code-block:: php
   
   <?php
   
   $a = "35";
   echo $a + 4; // display 39
   
   echo substr($a, -1); // display 5
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.type-juggling.php>`__

See also `Type Juggling and Loose Comparison <https://cheatsheet.haax.fr/web-pentest/php-vulnerabilities/type_juggling/>`_, `How PHP Type Juggling Works – Explained with Code Examples <https://www.freecodecamp.org/news/how-php-type-juggling-works-explained-with-code-examples/>`_

Related : :ref:`Cast Operator <cast>`
