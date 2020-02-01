CREATE TABLE w4_users
( id          SERIAL        NOT NULL PRIMARY KEY
, user_name   VARCHAR (50)  NOT NULL
, first_name  VARCHAR (50)  NOT NULL
, last_name   VARCHAR (50)  NOT NULL
, last_name   VARCHAR (50)  NOT NULL
, phone       VARCHAR (100) NOT NULL
, email       VARCHAR (100) NOT NULL
, info_hidden VARCHAR (1)   NOT NULL
);

CREATE TABLE w4_game_list
( id         SERIAL         NOT NULL PRIMARY KEY
, user_id    INT            NOT NULL REFERENCES w4_users(id)
, game_name  VARCHAR (100)  NOT NULL
, genre      VARCHAR (100)  NOT NULL
, date_added VARCHAR (100)  NOT NULL
, review     VARCHAR (1000) NOT NULL
, tags       VARCHAR (100)  NOT NULL
);

CREATE TABLE w4_wish_list
( id      SERIAL NOT NULL PRIMARY KEY
, game_id INT    NOT NULL REFERENCES w4_game_list(id)
);

CREATE TABLE w4_friends_list
( id        SERIAL NOT NULL PRIMARY KEY
, user_id   INT    NOT NULL REFERENCES w4_users(id)
, friend_id INT    NOT NULL REFERENCES w4_users(id)
)
