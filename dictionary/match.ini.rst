.. _match:
.. meta::
	:description:
		Match: The ``match`` expression is the remote cousin of the ``switch``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Match
	:twitter:description: Match: The ``match`` expression is the remote cousin of the ``switch``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Match
	:og:type: article
	:og:description: The ``match`` expression is the remote cousin of the ``switch``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/match.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Match","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The ``match`` expression is the remote cousin of the ``switch``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Match.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Match
-----

The ``match`` expression is the remote cousin of the ``switch``. It takes a value, branch among a list of cases, or fallback to a default one, and returns a unique value. 

``match`` use a strict comparison for the comparison. ``match`` raise an error if no case match, unless the ``default`` case is provided. 

``match`` is an expression, to be used in an assignment, while ``switch`` is a command, and must be used alone. 


.. code-block:: php
   
   <?php
   
   $return_value = match ($food) {
       'apple' => 'This food is an apple',
       'bar'   => 'This food is a bar',
       'cake'  => 'This food is a cake',
       default => 'This is not food'
   };
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.match.php>`__

See also `PHP Tricks: Multi-value match() <https://peakd.com/hive-168588/@crell/php-tricks-multi-value-match>`_

Related : :ref:`Switch <switch>`, :ref:`Default <default>`, :ref:`If Then Else <if-then>`, :ref:`UnhandledMatchError <unhandledmatcherror>`, :ref:`Case <case>`, :ref:`Comparison <comparison>`, :ref:`Conditional Structures <conditional-structure>`, :ref:`Control Flow <control-flow>`, :ref:`Switch Fallthrough <fallthrough>`, :ref:`Simple Switch <simple-switch>`, :ref:`Strict Comparison <strict-comparison>`, :ref:`Switch Case <switch-case>`, :ref:`Switch Default <switch-default>`

Added in PHP 8.0
