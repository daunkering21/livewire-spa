<?php

use App\Livewire\Dashboard\Home;

use App\Livewire\Dashboard\Inbox;

use App\Livewire\Dashboard\Promotion;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Media\News;
use App\Livewire\Settings\Preferences;
use App\Livewire\Dashboard\Media\Event;
use App\Livewire\Dashboard\Media\Guide;
use App\Livewire\Settings\TableWebsite;
use App\Livewire\Component\List\CompBox;
use App\Livewire\Dashboard\Media\Stream;
use App\Livewire\Component\List\CompCard;
use App\Livewire\Component\List\CompForm;
use App\Livewire\Dashboard\Media\Gallery;
use App\Livewire\Component\List\CompModal;
use App\Livewire\Component\List\CompOther;
use App\Livewire\Component\List\CompTable;
use App\Http\Middleware\VerifySessionToken;
use App\Livewire\Component\List\CompButton;
use App\Livewire\Settings\UserManagement\Roles;
use App\Livewire\Settings\UserManagement\Users;
use App\Livewire\Settings\UserManagement\Permissions;

$m = [
  'vs' => VerifySessionToken::class,
];

Route::middleware(['auth', $m['vs']])->group(function() {

  /** Route Dashboard */
  Route::prefix('_dashboard')->group(function () {
    Route::get('/home', Home::class)->name('dashboard');
    Route::get('/inbox', Inbox::class)->name('inbox');
    Route::get('/promotion', Promotion::class)->name('promotion');
    Route::get('/media-news', News::class)->name('media-news');
    Route::get('/media-event', Event::class)->name('media-event');
    Route::get('/media-stream', Stream::class)->name('media-stream');
    Route::get('/media-guide', Guide::class)->name('media-guide');
    Route::get('/media-gallery', Gallery::class)->name('media-gallery');
  });

  /** Route Settings */
  Route::prefix('_settings')->group(function () {
    Route::get('/table-website', TableWebsite::class)->name('table-website');
    Route::get('/preferences', Preferences::class)->name('preferences');
    Route::get('/user-management-users', Users::class)->name('user-management-users');
    Route::get('/user-management-roles', Roles::class)->name('user-management-roles');
    Route::get('/user-management-permissions', Permissions::class)->name('user-management-permissions');
  });

  Route::prefix('_component')->group(function() {
    Route::get('/component-box', CompBox::class)->name('component-box');
    Route::get('/component-table', CompTable::class)->name('component-table');
    Route::get('/component-form', CompForm::class)->name('component-form');
    Route::get('/component-modal', CompModal::class)->name('component-modal');
    Route::get('/component-button', CompButton::class)->name('component-button');
    Route::get('/component-card', CompCard::class)->name('component-card');
    Route::get('/component-other', CompOther::class)->name('component-other');
  });
});
