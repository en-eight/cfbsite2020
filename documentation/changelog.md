### changelog.md 

*written by Nate Holcomb for Community First Bank, N.A.*

**FOR INTERNAL USE ONLY. DUPLICATION IS STRICTLY PROHIBITED.**

----

##### March 2020

*03/01/2020* - I added the changelog.md file. It will be really useful to keep 
track of what work was done and when. To be honest, school has been difficult
and it has been tough to keep up with the site, but I have an extra twenty mins
before my sleeping pills kick in- might as well use them. 

*Main features so far*

- `src` directory contains all of the source material for the site
(images, scripts for the site, html documents, etc etc.) I am currently working
on the index.php file, aka the home page. I only have the header worked out, but
this week I plan on creating the main content for the page. 

- `documentation` directory contains **internal, non essential information** about
the website. It is for **reference only** and is not meant to be read or viewed by
the client. Please take note of this, it's important. In this, I have a few files
which I write to from time to time detailing how to write to the site, change files,
and soon enough, commit to the repository should I end up leaving CFB. I'll make sure
that if or when I leave that all of this information will be readily available and
well documented so that it's easy to pick up on.

- `templates` directory contains all templates for the site. For right now it 
only has a boilerplate HTML document that you can copy/paste into a new file,
but eventually these templates will be diversified and updated for more specific
use cases. For example, I want to make a template for user submission pages, akin
to a "Contact Us" page. That same template could easily be used again for any form
submission pages. This would save tremendous time and effort, and will definitely
permit some really quick deployment in the near future. 

----

##### March 16th, 2020

- Added some directories inside of `src` which were apart of the old `WFS` demo
that I made to showcase what a new, updated look could be. There is:
	- `media` which has logos and pictures for the site;
	- `script` contains any scripts for the website, like Javascript files; 
	- `style` has any CSS files for the site, like the one I made. 
In accordance with this, I added a call for the stylesheet in the `index.php`
file. I am still working on how to fix the compatibility issue with the style
sheets. Very frustrating. On the bright side however, the site does look much
cleaner than it did before. 

**To look at a preview of the site, see** `preview.png` **in the home directory.**

----

##### March 18th, 2020

Fixed the display bug and added some placeholder images for the site; mainly a 
dollar sign and question mark made in GIMP. Wanting to make the website and its
images adaptive; right now the images stack on top of each other with the text
underneath of it (looking like, from top to bottom, IMG, IMG, TXT, TXT). I want
the page to adapt with one image above a stack of text (IMG, TXT, IMG, TXT). It
shouldn't be too difficult; maybe a few more days of work and I can really get
the homepage written up and roughly finished. 

The display bug was an important fix because this header *should now work* with
the rest of the site, regardless of what happens. This means that yes, I should
update the template php file. 

Known issues:
- Images do not stack properly.
	- Check Bootstrap documentation for dynamically resizable img class.
- Images are not sized properly. 
	- Attempt aforementioned source.

----

