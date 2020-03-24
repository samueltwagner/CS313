<!DOCTYPE html>
<html lang="en-US"> 
    <?php include '../shared/header.php';?>
    <h3>The Browser Object Model (or BOM for short) is a collection of properties and methods that contain information about the browser and computer screen. 

 

Each window object contains a document object. This object has properties and methods that deal with the page that has been loaded into the window. In Chapter 6, we covered the Document Object Model and the properties and methods used to manipulate items on the page. The document object contains a few other methods that are worth looking at.

 

The window object is the global object in a browser.
Global variables are actually properties of the window object in a browser environment.
 alert , confirm() , and prompt() are all methods of the window object, and open dialogs that halt the execution of the program.
The window.navigator object gives information about the user’s browser and operating system, although it can be unreliable.
The window.location object provides information about the URL of the current page.
The window.history object keeps information about the pages that have been visited in the session.
You can open, close, resize, and move windows (although, this doesn’t mean you should!).
The window.screen object provides information about the user’s screen.
 document.write() is an archaic method of writing text to the document and should be avoided.
Cookies can be used to store small pieces of information between requests using the document.cookie property.
The window.setTimeout() method can be used to invoke a function after a set amount of time. It can be canceled using the clearTimeout() method.
The window.setInterval() method can be used to repeatedly invoke a function. It can be stopped using the clearInterval() method.
The window.requestAnimationFrame() method can be used to produce smooth and optimized animation by utilizing the browser's built-in graphics capabilities. It can be canceled using the cancelAnimationFrame() method.
The data- attribute is a way of embedding data in a web page using custom attributes that are ignored by the browser. They’re also private to a page, so are not intended to be used by an external service – their sole purpose is to be used by a JavaScript program. This means they’re perfect for adding data that can be used as a hook that the program utilizes to access information about a particular element on the page.

 

data-powers = 'flight superSpeed'

data-rating = '5'

data-dropdown

data-user = 'DAZ'

data-max-length = '32'

 

 

The Geolocation API is used to obtain the geographical position of the device. This means it can be used to find the user’s exact location, then link to nearby places or measure the speed at which the user is moving. This information can then be used to filter data based on the user's location or speed and direction of travel. An example of this might be a search function that returns results based on your location. Because of privacy concerns, permission to use this has to be granted by the user first.

 

 position.speed property returns the ground speed of the device in meters per second.
 position.altitude property returns an estimate of the device’s altitude in meters above theWGS84 (Links to an external site.)ellipsoid, which is a standard measurement for the center of the Earth.
 position.heading property returns the direction the device is moving in. This is measured as a bearing in degrees, clockwise from North.
 position.timestamp property returns the time that the position information was recorded.
Web Workers

 

We saw in earlier chapters that JavaScript is a single-threaded language, meaning that only one process can run at one time. Web workers allow processes to be run in the background, adding support for concurrency in JavaScript. The idea is that any processes that could take a long time are carried out in the background, so a website will continue to function without fear of the dreaded 'script has become unresponsive' message that occurs when a script runs for too long, shown below.

 

Websocket is a new protocol that allows two-way communication with a server – also known as push messaging. This means that a connection is kept open and responses are ‘pushed’ to the client as soon as they are received.</h3>
    <?php include '../shared/footer.php';?>
</html>