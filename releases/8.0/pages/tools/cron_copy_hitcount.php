<?php
include_once dirname(__FILE__) . "/../../include/db.php";
include_once dirname(__FILE__) . "/../../include/general.php";
include_once dirname(__FILE__) . "/../../include/reporting_functions.php";
include_once dirname(__FILE__) . "/../../include/resource_functions.php";
include_once dirname(__FILE__) . "/../../include/search_functions.php";

# Legacy. This was originally the path to the cron job. Include the new path.

include(dirname(__FILE__) . "/../../batch/cron.php");


    
# Legacy hook - required because several third party plugins hook in to this page in this location.
hook("addplugincronjob");
