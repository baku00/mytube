copy .env.example .env
call composer install
php artisan key:generate

echo =======================================================================================================
echo Installation terminée, configurer le fichier d'environnement puis lancer exécuter le fichier reload.bat
echo =======================================================================================================
