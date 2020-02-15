\echo 'Query based on the user'
SELECT DISTINCT g.gamename, gn.genrename, g.dateadded FROM game_list g
JOIN users u ON u.id = g.userid
JOIN genres gn ON gn.id = g.genreid
WHERE u.id = 1
ORDER BY g.gamename;

-- \echo 'Test deleting Starcraft'
-- DELETE FROM game_list
-- WHERE id = 1;

\echo 'Show all games for one user'
SELECT * FROM game_list
WHERE userid = 2;
