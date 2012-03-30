# Installing Wordpress on Orchestra

1. Fork our [orchestra-io/example-wordress repo](http://github.com/orchestra-io/example-wordpress) and clone it to your local machine. _Note: please ensure that your fork is private as you will be adding DB credentials!_
2. Add any additional plugins or themes you want.
3. Sign up for a free MySQL database (We recommend [Xeround's](http://xeround.com/)).
4. Copy wp-config-sample.php to wp-config.php, edit the database details and change the "Authentication Keys and Salts" (_You can generate these using [Wordpress' API](http://api.wordpress.org/secret-key/1.1/salt/)_).
5. Open a terminal and navigate to the Wordpress directory on your local machine. Then run:
	* **git add .**
	* **git commit -am "Added extra themes, plugins and modified config"**
	* **git push origin master**
6. Deploy your wordpress repo as a basic or elastic app on [Orchestra](http://my.orchestra.io/). Ensure the index file is set to `index.php` instead of the default `public/index.php`.
7. Visit your newly deployed app and complete the installation process, which will setup your database.
8. Enable the 'Amazon S3 for Wordpress', 'Orchestra.io Upload to Temp' and 'WP-Mail-SMTP' plugins.
9. We suggest you configure better permalink structures. Go to Settings -> Permalinks, choose Custom permalinks and add: **/%year%/%monthnum%/%day%/%postname%/** . Ignore the .htaccess warning as we use Nginx.
10. Go to [S3](http://aws.amazon.com/s3/) and add a bucket. Click properties, then add more permissions. Allow authenticated users all permissions and everyone view permissions. Configure in Wordpress S3 settings. _Note: You must have an S3 bucked created before adding credentials to settings_.
	* **Host name settings: unchecked**
	* **File uploads: checked**
	* **Expire header: checked**
	* **File permissions: checked**
11. Setup a free SMTP account (We recommend [SendGrid](https://sendgrid.com/user/signup)) and configure it in Settings -> Email.
12. Done!

## Notes

* Plugins, themes and updates cannot be done using Wordpress' internal system.