CREATE TABLE users
( id          SERIAL        NOT NULL PRIMARY KEY
, username    VARCHAR (50)  NOT NULL
, firstname   VARCHAR (50)
, lastname    VARCHAR (50)
, phone       VARCHAR (100)
, email       VARCHAR (100) NOT NULL
, infohidden  BOOLEAN       NOT NULL
-- , PASSWORD    VARCHAR (59)  NOT NULL
);

CREATE TABLE genres
( id          SERIAL        NOT NULL PRIMARY KEY
, genrename   VARCHAR (100) NOT NULL
);

CREATE TABLE game_list
( id          SERIAL        NOT NULL PRIMARY KEY
, userid      INT           NOT NULL REFERENCES users(id)
, gamename    VARCHAR (100) NOT NULL
, genreid     int           NOT NULL REFERENCES genres(id)
, dateadded   VARCHAR (100) NOT NULL
, tags        VARCHAR (100) -- stretch
);

CREATE TABLE wish_list
( id          SERIAL        NOT NULL PRIMARY KEY
, userid      INT           NOT NULL REFERENCES users(id)
, gameid      INT           NOT NULL REFERENCES game_list(id)
);

-- stretch
-- CREATE TABLE friends_list
-- ( id          SERIAL        NOT NULL PRIMARY KEY
-- , userid      INT           NOT NULL REFERENCES users(id)
-- , friendid    INT           NOT NULL REFERENCES users(id)
-- )
