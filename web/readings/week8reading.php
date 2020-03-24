<!DOCTYPE html>
<html lang="en-US"> 
    <?php include '../shared/header.php';?>
    <h3>Week 8 Reading

The scale(x,y) function scales an element by the defined factors horizontally then vertically. If only one value is provided, it will be used for both the x and y values, growing or shrinking your element or pseudo-element while maintaining the original aspect ratio. For example, scale(1) would leave the element the same size, scale(2) would double its proportions, scale(0.5) would halve them, and so on. Providing different values will distort the element, as you’d expect:

transform: scale(1.5, 0.25);

As we hinted at earlier, you can control the origin from which your transforms are applied. This is done using the transform-origin property. It has the same syntax as the background-position property, and defaults to the center of the object (so that scales and rotations will be around the center of the box by default).

 

Animation has certainly been possible for some time with JavaScript, but native CSS transitions generally require less client-side processing, so they’ll usually appear smoother. On mobile devices with limited computing power, this can be a lifesaver.

 

Note: Supporting Older Browsers

 

To support older WebKit browsers, you need to include the -webkit- prefix for all of your transition properties. You may also need to specify the -webkit- prefixed forms of properties. For example, you’re unable to animate transform in a browser that only understands -webkit-transform :

 

.ad-ad2 h1 span {

    -webkit-transition-property: -webkit-transform;

    transition-property: transform;

}

 

You can also describe your timing function more precisely by defining your own cubic-bezier function

 

With HTML5’s Canvas API, we can draw anything we can imagine, all through JavaScript. This can improve the performance of our websites by avoiding the need to download images off the network. With canvas, we can draw shapes and lines, arcs and text, gradients and patterns. In addition, canvas gives us the power to manipulate pixels in images and even video. We’ll start by introducing some of the basic drawing features of canvas, but then move on to using its power to transform our video—taking our modern-looking color video and converting it into conventional black and white to match the overall look and feel ofThe HTML5 Herald.

 

Canvas was first developed by Apple. Since they already had a framework—Quartz 2D—for drawing in two-dimensional space, they went ahead and based many of the concepts of what woud come to be known as HTML5’s canvas on that framework.

 

var canvas = document.getElementById("myCanvas");

var context = canvas.getContext("2d");

context.strokeStyle = "red";

context.fillStyle = "rgba(0, 0, 255, 0.5)";

context.fillRect(10, 10, 100, 100);   

context.strokeRect(10, 10, 100, 100);

 

Canvas allows for pixel manipulation, as we saw when we turned our video from color to black and white. One downside of canvas is that it operates in what’s known asimmediate mode. This means that if you ever want to add more to the canvas, you’re unable to simply add to what’s already there. Every time you finish drawing a shape, the canvas no longer has access to that shape, because it won’t persist as an object that you can modify. So if you want to add to what you’ve already drawn on the canvas, you must redraw the new shape from scratch. Still, canvas does allow you to save the images you create to a PNG or JPEG file.

 

We’ve spent quite a bit of time this chapter focusing on drawing with code. Let’s shift gears a little now and look at an API we can use to add some fun user interaction to our website, the Drag and Drop API. This API allows us to specify that certain elements are draggable, and then specify what should happen when these draggable elements are dragged over or dropped onto other elements on the page.

 

Set the draggable attribute on any HTML elements you’d like to be draggable.
Add an event listener for the dragstart event on any draggable HTML elements.
Add an event listener for the dragover and drop events on any elements that you want to have accept dropped items.
Note that draggable isnota Boolean attribute, so you have to explicitly set it to true .</h3>
    <?php include '../shared/footer.php';?>
</html>