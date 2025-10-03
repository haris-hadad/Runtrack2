USE jour09;

SELECT prenom, nom, naissance, sexe 
FROM etudiants 
WHERE sexe LIKE 'f%';
