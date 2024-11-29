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

#### Option A: Redirect to Login
Create a middleware to block access to the /register route.

php artisan make:middleware BlockRegisterMiddleware


1. Install a Rich Text or Markdown Editor
You can integrate a rich text or markdown editor like Trix, TinyMCE, Quill, or CKEditor. Below, I'll use TinyMCE as an example for its rich features and flexibility.

Install TinyMCE
Include TinyMCE via CDN or npm/yarn in your Laravel project:

Using CDN: Add this to your create.blade.php and edit.blade.php files in the <head> section:
html

Copy code
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

Copy code
npm install tinymce

Then, import it in your JavaScript setup.
Initialize TinyMCE: Add this in your Blade views (create.blade.php and edit.blade.php):


Copy code
<script>
    tinymce.init({
        selector: 'textarea.rich-text-editor',
        plugins: 'image media link code table lists',
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image media | code',
        images_upload_url: '{{ route('admin.blog.uploadImage') }}',
        automatic_uploads: true,
    });
</script>