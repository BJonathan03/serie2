/*---------------------------------------------------------------------
Nom : BJ
Contenu : L'utilisateur fournit deux nombres. Le pgm fait la somme et la donne à l'utilisateur
Date : 15/10/2015
V1
-----------------------------------------------------------------------*/

DEBUT

    VAR (int) nbre1
    VAR (int) nbre2
    VAR (int) resultat
    
    AFFICHE "Entrez le nombre 1"
    LIRE et STOCKER dans nbre1
    AFFICHE "Entrez le deuxième nombre"
    LIRE et STOCKER dans nbre2
    
    resultat = nbre1+nbre2
    
    AFFICHER resultat

FIN
