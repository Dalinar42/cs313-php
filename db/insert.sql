-- -- ----------------------------------------------- --
-- -- ----------- POPULATE THE USER TABLE ----------- --
-- -- ----------------------------------------------- --
-- INSERT INTO users ( username, email, infohidden )
--    VALUES ( 'dalinar', 'email@gmail.com', false );
-- INSERT INTO users ( username, email, infohidden )
--    VALUES ( 'navani', 'email@gmail.com', false );
-- INSERT INTO users ( username, email, infohidden )
--    VALUES ( 'jasnah', 'email@gmail.com', false );
-- INSERT INTO users ( username, email, infohidden )
--    VALUES ( 'gavilar', 'email@gmail.com', false );
-- INSERT INTO users ( username, email, infohidden )
--    VALUES ( 'gavinor', 'email@gmail.com', false );

-- ----------------------------------------------- --
-- ---------- POPULATE THE GENRE TABLE ----------- --
-- ----------------------------------------------- --
INSERT INTO genres ( id, genrename )
   VALUES ( 1, 'RTS: Real Time Strategy' );
INSERT INTO genres ( id, genrename )
   VALUES ( 2, 'FPS: First Person Shooter' );
INSERT INTO genres ( id, genrename )
   VALUES ( 3, 'MOBA: Multiplayer Online Battle Arena' );
INSERT INTO genres ( id, genrename )
   VALUES ( 4, 'RPG: Role Playing Game' );
INSERT INTO genres ( id, genrename )
   VALUES ( 5, 'MMO: Massively Multiplayer Online' );
INSERT INTO genres ( id, genrename )
   VALUES ( 6, 'MMORPG: Massively Multiplayer Online Role Playing Games' );
INSERT INTO genres ( id, genrename )
   VALUES ( 7, 'Other' );

-- -- ----------------------------------------------- --
-- -- -------- POPULATE THE game_list TABLE --------- --
-- -- ----------------------------------------------- --
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'StarCraft', 1, 1, '2/8/2020' );
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'StarCraft 2', 1, 1, '2/8/2020' );
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'Age of Empires II', 1, 1, '2/8/2020' );
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'Age of Empires III', 1, 1, '2/8/2020' );
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( '0AD', 1, 1, '2/8/2020' );
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'Supreme Commander', 1, 1, '2/8/2020' );

-- -- ----------------------------------------------- --
-- -- -------- POPULATE THE game_list TABLE --------- --
-- -- ----------------------------------------------- --
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'Halo', 2, 2, '2/8/2020' );
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'Halo 2', 2, 2, '2/8/2020' );
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'Halo 3', 2, 2, '2/8/2020' );
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'Halo 4', 2, 2, '2/8/2020' );
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'Halo 5: Guardians', 2, 2, '2/8/2020' );
-- INSERT INTO game_list ( gamename, genreid, userid, dateadded)
--    VALUES ( 'Halo Infinite', 2, 2, '2/8/2020' );
