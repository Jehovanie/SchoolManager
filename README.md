# SchoolManager

DÉSCRIPTION 

Voir les actualites dans un école notamment des programmes a venir, activite a faire , et aussi des journale qu'il faut faire.
On y trouve aussi une page qui représente le profile de chaque utilisateur dont on differentie selon chaque roles ( proviseur , proffeseur , etudiant).

STRUCTURE DE BASE DE DONNÉES 

DATABASE : SchoolManager 

TABLE    : - user     : - id
                        - firstname
                        - lastname
                        - matricule
                        - role
                        - email 
                        - password

           - ThisWeek : - id
                        - date
                        - content

           - LastWeek : - id
                        - date
                        - content
                        
           - NextWeek : - id 
                        - date
                        - content

            