.. _parenthesis:
.. meta::
	:description:
		Parenthesis: Parenthesis are the ``(`` and ``)``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parenthesis
	:twitter:description: Parenthesis: Parenthesis are the ``(`` and ``)``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Parenthesis
	:og:type: article
	:og:description: Parenthesis are the ``(`` and ``)``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parenthesis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Parenthesis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Apr 2026 07:08:59 +0000","dateModified":"Sat, 11 Apr 2026 07:08:59 +0000","description":"Parenthesis are the ``(`` and ``)``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Parenthesis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Parenthesis
-----------

Parenthesis are the ``(`` and ``)``. They must be balanced: each opening parenthesis must have a closing parenthesis, or a PHP syntax error is generated.

Parenthesis are used to make explicit precedence between operations. Parenthesis group all underlying operations as one call: there can be only one expression inside parenthesis. 

Parenthesis are an important token for the parser: they are needed in many situations, such as method definition, method call, ``for()``, ``foreach()``, ``switch()``, ``match()``, etc. Once the syntax has been recognized, such parenthesis are not used anymore.

Parenthesis are idempotent: there is no use in setting parenthesis directly inside another parenthesis.

Sometimes, parenthesis are used for make language structure look like a functioncall. This is useless to the PHP engine, and even, prevent some features.

.. code-block:: php
   
   <?php
   
   // parenthesis in signatures
   function foo($parameter) {}
   
   // useless parenthesis
   include('/path/to/file.php'); 
   
   // parenthesis 
   echo 'a', 'b';    // best practice: no parenthesis
   echo ('a' . 'b'); // parenthesis force the concatenation 
   echo ('a'), 'b';  // weird, right?
   
   // precedence changing with parenthesis
   echo  2 +  3  * 4; // 14
   echo (2 +  3) * 4; // 20
   echo  2 + (3  * 4); // 14
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__

See also https://tfrommen.de/on-php-language-constructs-and-parentheses/

Related : :ref:`Argument <argument>`, :ref:`Balanced <balanced>`, :ref:`Bracket <bracket>`, :ref:`Bracketless <bracketless>`, :ref:`Square Brackets <square-bracket>`
