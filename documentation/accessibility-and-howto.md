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
- `md` for small laptops; greater than 900px
- `lg` for anything greater than 900px

To create this layout, here's what you have to do:

a. define a `<div class="row">`. This makes a single row. 
b. create your columns, like so: 
  ``<div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>``
  Note that these columns use the `sm` size, and that the number after `sm` 
  defines the *space* that the columns take up. 

  **IMPORTANT**: Make sure that your spacing adds up to 12 per row. 
