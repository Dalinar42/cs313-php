-- ----------------------------------------------- --
-- ----------- POPULATE THE USER TABLE ----------- --
-- ----------------------------------------------- --
INSERT INTO users ( id, username, email, infohidden )
   VALUES ( 1, 'dalinar', 'email@gmail.com', 1 );
INSERT INTO users ( id, username, email, infohidden )
   VALUES ( 2, 'navani', 'email@gmail.com', 1 );
INSERT INTO users ( id, username, email, infohidden )
   VALUES ( 3, 'jasnah', 'email@gmail.com', 1 );
INSERT INTO users ( id, username, email, infohidden )
   VALUES ( 4, 'gavilar', 'email@gmail.com', 1 );
INSERT INTO users ( id, username, email, infohidden )
   VALUES ( 5, 'gavinor', 'email@gmail.com', 1 );

-- ----------------------------------------------- --
-- -------- POPULATE THE game_list TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 1, 'StarCraft', 1, '2/8/2020' );
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 2, 'StarCraft 2', 1, '2/8/2020' );
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 3, 'Age of Empires II', 1, '2/8/2020' );
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 4, 'Age of Empires III', 1, '2/8/2020' );
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 5, '0AD', 1, '2/8/2020' );
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 6, 'Supreme Commander', 1, '2/8/2020' );

-- ----------------------------------------------- --
-- -------- POPULATE THE game_list TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 7, 'Halo', 2, '2/8/2020' );
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 8, 'Halo 2', 2, '2/8/2020' );
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 9, 'Halo 3', 2, '2/8/2020' );
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 10, 'Halo 4', 2, '2/8/2020' );
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 11, 'Halo 5: Guardians', 2, '2/8/2020' );
INSERT INTO game_list ( id, gamename, userid, dateadded)
   VALUES ( 12, 'Halo Infinite', 2, '2/8/2020' );
