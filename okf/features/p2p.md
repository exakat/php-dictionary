---
type: "acronym"
title: "Peer-to-Peer (P2P)"
description: "Peer-to-peer, or P2P, is a network architecture where participants, called peers, communicate directly with one another instead of routing every exchange through a central server."
resource: "https://en.wikipedia.org/wiki/Peer-to-peer"
tags: ["architecture", "acronym", "network"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Peer-to-Peer (P2P)

Peer-to-peer, or P2P, is a network architecture where participants, called peers, communicate directly with one another instead of routing every exchange through a central server. Each peer can act as both a client and a server, in contrast to the traditional client-server model.

P2P is not a common architecture for PHP applications, since PHP scripts are typically executed on demand behind a web server and do not keep a long-running process able to accept inbound peer connections. It is more often encountered as a concept PHP code interacts with indirectly, for instance a script that talks to a BitTorrent tracker, a blockchain node, or a distributed hash table over sockets, or a long-running CLI daemon built with something like ReactPHP or Swoole.

## Documentation
- [https://en.wikipedia.org/wiki/Peer-to-peer](https://en.wikipedia.org/wiki/Peer-to-peer)

## See Also
- [Peer-to-Peer (P2P) Architecture - GeeksforGeeks](https://www.geeksforgeeks.org/system-design/peer-to-peer-p2p-architecture/)
- [What Is a Peer-to-Peer Network? | Coursera](https://www.coursera.org/articles/peer-to-peer)

## Related
- [Client](/features/client.md)
- [Server](/features/server.md)
- [Socket](/features/socket.md)
- [Distributed Systems](/features/distributed-systems.md)
- [Network](/features/network.md)
- [ReactPHP](/features/reactphp.md)

