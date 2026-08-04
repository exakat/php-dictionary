# Command Query Responsibility Segregation (CQRS)
CQRS is an architectural pattern that separates read operations, Queries from write operations, Commands, into distinct models. It was popularized by Greg Young, building on Bertrand Meyer's Command-Query Separation principle.

Read and write workloads often have very different performance and scaling needs, so treating them as a single unified model creates unnecessary friction. By separating them, it is possible to optimize each side independently: for example, using denormalized read models or dedicated indexed projections on the query side without affecting your write logic.

It also simplifies complex domain logic. Commands encapsulate intent and business rules cleanly, without being cluttered by the concerns of how data is presented or fetched. This makes the write side easier to test and reason about.

CQRS pairs especially naturally with Event Sourcing, where state changes are stored as a sequence of events rather than overwriting rows: but it's worth noting that Event Sourcing is not necessary to benefit from CQRS. The two are complementary, not dependent on each other.
Related : [Event Sourcing](Event Sourcing), [Command](Command), [Event Storming](Event Storming), [Message Bus](Message Bus)
