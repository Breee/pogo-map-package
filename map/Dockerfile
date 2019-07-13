FROM thecodingmachine/php:7.2-v1-apache-node10

RUN git clone https://github.com/whitewillem/PMSF.git /var/www/html/ && git checkout develop
RUN npm install
RUN npm run build
