USE jour09;
SELECT salles.nom AS salle,salles.capacite,etage.nom AS 'Biggest Room' FROM `salles` 
JOIN etage ON salles.id_etage=etage.id
ORDER BY capacite DESC
LIMIT 1