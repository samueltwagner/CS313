<!DOCTYPE html>
<html lang="en-US"> 
    <?php include '../shared/header.php';?>
    <h3>Week 5 Readings

 

An exception is an error that produces a return value that can then be used by the program to deal with the error. 

 

An exception will also produce a stack trace. This is a sequence of functions or method calls that lead to the point where the error occurred.

 

 This means the program will continue to run after a warning. 

 

ECMAScript 5 introduced a strict mode that produces more exceptions and warnings and prohibits the use of some deprecated features. This is due to the fact that strict mode considers coding practices that were previously accepted as just being 'poor style' as actual errors.

 

Increasing the chance of errors might seem like a bad idea at first, but it’s much better to spot errors early on, rather than have them cause problems later. Writing code in strict mode can also help improve its clarity and speed, since it follows conventions and will throw exceptions if any sloppy code practices are used.

 

Not using strict mode is often referred to as 'sloppy mode' as it’s forgiving of sloppy programming practices. Strict mode encourages a better quality of JavaScript to be written that befits a ninja programmer, so its use is recommended.

 

Strict mode simply requires the following string to be added to the first line of a JavaScript file:

 

Linting tools such asJS Lint, (Links to an external site.)JS Hint, (Links to an external site.)andES Lint (Links to an external site.)can be used to test the quality of JavaScript code

 

One of the most useful commands is the debugger keyword

 

function amIOldEnough(age){

    debugger;

        if (age < 12) {

        debugger;

        return 'No, sorry.';

        } else if (age < 18) {

        debugger;

        return 'Only if you are accompanied by an adult.';

        } else {

        debugger;

        return 'Yep, come on in!';

    }

}

 

amIOldEnough(16);

 

Remember to remove any references to the debugger command before shipping any code, otherwise the program will appear to freeze when people try to use it!

 

Jest (Links to an external site.)is a TDD framework, created by Facebook, that has gained a lot of popularity recently. It makes it easy to create and run tests by providing helper methods for common test assertions.

</h3>
    <?php include '../shared/footer.php';?>
</html>