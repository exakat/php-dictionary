.. _magic-method:
.. _magicmethod:
.. meta::
	:description:
		Magic Methods: Special methods, which provide extended support for PHP features.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Magic Methods
	:twitter:description: Magic Methods: Special methods, which provide extended support for PHP features
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Magic Methods
	:og:type: article
	:og:description: Special methods, which provide extended support for PHP features
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/magic-method.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Magic Methods","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"Special methods, which provide extended support for PHP features","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Magic Methods.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Magic Methods
-------------

Special methods, which provide extended support for PHP features.

The magic methods are  : __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(), __invoke(), __set_state(), __clone() and __debugInfo().

The constructor and destructors are not considered as magic methods, even though they are reserved. 



.. code-block:: php
   
   <?php
   
   class x {
       //
       function __get($name) {
           return $this->$name;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.magic.php>`__

See also `What are magic methods in PHP? and How to Implement them? <https://www.edureka.co/blog/magic-methods-in-php>`_, `PHP Magic Methods Explained <https://atakde.medium.com/php-magic-methods-explained-bac7053c007d>`_

Related : :ref:`__get() Method <-__get>`, :ref:`__set() Method <-__set>`, :ref:`__call() Method <-__call>`, :ref:`__isset() Method <-__isset>`, :ref:`__clone() Method <-__clone>`, :ref:`__callStatic() Method <-__callStatic>`, :ref:`__sleep() Method <-__sleep>`, :ref:`__wakeup() Method <-__wakeup>`, :ref:`__toString() Method <-__tostring>`, :ref:`__invoke() Method <-__invoke>`, :ref:`__set_state() Method <-__set_state>`, :ref:`Dynamic Properties <dynamic-property>`, :ref:`String <string>`, :ref:`Deep Clone <deep-clone>`, :ref:`Isset <isset>`, :ref:`Magic Constants <magic-constant>`, :ref:`Magic <magic>`, :ref:`Object <object>`, :ref:`Property Hook <property-hook>`, :ref:`Shallow Clone <shallow-clone>`
