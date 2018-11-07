# Pogo-map-package
Combines PMSF, Map-A-Droid and pokealarm.
We will explain how to setup everything step by step.

1. Clone this repo
2. `cd pogo-map-package`

# 1 Requirenments
- mysql + mariaDB

# 2 PMSF Docker container.
1. `cd modules/map`
2. create `congig.php`, which is the PMSF config you are going to use.
3. create `access-config.php`, which is the PMSH access-config.
4. create `config.json`, which is the config of the PMSF-auth-bot

## 2.1 Create a monocle based database
Create a new mariaDB called `monocle` and a user with access just to it.
1. `mysql -u root`
2. `CREATE DATABASE monocle`
3. `CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'strong_password';`
4. `GRANT ALL PRIVILEGES ON monocle.* TO 'newuser'@'localhost';`
5. `FLUSH PRIVILEGES;`
6. verify that you can login: `mysql -u newuser -p strong_password monocle`, then exit.
7. The file `cleandb.sql` contains the commands to create the tables of the database,
execute:
- `mysql -u newuser monocle < cleandb.sql` to execute these commands.
8. Create an event to update the fort sightings:

```
CREATE EVENT `update_fort_sightings`
ON SCHEDULE EVERY 1 HOUR STARTS '2018-08-17 00:00:00'
ON COMPLETION NOT PRESERVE ENABLE
DO INSERT IGNORE INTO monocle.fort_sightings (fort_id)
SELECT id
FROM monocle.forts;

SET GLOBAL event_scheduler="ON";
```

## 2.2 Fill the database
1. `cd pogo-map-package/scripts`
2. First of all, we need gyms and pokestops. You create 2 files:
- `updateGyms.csv`
- `updateStops.csv`

both are of the form:
```
name,lat,lng,url
```

e.g.
```
name,lat,lng,url
"Frogs Can't Fly Painting",47.98043,7.822087,"http://lh3.ggpht.com/kYlLhALvirU89bni7zA50z6O_zDZuM6VUK0OsGfz2pGS75pB_Z4jh2jdgQXiKcEhdA30G6nr7KBPJz30Hez6_w"
"Modern Art Bauhaus Style",47.983139,7.820202,"http://lh3.ggpht.com/V7PoPELhgnkIPK7b8OqOaNbjTavBRLPrCRc5jiwzBwrNo5refKXEKN5OSxIKa24fACo-SmeeMIpRHngLoJf8"
"Holbeinpferd",47.979664,7.847677,"http://lh3.ggpht.com/_ErK-gHzJ9hsoiIuCL2KsAZSPeQ2ArcZWwF5Eya6-_G7KEt-Srm12LwD2uPEa8Yfg720j6pqx2Oy1VrC1pA"
"Auerhahn",47.981494,7.849761,"http://lh4.ggpht.com/59ygYQI6QonVO_gTs3V11MEL3254ipPdLm92HX4UY74dUOFpXvJdx_YeJ_fETIczADpKPuVFtWGL3AhKD4o"
"Trinity Balance",47.985091,7.833418,"http://lh6.ggpht.com/5W_d0IFdFiYa8AdmgsUkiToSmGsGvQoZXhiNKwVSMHnS9pUqS1uV2XQQ-Ye6EUksm8lI_5W8hUJvRm2JhbNS"
"Hildaturm",47.979514,7.838044,"http://lh5.ggpht.com/UY3Xazk2n0KgcmxAA5WN4soR7gddfy3G1wygI92X_zXc9nu3YAx7jXI4VUkvHQ1i-s_RvNrc3pC5boQ21Js"
"Waldorfschule",47.975755,7.815395,"http://lh6.ggpht.com/39SrX4H_3YMVbMF-WDiBWhTfCNelU_hHfjgRauOt5n15jUqJWy5GRWaTsf8GbCpQscZhP8DyORYP8fXeRWI"
"Medical A",47.978115,7.815342,"http://lh5.ggpht.com/pvTfCbqxk9akdwvAyzA-zuU7WXedBGgdQ9BJKl6Zezhcl30jyhX_RyhyhMKeuJwMK7mwRvHNvVO7205APcBtWA"
"St Georgen Clock Tower",47.97938,7.814093,"http://lh5.ggpht.com/xqiZkyKrMhgwyYXMFBkdvfE_OMvgw5GxmvryS0Bp6SlQCLpRBdRZEg27AEUphqI605OiXXCSLyHLXF5-nZqA"
"Red Tubes",47.978371,7.814565,"http://lh6.ggpht.com/FPgZj8NPfoh_3KREngc-KxKRPtCggLW8OiatMfgbeE6YYm4zMgpZBL1dvFxvMfQ0kCvcxsqkQ5EgeZ4_hdUMLg"
"Mehrfarbige Laser Säule",47.977935,7.829641,"http://lh6.ggpht.com/sDLHUTy-nNmURcyaaBM8Hw4z6UzynLw-RCL3u4zqFt_gtj29RgTdwFx7G77WJovmdVXSedPlYJ5G4U1M5EkX"
"Süden",47.97508,7.825427,"http://lh6.ggpht.com/Cxb6RdixGZpt8Uoqs-hkH50j_dfBjy1f3moQz3WPfQdSvuB2r6hrr8rL5QkAMEnFo1ualAwJPmavTg3qknI"
"Georg Elser Building",47.975772,7.8216,"http://lh3.googleusercontent.com/8ge04UkRxeNDZpF9KDWBcLekxK74lCYTl4H7Mde_KosfqkwuxuvW2WQRH_PdtELhwUE4m6emKDtz7PNn15BZ8Q"
"Gesprungene Schale",47.974135,7.827934,"http://lh6.ggpht.com/BbreULIPPn-Oh2nehux5MnWNiaBQSQUywjGDiKc_bopcrTrgyXAs4cB2JAkTbxWHbofv33Lngjp-v5cZm-g"
"Evangelische Johanneskirche Merzhausen",47.96831,7.827822,"http://lh5.ggpht.com/_K-hqFsfCDyRTS8AAQ6oRTp38jiLn3RCG9alwtOBMiHkBO0aF-QNd5oQbDVBukL1ASaxFfAv4XSMDcUb5og"
"Zombie Django",47.974494,7.826699,"http://lh5.ggpht.com/STNqPUans5IrbGogEVJy9p4jAkpwebji2khyylJTNBegP7Oji27vY8fYjXh9KlCjQILc2O_Md5EHaC4R2Z8i"
```

3. Execute `updateGyms_Monocle.sh` to insert the gyms from  `updateGyms.csv` into the database
4. Execute `updateStops_Monocle.sh` to insert the stops from  `updateStops.csv` into the database

# Map-A-Droid.
1. configure the files in `modules/map-a-droid/`
2. docker-compose build 
3. docker-compose up -d 

docker-compose will start  `startWalker.py -os`, `startWalker.py -oo`, `startWalker.py -wm`. 

# Get Pokealarm
1. Configure the files in modules/pokealarm
2. docker-compose  build
3. docker-compose up -d
3. In the PMSF config, set:

```
$sendWebhook = true;				// Sends Raids & Pokémon. Needs a 3th party program like pokealarm.
$webhookUrl = ['POKEALARM_URL'];                             //['url-1','url-2']

//---------------------------------------------------
// Quest Webhooks
//---------------------------------------------------
$sendQuestWebhook = true;                      // Experimental use only
$questWebhookUrl = ['POKEALARM_URL'];                        // Experimental use only
$webhookSystem = 'pokealarm';				// Supported either 'pokealarm' or 'poracle'
```
4. In the Map-a-droid config also set webhook to true.
