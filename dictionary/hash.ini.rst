.. _hash:
.. _hashing:
.. meta::
	:description:
		Hash: Hash has several meanings : .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hash
	:twitter:description: Hash: Hash has several meanings : 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hash
	:og:type: article
	:og:description: Hash has several meanings : 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hash.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Hash","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Hash has several meanings : ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hash.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hash
----

Hash has several meanings : 

+ PHP extension
+ PHP function
+ a general computer science concept, that transforms data into another value
+ a general computer science concept, that turns a string into another fixed-sized string, in a way that is difficult to revert
+ a synonym for arrays with arbitrary keys, also known as map or associative array

Hash allows direct or incremental processing of arbitrary length messages using a variety of hashing algorithms. 

While the extension 'hash' only process hashes, there are other extensions which offer these features : openssl, sodium and password hashing. Mhash and mcrypt are older PHP extensions, which are now discontinued. 


.. code-block:: php
   
   
   <?php
   
   echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
   // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3
   
   ?>
   


`Documentation <https://www.php.net/manual/en/intro.hash.php>`__

Related : :ref:`hash() Function <hash-function>`, :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Collection <collection>`, :ref:`Array <array>`, :ref:`Map <map>`
