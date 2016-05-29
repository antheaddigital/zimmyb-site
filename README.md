# zimmyb-site

Site Info
---------------
* This theme is built on Wordpress Underscores (but does not fully follow it's workflow) : http://underscores.me
* Built on Wordpress - Version 4.5.2.

Readme Table of Contents:
---------------
1. Setup
2. WP Plugins
3. File Locations
4. Site Management

Setup
---------------
```
> git clone https://github.com/camachowebworld/zimmyb-site.git
> cd zimmyb-site
> npm install
> grunt
```

WP Plugins
---------------
1. Remove Category URL - Version 1.1 - https://wordpress.org/plugins/remove-category-url/
2. bbPress - Version 2.5.9 - https://wordpress.org/plugins/bbpress/
3. Wordfence - Version 6.1.8 - https://wordpress.org/plugins/wordfence/
4. Contact Form 7 - Version 4.4.2 - https://wordpress.org/plugins/contact-form-7/
5. Pagination by BestWebSoft - Version 1.0.4 - https://wordpress.org/plugins/pagination/

File Locations
---------------
* Navigation and Logo : header.php
* Hompage content : index.php
* Books, Blogs, and News category page : archive.php
* About page : page-about.php
* Footer Marketing section and Footer : footer.php


Site Management
---------------
### Adding a new book:
1. Admin -> Posts -> New Post. Give post a title. Under Custom Fields create a new custom field for book_copy_key.
2. Add book info to books array : /books/_books.php
3. Create php page file in /books/_books.php and name it the book_copy_key value.
```php
// Example of array node that gets added to the books array
"[book_copy_key value]" => [
  "series" => "[series name]",
  "title" => "[book title]",
  "full_title" => "[book full title]",
  "hero_desktop" => "",
  "hero_mobile" => "",
  "play_store_link" => "",
  "itunes_link" => "",
  "description1" => "",
]
```


Todo List
---------------
1. footer promo - clean up, add social icons, create newsletter form, style twitter feeds
2. about page - needs content
3. contact page - needs content
4. search pages - needs cleanup
5. book page - needs content layout and cleanup
6. blog page - needs content layout and cleanup
7. news page - needs content layout and cleanup
