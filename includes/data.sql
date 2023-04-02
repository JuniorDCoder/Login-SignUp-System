CREATE TABLE posts(
	id int(11) NOT null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) NOT null,
    content varchar(1000) NOT null,
    date datetime NOT null
);

INSERT into posts(subject, content, date) VALUES ('This is the Subject', 'I am Junior Ngu nicknamed Junior DCoder. I am a level 200 Computer Engineering Student in the National School of Engineering Of the University Of Bamenda. I am currently undergoing an undergraduate program, pursuing a Bachelor in Engineering. I anticipate becoming a full stack or backend developer, God being my helper!', '2023-2-24 10:16:01');

CREATE TABLE users(
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_uid varchar(256) not null,
    user_pwd varchar(256) not null
);

INSERT INTO users(user_first, user_last, user_email,user_uid, user_pwd)
VALUES ('Junior', 'Ngu','juniorngu84@gmail.com', 'Admin', 'test123');

CREATE TABLE users(
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_name varchar(256) not null,
    user_pwd varchar(256) not null,
    user_email varchar(256) not null
);