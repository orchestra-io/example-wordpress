# Installing Wordpress on Orchestra

1. Fork [our orchestra-io/example-wordress repo](http://github.com/orchestra-io/example-wordpress) and `git clone` it to your local machine. _Note: please ensure that you change it to a private repo, or else everyone will be able to see your SQL credentials!_.
2. Add any additional plugins or themes you want.
3. Sign up for a free MySQL database (We recommend [Xeround's](http://xeround.com/)).
4. Rename wp-config-sample.php to wp-config.php, edit the database details and change the "Authentication Keys and Salts" (_You can generate these using [Wordpress' API](http://api.wordpress.org/secret-key/1.1/salt/)_).
5. Open a terminal and navigate to the Wordpress directory on your local machine. Then run:
	git add .
	git commit -am "Added extra themes, plugins and modified config"
	git push origin master
6. Deploy your app on [Orchestra](http://my.orchestra.io/) as usual. Ensure the index file is set to `index.php` instead of the default `public/index.php`.
7. When you visit your app for the first time you'll be asked to configure it, this will also setup your database.
8. Enable the Amazon S3 for Wordpress, Orchestra.io Upload to Temp and WP-Mail-SMTP plugins.
9. We suggest you setup nicer permalinks, go to Settings -> Permalinks, choose Custom permalinks and set it as "/%year%/%monthnum%/%day%/%postname%/". Ignore the .htaccess warnings, our system is already setup to handle this.
10. Go to [S3](http://aws.amazon.com/s3/) and add a bucket. Click properties, then add more permissions. Allow authenticated users all permissions and everyone view permissions. Configure in Wordpress S3 settings. _Note: You must have an S3 bucked created before adding credentials to settings_.
	Host name settings: unchecked
	File uploads: checked
	Expire header: checked
	File permissions: checked
11.	Go get an SMTP account ([SendGrid](http://sendgrid.com/), [SES](http://aws.amazon.com/ses/)) and configure it in Settings -> Email.
12. Done!

## Notes

* Plugins, themes and updates cannot be done using Wordpress' internal system.