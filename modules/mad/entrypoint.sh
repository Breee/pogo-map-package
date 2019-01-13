#!/bin/bash

# you can enable this, if you want to update your portal names.
# cd scripts/ && ./intelimport.sh portals.csv;
supervisord -c /supervisord.conf
