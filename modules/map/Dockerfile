FROM thecodingmachine/php:7.2-v1-apache-node10

RUN git clone https://github.com/whitewillem/PMSF.git /var/www/html/ && git checkout dev
RUN npm install
COPY config.php /var/www/html/config/
COPY access-config.php /var/www/html/config/
RUN rm -R /var/www/html/static/rewards
COPY ./rewards/ /var/www/html/static/rewards
COPY icons-im-1-bigger.png /var/www/html/static/
RUN npm run build
