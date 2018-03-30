#Single Responsibility Principle
the single responsibility principle dictates that a class should have only one reason to change.  

#Open-Closed Principle
Seperate extensible behavior behind an interface, and flip the dependencies.    
Polymorphism: ability to have different behavior while still sharing a common interface.  

#Liskov Substitution Principle
Derived classes must be substituable for their base classes.  
Any implementation of an abstraction (interface) should be substitutable in any place that the abstraction is accepted.  
1. Signature must match.
2. Preconditions can't be greater.
3. Postconditions at least equal to.
4. Exception types must match.

#Interface Segregation Principle
A client should not be force to implement an interface that it does not use.  

#Dependency Inversion
Dependency inversion is not the same as dependency injection.  
Decoupling our code.  
High level code -> not concerned with details.  
Low level code -> all about the details.  


Code to an interface.    