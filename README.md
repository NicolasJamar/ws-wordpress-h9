# Workshop WordPress

## Intro

In this workshop you will learn the basics of WordPress by creating a custom theme. That means, you will not only deal with the dashboard & add content, but organize your own theme with custom templates. 

## Chapters

- [Installation](#installation)
- Overview the dashboard
- Overview files structure
- Activate the custom theme
- Pages templates
- The templates hierarchy
- Menu creation
- The Codex
- Custom Posts
- Advanced custom fields
- WP_Query class
- Images
- Categories
- Going further

## Installation

### Requirements

To use WordPress, you must to install a HTTP server, Apache or Nginx.

You also need to have PHP and MySQL (or MariaDB) & a Database manager (Workbench, phpMyAdmin...).

Once you have launch your environment (a server with PHP & MySQL), you're ready to start. 


### WordPress files

The WordPress files can be downloaded on the official website here : https://wordpress.org/download/

You run these in your env & the WordPress will start. 


### Link the database

The first thing to do is to create an empty database in your DB manager. Git it a name. 

The next step is to go the file ``wp-config.php` & write the correct info of your DB to be able to link it with WorkPress.  

Example :

```php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'designo');

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

```

> 👉 To allow plugins to be installed on Linux, you may write the following line in your `wp-config.php` file : `define('FS_METHOD','direct');`

---

Enjoy!
