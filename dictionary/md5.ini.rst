.. _md5:
.. meta::
	:description:
		Message Digest Algorithm 5 (MD5): MD5 is a hash function, that produce a 128-bit footprint for a value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Message Digest Algorithm 5 (MD5)
	:twitter:description: Message Digest Algorithm 5 (MD5): MD5 is a hash function, that produce a 128-bit footprint for a value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Message Digest Algorithm 5 (MD5)
	:og:type: article
	:og:description: MD5 is a hash function, that produce a 128-bit footprint for a value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/md5.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Message Digest Algorithm 5 (MD5)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"MD5 is a hash function, that produce a 128-bit footprint for a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Message Digest Algorithm 5 (MD5).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Message Digest Algorithm 5 (MD5)
--------------------------------

MD5 is a hash function, that produce a 128-bit footprint for a value. 

MD5 was used a lot for secure hashing and control. Nowadays, it may be useful for hashing and comparing data, though it is not considered secure. 


.. code-block:: php
   
   <?php
   
   //Generate a MD5 hash with the history md5() native function
   echo hash('md5', 'Le rapide goupil brun sauta par dessus le chien paresseux.');
   
   //Generate a MD5 hash with the history md5() native function
   print md5("Some text.")
   
   ?>


`Documentation <https://www.php.net/manual/fr/function.hash.php>`__

See also `PHP md5() function <https://www.php.net/manual/en/function.md5.php>`_

Related : :ref:`Cryptography <cryptography>`, :ref:`Hash <hashing>`
