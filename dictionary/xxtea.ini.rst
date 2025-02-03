.. _xxtea:
.. meta::
	:description:
		XXTEA: ``XXTEA`` is a symmetric encryption algorithm that stands for 'Corrected Block TEA' (TEA refers to Tiny Encryption Algorithm).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: XXTEA
	:twitter:description: XXTEA: ``XXTEA`` is a symmetric encryption algorithm that stands for 'Corrected Block TEA' (TEA refers to Tiny Encryption Algorithm)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: XXTEA
	:og:type: article
	:og:description: ``XXTEA`` is a symmetric encryption algorithm that stands for 'Corrected Block TEA' (TEA refers to Tiny Encryption Algorithm)
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/xxtea.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"XXTEA","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"``XXTEA`` is a symmetric encryption algorithm that stands for 'Corrected Block TEA' (TEA refers to Tiny Encryption Algorithm)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/XXTEA.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


XXTEA
-----

``XXTEA`` is a symmetric encryption algorithm that stands for 'Corrected Block TEA' (TEA refers to Tiny Encryption Algorithm). It is primarily used for encrypting and decrypting data, providing a level of security for sensitive information.

``XXTEA`` operates on 32-bit integer data blocks and employs a 128-bit key. It uses a series of iterations and bitwise operations to scramble the data and make it unreadable without the corresponding decryption process. ``XXTEA`` is a block cipher with a fixed block size of 8 bytes.

.. code-block:: php
   
   <?php
   $str = "Hello World! 你好，中国🇨🇳！";
   $key = "1234567890";
   $base64 = "D4t0rVXUDl3bnWdERhqJmFIanfn/6zAxAY9jD6n9MSMQNoD8TOS4rHHcGuE=";
   $encrypt_data = xxtea_encrypt($str, $key);
   $decrypt_data = xxtea_decrypt($encrypt_data, $key);
   if ($str == $decrypt_data && base64_encode($encrypt_data) == $base64) {
       echo "success!";
   } else {
       echo base64_encode($encrypt_data);
       echo "fail!";
   }
   ?>


`Documentation <https://en.wikipedia.org/wiki/XXTEA>`__

See also `xxtea-pecl <https://github.com/xxtea/xxtea-pecl>`_
