Song Guard is a simple CRUD app to store your lyrics, notes, and musical ideas.
I'm an amateur programmer, so this is offered as is, but if you have any requests,
bug reports, or would like to contribute, please do get in touch via my github page





TO DO

Complete CRUD!
Create done
Read done
Update?
Delete?
user accounts
validation

if click on artist, do sql select * from songs where artist = x

redirect for add page

<form action='item.php' method='POST' id='form'>
    <input type='hidden' name='action' value='delete' />
    <input type='hidden' name='id' value='{item_id}' />
    <a href="" onclick="document.getElementById('form').submit(); return false;">Delete item</a>
</form>



personalised stuff for the original material (ie songs)
Deprecated: mysql_real_escape_string(): The mysql extension is deprecated and will be removed in the future
use github issues?
Update sql validation to msqli standard

add favourites functionality

head needs to end in each page to allow personalised page title...  or does it?
homepage- add first song needs to redirect to login/register page.  Once built.
demo content for first time visitors?

random song page needs link removed as purpose is covered by button

Update button colours

How to integrae js... specifically for the sign in/register page.
http://bootsnipp.com/forms?version=3

REDIRECT after an add

Display a specific song well.

Search

Filter results various ways

<a href="detail.php?song-id=<?php echo $row['id'] ?>">Linkypoo</a>
