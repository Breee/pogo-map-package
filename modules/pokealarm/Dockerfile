# Basic docker image for PokeAlarm
# It runs with the webhook -wh http://127.0.0.1:4000
# Usage:
#   docker build -t pokealarm
#   docker run -d --net container:RocketMap --name PokeAlarm -P pokealarm
# Change "RocketMap" to the name of your RocketMap docker
# For newer versions of docker maybe you have to change --net to --network

FROM python:2.7

# Default port the webserver runs on
EXPOSE 4000

# Working directory for the application
WORKDIR /usr/src/app
RUN git clone https://github.com/evilmoses/PokeAlarm.git /usr/src/app/
COPY *.json *.txt ./
COPY config.ini /usr/src/app/config/

# Set Entrypoint with hard-coded options
ENTRYPOINT ["python", "./start_pokealarm.py", "--host", "0.0.0.0"]

# Install required system packages
RUN apt-get update && apt-get install -y --no-install-recommends libgeos-dev

RUN pip install --no-cache-dir -r requirements.txt

