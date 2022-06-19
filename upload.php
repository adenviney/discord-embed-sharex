<?php
$secret_key = "your_secret_key"; //Set this as your secret key, to prevent others uploading to your server.
$sharexdir = "uploads/"; //This is your file dir, also the link..
$domain_url = 'https://google.com/'; //Add an S at the end of HTTP if you have a SSL certificate.
$domain_name = 'google.com'; //Your domain name, if you have a subdomain, add it here.
$lengthofstring = 16; //Length of the file name.
$hexCode = 'ffffff'; //Color of embed.
$titleContent = 'I\'m just too cool'; //Title of embed.


function RandomString($length) {
    $keys = array_merge(range(0,9), range('a', 'z'));

    $key = '';
    for($i=0; $i < $length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}

if(isset($_POST['secret']))
{
    if($_POST['secret'] == $secret_key)
    {
        $filename = RandomString($lengthofstring);
        $target_file = $_FILES["sharex"]["name"];
        $fileType = pathinfo($target_file, PATHINFO_EXTENSION);

        if (!file_exists('uploads/'.$filename)) {
            mkdir('uploads/'.$filename, 0777, true);
        }

        $sharexdir = 'uploads/'.$filename.'/';

        if (move_uploaded_file($_FILES["sharex"]["tmp_name"], $sharexdir.$filename.'.'.$fileType))
        {
            echo $domain_url.$sharexdir;
        } else {
           echo 'File upload failed - CHMOD/Folder doesn\'t exist?';
        }

        //Create HTML for folder uploads/filename
        $html = '<!DOCTYPE html><html><head><meta charset="utf-8"><title>'.$filename.'</title><meta name="robots" content="noindex, nofollow"><meta property="og:title" content="'.$titleContent.'"><meta property="og:site_name" content="'.$domain_name.'"><meta property="og:image" content="'.$domain_url.$sharexdir.$filename.'/'.$filename.'.'.$fileType.'"><meta name="theme-color" content="#'.$hexCode.'"><meta name="twitter:card" content="summary_large_image"></head><body><a href="'.$domain_url.$sharexdir.$filename.'/'.$filename.'.'.$fileType.'">View Image</a></body></html>';
        file_put_contents($sharexdir.'index.html', $html);
        
        
    } else {
        echo 'Invalid Secret Key';
    }
} else {
    echo 'No post data recieved';
}
?>
