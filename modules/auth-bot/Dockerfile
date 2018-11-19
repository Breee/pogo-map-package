FROM node

RUN npm install discord.js
RUN npm install ontime
RUN npm install mysql
RUN git clone https://github.com/jepke/PMSF-Discord-AuthBot.git /usr/src/app/
COPY config.json /usr/src/app/

WORKDIR /usr/src/app/
CMD ["node", "DiscordListener.js"]
