<h2>PRODU - WordPress Application Developer Assessment Test</h2>
This is a Custom WordPress Application evaluation project for PRODU. 😊

This project was developed as part of a technical test for the WordPress Developer position.

<h2>Evaluation Requirements:</h2>

<h2>Part 1: Custom Post Types and Taxonomies</h2>

<h3>a) Create a custom post type called “Books” with the following custom fields:</h3> 
<ul> 
  <li>Title</li> 
  <li>Subtitle</li> 
  <li>Authors (linked to the “Authors” custom post type)</li> 
  <li>Description</li> 
  <li>Release Date</li> 
</ul>

![screencapture-produ-wpsite-local-wp-admin-post-php-2023-08-17-10_40_30](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/ad6e99e4-e340-4263-af61-622f296e4b01)


<h3>b) Create a custom post type called “Authors” with the following custom fields:</h3> 
<ul> 
  <li>Name</li> 
  <li>Biography</li> 
</ul>

![screencapture-produ-wpsite-local-wp-admin-post-php-2023-08-17-10_43_39](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/7a195dd3-1966-4c53-9a84-5874fe024945)


<h3>c) Implement a custom taxonomy called “Genres” and associate it with the “Books” post type.</h3> 
<p>Clarification: Taxonomies are used for categorization. Think of “Genres” as different categories that books can belong to, such as “Fiction,” “Science Fiction,” etc. You should create a few example genres like “Mystery,” “Romance,” and “Fantasy.”</p>

![screencapture-produ-wpsite-local-wp-admin-edit-tags-php-2023-08-17-10_50_29](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/9d9f2581-bec0-4d0f-a7a3-b5b695662625)

<h2>Part 2: Custom Fields and Metaboxes (ACF)</h2>

<h3>a) Add an Advanced Custom Fields (ACF) field group to the “Books” post type with the following fields:</h3> 
<ul> 
  <li>Star Rating (a numeric field)</li> 
  <li>Book Cover (an image field)</li> 
</ul>

![chrome-capture-2023-7-17 (1)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/1d72aeb0-2ea9-4794-9b5a-2e4b0d80b95e)

<h3>b) Create a metabox on the “Books” post editor screen that allows the user to select multiple genres for each book.</h3>

![chrome-capture-2023-7-17 (2)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/e4b6ec56-67e6-46c5-b007-f23e3f0d0083)

<h2>Part 3: Custom Shortcode and Hooks</h2> 
<p>Create a custom shortcode that displays a random book review. The shortcode should display the book title, names of authors, star rating, and a brief excerpt of the review content. Implement appropriate hooks to ensure the shortcode functions seamlessly within the WordPress environment.</p>
<p>Clarification: Utilize hooks to effectively integrate the shortcode into WordPress, demonstrating your understanding of the core functionality and extensibility of the platform.</p>

<p>Code in file: random-banner.php and registered in functions</p>

![chrome-capture-2023-7-17 (4)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/ae6abe48-bdbe-4b93-b863-3e544daf8625)

![Random-shortcode](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/4b97613c-c147-4cc0-be5a-b33b5cdb4728)

<h2>Part 4: Custom Widget and Hooks</h2> 
<p>Develop a custom widget that displays a list of the latest book reviews, including the book title, names of authors, star rating, and a short excerpt of the review content. Implement necessary hooks to ensure proper widget registration and functionality.</p>

![chrome-capture-2023-7-17 (5)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/26e05689-c314-47bf-9f2e-c8fc6dc27355)

![chrome-capture-2023-7-17 (6)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/a3f67219-c2bf-46fe-aa1d-231e2697e8ec)

![widget](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/0b053c8e-c0aa-450e-b63d-5d0079ee7e36)

<h2>Part 5: Many-to-Many Relations and WP_Query</h2> 
<p>Implement a way to associate multiple authors with each book and vice versa, allowing for easy navigation between books and their respective authors. Use WP_Query to create a dynamic author list within each book’s detail page.</p>

<p>Code in file: author_books.php</p>

![chrome-capture-2023-7-17 (7)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/e7ac9532-d762-42ab-8678-4256830166f4)

![authorbooks](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/8fbab770-55ff-440b-a6ea-d5c784f3bbca)


<h2>Part 6: Custom Theme (Mandatory) with Optional Use of Gutenberg Blocks</h2> 
<p>Create a custom theme that beautifully presents the books, authors, and reviews on the front-end. While the creation of a custom theme is mandatory, you have the option to leverage Gutenberg Blocks for content layout and presentation. The theme should incorporate the custom post types, taxonomies, fields, and features developed in previous parts.</p>

![103shots_so](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/6765e5fa-2841-4fe3-9ae2-9030b1f44724)

<h2>Part 7: Performance Optimization with wp_cache and Plugins</h2> 
<p>Implement caching, minimize CSS and JavaScript files, optimize images, and enhance server response time for improved site speed. Describe the methods, including the use of wp_cache, and any plugins you used for optimization.</p> 
<p>Clarification: Showcase your expertise in utilizing wp_cache and plugins to enhance site performance while maintaining a deep understanding of WordPress internals.</p>

<p>Performance tests carried out with the Lighthouse tool</p> 
<p>Lighthouse Full Report:</p>

[WP-optimization.pdf](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/files/12371223/WP-optimization.pdf)


<p>Using the plugins:</p>
    
![chrome-capture-2023-7-17 (8)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/3742e28f-b58b-45fe-9369-1cb02e2b28d9)

<h1 style=“margin-top: 20px;”>Information on Gabriel’s Theme Custom Theme.</h1>

<p>🚧 Clarification: The theme is not fully responsive, it is recommended to test the site in its Desktop version 🚧</p>
          


