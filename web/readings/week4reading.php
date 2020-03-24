<!DOCTYPE html>
<html lang="en-US"> 
    <?php include 'shared/header.php';?>
    <h1>

Even though there is only one form in our example, a collection will still be returned, so we have to use index notation to return the first (and only) form object, like so:

const form = document.forms[0];

const form = document.getElementsByTagname('form')[0];

input.addEventListener('change', () => alert('changed'), false);

const form = document.forms['search'];

form.addEventListener ('submit', search, false);

 

function search() {

    alert(' Form Submitted');

}

 

 

function makeHero(event) {

 

    event.preventDefault(); // prevent the form from being submitted

 

    const hero = {}; // create an empty object

 

    hero.name = form.heroName.value; // create a name property based on the input field's value

 

    alert(JSON.stringify(hero)); // convert object to JSON string and display in alert dialog

    return hero;

}

 

 

We can then iterate over this collection using a for loop to see if each checkbox was checked. Checkbox objects have a checked property that tells us if it has been checked or not. It is a boolean property, so can only have the values true or false . The value property is used to set the name of the power that can be used if the checkbox has been checked. Add the following code to the makeHero() function in main.js :

 

hero.powers = [];

for (let i=0; i < form.powers.length; i++) {

    if (form.powers[i].checked) {

        hero.powers.push(form.powers[i].value);

    }

}

 

<input type='text' id='heroName' name='heroName' autofocus placeholder='Your Super Hero Name' maxlength=32 required>

 

function disableSubmit(event) {

    if(event.target.value === ''){

        document.getElementById('submit').disabled = true;

    } else {

        document.getElementById('submit').disabled = false;

    }

}

Object-oriented programming is often used to model representations of objects in the real world

that = this

Modular JavaScript

Yarn  (Links to an external site.)has emerged recently as a popular alternative to npm. It was developed to try and get around some problems that npm had with the speed and consistency of installing packages, as well as some security concerns to do with npm allowing packages to run on installation.

 

</h1>
    <?php include 'shared/footer.php';?>
</html>