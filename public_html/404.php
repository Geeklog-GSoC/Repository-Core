<?php
include("common.php");
site_header("menu");
startblock("404 Error");
print "Gee, I've looked everywhere but I can not find <b>http://{$HTTP_SERVER_VARS["HTTP_HOST"]}{$HTTP_SERVER_VARS["REQUEST_URI"]}</b>.";
print "<p>We're sorry, but the file you have requested does not exist. Please feel free to check the <a href={$CONF["site_url"]}>main page</a> or the <a href={$CONF["site_url"]}/search.php>search page</a> to see if you can find what you lost.";
endblock();
site_footer();
?>

