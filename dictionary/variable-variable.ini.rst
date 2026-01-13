.. _variable-variable:
.. meta::
	:description:
		Variable Variables: Variable variables refer to a feature that allows to use the value of a variable as the name of another variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variable Variables
	:twitter:description: Variable Variables: Variable variables refer to a feature that allows to use the value of a variable as the name of another variable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Variable Variables
	:og:type: article
	:og:description: Variable variables refer to a feature that allows to use the value of a variable as the name of another variable
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/variable-variable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Variable Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 16:53:42 +0000","dateModified":"Fri, 27 Jun 2025 16:53:42 +0000","description":"Variable variables refer to a feature that allows to use the value of a variable as the name of another variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Variable Variables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Variable Variables
------------------

Variable variables refer to a feature that allows to use the value of a variable as the name of another variable. It provides a way to dynamically create and access variables based on runtime values.

Variable variables are denoted by the double dollar sign ``$$`` followed by the name of the variable stored in another variable. More dollar signs may be compounded, though it is rare.


.. code-block:: php
   
   <?php
   
   $a = 'b';
   $b = 'c';
   
   echo $$b;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.variables.variable.php>`__

See also `The Dangers of PHP's $$ <https://andy-carter.com/blog/the-dangers-of-php-variable-variables>`_

Related : :ref:`Variables <variable>`, :ref:`Static Variables <static-variable>`, :ref:`compact() <compact>`, :ref:`extract() <extract>`, :ref:`Global Variables <global-variable>`, :ref:`global Scope <global>`, :ref:`$GLOBALS <globals>`, :ref:`$GLOBALS <$_globals>`, :ref:`Superglobal Variables <superglobal>`, :ref:`Superglobal Variables <super-global>`
