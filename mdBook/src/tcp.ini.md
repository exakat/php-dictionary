# TCP
``TCP``, which stands for Transmission Control Protocol, is one of the main protocols in the Internet Protocol ``IP`` suite. Together with IP, it forms the foundation for Internet communication. TCP is a connection-oriented protocol, meaning it establishes a reliable and secure connection between two devices before data is exchanged.

Key features of ``TCP`` include:

+ Reliability: it ensures the reliable delivery of data by using acknowledgments and retransmission. When a device sends data over a TCP connection, it waits for an acknowledgment from the receiving device. If an acknowledgment is not received, the data is resent.
+ Connection-oriented: before data transfer begins, a connection must be established between the sender and the receiver. This connection is maintained until the data transfer is complete, and then it is terminated.
+ Flow control: it includes mechanisms for flow control, which helps manage the amount of data sent between devices to prevent congestion and ensure efficient communication.
+ Error checking: it includes error-checking mechanisms to detect and retransmit lost or corrupted data. This contributes to the protocol's reliability.
+ Sequencing: it numbers each data packet so that the receiving device can reorder them and ensure that the data is delivered in the correct order.

TCP is commonly used for applications that require high reliability and accurate delivery of data, such as web browsing, file transfers, and email. It operates at the transport layer of the OSI model and works in conjunction with the Internet Protocol, which operates at the network layer. Together, TCP/IP provides a robust and standardized framework for communication over the Internet.

## See Also

+ [Example #1 Socket example: Simple TCP/IP server](https://www.php.net/manual/en/sockets.examples.php)

Related : [Socket](Socket), [Port](Port), [User Datagram Protocol (UDP)](User Datagram Protocol (UDP))
