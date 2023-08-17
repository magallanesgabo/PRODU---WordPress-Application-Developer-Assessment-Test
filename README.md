<h2>PRODU - WordPress Application Developer Assessment Test</h2>
This is a Custom WordPress Application evaluation project for PRODU. 😊

The access credentials are:

username: admin
password: admin

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

![screencapture-produ-wpsite-local-wp-admin-post-php-2023-08-17-10_40_30](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/9bdfc9ba-74a4-43b1-9a90-35d6ad96e61e)

<h3>b) Create a custom post type called “Authors” with the following custom fields:</h3> 
<ul> 
  <li>Name</li> 
  <li>Biography</li> 
</ul>

![screencapture-produ-wpsite-local-wp-admin-post-php-2023-08-17-10_43_39](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/582fd043-4fbc-4ee2-b6f2-f0205226db84)


<h3>c) Implement a custom taxonomy called “Genres” and associate it with the “Books” post type.</h3> 
<p>Clarification: Taxonomies are used for categorization. Think of “Genres” as different categories that books can belong to, such as “Fiction,” “Science Fiction,” etc. You should create a few example genres like “Mystery,” “Romance,” and “Fantasy.”</p>

![screencapture-produ-wpsite-local-wp-admin-edit-tags-php-2023-08-17-10_50_29](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/db9c4185-e3c7-4f34-8420-ae12d8904e63)


<h2>Part 2: Custom Fields and Metaboxes (ACF)</h2>

<h3>a) Add an Advanced Custom Fields (ACF) field group to the “Books” post type with the following fields:</h3> 
<ul> 
  <li>Star Rating (a numeric field)</li> 
  <li>Book Cover (an image field)</li> 
</ul>

![chrome-capture-2023-7-17 (1)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/60554aaa-33bc-485a-901c-6fff70afa8ce)

<h3>b) Create a metabox on the “Books” post editor screen that allows the user to select multiple genres for each book.</h3>

![chrome-capture-2023-7-17 (2)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/407b5eeb-b3b9-4c5e-bd91-c63b01a54c05)

<h2>Part 3: Custom Shortcode and Hooks</h2> 
<p>Create a custom shortcode that displays a random book review. The shortcode should display the book title, names of authors, star rating, and a brief excerpt of the review content. Implement appropriate hooks to ensure the shortcode functions seamlessly within the WordPress environment.</p>
<p>Clarification: Utilize hooks to effectively integrate the shortcode into WordPress, demonstrating your understanding of the core functionality and extensibility of the platform.</p>

<p>Code in file: random-banner.php and registered in functions</p>

![chrome-capture-2023-7-17 (4)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/a3e2194e-8fa6-4b17-8009-62617d896b83)

![Random-shortcode](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/64eed2df-f6fd-4d9f-9ea7-8eafd96f110d)

[My-Books-Gabriel-–-WP-Application-Developer-Assessment (1).webm](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/7bb4d8ce-4dc7-421a-b068-9212e92330ce)




<h2>Part 4: Custom Widget and Hooks</h2> 
<p>Develop a custom widget that displays a list of the latest book reviews, including the book title, names of authors, star rating, and a short excerpt of the review content. Implement necessary hooks to ensure proper widget registration and functionality.</p>

![chrome-capture-2023-7-17 (5)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/678245cf-83cd-45cf-9da0-1e050d0e2890)

![chrome-capture-2023-7-17 (6)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/b7b65c24-af17-43b3-9328-9e6a8f4b6a8b)

![widget](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/f3895c86-f538-4c25-802c-303ec45ef0a3)


<h2>Part 5: Many-to-Many Relations and WP_Query</h2> 
<p>Implement a way to associate multiple authors with each book and vice versa, allowing for easy navigation between books and their respective authors. Use WP_Query to create a dynamic author list within each book’s detail page.</p>

<p>Code in file: author_books.php</p>

![chrome-capture-2023-7-17 (7)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/731d68ab-7027-4c0b-b09a-93dda7c9776c)

![authorbooks](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/32e3f6e8-ee39-4b11-a062-bc6916e72da3)

<h2>Part 6: Custom Theme (Mandatory) with Optional Use of Gutenberg Blocks</h2> 
<p>Create a custom theme that beautifully presents the books, authors, and reviews on the front-end. While the creation of a custom theme is mandatory, you have the option to leverage Gutenberg Blocks for content layout and presentation. The theme should incorporate the custom post types, taxonomies, fields, and features developed in previous parts.</p>

![103shots_so](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/fafaa8e9-5d15-4d8c-99fe-605e26adb818)

<h2>Part 7: Performance Optimization with wp_cache and Plugins</h2> 
<p>Implement caching, minimize CSS and JavaScript files, optimize images, and enhance server response time for improved site speed. Describe the methods, including the use of wp_cache, and any plugins you used for optimization.</p> 
<p>Clarification: Showcase your expertise in utilizing wp_cache and plugins to enhance site performance while maintaining a deep understanding of WordPress internals.</p>

<p>Performance tests carried out with the Lighthouse tool</p> 
<p>Lighthouse Full Report:</p>

[WP-optimization.pdf](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/files/12371538/WP-optimization.pdf)

<p>Using the plugins:</p>
    
![chrome-capture-2023-7-17 (8)](https://github.com/magallanesgabo/PRODU---WordPress-Application-Developer-Assessment-Test/assets/96898684/a9b85c12-3004-4fc3-9a5b-28f9ddba5f5b)


<h1 style=“margin-top: 20px;”>Information on Gabriel’s Theme Custom Theme.</h1>

<p>🚧 Clarification: The theme is not fully responsive, it is recommended to test the site in its Desktop version 🚧</p>
          


