.. _checksum:
.. meta::
	:description:
		Checksum: A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Checksum
	:twitter:description: Checksum: A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Checksum
	:og:type: article
	:og:description: A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/checksum.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Checksum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Checksum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Checksum
--------

A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity. It is akin to a fingerprint or a signature.

There are several algorithms to create a checksum: crc32, md5, sha1, sha256.

Checksums are extensively used to check file downloads and network transmissions; to verify stored data, identify revisions in vcs and validate components versions with package managers.

.. code-block:: php
   
   <?php
   
       echo md5('PHP rocks!');
       
       echo md5_file('/tmp/text.txt');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Checksum>`__

See also `An introduction to Checksums <https://johnothecoder.uk/2018/12/29/checksum-tutorial/>`_.

Related : :ref:`Cyclic Redundancy Check 32-bit (CRC32) <crc32>`, :ref:`Message Digest Algorithm 5 (MD5) <md5>`, :ref:`Secure Hash Algorithm (SHA) <sha>`, :ref:`VCS <vcs>`, :ref:`Fingerprint <fingerprint>`, :ref:`Package Manager <package-manager>`, :ref:`Digital Signature <digital-signature>`
