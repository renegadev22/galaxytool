################################
### Galaxietool / Galaxytool ###
################################

Hi all,

this tool has its install instructions at:
http://en.wiki.galaxytool.eu/index.php/Installation (English)
http://de.wiki.galaxytool.eu/index.php/Installation (German)
http://es.wiki.galaxytool.eu/index.php/Instalación (Spanish)

The information needed for an update are located at:
http://en.wiki.galaxytool.eu/index.php/Updates (English)
http://de.wiki.galaxytool.eu/index.php/Update (German)
http://es.wiki.galaxytool.eu/index.php/Updates (Spanish)

hi people,

this project comes from galaxy tool i published it online so that we can bug fix it ourselves 

####################
### Installation ###
####################

***************
*** General ***
***************

You need to upload all files to your server. Now you should set writable permissions to the config folder. Then, start the install.php on your webserver by typing

http://example.com/path/to/galaxytool/install.php (this address is just a template!)

in your browser and have a look at the screen.
Now follow the instructions on the screen. They will give you detailed information about what to enter or they'll tell you, if something did not work as expected.
Everything is created automatically during installation - no need to edit any file.
After installation

After the installation you have to delete the install.php and the update.php! Then you can logon with the account data created during installation.
				************
Important for those hosted on a Linux Server
				************

Please note: the following setting can also be harmful for the Galaxytool, so you cannot logon at all, but see only a white page or a Fatal error when you try to do so. This is therefore no general solution.
For those who have been getting session time out messages as soon as you logged in: the problem is in your php.ini file. Log into your hosting providers control panel and find the php controls. Edit the php.ini: search for session.auto_start and change its attribute of 0 to 1, then save it. Now you should be able to log into gtool as you normally would.
