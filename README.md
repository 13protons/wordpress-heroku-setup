wordpress-heroku-setup
======================

A set up to start wordpress development in heroku 

wp-config.php 
========================

Updated Lines to support development, stage (before release--not staging site), production set up

Plugins
=========================

Tan Tan S3 with Cloudfront
http://wordpress.org/extend/plugins/tantan-s3-cloudfront/

Wordpress Importer
http://wordpress.org/extend/plugins/wordpress-importer/


Remove
======================================
I added a robot.txt to deny * 


Known Issues
=======================================
Heroku does NOT have zlib support.  This means you cannot upload plugins directly.  This also means Cache plugins do not work.


