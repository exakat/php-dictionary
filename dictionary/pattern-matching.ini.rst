.. _pattern-matching:
.. meta::
	:description:
		Pattern Matching:  Pattern Matching as a language concept contains two parts: Matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pattern Matching
	:twitter:description: Pattern Matching:  Pattern Matching as a language concept contains two parts: Matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pattern Matching
	:og:type: article
	:og:description:  Pattern Matching as a language concept contains two parts: Matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pattern-matching.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Pattern Matching","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 04 Jan 2026 21:27:10 +0000","dateModified":"Sun, 04 Jan 2026 21:27:10 +0000","description":" Pattern Matching as a language concept contains two parts: Matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pattern Matching.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pattern Matching
----------------

 Pattern Matching as a language concept contains two parts: Matching a variable against a potentially complex data structure pattern, and optionally extracting values out of that variable into their own variables. In a sense it serves a similar purpose for complex data structures as regular expressions do for strings.

.. code-block:: php
   
   <?php
   // This code is extracted from the RFC
   // It is not valid PHP code, as of PHP 8.4. 
   
   // The "is" keyword evaluates to a boolean.
   if ($var is <pattern>) {
     // Do stuff
   }
    
   // Basic type matching
   $var is string;
   $var is int|float;
   $var is ?array;
   $var is (Account&Authenticated)|User;
   $var is mixed; // Matches anything, effectively a wildcard.
    
   // Literal patterns
   $var is "foo";
   $var is 5;
   $var is 3|5|null;
   $var is 'heart'|'spade'|self::Wild;
    
   ?>


`Documentation <https://wiki.php.net/rfc/pattern-matching>`__

See also https://en.wikipedia.org/wiki/Pattern_matching
