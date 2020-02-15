\echo 'Query based on the user'
SELECT DISTINCT g.id, g.gamename, gn.genrename FROM game_list g
JOIN users u ON u.id = g.userid
JOIN genres gn ON gn.id = g.genreid
WHERE u.id = 1;
