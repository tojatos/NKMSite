#for development
cd "$(dirname "$0")" #script can be called from anywhere to work
php -S localhost:8000 &
cd public/css
sass --watch main.sass:main.css &
