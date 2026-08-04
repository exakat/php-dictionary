# Cascading
Cascading is the general pattern where an action, or a change, applied to one element automatically triggers the same, or a related, action on the elements that depend on it, propagating outward from the original point.

Cascading is a neutral, structural concept: it appears as a deliberate feature, such as ``ON DELETE CASCADE`` in a database, cascading style sheets, where a rule applies down through nested selectors, or cascading configuration, where a setting inherits from a parent scope unless overridden. It also appears as an unwanted side effect, as in a cascading failure, where a single fault propagates through dependent components until the whole system is affected.

Whether cascading is desirable depends entirely on whether the propagation is intended and bounded. A cascading delete that removes orphaned child rows is convenient; an unbounded cascade that silently deletes far more than expected is a bug. The same duality applies to type propagation, event propagation, and configuration inheritance, which are all instances of cascading.
Related : [Propagation](Propagation), [Cascading Failure](Cascading Failure), [Foreign Key](Foreign Key), [Referential Integrity](Referential Integrity), [Inheritance](Inheritance)
