<!DOCTYPE html>
<html lang="en-US"> 
    <?php include '../shared/header.php';?>
    <h1>Week 7 Readings

 

first-class objects, which means they can be passed around in the same way as every other value. 

 

After we’ve checked whether the window.unicorn object exists (by checking to see if it’s truthy), we’ve rewritten the ride() function according to the outcome. Right at the end of the function, we call it again so that the rewritten function is now invoked, and the relevant value returned. One thing to be aware of is that the function is invoked twice the first time, although it becomes more efficient each subsequent time it’s invoked. Let’s take a look at how it works:

 

The Promise Life Cycle

 

When a promise is created, it calls an asynchronous operation and is then said to bepending. It remains in this state while the operation is taking place. At this stage, the promise is said to beunsettled. Once the operation has completed, the promise is said to have beensettled. A settled promise can result in two different outcomes:

 

Resolved ― the asynchronous operation was completed successfully.
Rejected ― the asynchronous operation didn’t work as expected, wasn't successfully completed or resulted in an error.
 

Both these outcomes will return any relevant data, and you can take the appropriate action based on the outcome of the promise.

 

A Super Promise

Imagine if a shady character gave you a red pill, and promised that if you took it, you'd be a superhero. Being an adventurous sort, you swallow the pill and wait to see what happens. You're currently in the pending phase of a promise, waiting to see what the result will be.

 

Suddenly you find that you have the power to dodge bullets as if time was standing still! The promise has been resolved, and now you need to go off and use your newly acquired powers.

 

But if nothing happens, you would reject the promise and warn people that a stranger is wandering around giving out red pills and peddling a fanciful story.

 

This scenario puts a comic-book spin on the phases of a promise. There is a pending phase while you wait on the results of an operation (taking the pill). Then once the promise is settled, you deal with the results in an appropriate way ― by using your superpowers if the promise is resolved, or dealing with any problems if it doesn't work out.

 

The Promise of a Burger Party (Links to an external site.)is a brilliant post by Mariko Kosaka that explains the concept of promises by comparing them to ordering a burger!

 

Creating A Promise

A promise is created using a constructor function. This takes a function called anexecutoras an argument. The executor initializes the promise and starts the asynchronous operation. It also accepts two functions as arguments: the resolve() function is called if the operation is successful, and the reject() function is called if the operation fails. The general layout of a promise can be seen in the code below:

 

const promise = new Promise( (resolve, reject) => {

    // initialization code goes here

    if (success) {

        resolve(value);

    } else {

        reject(error);

    }

});

 

Currying is a process that involves the partial application of functions. It’s named after the logicianHaskell Curry (Links to an external site.)— not the spicy food — just like the programming language Haskell is. His work on a paper by Moses Schönfinkel lead to the development of this programming technique.

 

Chapter 13

 

The web of computers known as the internet can be separated into two parts: clients and servers. A client, such as a web browser, will request a resource (usually a web page) from a server, which processes the request and sends back a response to the client.

 

JavaScript was originally designed as a client-side scripting language, meaning that it ran locally in the browser, adding dynamic features to the web page that was returned from the server. Ajax allows JavaScript to request resources from a server on behalf of the client. The resources requested are usually JSON data or small fragments of text or HTML rather than a whole web page.

 

Consequently, a server is required when requesting resources using Ajax. Typically this involves using a server-side language, such as PHP, Ruby, Node.js, or .NET to serve the data response following an Ajax request (usually from a back-end database). To practice using Ajax, you can either set up a local development server on your own computer, or request the files from an external website that uses cross-origin resource sharing (CORS) in order to avoid the same-origin policy that browsers enforce. All the examples in this chapter can be run without having to set up a local development server, although it may be worth looking into if you wish to do a lot of Ajax or server-side development.

 

Asynchronous

When a request for data is sent, the program doesn’t have to stop and wait for the response. It can carry on running, waiting for an event to fire when a response is received. By using callbacks to manage this, programs are able to run in an efficient way, avoiding lag as data is transferred back and forth.

JavaScript

JavaScript was always considered a 'front-end' language, not used to communicate with the server. Ajax enabled JavaScript to send requests and receive responses from a server, allowing content to be updated in real time.

XML

When the term Ajax was originally coined, XML documents were often used to return data. Many different types of data can be sent, but by far the most commonly used in Ajax nowadays is JSON, which is more lightweight and easier to parse than XML. (Although it has never really taken off, the termAjaj is sometimes used to describe the technique.) (Links to an external site.)JSON also has the advantage of being natively supported in JavaScript, so you can deal with JavaScript objects rather than having to parse XML files using DOM methods.

 

The Fetch API provides a global fetch() method that only has one mandatory argument, which is the URL of the resource you wish to fetch. A very basic example would look something like the following piece of code:

 

fetch('https://example.com/data')

.then( // code that handles the response )

.catch( // code that runs if the server returns an error )

 

Putting It All Together

 

We can use the Headers, Request and Response objects to put together a typical example that sets up the URL, Request and Headers before calling the fetch() method:

 

const url = 'https:example.com/data';

const headers = new Headers({ 'Content-Type': 'text/plain', 'Accept-Charset' : 'utf-8', 'Accept-Encoding':'gzip,deflate' })

 

const request = (url,{

    headers: headers

})

 

fetch(request)

.then( function(response) {

    if(response.ok) {

        return response;

    }

    throw Error(response.statusText);

})

.then( response => // do something with response )

.catch( error => console.log('There was an error!') )

 

Receiving Information

 

To demonstrate how to update a web page using Ajax, we’ll need to set up a demonstration page. Create a file called 'ajax.html' that contains the following code:

 

<button id='number'>Number Fact</button>

<button id='chuck'>Chuck Norris Fact</button>

<div id='output'>

    Ajax response will appear here

</div>
</h1>
    <?php include '../shared/footer.php';?>
</html>