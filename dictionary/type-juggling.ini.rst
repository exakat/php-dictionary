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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/type-juggling.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/type-juggling.ini.html","name":"Type Juggling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:41:00 +0000","dateModified":"Mon, 13 Jul 2026 18:41:00 +0000","description":"Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Type Juggling.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Type Juggling
-------------

Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation.

For example, integers are translated into string when displayed, or kept as integers to be used with math operations. 

Type juggling is usually done automatically, without user intervention. Explicit type juggling is achieved with the cast operators.


.. code-block:: php
   
   <?php
   
       $a = '35';
       echo $a + 4; // display 39
       
       echo substr($a, -1); // display 5
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.type-juggling.php>`__

See also `How PHP Type Juggling Works – Explained with Code Examples <https://www.freecodecamp.org/news/how-php-type-juggling-works-explained-with-code-examples/>`_, `PHP Type Juggling Vulnerability <https://medium.com/@abdelrahman0x01/php-type-juggling-vulnerability-768bca4d8b3b>`_, `Type Juggling <https://swisskyrepo.github.io/PayloadsAllTheThings/Type%20Juggling/>`_ and `How I Chained Mass Assignment + PHP Type Juggling to Take Over Any Account on a Live Platform <https://medium.com/@angry.althaf/how-i-chained-mass-assignment-php-type-juggling-to-take-over-any-account-on-a-live-platform-8ad4b193e171>`_.

Related : :ref:`Cast Operator <cast>`, :ref:`Boolean <boolean>`, :ref:`Comparison <comparison>`, :ref:`Condition <condition>`, :ref:`Magic Hash <magic-hash>`, :ref:`Silent Behavior <silent>`, :ref:`String Increment <string-increment>`, :ref:`Type Checking <type-checking>`, :ref:`Type Inference <type-inference>`, :ref:`Hash Comparisons <hash-comparison>`, :ref:`Type Coercion <coercion>`, :ref:`Capture The Flag (CTF) <ctf>`, :ref:`Footgun <footgun>`, :ref:`Strict <strict>`
