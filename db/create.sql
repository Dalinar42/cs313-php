CREATE TABLE users
( id          SERIAL        NOT NULL PRIMARY KEY
, username    VARCHAR (50)  NOT NULL
, firstname   VARCHAR (50)
, lastname    VARCHAR (50)
, PASSWORD    VARCHAR (50)
, phone       VARCHAR (100)
, email       VARCHAR (100) NOT NULL
, infohidden  VARCHAR (1)   NOT NULL
);

CREATE TABLE game_list
( id          SERIAL        NOT NULL PRIMARY KEY
, userid      INT           NOT NULL REFERENCES users(id)
, gamename    VARCHAR (100) NOT NULL
, dateadded   VARCHAR (100) NOT NULL
, tags        VARCHAR (100)
);

CREATE TABLE wish_list
( id          SERIAL        NOT NULL PRIMARY KEY
, userid      INT           NOT NULL REFERENCES users(id)
, gameid      INT           NOT NULL REFERENCES game_list(id)
);

-- Stretch
-- CREATE TABLE friends_list
-- ( id          SERIAL        NOT NULL PRIMARY KEY
-- , userid      INT           NOT NULL REFERENCES users(id)
-- , friendid    INT           NOT NULL REFERENCES users(id)
-- );
