SELECT id_jeu, id_utilisateur, scrore, difficulty, `date/heure_partie` FROM Scrores
INNER JOIN utilisateur ON Scrores.id_utilisateur = utilisateur.id
INNER JOIN jeu ON Scrores.id_jeu = jeu.id
WHERE id_jeu = "The Power Of Memory" AND difficulty ="facile" AND id_utilisateur="3"
ORDER BY id_jeu ASC, difficulty ASC, scrore ASC