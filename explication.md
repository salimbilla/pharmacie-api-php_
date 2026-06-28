Clone classique, sans --recurse-submodules

git clone https://github.com/salimbilla/pharmacie-api-php.git pharmacie-test-classique

cd pharmacie-test-classique

ls lib/validation/

le dossier est vide.

 Solution pour réparer 

git submodule update --init

ls lib/validation/

 le dossier se remplit.

Explication

Quand on ajoute un sous-module, le dépôt principal ne stocke pas une copie de ses fichiers : il garde juste deux informations, l'adresse du dépôt (dans .gitmodules) et le numéro exact du commit à utiliser. C'est pour ça qu'un git clone normal crée bien le dossier lib/validation/, mais le laisse vide : Git récupère l'historique du projet principal, pas celui des sous-modules. Pour que les fichiers apparaissent, il faut soit lancer git submodule update --init après le clone (Git va alors chercher l'adresse et le commit notés, et télécharge le sous-module), soit cloner directement avec --recurse-submodules, qui fait cette étape automatiquement.