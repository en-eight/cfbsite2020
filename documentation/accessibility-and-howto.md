### Accessibility Guidelines and how-to

*Using bootstrap to make a better website (and make editing it easy)*

----

*Questions? Email me at sadhorseman@pm.me*

----

##### Required
- Bootstrap.css (include statements from MaxCDN recommended)
- a text editor
- PHP/HTML renderer


##### Recommended
- SublimeText for editing HTML+CSS, Javascript, JQuery, whatever docs. Free.
- jsfiddle.net stages HTML+CSS and Javascript for quick testing. Updates live.
- Bluefish is an open source web development centric IDE. Free.
- GIMP is a photo editor great for making SVG, PNG, etc. Free and open source.

----

##### Important Details 

**1.) Bootstrap REQUIRES a container for elements.** In layman's terms, if you
are going to pin an index card on the wall, you need posterboard first. To do
this, all you need to do is define your main div with one of two containers:

- `<div class = "container">` will make a fixed width responsive container, and
- `<div class = "container-fluid>` will make a full width responsive container.

**2.) Bootstrap uses a grid layout for all of its elements.** There are four 
different sizes that you can use for grid elements. They are as follows:

- `xs` for smartphones
- `sm` for tablets
- `md` for small laptops; less than or equal to 900px
- `lg` for anything greater than 900px

To create this layout, here's what you have to do:

a. define a `<div class="row">`. This makes a single row. 
b. create your columns, like so: 

  `<div class="col-sm-4">.col-sm-4</div>`

  Note that this column uses the `sm` size, and that the number after `sm` 
  defines the *space* that the column takes up. 

  **IMPORTANT**: Make sure that your spacing adds up to 12 per row. 


----

##### a - Integrating Custom CSS into Bootstrap

----

Since Bootstrap is just CSS methods, you can implement your own methods for use
in your site. There's only one stipulation- you have to put in your stylesheet
**AFTER** the Bootstrap stylesheet statement.

With that out of the way, you can now start adding custom styling in your PHP 
file. A more thoughtful way to add custom styling would be to just edit the 
Bootstrap theme itself, but that's for a later part in the manual. 



















----

### WORKING WITH BOOTSTRAP

----

**The `navbar` element**

The `navbar` class selector consolidates a bunch of work into multiple classes.
[Take a look here.](https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp)
