SELECT * FROM `message` WHERE `date/heure_message`>DATE_SUB(NOW(), INTERVAL 24 HOUR);
