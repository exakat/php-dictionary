.. _fnmatch:
.. meta::
	:description:
		fnmatch(): ``fnmatch()`` is a matching native function: it applies the shell wilcard patterns to a string, and returns if it matches or not.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: fnmatch()
	:twitter:description: fnmatch(): ``fnmatch()`` is a matching native function: it applies the shell wilcard patterns to a string, and returns if it matches or not
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: fnmatch()
	:og:type: article
	:og:description: ``fnmatch()`` is a matching native function: it applies the shell wilcard patterns to a string, and returns if it matches or not
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fnmatch.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"fnmatch()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Apr 2026 09:31:19 +0000","dateModified":"Wed, 15 Apr 2026 09:31:19 +0000","description":"``fnmatch()`` is a matching native function: it applies the shell wilcard patterns to a string, and returns if it matches or not","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fnmatch().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


fnmatch()
---------

``fnmatch()`` is a matching native function: it applies the shell wilcard patterns to a string, and returns if it matches or not.

Wildcards include: 

+ ``*`` for anything
+ ``?`` for zero or one character
+ ``[]`` for a range of characters
+ ``!`` to negate characters in a bracket syntax
+ `` \ `` as the escape character

The search is case sensitive.

This function is useful to emulate a common system of search.

Simpler search tools include ``str_contains()`` and ``strpos()``, and more complex include ``preg_match()``.


.. code-block:: php
   
   <?php
   
       $message = 'PHP rocks';
       if (fnmatch(*r[oi]cks, $message)) {
         echo But, of course...;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.fnmatch.php>`__

See also https://reintech.io/blog/understanding-implementing-php-fnmatch-function

Related : :ref:`str_contains() <str_contains>`, :ref:`strpos <strpos>`, , :ref:`Star * <star>`, :ref:`Bang ! <bang>`, :ref:`Square Brackets <square-bracket>`, :ref:`Question Mark ? <question-mark>`, :ref:`Backslash \ <back-slash>`
