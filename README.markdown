## What is Kilroy?

Kilroy is my minimal blog and resume. Kilroy is build on Stacey - minimal cms, which is database free. Stacey makes creating posts and pages super easy. And to make this all even more cool --everything is responsive.

![Kilroy Mock-up](kilroy-mockup.png "kilroy design mock-up image")

## What is Stacey?

Stacey is a lightweight content management system.
No database setup or installation files, simply drop the application on a server and it runs. 
Your content is managed by creating folders and editing text files. No login screens, no admin interface.

### Overview
Stacey takes content from `.yml` files, image files and implied directory structure and generates a website.
It is a no-database, dynamic website generator.

If you look in the `/content` and `/templates` folders, you should get the general idea of how it all works.

### Installation

Copy to server, `chmod 777 app/_cache`.

If you want clean urls, `mv htaccess .htaccess`

### Templates

Stacey uses the [Twig templating language](http://twig.sensiolabs.org/).

### Documentation

Check out [staceyapp.com](http://staceyapp.com/documentation/) for guides and documentation.
