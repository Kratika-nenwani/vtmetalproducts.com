<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index');
// });
Route::get("/",[HomeController::class,"index_main"])->name('index_main');
Route::get("/index",[HomeController::class,"index"])->name('index');
Route::get("/about",[HomeController::class,"about"])->name('about');
Route::get("/blog",[HomeController::class,"blog"])->name('blog');
Route::get("/blog-details",[HomeController::class,"blog_details"])->name('blog-details');
Route::get("/contact",[HomeController::class,"contact"])->name('contact');
Route::get("/services",[HomeController::class,"services"])->name('services');
Route::get("/service-details",[HomeController::class,"service_details"])->name('service-details');
Route::get("/kitchen",[HomeController::class,"kitchen"])->name('kitchen');
Route::get("/automobile",[HomeController::class,"automobile"])->name('automobile');
Route::get("/pharma",[HomeController::class,"pharma"])->name('pharma');
Route::get("/panels",[HomeController::class,"panels"])->name('panels');
Route::get("/lockers",[HomeController::class,"lockers"])->name('lockers');
Route::get("/podium",[HomeController::class,"podium"])->name('podium');
Route::get("/privacy_policy",[HomeController::class,"privacy_policy"])->name('privacy_policy');
Route::get("/term_and_condition",[HomeController::class,"term_and_condition"])->name('term_and_condition');
Route::get("/catagory",[HomeController::class,"catagory"])->name('catagory');
Route::get("/technology",[HomeController::class,"technology"])->name('technology');
Route::get("/product_detail/{id}",[HomeController::class,"product_detail"])->name('product_detail');
Route::get("/gallery",[HomeController::class,"gallery"])->name('gallery');
Route::get("/gallery_images/{id}",[HomeController::class,"gallery_images"])->name('gallery_images');
Route::get("/gallery_videos/{id}",[HomeController::class,"gallery_videos"])->name('gallery_videos');
Route::get("/brochure",[HomeController::class,"brochure"])->name('brochure');
Route::get("/ms_panel",[HomeController::class,"ms_panel"])->name('ms_panel');
Route::get("/ss_panel",[HomeController::class,"ss_panel"])->name('ss_panel');
Route::get("/modular_panel",[HomeController::class,"modular_panel"])->name('modular_panel');

Auth::routes();

Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/manage-categories', [AdminController::class, 'manage_categories'])->name('manage-categories');
Route::post('/save-categories', [AdminController::class, 'save_categories'])->name('save-categories');
Route::post('/update-categories/{id}', [AdminController::class, 'update_categories'])->name('update-categories');
Route::get('/delete-categories', [AdminController::class, 'delete_categories'])->name('delete-categories');

Route::get('/manage-panels', [AdminController::class, 'manage_panels'])->name('manage-panels');
Route::post('/save-panels', [AdminController::class, 'save_panels'])->name('save-panels');
Route::post('/update-panels/{id}', [AdminController::class, 'update_panels'])->name('update-panels');
Route::get('/delete-panels', [AdminController::class, 'delete_panels'])->name('delete-panels');

Route::get('/manage-query', [AdminController::class, 'manage_query'])->name('manage-query');
Route::post('/save-query', [AdminController::class, 'save_query'])->name('save-query');
Route::get('/delete-query', [AdminController::class, 'delete_query'])->name('delete-query');

Route::get('/manage-images', [AdminController::class, 'manage_images'])->name('manage-images');
Route::post('/save-images', [AdminController::class, 'save_images'])->name('save-images');
Route::post('/update-images/{id}', [AdminController::class, 'update_images'])->name('update-images');
Route::get('/delete-images', [AdminController::class, 'delete_images'])->name('delete-images');


Route::get('/manage-image/{id}', [AdminController::class, 'manage_image'])->name('manage-image');
Route::delete('delete-image/{id}/{image}', [AdminController::class, 'deleteImage'])->name('delete-image');
Route::post('add-images/{id}', [AdminController::class, 'addImage'])->name('add-images');



Route::get('/manage-videos', [AdminController::class, 'manage_videos'])->name('manage-videos');
Route::post('/save-videos', [AdminController::class, 'save_videos'])->name('save-videos');
Route::post('/update-videos/{id}', [AdminController::class, 'update_videos'])->name('update-videos');
Route::get('/delete-videos', [AdminController::class, 'delete_videos'])->name('delete-videos');

Route::get('/manage-subcategories', [AdminController::class, 'manage_subcategories'])->name('manage-subcategories');
Route::get('/manage-posts', [AdminController::class, 'manage_posts'])->name('manage-posts');