.. _alternative-syntax:
.. meta::
	:description:
		Alternative Syntax: PHP offers an alternative syntax for some of its control structures.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Alternative Syntax
	:twitter:description: Alternative Syntax: PHP offers an alternative syntax for some of its control structures
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Alternative Syntax
	:og:type: article
	:og:description: PHP offers an alternative syntax for some of its control structures
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/alternative-syntax.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Alternative Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 13 May 2025 05:14:48 +0000","dateModified":"Tue, 13 May 2025 05:14:48 +0000","description":"PHP offers an alternative syntax for some of its control structures","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Alternative Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Alternative Syntax
------------------

PHP offers an alternative syntax for some of its control structures; namely, ``if``, ``while``, ``for``, ``foreach``, and ``switch``. In each case, the basic form of the alternate syntax is to change the opening brace to a colon (:) and the closing brace to ``endif;``, ``endwhile;``, ``endfor;``, ``endforeach;``, or ``endswitch;``, respectively.

.. code-block:: php
   
   <?php if ($a == 5): ?>
   A is equal to 5
   <?php endif; ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.alternative-syntax.php>`__

See also `Using Alternative Syntax for Control Structures in PHP to Enhance HTML Integration <https://www.linkedin.com/pulse/using-alternative-syntax-control-structures-php-html-rahman-nadim/>`_

Related : :ref:`Control Structures <control-structure>`
