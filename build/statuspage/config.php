<?php
namespace NerdBaggy\StatusPage;

//Uptime Robot API Key
define('apiKey', 'u745481-c143209e2b6f1dc0c806f672');

//Uptime percentage for following days
define('historyDay', '1-7-30-360');

//Display names for the uptime percentage of the previous days
define('historyDaysNames', serialize(array('Past 24 Hours', 'Past Week', 'Past Month', 'Past Year')));

//How long to hold the cache of the data, best option is how often your checks get checked in seconds
define('cacheTime', 300);

//Only show these monitors
define('includedMonitors', '');


//Show monitors matching search
define('searchMonitors', '');

//Hide certain monitors
define('excludedMonitors', serialize(array()));
