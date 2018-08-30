/*------------------------------------------------------------------------------
Nom : BJ
Contenu : Facture avec réduction de 10% sur le prix HTVA
Date : 22/10/2015
V1
------------------------------------------------------------------------------*/

DEBUT
    VAR (number) prix
    VAR (number) quantité
    VAR (number) tva
    VAR (number) prixhorstva
    VAR (number) reduction
    VAR (number) prixcomplet
    VAR (number) montanttva
    VAR (number) prixfinal
    
    AFFICHER "Entrez le prix unitaire"
    LIRE et STOCKER prix
    AFFICHER "Entrez la quantité"
    LIRE et STOCKER quantité
    AFFICHER "Entrez la TVA en %"
    LIRE et STOCKER tva
   
    prixcomplet=prix*quantité
    montanttva=prixcomplet*tva/100
    prixhorstva=prixcomplet-montanttva
    reduction=prixhorstva*10/100
    prixfinal=prixcomplet-reduction
    
    AFFICHER "Le prix HTVA est de" prixhorstva
    AFFICHER "Le montant de la tva est de" montanttva
    AFFICHER "Le montant de votre achat TVA et réduction comprise est de" prixfinal    
    
FIN    