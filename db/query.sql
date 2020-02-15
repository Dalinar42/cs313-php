\echo 'Query based on the user'
SELECT DISTINCT g.gamename, gn.genrename, g.dateadded FROM game_list g
JOIN users u ON u.id = g.userid
JOIN genres gn ON gn.id = g.genreid
WHERE u.id = 1
ORDER BY g.gamename;
