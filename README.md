# A ShareX PHP script to send the screenshot in a Discord Embed.
I created this repo after seeing my friend spend $5 on a custom link sender and I thought... why not just make it yourself? So, I created this script that anyone can host & easily do it for free.


# How to use?
First, you're going to need a domain & a hosting service with at least 100MB storage. <br><br>

Next, create a file ending in .php, for this demonstration, I'll use the name `upload.php`.<br><br>
Paste the script into upload.php and edit $secret_key to a secure string of characters and numbers. This will prevent anyone else from uploading to your site. Example: `UISh7890HJ08Dhb8hd9DH890h1`<br><br>
Change $domain_url to the **full** URL of your domain. If you have a subdomain, add it. Example: `https://google.com`<br><br>
Change $domain_name to the domain URL without http/https. Example: `google.com`<br><br>
Change $hexCode to the color you want your embed to be. Get a hex code [here](https://htmlcolorcodes.com/color-picker/).<br><br>
Change $titleContent to whatever you want the embed title to be.<br><br>
<br>
![show](https://vexon.ml/uploads/v9op2qslh9svhw4u/v9op2qslh9svhw4u.png)
<br><br><br>
Now, onto configuring ShareX to upload to our site. <br><br>
Open ShareX from your tray and head over to the "Destinations" tab and click "Custom uploader settings..." <br><br>
![destinations](https://vexon.ml/uploads/fskj5d7fslq9bmz8/fskj5d7fslq9bmz8.png)
<br><br><br>
Click new and fill in these settings. (Change secret's value to your secret key) <br><br>
![settings](https://vexon.ml/uploads/7bbdcrs71vl3ze2y/7bbdcrs71vl3ze2y.png)
<br><br><br>

Exit out of the menu and select "After upload tasks", then deselect everything and select "Copy URL to clipboard".<br><br>
Then do the same for "After capture tasks", but select "Upload image to host", instead.<br><br>
Then, in destinations, change your image, file & text uploader to your custom uploader.<br><br>
<br><br><br>
![final](https://vexon.ml/uploads/lr3khsc56y1fc84x/lr3khsc56y1fc84x.png)
<br><br>
And you're done! 
