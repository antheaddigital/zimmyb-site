# zimmyb-site

Site Info
---------------
* This theme is built on Wordpress Underscores (but does not fully follow it's workflow) : http://underscores.me
* Built on Wordpress - Version 4.5.2.

Table of Contents:
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
6. Disqus Comment System - Version 2.85 - https://wordpress.org/plugins/disqus-comment-system/

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
1. Admin -> Posts -> New Post.
  * Post title.
  * Category -> Books.
  * Custom Fields : book_copy_key and book_thumb_key.
2. Add book info to books array : /books/_books.php
3. Create php page file in /books/_books.php and name it the book_copy_key value. All content for the book page is managed on the created book php file. All images are store in /imgs/books/.
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

### Adding a Blog or News post:
1. Admin -> Posts -> New Post.
  * Post title
  * Category -> Books or Category -> News.
  * Custom Fields : post_featured_img_key and post_featured_img_alt_key
  * All images in post are stored in /imgs/posts/blog/ or /imgs/posts/news/
```html
// Example of how image tags should be created in post_id
<img class="img-responsive" src="[path to images]/[file name].jpg" alt="[give description of image]" />
//For example:
<img class="img-responsive" src="/zimmyb/wp-content/themes/underscores/imgs/posts/blog/blog_post_3.jpg" alt="Blog post 3 image of lion" />
```

### Site images:
* All site images are stored in /imgs/site/
* Site images include:
  * logo
  * social marketing icons (facebook, twitter, youtube, ect)
  * about page images
  * contact page images
  * ect.

Todo List
---------------
1. Footer promo
  * Sign up to Mail Chimp and setup and newsletter form
  * Create Twitter and add tweets
2. About page - needs content
3. Contact page - needs content
4. Search pages - needs cleanup
5. Book page
  * Create page for Bayme Pants in The sun is broken
6. Terms of Service / Privacy Policy - clean up page
