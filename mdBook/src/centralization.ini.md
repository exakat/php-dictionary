# Centralization
Centralization is the concept to bring all identical elements at the same place.

For example, if a literal value is used throughout the code, it may be turned into a global constant, defined in one place, and used everywhere else. 

Constants are a tool of centralization for values; functions and classes are a tool of centralization for commands. 

Centralization helps the code, as changing one definition propagates the change to different and unrelated parts of the code. 

Centralization is sometimes planned, and sometimes discovered with the tide. Then, it has to be extracted from the current code, as some minor local adaption may make it difficult to adapt.

Centralization is a necessary first step to standardisation. 

It is also called federation.
Related : [Don't Repeat Yourself (DRY)](Don't Repeat Yourself (DRY)), [Constants](Constants)
