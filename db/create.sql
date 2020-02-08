CREATE TABLE users
( id          SERIAL        NOT NULL PRIMARY KEY
, user_name   VARCHAR (50)  NOT NULL
, first_name  VARCHAR (50)
, last_name   VARCHAR (50)
, phone       VARCHAR (100)
, email       VARCHAR (100) NOT NULL
, info_hidden VARCHAR (1)   NOT NULL
);

CREATE TABLE genres
( id          SERIAL        NOT NULL PRIMARY KEY
, genre_name  VARCHAR (100) NOT NULL
);

CREATE TABLE game_list
( id          SERIAL        NOT NULL PRIMARY KEY
, user_id     INT           NOT NULL REFERENCES users(id)
, game_name   VARCHAR (100) NOT NULL
, genre_id    int           NOT NULL REFERENCES genres(id)
, date_added  VARCHAR (100) NOT NULL
, tags        VARCHAR (100)
);

CREATE TABLE wish_list
( id          SERIAL        NOT NULL PRIMARY KEY
, user_id     INT           NOT NULL REFERENCES users(id)
, game_id     INT           NOT NULL REFERENCES game_list(id)
);

CREATE TABLE friends_list
( id          SERIAL        NOT NULL PRIMARY KEY
, user_id     INT           NOT NULL REFERENCES users(id)
, friend_id   INT           NOT NULL REFERENCES users(id)
)
