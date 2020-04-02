### changelog.md 

*written by Nate Holcomb for Community First Bank, N.A.*

**FOR INTERNAL USE ONLY. DUPLICATION IS STRICTLY PROHIBITED.**

----

#### March 2020

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

*(quick update - just updated the template PHP file with the new stuff.)*

Known issues:
- Images do not stack properly.
	- Check Bootstrap documentation for dynamically resizable img class.

----

##### March 19th, 2020

Fixed the image sizing issue by making the images smaller in GIMP (duh). Image
stacking issue is still present, although changing the way the images vs the
text are laid out would likely fix this issue. Since HTML renders things from
top to bottom, it would make sense to change the order from img, img, txt, txt
to img, text, img, text. 

Added a footer, very bland placeholder text with no links. Going to add links
to the privacy policy, online safety, and the site map. The next page I would 
likely code next would be the Privacy Policy, as it would be pretty easy to 
copy/paste all of the information on the page into a template HTML document and
publish changes. 

Index is almost done, likely with a day or two of work and some tweaks, I could
have it completely finished and ready to go.

Updated template to include header. 

Known issues:
- Images do not stack properly. 
- Strange circa 30 pixel white space on either side of the main container.


----

##### March 28th, 2020

Fixed the "strange 30 pixel white space" bug - that had to do with how CSS 
inherits properties from other classes. There are still a few bugs that I need 
to squash from the old CSS, as well as some cleanup with old CSS styling rules.
I'm somewhat annoyed at how CSS handles inheritance but nonetheless, here we 
are. I am going to be looking at the Excel sheets here soon, so work on the 
site will slow down considerably while I get that done. I got two hours of work
done today, so that's neat. 

Known issues:
- Images do not stack properly when window is resized.
- Header does not stack properly when window is resized. 

Potential fixes:
- Mobile-adaptive implementation of Bootstrap and CSS homebrew? 
- Potentially programming separate PHP files to handle mobile landing? 
- Start from scratch and use better rules

----

#### April 2020

*4/01/2020* - I added `href` links that now link internally. Yes, finally! The 
site should now be functional entirely on a local machine. I can actually test 
all of our interactions on my computer when I begin to add scripting to the php
files. This is a pretty minor change but with major implications. Hooray!

I added some placeholder images in the form of the logo for the bottom three 
info tabs. These images link to separate php files which I will add later. 

**NOTE: Some of these links are *dead* links. This means that when you click on
them, you *WILL* get an error because the php files do not exist yet.**

I plan to work on these pages next: 
- `newsletter.php`
- `about.php`

These pages have simple implementation. Admittedly, the newsletter would be a 
creative pursuit on my part ;) but that being said, the about page is just a
simple copy paste with some image replacement. It shouldn't be too hard. That
being said, the last page is going to be the site map and that's really because
I don't want to keep adding onto it if I need to make more pages. The website's
hierarchy and design is something I'll need to really work on. The main goal is
that every page should be accessible from *every php file* that exists for the
site, even if it's something super small at the bottom of the page like a link
to a privacy policy or something. 

Another thing that I need to do is add the Member FDIC and the other legal info
at the footer. One thing that I liked from the old site was how simple their 
footer was- I believe it was just a few floats within a container. Elegant but
simple, just the way it should be. 

Of course, more of this work will also be on me to clean up each php file and 
make sure that the code is readable to anyone who chooses to edit it. I will 
ensure that a guide is written to edit any code if the need arises. 

`index.php` is almost done. I want to add more information but I think that its
purpose is served. It's a good landing page, it's precise, and it's clear. It 
definitely looks visually appealing as well. 

The same issues are present from before. I need to work on getting a mobile
compatible approach, but for now I think that this will do. 

----

