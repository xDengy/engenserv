<?php

declare(strict_types=1);

use App\Orchid\Screens\ElementEditInSectScreen;
use App\Orchid\Screens\ElementEditScreen;
use App\Orchid\Screens\Examples\ExampleActionsScreen;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleGridScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\FoldersEditInSectScreen;
use App\Orchid\Screens\FoldersEditScreen;
use App\Orchid\Screens\FoldersListScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

use App\Orchid\Screens\MainListScreen;
use App\Orchid\Screens\MainEditScreen;
use App\Orchid\Screens\SettingListScreen;
use App\Orchid\Screens\SettingEditScreen;
use App\Orchid\Screens\MenuListScreen;
use App\Orchid\Screens\MenuEditScreen;
use App\Orchid\Screens\NewsListScreen;
use App\Orchid\Screens\NewsEditScreen;
use App\Orchid\Screens\AboutListScreen;
use App\Orchid\Screens\AboutEditScreen;
use App\Orchid\Screens\PartnerListScreen;
use App\Orchid\Screens\PartnerEditScreen;
use App\Orchid\Screens\ContactListScreen;
use App\Orchid\Screens\ContactEditScreen;
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example Screen'));

Route::screen('/examples/form/fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('/examples/form/advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');
Route::screen('/examples/form/editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('/examples/form/actions', ExampleActionsScreen::class)->name('platform.example.actions');

Route::screen('/examples/layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('/examples/grid', ExampleGridScreen::class)->name('platform.example.grid');
Route::screen('/examples/charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('/examples/cards', ExampleCardsScreen::class)->name('platform.example.cards');

//Route::screen('idea', Idea::class, 'platform.screens.idea');


Route::screen('folders', FoldersListScreen::class)->name('platform.folder.list');
Route::screen('folderCreate', FoldersEditScreen::class)->name('platform.folder.create');
Route::screen('folderCreate/{id}', FoldersEditInSectScreen::class)->name('platform.folder.createInSection');
Route::screen('folders/{id}', FoldersListScreen::class)->name('platform.folder.listFolder');
Route::screen('foldersEdit/{id}', FoldersEditScreen::class)->name('platform.folder.edit');

Route::screen('elemCreate', ElementEditScreen::class)->name('platform.elems.create');
Route::screen('elemCreate/{id}', ElementEditInSectScreen::class)->name('platform.elems.createInSection');
Route::screen('elems/{id}', ElementEditScreen::class)->name('platform.elems.edit');

Route::screen('mainBanner', MainListScreen::class)->name('platform.mainBanner.list');
Route::screen('mainBanner/{id}', MainEditScreen::class)->name('platform.mainBanner.editItem');
Route::screen('mainBannerEdit', MainEditScreen::class)->name('platform.mainBanner.edit');

Route::screen('setting', SettingListScreen::class)->name('platform.setting.list');
Route::screen('setting/{id}', SettingEditScreen::class)->name('platform.setting.editItem');
Route::screen('settingEdit', SettingEditScreen::class)->name('platform.setting.edit');

Route::screen('menu', MenuListScreen::class)->name('platform.menu.list');
Route::screen('menu/{id}', MenuEditScreen::class)->name('platform.menu.editItem');
Route::screen('menuEdit', MenuEditScreen::class)->name('platform.menu.edit');

Route::screen('news', NewsListScreen::class)->name('platform.news.list');
Route::screen('news/{id}', NewsEditScreen::class)->name('platform.news.editItem');
Route::screen('newsEdit', NewsEditScreen::class)->name('platform.news.edit');

Route::screen('about', AboutListScreen::class)->name('platform.about.list');
Route::screen('about/{id}', AboutEditScreen::class)->name('platform.about.editItem');
Route::screen('aboutEdit', AboutEditScreen::class)->name('platform.about.edit');

Route::screen('partner', PartnerListScreen::class)->name('platform.partner.list');
Route::screen('partner/{id}', PartnerEditScreen::class)->name('platform.partner.editItem');
Route::screen('partnerEdit', PartnerEditScreen::class)->name('platform.partner.edit');

Route::screen('contact', ContactListScreen::class)->name('platform.contact.list');
Route::screen('contact/{id}', ContactEditScreen::class)->name('platform.contact.editItem');
Route::screen('contactEdit', ContactEditScreen::class)->name('platform.contact.edit');
