SELECT id_jeu, id_utilisateur, scrore, difficulty, `date/heure_partie` FROM Scrores
INNER JOIN utilisateur ON Scrores.id_utilisateur = utilisateur.id
INNER JOIN jeu ON Scrores.id_jeu = jeu.id
ORDER BY id_jeu ASC, difficulty ASC, scrore ASC