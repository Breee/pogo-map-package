#!/bin/bash

touch coords.csv
touch gym_info.json

python downloadCoords.py
python downloadGymImages.py

supervisord -c /supervisord.conf
