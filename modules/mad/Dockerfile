FROM python:3.7.1-slim

# Default port the webserver runs on
EXPOSE 8080 8000 5000

# Working directory for the application
WORKDIR /usr/src/app

# Install required system packages
RUN apt-get update && apt-get install -y --no-install-recommends libgeos-dev build-essential
RUN apt-get update && apt-get -y install libglib2.0-0 \
                                         default-libmysqlclient-dev \
                                         tesseract-ocr \
                                         libtesseract-dev \
                                         tk \
                                         git \
                                         supervisor \
                                         cron \
                                         mysql-client

# prepare to run walkers in parallel.
RUN mkdir -p /var/log/supervisor

# add crontab to restart walker
ADD crontab /etc/cron.d/mycron
RUN chmod 644 /etc/cron.d/mycron

# supervisor config
COPY ./supervisord.conf /
RUN touch /var/run/supervisor.sock && chmod 777 /var/run/supervisor.sock

# clone project
RUN git clone https://github.com/Map-A-Droid/MAD.git /usr/src/app/
RUN git clone https://github.com/ZeChrales/PogoAssets.git
RUN pip install --no-cache-dir -r requirements.txt

COPY ./entrypoint.sh /
ENTRYPOINT ["/entrypoint.sh"]
