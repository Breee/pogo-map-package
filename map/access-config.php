<?php
/* User levels */
// The part below requires the bot Chuckleslove wrote https://github.com/jepke/PMSF-Discord-AuthBot
// This bot is included when you pull PMSF so no need to pull it separately
// IDs must match the bots config
//
//THIS PART IS NOT PMSF CONFIG
//"guilds": {
//    "guildID": {		// Change GuildID into the discord server ID
//        "roleID":1,		// Change roleID into the role ID of the desired role
//        "roleID2":2		// Change roleID into the role ID of the desired role
//    },
//    "guildID2": {		// If only one server is used remove this.
//        "roleID": 3
//    }
//}
//THIS PART IS NOT PMSF CONFIG

$userLevel = 0;
$donorLevel = 1;
$helperLevel = 2;
$adminLevel = 3;
$ownerLevel = 4;

// if you are brave enough and now what you are doing you can add as many as levels you want
// If variable is the same as in config.php it may be removed from that specific level


if ($noNativeLogin === true && $noDiscordLogin === true ||  (($noNativeLogin === false || $noDiscordLogin === false) && !empty($_SESSION['user']->expire_timestamp) && $_SESSION['user']->expire_timestamp > time()))  {
    $userAccessLevel = $manualdb->get( "users", [ 'access_level' ], [ 'expire_timestamp' => $_SESSION['user']->expire_timestamp ] );
    if ($userAccessLevel['access_level'] == $userLevel) {
    //-----------------------------------------------------
// FRONTEND SETTINGS
//-----------------------------------------------------

/* Marker Settings */
$noExcludeMinIV = false;                                        // true/false
$noMinIV = false;                                               // true/false
$noMinLevel = false;                                            // true/false
$noHighLevelData = false;                                       // true/false
$noRarityDisplay = false;                                       // true/false
$noWeatherIcons = true;
$noWeatherShadow = false;
$noPokemon = false;

/* Notification Settings */
$noNotifyPokemon = false;                                       // true/false
$noNotifyRarity = false;                                        // true/false
$noNotifyIv = false;                                            // true/false
$noNotifyLevel = false;                                         // true/false
$noNotifyRaid = false;                                          // true/false
$noNotifySound = false;                                         // true/false
$noCriesSound = false;                                          // true/false
$noNotifyBounce = false;                                        // true/false
$noNotifyNotification = false;                                  // true/false


$noBigKarp = false;                                                 // BUGGED: Hides ALL Magikarp && the menu setting. true/false
$noBigKarpSetting = false;                                          // true/false
$noTinyRat = false;                                                 // BUGGED: Hides ALL Rattata && the menu setting. true/false
$noTinyRatSetting = false;                                          // true/false

$noGyms = false;                                                    // true/false
$noGymSidebar = true;                                              // true/false
$noTrainerName = false;                                             // true/false
$noExEligible = false;                                              // true/false

$noRaids = false;                                                   // true/false
$noRaidTimer = false;                                               // true/false

$noPokestops = false;                                               // true/false
$noLures = false;
$noQuests = false;                                                  // true/false
$noQuestsItems = false;
$noQuestsPokemon = false;
$noItemNumbers = false;                                             // true/false
$noScannedLocations = false;                                        // true/false
$noSpawnPoints = false;                                             // true/false
$noRanges = true;                                                  // true/false
$noScanPolygon = true;
$noSearchLocation = false;                                          // true/false
$noStartMe = false;                                                 // true/false
$noStartLast = false;                                               // true/false
$noFollowMe = false;                                                // true/false
$noSpawnArea = false;                                               // true/false

/* Style Settings */
$copyrightSafe = false;
$noCostumeIcons = false;
$noMapStyle = false;                                                // true/false
$noDirectionProvider = false;                                       // true/false
$noIconSize = false;                                                // true/false
$noIconNotifySizeModifier = false;                                  // true/false | Increase size of notified Pokemon
$noGymStyle = false;                                                // true/false
$noLocationStyle = false;                                           // true/false
$noExGyms = false;                                                  // Do not display EX-Gyms on the map
$noParkInfo = false;                                                // Do not display Park info on the map

//-----------------------------------------------------
// Manual Submissions
// In order to make Manual Raids and Quests work you need to have the $geoJSONfile set to a valid geoJSON.json file
//-----------------------------------------------------
$noSubmit = false;
$hideIfManual = false;
$noManualRaids = true;						 			// Enable/Disable ManualRaids permanently ( Comment this line if you want to use the block below )
$noManualPokemon = true;
$pokemonTimer = 900;                               // Time in seconds before a submitted Pokémon despawns.
$noManualGyms = true;
$noManualPokestops = true;
$noRenamePokestops = true;
$noConvertPokestops = true;
$noManualQuests = false;


//-----------------------------------------------------
// Ingress portals
//-----------------------------------------------------
$enableNewPortals = 0;                             // O: all, 1: new portals only
$noPortals = false;
$noDeletePortal = true;
$noConvertPortal = true;
$noS2Cells = false;
$noPoi = false;					   // Allow users to view POI markers
$noAddPoi = false;				   // Allow to add POI markers (locations eligible for submitting Pokestops/Ingress portals)
$noMarkPoi = false;
$pokemonReportTime = false;

$noDeleteGyms = true;
$noToggleExGyms = true;
$noDeletePokestops = true;

//-----------------------------------------------
// Search
//-----------------------------------------------------
$noSearch = false;
$noSearchGyms = false;          //Wont work if noSearch = false
$noSearchManualQuests = false;  //Wont work if noSearch = false
$noSearchNests = false;
$noSearchPortals = false;


//-----------------------------------------------
// Nests
//-----------------------------------------------------
$noNests = false;                                                   // true/false
$noManualNests = false;
$noDeleteNests = false;
$noAddNewNests = false;
$noNestPolygon = true;

    } else if ($userAccessLevel['access_level'] == $donorLevel) {
    //-----------------------------------------------------
// FRONTEND SETTINGS
//-----------------------------------------------------

/* Marker Settings */
$noExcludeMinIV = false;                                        // true/false
$noMinIV = false;                                               // true/false
$noMinLevel = false;                                            // true/false
$noHighLevelData = false;                                       // true/false
$noRarityDisplay = false;                                       // true/false
$noWeatherIcons = true;
$noWeatherShadow = false;
$noPokemon = false;

/* Notification Settings */
$noNotifyPokemon = false;                                       // true/false
$noNotifyRarity = false;                                        // true/false
$noNotifyIv = false;                                            // true/false
$noNotifyLevel = false;                                         // true/false
$noNotifyRaid = false;                                          // true/false
$noNotifySound = false;                                         // true/false
$noCriesSound = false;                                          // true/false
$noNotifyBounce = false;                                        // true/false
$noNotifyNotification = false;                                  // true/false


$noBigKarp = false;                                                 // BUGGED: Hides ALL Magikarp && the menu setting. true/false
$noBigKarpSetting = false;                                          // true/false
$noTinyRat = false;                                                 // BUGGED: Hides ALL Rattata && the menu setting. true/false
$noTinyRatSetting = false;                                          // true/false

$noGyms = false;                                                    // true/false
$noGymSidebar = true;                                              // true/false
$noTrainerName = false;                                             // true/false
$noExEligible = false;                                              // true/false

$noRaids = false;                                                   // true/false
$noRaidTimer = false;                                               // true/false

$noPokestops = false;                                               // true/false
$noLures = false;
$noQuests = false;                                                  // true/false
$noQuestsItems = false;
$noQuestsPokemon = false;
$noItemNumbers = false;                                             // true/false
$noScannedLocations = false;                                        // true/false
$noSpawnPoints = false;                                             // true/false
$noRanges = true;                                                  // true/false
$noScanPolygon = true;
$noSearchLocation = false;                                          // true/false
$noStartMe = false;                                                 // true/false
$noStartLast = false;                                               // true/false
$noFollowMe = false;                                                // true/false
$noSpawnArea = false;                                               // true/false

/* Style Settings */
$copyrightSafe = false;
$noCostumeIcons = false;
$noMapStyle = false;                                                // true/false
$noDirectionProvider = false;                                       // true/false
$noIconSize = false;                                                // true/false
$noIconNotifySizeModifier = false;                                  // true/false | Increase size of notified Pokemon
$noGymStyle = false;                                                // true/false
$noLocationStyle = false;                                           // true/false
$noExGyms = false;                                                  // Do not display EX-Gyms on the map
$noParkInfo = false;                                                // Do not display Park info on the map

//-----------------------------------------------------
// Manual Submissions
// In order to make Manual Raids and Quests work you need to have the $geoJSONfile set to a valid geoJSON.json file
//-----------------------------------------------------
$noSubmit = false;
$hideIfManual = false;
$noManualRaids = true;						 			// Enable/Disable ManualRaids permanently ( Comment this line if you want to use the block below )
$noManualPokemon = true;
$pokemonTimer = 900;                               // Time in seconds before a submitted Pokémon despawns.
$noManualGyms = true;
$noManualPokestops = true;
$noRenamePokestops = true;
$noConvertPokestops = true;
$noManualQuests = false;


//-----------------------------------------------------
// Ingress portals
//-----------------------------------------------------
$enableNewPortals = 0;                             // O: all, 1: new portals only
$noPortals = false;
$noDeletePortal = true;
$noConvertPortal = true;
$noS2Cells = false;
$noPoi = false;					   // Allow users to view POI markers
$noAddPoi = false;				   // Allow to add POI markers (locations eligible for submitting Pokestops/Ingress portals)
$noMarkPoi = false;
$pokemonReportTime = false;

$noDeleteGyms = true;
$noToggleExGyms = true;
$noDeletePokestops = true;

//-----------------------------------------------
// Search
//-----------------------------------------------------
$noSearch = false;
$noSearchGyms = false;          //Wont work if noSearch = false
$noSearchManualQuests = false;  //Wont work if noSearch = false
$noSearchNests = false;
$noSearchPortals = false;


//-----------------------------------------------
// Nests
//-----------------------------------------------------
$noNests = false;                                                   // true/false
$noManualNests = false;
$noDeleteNests = false;
$noAddNewNests = false;
$noNestPolygon = true;


    } else if ($userAccessLevel['access_level'] == $helperLevel) {
    //-----------------------------------------------------
// FRONTEND SETTINGS
//-----------------------------------------------------

/* Marker Settings */
$noExcludeMinIV = false;                                        // true/false
$noMinIV = false;                                               // true/false
$noMinLevel = false;                                            // true/false
$noHighLevelData = false;                                       // true/false
$noRarityDisplay = false;                                       // true/false
$noWeatherIcons = true;
$noWeatherShadow = false;
$noPokemon = false;

/* Notification Settings */
$noNotifyPokemon = false;                                       // true/false
$noNotifyRarity = false;                                        // true/false
$noNotifyIv = false;                                            // true/false
$noNotifyLevel = false;                                         // true/false
$noNotifyRaid = false;                                          // true/false
$noNotifySound = false;                                         // true/false
$noCriesSound = false;                                          // true/false
$noNotifyBounce = false;                                        // true/false
$noNotifyNotification = false;                                  // true/false


$noBigKarp = false;                                                 // BUGGED: Hides ALL Magikarp && the menu setting. true/false
$noBigKarpSetting = false;                                          // true/false
$noTinyRat = false;                                                 // BUGGED: Hides ALL Rattata && the menu setting. true/false
$noTinyRatSetting = false;                                          // true/false

$noGyms = false;                                                    // true/false
$noGymSidebar = true;                                              // true/false
$noTrainerName = false;                                             // true/false
$noExEligible = false;                                              // true/false

$noRaids = false;                                                   // true/false
$noRaidTimer = false;                                               // true/false

$noPokestops = false;                                               // true/false
$noLures = false;
$noQuests = false;                                                  // true/false
$noQuestsItems = false;
$noQuestsPokemon = false;
$noItemNumbers = false;                                             // true/false
$noScannedLocations = false;                                        // true/false
$noSpawnPoints = false;                                             // true/false
$noRanges = true;                                                  // true/false
$noScanPolygon = true;
$noSearchLocation = false;                                          // true/false
$noStartMe = false;                                                 // true/false
$noStartLast = false;                                               // true/false
$noFollowMe = false;                                                // true/false
$noSpawnArea = false;                                               // true/false

/* Style Settings */
$copyrightSafe = false;
$noCostumeIcons = false;
$noMapStyle = false;                                                // true/false
$noDirectionProvider = false;                                       // true/false
$noIconSize = false;                                                // true/false
$noIconNotifySizeModifier = false;                                  // true/false | Increase size of notified Pokemon
$noGymStyle = false;                                                // true/false
$noLocationStyle = false;                                           // true/false
$noExGyms = false;                                                  // Do not display EX-Gyms on the map
$noParkInfo = false;                                                // Do not display Park info on the map

//-----------------------------------------------------
// Manual Submissions
// In order to make Manual Raids and Quests work you need to have the $geoJSONfile set to a valid geoJSON.json file
//-----------------------------------------------------
$noSubmit = false;
$hideIfManual = false;
$noManualRaids = true;						 			// Enable/Disable ManualRaids permanently ( Comment this line if you want to use the block below )
$noManualPokemon = true;
$pokemonTimer = 900;                               // Time in seconds before a submitted Pokémon despawns.
$noManualGyms = true;
$noManualPokestops = true;
$noRenamePokestops = true;
$noConvertPokestops = true;
$noManualQuests = false;


//-----------------------------------------------------
// Ingress portals
//-----------------------------------------------------
$enableNewPortals = 0;                             // O: all, 1: new portals only
$noPortals = false;
$noDeletePortal = true;
$noConvertPortal = true;
$noS2Cells = false;
$noPoi = false;					   // Allow users to view POI markers
$noAddPoi = false;				   // Allow to add POI markers (locations eligible for submitting Pokestops/Ingress portals)
$noMarkPoi = false;
$pokemonReportTime = false;

$noDeleteGyms = true;
$noToggleExGyms = true;
$noDeletePokestops = true;

//-----------------------------------------------
// Search
//-----------------------------------------------------
$noSearch = false;
$noSearchGyms = false;          //Wont work if noSearch = false
$noSearchManualQuests = false;  //Wont work if noSearch = false
$noSearchNests = false;
$noSearchPortals = false;


//-----------------------------------------------
// Nests
//-----------------------------------------------------
$noNests = false;                                                   // true/false
$noManualNests = false;
$noDeleteNests = false;
$noAddNewNests = false;
$noNestPolygon = true;
    } else if ($userAccessLevel['access_level'] == $adminLevel) {
    //-----------------------------------------------------
// FRONTEND SETTINGS
//-----------------------------------------------------

/* Marker Settings */
$noExcludeMinIV = false;                                        // true/false
$noMinIV = false;                                               // true/false
$noMinLevel = false;                                            // true/false
$noHighLevelData = false;                                       // true/false
$noRarityDisplay = false;                                       // true/false
$noWeatherIcons = true;
$noWeatherShadow = false;
$noPokemon = false;

/* Notification Settings */
$noNotifyPokemon = false;                                       // true/false
$noNotifyRarity = false;                                        // true/false
$noNotifyIv = false;                                            // true/false
$noNotifyLevel = false;                                         // true/false
$noNotifyRaid = false;                                          // true/false
$noNotifySound = false;                                         // true/false
$noCriesSound = false;                                          // true/false
$noNotifyBounce = false;                                        // true/false
$noNotifyNotification = false;                                  // true/false


$noBigKarp = false;                                                 // BUGGED: Hides ALL Magikarp && the menu setting. true/false
$noBigKarpSetting = false;                                          // true/false
$noTinyRat = false;                                                 // BUGGED: Hides ALL Rattata && the menu setting. true/false
$noTinyRatSetting = false;                                          // true/false

$noGyms = false;                                                    // true/false
$noGymSidebar = true;                                              // true/false
$noTrainerName = false;                                             // true/false
$noExEligible = false;                                              // true/false

$noRaids = false;                                                   // true/false
$noRaidTimer = false;                                               // true/false

$noPokestops = false;                                               // true/false
$noLures = false;
$noQuests = false;                                                  // true/false
$noQuestsItems = false;
$noQuestsPokemon = false;
$noItemNumbers = false;                                             // true/false
$noScannedLocations = false;                                        // true/false
$noSpawnPoints = false;                                             // true/false
$noRanges = true;                                                  // true/false
$noScanPolygon = true;
$noSearchLocation = false;                                          // true/false
$noStartMe = false;                                                 // true/false
$noStartLast = false;                                               // true/false
$noFollowMe = false;                                                // true/false
$noSpawnArea = false;                                               // true/false

/* Style Settings */
$copyrightSafe = false;
$noCostumeIcons = false;
$noMapStyle = false;                                                // true/false
$noDirectionProvider = false;                                       // true/false
$noIconSize = false;                                                // true/false
$noIconNotifySizeModifier = false;                                  // true/false | Increase size of notified Pokemon
$noGymStyle = false;                                                // true/false
$noLocationStyle = false;                                           // true/false
$noExGyms = false;                                                  // Do not display EX-Gyms on the map
$noParkInfo = false;                                                // Do not display Park info on the map

//-----------------------------------------------------
// Manual Submissions
// In order to make Manual Raids and Quests work you need to have the $geoJSONfile set to a valid geoJSON.json file
//-----------------------------------------------------
$noSubmit = false;
$hideIfManual = false;
$noManualRaids = true;						 			// Enable/Disable ManualRaids permanently ( Comment this line if you want to use the block below )
$noManualPokemon = true;
$pokemonTimer = 900;                               // Time in seconds before a submitted Pokémon despawns.
$noManualGyms = true;
$noManualPokestops = true;
$noRenamePokestops = true;
$noConvertPokestops = true;
$noManualQuests = false;


//-----------------------------------------------------
// Ingress portals
//-----------------------------------------------------
$enableNewPortals = 0;                             // O: all, 1: new portals only
$noPortals = false;
$noDeletePortal = true;
$noConvertPortal = true;
$noS2Cells = false;
$noPoi = false;					   // Allow users to view POI markers
$noAddPoi = false;				   // Allow to add POI markers (locations eligible for submitting Pokestops/Ingress portals)
$noMarkPoi = false;
$pokemonReportTime = false;

$noDeleteGyms = true;
$noToggleExGyms = true;
$noDeletePokestops = true;

//-----------------------------------------------
// Search
//-----------------------------------------------------
$noSearch = false;
$noSearchGyms = false;          //Wont work if noSearch = false
$noSearchManualQuests = false;  //Wont work if noSearch = false
$noSearchNests = false;
$noSearchPortals = false;


//-----------------------------------------------
// Nests
//-----------------------------------------------------
$noNests = false;                                                   // true/false
$noManualNests = false;
$noDeleteNests = false;
$noAddNewNests = false;
$noNestPolygon = true;

    } else if ($userAccessLevel['access_level'] == $ownerLevel) {
    //-----------------------------------------------------
// FRONTEND SETTINGS
//-----------------------------------------------------

/* Marker Settings */
$noExcludeMinIV = false;                                        // true/false
$noMinIV = false;                                               // true/false
$noMinLevel = false;                                            // true/false
$noHighLevelData = false;                                       // true/false
$noRarityDisplay = false;                                       // true/false
$noWeatherIcons = true;
$noWeatherShadow = false;
$noPokemon = false;

/* Notification Settings */
$noNotifyPokemon = false;                                       // true/false
$noNotifyRarity = false;                                        // true/false
$noNotifyIv = false;                                            // true/false
$noNotifyLevel = false;                                         // true/false
$noNotifyRaid = false;                                          // true/false
$noNotifySound = false;                                         // true/false
$noCriesSound = false;                                          // true/false
$noNotifyBounce = false;                                        // true/false
$noNotifyNotification = false;                                  // true/false


$noBigKarp = false;                                                 // BUGGED: Hides ALL Magikarp && the menu setting. true/false
$noBigKarpSetting = false;                                          // true/false
$noTinyRat = false;                                                 // BUGGED: Hides ALL Rattata && the menu setting. true/false
$noTinyRatSetting = false;                                          // true/false

$noGyms = false;                                                    // true/false
$noGymSidebar = true;                                              // true/false
$noTrainerName = false;                                             // true/false
$noExEligible = false;                                              // true/false

$noRaids = false;                                                   // true/false
$noRaidTimer = false;                                               // true/false

$noPokestops = false;                                               // true/false
$noLures = false;
$noQuests = false;                                                  // true/false
$noQuestsItems = false;
$noQuestsPokemon = false;
$noItemNumbers = false;                                             // true/false
$noScannedLocations = false;                                        // true/false
$noSpawnPoints = false;                                             // true/false
$noRanges = true;                                                  // true/false
$noScanPolygon = true;
$noSearchLocation = false;                                          // true/false
$noStartMe = false;                                                 // true/false
$noStartLast = false;                                               // true/false
$noFollowMe = false;                                                // true/false
$noSpawnArea = false;                                               // true/false

/* Style Settings */
$copyrightSafe = false;
$noCostumeIcons = false;
$noMapStyle = false;                                                // true/false
$noDirectionProvider = false;                                       // true/false
$noIconSize = false;                                                // true/false
$noIconNotifySizeModifier = false;                                  // true/false | Increase size of notified Pokemon
$noGymStyle = false;                                                // true/false
$noLocationStyle = false;                                           // true/false
$noExGyms = false;                                                  // Do not display EX-Gyms on the map
$noParkInfo = false;                                                // Do not display Park info on the map

//-----------------------------------------------------
// Manual Submissions
// In order to make Manual Raids and Quests work you need to have the $geoJSONfile set to a valid geoJSON.json file
//-----------------------------------------------------
$noSubmit = false;
$hideIfManual = false;
$noManualRaids = true;						 			// Enable/Disable ManualRaids permanently ( Comment this line if you want to use the block below )
$noManualPokemon = true;
$pokemonTimer = 900;                               // Time in seconds before a submitted Pokémon despawns.
$noManualGyms = true;
$noManualPokestops = true;
$noRenamePokestops = true;
$noConvertPokestops = true;
$noManualQuests = false;


//-----------------------------------------------------
// Ingress portals
//-----------------------------------------------------
$enableNewPortals = 0;                             // O: all, 1: new portals only
$noPortals = false;
$noDeletePortal = true;
$noConvertPortal = true;
$noS2Cells = false;
$noPoi = false;					   // Allow users to view POI markers
$noAddPoi = false;				   // Allow to add POI markers (locations eligible for submitting Pokestops/Ingress portals)
$noMarkPoi = false;
$pokemonReportTime = false;

$noDeleteGyms = true;
$noToggleExGyms = true;
$noDeletePokestops = true;

//-----------------------------------------------
// Search
//-----------------------------------------------------
$noSearch = false;
$noSearchGyms = false;          //Wont work if noSearch = false
$noSearchManualQuests = false;  //Wont work if noSearch = false
$noSearchNests = false;
$noSearchPortals = false;


//-----------------------------------------------
// Nests
//-----------------------------------------------------
$noNests = false;                                                   // true/false
$noManualNests = false;
$noDeleteNests = false;
$noAddNewNests = false;
$noNestPolygon = true;
// Editting variables
        $noManualGyms = false;                                         // true/false
        $noManualPokemon = false;                                      // true/false
        $noManualPokestops = false;                                    // true/false
        $noRenamePokestops = false;                                    // true/false
        $noConvertPokestops = false;                                   // true/false
        $noDeleteGyms = false;                                         // true/false
        $noDeletePokestops = false;                                    // true/false
        $noAddNewCommunity = false;                                    // true/false
        $noDeleteCommunity = false;                                    // true/false
        $noEditCommunity = false;                                      // true/false
        $noDeletePortal = false;                                       // true/false
// Markers
        $noGyms = false;                                               // true/false
        $noPokestops = false;                                          // true/false  
        $noNests = false;                                              // true/false
        $noPortals = false;                                            // true/false
        $noCommunity = false;                                          // true/false
        $noRaids = false;                                              // true/false
        $noAreas = false;                                              // true/false
        $noPoi = false;                                     // Allow users to view POI markers
        $noAddPoi = false;                                  // Allow to add POI markers (locations eligible for submitting Pokestops/Ingress portals)
        $enablePoi = 'false';
        $noDeletePoi = false;
        $noMarkPoi = false;
       $noPokemon = false;

// Functionality
        $copyrightSafe = false;                                        // true/false
        $noManualQuests = false;                                       // true/false
        $noStartLast = false;                                          // true/false
        $noMapStyle = false;                                           // true/false
        $noManualRaids = false;                                        // true/false
        $noAddNewNests = false;                                        // true/false
        $noSearchPortals = false;                                      // true/false
//Message of the Day
        $noMotd = true;                                                // true/false
        $motdTitle = "Message of the Day";
        $motdContent = "This is an example MOTD<br>Do whatever you like with it.";
}
}
