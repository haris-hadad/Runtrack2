USE jour09;
SELECT prenom, nom, naissance, sexe, email
FROM etudiants 
WHERE LOWER(prenom) LIKE 'T%';
