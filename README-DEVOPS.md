# Development & System Administration Notes


## Fix permission issue with SFTP

FTP upload to wp-content

Add ubuntu to www-data group

	sudo usermod -a -G www-data ubuntu

Give group write permissions to wp-content

	sudo chmod -R g+w wp-content


## Make Video Streamable
Play video as soon as usable bits are available

This uses winff but a ffmpeg exe will also work.

Change paths as needed:

    "D:\portables\winff\Bin\Winff\ffmpeg.exe" -i "D:\webserver\htdocs\wp\projects\gsc2\wp-content\themes\diana\media\home.mp4" -c copy -movflags faststart "D:\webserver\htdocs\wp\projects\gsc2\wp-content\themes\diana\media\home-stream.mp4"



## Nginx Virtual Host File

For `beta.gsc.edu.ph`

File see: [devops/nginx.v.conf](../devops/nginx.v.conf)

To enable

    sudo ln -s /etc/nginx/sites-available/beta.gsc.edu.ph /etc/nginx/sites-enabled/
    
To disable

    sudo rm /etc/nginx/sites-enabled/beta.gsc.edu.ph


## Create WP Database

    mysql -u root -p

Paste password and

CREATE DATABASE beta DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;