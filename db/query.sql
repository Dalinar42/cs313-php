\echo 'Query based on the user'
SELECT DISTINCT g.id, g.gamename FROM game_list g
JOIN users u ON u.id = g.userid
WHERE u.id = 1;
