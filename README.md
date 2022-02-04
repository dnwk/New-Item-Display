## New-Item-Display
### This is a public version of New Item display used by Penrose Library.

* newlist_single_feed.php will provide a json feed of one random item.
* newlist_complete_feed.php will provide a json feed of every item purchased in last 30 days.
* index.php will provide a vanilla display of books purchased in last 30 days.
* res/import.php will pull the data recently purchased books from Alma and store them locally in a MySQL database.

The purpose of this PHP program is to pull an Alma analytics report of new books purchased in last 30 days, parse the XML results, insert the report into a local MySQL database. It will generate JSON feed to library website for display.
