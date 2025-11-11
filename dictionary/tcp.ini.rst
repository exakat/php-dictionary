.. _tcp:
.. meta::
	:description:
		TCP: TCP, which stands for Transmission Control Protocol, is one of the main protocols in the Internet Protocol (IP) suite.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: TCP
	:twitter:description: TCP: TCP, which stands for Transmission Control Protocol, is one of the main protocols in the Internet Protocol (IP) suite
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: TCP
	:og:type: article
	:og:description: TCP, which stands for Transmission Control Protocol, is one of the main protocols in the Internet Protocol (IP) suite
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/tcp.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"TCP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Nov 2025 17:43:36 +0000","dateModified":"Sun, 09 Nov 2025 17:43:36 +0000","description":"TCP, which stands for Transmission Control Protocol, is one of the main protocols in the Internet Protocol (IP) suite","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/TCP.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


TCP
---

TCP, which stands for Transmission Control Protocol, is one of the main protocols in the Internet Protocol (IP) suite. Together with IP (Internet Protocol), it forms the foundation for Internet communication. TCP is a connection-oriented protocol, meaning it establishes a reliable and secure connection between two devices before data is exchanged.

Key features of TCP include:

+ Reliability: TCP ensures the reliable delivery of data by using acknowledgments and retransmission. When a device sends data over a TCP connection, it waits for an acknowledgment from the receiving device. If an acknowledgment is not received, the data is resent.

+ Connection-oriented: Before data transfer begins, a connection must be established between the sender and the receiver. This connection is maintained until the data transfer is complete, and then it is terminated.

+ Flow control: TCP includes mechanisms for flow control, which helps manage the amount of data sent between devices to prevent congestion and ensure efficient communication.

+ Error checking: TCP includes error-checking mechanisms to detect and retransmit lost or corrupted data. This contributes to the protocol's reliability.

+ Sequencing: TCP numbers each data packet so that the receiving device can reorder them and ensure that the data is delivered in the correct order.

TCP is commonly used for applications that require high reliability and accurate delivery of data, such as web browsing, file transfers, and email. It operates at the transport layer of the OSI model and works in conjunction with the Internet Protocol (IP), which operates at the network layer. Together, TCP/IP provides a robust and standardized framework for communication over the Internet.


`Documentation <https://en.wikipedia.org/wiki/Transmission_Control_Protocol>`__

See also `Example #1 Socket example: Simple TCP/IP server <https://www.php.net/manual/en/sockets.examples.php>`_

Related : :ref:`Socket <socket>`

Related packages : `https://packagist.org/packages/react/socket <https://packagist.org/packages/https://packagist.org/packages/react/socket>`_
