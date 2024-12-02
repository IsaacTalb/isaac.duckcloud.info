### Client-1 Portfolio managed by IsaacTalb

### cmd line for set up and installation (PHP-8.3.14)

#### Install Laravel
composer create-project laravel/laravel client-1.portfolio

#### navigate to project
cd client-1.portfolio

#### Installl Jetstream with Livewire for authentication and admin UI
composer require laravel/jetstream php artisan jetstream:install livewire

#### Install Node.js dependencies for frontend assets as Jetstream use Tailwind CSS for cool UI
npm install && npm run dev

#### configure the environment file
cp .env.example .env

php artisan key:generate

#### create database on localhost/phpmyadmin and update .env with actual DB name, user, password
php artisan migrate

#### start the development server
php artisan serve

*****************************************

### create Models and Migration for users,posts,pages, & feedback

php artisan make:model Post -m
php artisan make:model Page -m
php artisan make:model Feedback -m




<!-- Other command need to update -->

###### Bare with us for some additional note for this project

***********************************

Install TinyMCE
Include TinyMCE via CDN or npm/yarn in your Laravel project:

Using CDN: Add this to your create.blade.php and edit.blade.php files in the <head> section:
html

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


npm install tinymce

Then, import it in your JavaScript setup.




Check Permissions: Ensure the images in the storage folder have the correct permissions. You might need to set the proper permissions for the storage and public/storage directories:

sudo chmod -R 775 storage
sudo chmod -R 775 public/storage

npm install swiper
Import Swiper in Your JavaScript

// Import Swiper JS and CSS
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

### Public Key

It is added to the ~/.ssh/authorized_keys file on the server.

ssh-rsa AAAAB3Nza...rest-of-the-key... your_email@example.com

### Private Key

The private key is the part of the key pair that you must keep secret.
It is stored on your local machine (or wherever you're connecting from: such as Git WorkFlow).
It is stored in your ~/.ssh directory, usually as id_rsa (or a filename you chose).

-----BEGIN OPENSSH PRIVATE KEY-----
b3BlbnNzaC1rZXkta2V5IHZlcnNpb24gMQAAA...
...rest-of-the-key...
-----END OPENSSH PRIVATE KEY-----

#### To view the public key:

cat ~/.ssh/id_rsa.pub

#### To view the private key:

cat ~/.ssh/id_rsa