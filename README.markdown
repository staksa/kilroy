## What is Kilroy?

Kilroy is my minimal blog and resume build with html, css and jquery. Kilroy is build on Stacey - minimal cms, which is database free. Stacey makes creating posts and pages super easy. And to make this all even more cool --everything is responsive.
<p>My old blog was deployed on heroku, this one is deployed on my own server.</p>

## What is Stacey?


### Overview
Stacey takes content from `.yml` files, image files and implied directory structure and generates a website.
It is a no-database, dynamic website generator.

If you look in the `/content` and `/templates` folders, you should get the general idea of how it all works.

### Installation

Copy to server, `chmod 777 app/_cache`.

If you want clean urls, `mv htaccess .htaccess`

### Templates

Stacey uses the [Twig templating language](http://twig.sensiolabs.org/).

There are an additional two sets of templates which can be found at:
<http://github.com/kolber/stacey-template2> &
<http://github.com/kolber/stacey-template3>

### Documentation

Check out [staceyapp.com](http://staceyapp.com/documentation/) for guides and documentation.
