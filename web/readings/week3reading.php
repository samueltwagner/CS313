<!DOCTYPE html>
<html lang="en-US"> 
    <?php include '../shared/header.php';?>
    <h1>So, here we’ve got a method sayHi of the object user.

 

In JavaScript, keyword this behaves unlike most other programming languages. It can be used in any function.

 

Calling without an object: this == undefined

 

The concept of run-time evaluated this has both pluses and minuses. On the one hand, a function can be reused for different objects. On the other hand, the greater flexibility creates more possibilities for mistakes.

 

That’s a special feature of arrow functions, it’s useful when we actually do not want to have a separate this, but rather to take it from the outer context.

 

It’s also possible to create an object using a constructor function. This example will also create an empty object:

 

const spiderman = new Object();

 

Math.ceil() method will round a numberupto the next integer

 

Math.floor() method will round a numberdownto the next integer

 

Date object

 

The Epoch is 1st January 1970. This is an arbitrary date that is used in programming as a reference point in time from which to measure dates. This allows dates to be expressed as an integer that represents the number of seconds since the Epoch. It results in a very large number and there is a potentialproblem looming in 2038 (Links to an external site.)when the number of seconds since the Epoch will be greater than 2,147,483,647, which is the maximum value that many computers can deal with as a signed 32-bit integer. Fortunately, this problem will not affect JavaScript dates because it uses floating-point numbers rather than integers, so it can handle bigger values.

 

DateTime has getter and setter

 

 Themoment.js library (Links to an external site.)giv

 

The document.querySelector() method allows you to use CSS notation to find thefirstelement in the document that matches that matches a CSS selector provided as an argument. If no elements match, it will return null .

 

wonderWoman.classList.add('warrior');</h1>
    <?php include '../shared/footer.php';?>
</html>