USE jour09;

SELECT prenom, nom, naissance, sexe 
FROM etudiants 
WHERE LOWER(sexe) LIKE 'f%';
