<!DOCTYPE html>
<html lang="en-US"> 
    <?php include 'shared/header.php';?>
    <h1>RESERVED WORDS - 61 Words

 

abstract, await, boolean, break, byte,

case, catch, char, class, const,

continue, debugger, default, delete, do,

double, else, enum, export, extends,

false, final, finally, float, for,

function, goto, if, implements, import,

in instanceof, int, interface, let, long,

native, new, null, package, private,

protected, public, return, short, static,

super, switch, synchronized, this, throw,

throws, transient, true, try, typeof,

var, volatile, void, while, with,

yield

 

should be reserved - undefined, NaN, Infinity

 

what happened to var?

 

This worked in much the same way as using let . The main difference was that variables declared using let and const have block scope, which is discussed in more detail below. They also prevent you from overwriting any built-in methods by assignment, which is generally frowned upon, whereas using var doesn't.

 

Using const and let to declare variables means they are block scoped, so their value only exists inside the block they are declared in.

 

A ninja programmer will try to keep the number of global variables to a minimum, because any variables that share the same name will clash and potentially overwrite each other’s values. 

 

Using let or const to declare variables will ensure they are block scoped

 

Variables that start with an underscore generally refer to private properties and methods, so it's best to not follow this convention for your own variable names.

 

The $ character is also used by the popular jQuery library, so using this in your variable names may also cause problems.

 

If a character doesn’t appear in the string, -1 will be returned:

 

name.indexOf('z');

<< -1

 

JavaScript is known as a weakly typed or loosely typed language

 

.pop remove last item

 

.shift remove beginning item

 

push add to the end

 

unshift add to the beginning

 

join IMPORTANT

 

slice displays the layers

 

splice removes targeted item in the array

 

Maps were another data structure introduced in the ES6 specification. They are a convenient way of keeping a list of key and value pairs, and are similar to 'hashes', or 'hash tables' or 'dictionaries' in other programming languages.

 

Arrow Function

 

const square = x => x*x;

 

never new about hoisting</h1>
    <?php include 'shared/footer.php';?>
</html>