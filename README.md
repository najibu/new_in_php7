# New in PHP 7

## 1. Symmetric Array Destructuring
First up, we have symmetric array destructuring: an incredibly confusing term for a simple concept: we can now use the short array syntax to translate (or destructure) any array - both indexed and associative - into a list of variables.

## 2 Nullable and Void Types
Nullable and void types are both new to PHP 7.1. Should you desire to, you may now mark a typehint or return type as being nullable, simply by prefixing it with a question mark. This indicates that you expect either the given type, or null. Additionally, the ability to specify a void return type is now available.

## 3 Multi-Catch Exception Handling
Often, you'll find yourself catching and responding to multiple exception types with the exact same logic. In PHP 7.1, however, you may now remove this duplication by separating each exception type with a pipe `(catch (ChargeFailed | InsufficientFunds $e))`.

## 4 Iterables
New to PHP 7.1 is a new `iterable` pseudo-type. If you're currently type-hinting `array` all over the place, think about it: would you be that upset if the user instead passed an object that can be iterated over? Of course not. This new pseudo-type solves that!


