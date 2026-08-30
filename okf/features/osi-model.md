---
type: "concept"
title: "OSI Model"
description: "The OSI Model, Open Systems Interconnection Model, is a conceptual framework that standardizes how computer systems communicate over a network, by splitting communication into seven abstract layers."
resource: "https://en.wikipedia.org/wiki/OSI_model"
tags: ["network", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# OSI Model

The OSI Model, Open Systems Interconnection Model, is a conceptual framework that standardizes how computer systems communicate over a network, by splitting communication into seven abstract layers.

+ Layer 7, Application: protocols used directly by applications, such as HTTP, FTP, DNS
+ Layer 6, Presentation: data formatting, encryption, and compression, such as TLS, character encoding
+ Layer 5, Session: establishes, manages, and terminates connections between applications
+ Layer 4, Transport: end-to-end delivery, such as TCP and UDP, including reliability and flow control
+ Layer 3, Network: routing of packets across networks, such as IP
+ Layer 2, Data Link: node-to-node delivery within the same local network, such as Ethernet and MAC addresses
+ Layer 1, Physical: the actual transmission of raw bits over a physical medium, such as cables or radio waves

PHP applications mostly operate at the Application layer: a script sending an HTTP request or reading from a socket does not deal with the layers below, as they are handled by the operating system and the network stack. Understanding the model is still useful to reason about where a problem happens, whether it is a DNS resolution failure, a TCP handshake issue, a TLS certificate problem, or an application-level bug.

The modern internet does not strictly follow the OSI model; it more closely follows the simpler, four-layer TCP/IP suite, but the OSI model remains a common reference for troubleshooting and teaching networking concepts.

## Documentation
- [https://en.wikipedia.org/wiki/OSI_model](https://en.wikipedia.org/wiki/OSI_model)

## See Also
- [What Is the OSI Model?](https://www.cloudflare.com/learning/ddos/glossary/open-systems-interconnection-model-osi/)

## Related
- [TCP](/features/tcp.md)
- [User Datagram Protocol (UDP)](/features/udp.md)
- [Internet Protocol (IP)](/features/ip.md)
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Socket](/features/socket.md)
- [Network](/features/network.md)
- [Layered Architecture](/features/layered-architecture.md)
- [Abstraction Layer](/features/abstraction-layer.md)

