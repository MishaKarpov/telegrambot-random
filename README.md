It`s simply telegram bot which uses postgreSQL, works with webhooks and deployed on heroku.com. This bot storage input multimedia message from user and response him similar random message from another user. You can find in telegram @randomstack_bot and try it.

#Configuration
1. Change $host,$database,$user,$pass to your postgreSQL config in bd.php
2. Get your bot token from @FatherBot and insert to $token in index.php
#Install
3. Depoloy application on heroku
4. For set webhook you need open in your browser https://api.telegram.org/bot<token>/setWebhook?url=<url> where <token> your bot token and <url> your deployed url.
5. Connect to your postgreSQL and write SQL queries:
CREATE TABLE files (id serial,username varchar(50),chat_id varchar(50), file_id varchar(300), type varchar(1), json varchar(2000));
