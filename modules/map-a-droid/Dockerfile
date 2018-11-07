# Basic docker image for Map-a-Droid
# Usage:
#   docker build -t mad .                 # Build the docker Image
#   docker run -d mad startWalker.py -os  # Launch Walker 
#   docker run -d mad startWalker.py -oo  # Launch Screenshot Processing
#   docker run -d mad startWalker.py -wm  # Launch MAdmin

FROM python:2.7-slim

# Default port the webserver runs on
EXPOSE 5000

# Working directory for the application
WORKDIR /usr/src/app
RUN apt-get update && apt-get install -y git
# clone project + copy config/geofence
RUN git clone https://github.com/Grennith/Map-A-Droid.git /usr/src/app/
COPY config.ini /usr/src/app/
COPY *.txt* /usr/src/app/

# Install required system packages
RUN apt-get update && apt-get install -y --no-install-recommends libgeos-dev build-essential
RUN apt-get update && apt-get -y install libglib2.0-0
RUN apt-get update && apt-get -y install tesseract-ocr libtesseract-dev python-opencv
RUN apt-get -y install tk
RUN apt-get update

RUN pip install --no-cache-dir -r requirements.txt

# Download gym images from DB and coords.
RUN python downloadGymImages.py
RUN python downloadCoords.py

# prepare to run walkers in parallel.
RUN apt-get update && apt-get install -y supervisor
RUN mkdir -p /var/log/supervisor
COPY ./supervisord.conf /etc/supervisor/conf.d/

CMD ["/usr/bin/supervisord"]
