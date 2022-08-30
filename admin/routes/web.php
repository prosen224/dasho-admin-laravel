<?php
use App\Http\Controllers\Auth\User\AuthController as UserAuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\BankhistoryController;
use App\Http\Controllers\WhypathshalaController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\GlobalsController;
use App\Http\Controllers\BigwigController;
use App\Http\Controllers\RichtextController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\Navigation2Controller;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\PowerController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckCornJobController;

// Language Route start
Route::group(['middleware' => ['verify.web','local'] ], function () {
    Route::get('locale/{locale}',[LocalController::class ,'switchlang'])->name('locale.set');
    Route::post('set-lang',[LocalController::class,"langDataUpdate"])->name("set-language");
    Route::get('lang-page',function(){
        return view('language');
    });
});
// Language Route end


// User Route start
    Route::group(['middleware' => ['verify.web'] ], function () {
        Route::get("/",[UserAuthController::class,"index"])->name("home");
        Route::post("change_password",[UserAuthController::class,"changePassword"])->name("change-password");



        // Member Route Start
        Route::get('/members/index', [MemberController::class,"index"])->name('members.index');
        Route::get('/members/edit/{user_id}', [MemberController::class,"edit"])->name('member.edit');
        Route::post('/members/update/{user_id}', [MemberController::class,"update"])->name('member.update');

        // Reports
        Route::get('reports/date_wise_member_join', [ReportController::class,"index"])->name('date.wise.member.join');

        // Roles & Permissions
        Route::get('users/index', [RolesController::class,"index"])->name('users.index');
        Route::get('users/index', [RolesController::class,"index"])->name('users.index');
        Route::get('users/create', [RolesController::class,"create"])->name('users.create');
        Route::post('users/store', [RolesController::class,"store"])->name('users.store');
        Route::get('users/edit/{id}', [RolesController::class,"edit"])->name('users.edit');
        Route::post('users/update/{id}', [RolesController::class,"update"])->name('users.update');

        // Bank History
        Route::get('points-bank', [BankhistoryController::class,"points"])->name('points.bank');
        Route::get('coins-bank', [BankhistoryController::class,"coins"])->name('coins.bank');
        Route::get('virtual-bank', [BankhistoryController::class,"virtual"])->name('virtual.bank');



        Route::get('voucher/create', [VoucherController::class,"create"])->name('voucher.create');
        Route::get('voucher/store', [VoucherController::class,"store"])->name('voucher.store');






        // Home page

        // Slider

        Route::get('slider/create', [BannerController::class,"create"])->name('slider.create');
        Route::post('slider/store', [BannerController::class,"store"])->name('slider.store');
        Route::get('slider/index', [BannerController::class,"index"])->name('slider.index');
        Route::get('slider/edit/{id}', [BannerController::class,"edit"])->name('slider.edit');
        Route::post('slider/update/{id}', [BannerController::class,"update"])->name('slider.update');
        Route::get('slider/delete/{id}', [BannerController::class,"delete"])->name('slider.delete');

        // About us

        Route::get('about-us/', [AboutusController::class,"aboutItem"])->name('about');
        Route::post('about-us/create', [AboutusController::class,"aboutCreate"])->name('about.create');
        Route::post('about-us/update/{id}', [AboutusController::class,"aboutUpdate"])->name('about.update');



        Route::get('video/', [VideoController::class,"videoItem"])->name('video');
        Route::post('video/create', [VideoController::class,"videoCreate"])->name('video.create');
        Route::post('video/update/{id}', [VideoController::class,"videoUpdate"])->name('video.update');

        // Testimonial

        Route::get('testimonial/create', [TestimonialController::class,"create"])->name('testimonial.create');
        Route::post('testimonial/store', [TestimonialController::class,"store"])->name('testimonial.store');
        Route::get('testimonial/index', [TestimonialController::class,"index"])->name('testimonial.index');
        Route::get('testimonial/edit/{id}', [TestimonialController::class,"edit"])->name('testimonial.edit');
        Route::post('testimonial/update/{id}', [TestimonialController::class,"update"])->name('testimonial.update');
        Route::get('testimonial/delete/{id}', [TestimonialController::class,"delete"])->name('testimonial.delete');

        // Mission

        Route::get('mission/', [MissionController::class,"missionItem"])->name('mission');
        Route::post('mission/create', [MissionController::class,"missionCreate"])->name('mission.create');
        Route::post('mission/update/{id}', [MissionController::class,"missionUpdate"])->name('mission.update');


        // Global

        Route::get('global/', [GlobalsController::class,"globalsItem"])->name('globals');
        Route::post('global/create', [GlobalsController::class,"globalsCreate"])->name('globals.create');
        Route::post('global/update/{id}', [GlobalsController::class,"globalsUpdate"])->name('globals.update');


        // Bigwig

        Route::get('bigwig-comment/create', [BigwigController::class,"create"])->name('bigwig.create');
        Route::post('bigwig-comment/store', [BigwigController::class,"store"])->name('bigwig.store');
        Route::get('bigwig-comment/index', [BigwigController::class,"index"])->name('bigwig.index');
        Route::get('bigwig-comment/edit/{id}', [BigwigController::class,"edit"])->name('bigwig.edit');
        Route::post('bigwig-comment/update/{id}', [BigwigController::class,"update"])->name('bigwig.update');
        Route::get('bigwig-comment/delete/{id}', [BigwigController::class,"delete"])->name('bigwig.delete');


        // 
        Route::get('opportunity/', [OpportunityController::class,"opportunityItem"])->name('opportunity');
        Route::post('opportunity/create', [OpportunityController::class,"opportunityCreate"])->name('opportunity.create');
        Route::post('opportunity/update/{id}', [OpportunityController::class,"opportunityUpdate"])->name('opportunity.update');

        Route::get('ranks/', [RankController::class,"ranksItem"])->name('ranks');
        Route::post('ranks/create', [RankController::class,"ranksCreate"])->name('ranks.create');
        Route::post('ranks/update/{id}', [RankController::class,"ranksUpdate"])->name('ranks.update');

        
        Route::get('rewards/', [RewardController::class,"rewardsItem"])->name('rewards');
        Route::post('rewards/create', [RewardController::class,"rewardsCreate"])->name('rewards.create');
        Route::post('rewards/update/{id}', [RewardController::class,"rewardsUpdate"])->name('rewards.update');


        Route::get('why-pathshala/', [WhypathshalaController::class,"whyPathshalaItem"])->name('why.pathshala');
        Route::post('why-pathshala/create', [WhypathshalaController::class,"whyPathshalaCreate"])->name('why.pathshala.create');
        Route::post('why-pathshala/update/{id}', [WhypathshalaController::class,"whyPathshalaUpdate"])->name('why.pathshala.update');

        Route::get('richtext/', [RichtextController::class,"richtextItem"])->name('richtext');
        Route::post('richtext/create', [RichtextController::class,"richtextCreate"])->name('richtext.create');
        Route::post('richtext/update/{id}', [RichtextController::class,"richtextUpdate"])->name('richtext.update');


        Route::get('power/', [PowerController::class,"powerItem"])->name('power');
        Route::post('power/create', [PowerController::class,"powerCreate"])->name('power.create');
        Route::post('power/update/{id}', [PowerController::class,"powerUpdate"])->name('power.update');



        Route::get('pages/create', [PageController::class,"create"])->name('pages.create');
        Route::post('pages/store', [PageController::class,"store"])->name('pages.store');
        Route::get('pages/index', [PageController::class,"index"])->name('pages.index');
        Route::get('pages/edit/{id}', [PageController::class,"edit"])->name('pages.edit');
        Route::post('pages/update/{id}', [PageController::class,"update"])->name('pages.update');
        Route::get('pages/delete/{id}', [PageController::class,"delete"])->name('pages.delete');


        Route::get('main-menu/create', [NavigationController::class,"create"])->name('navigation.create');
        Route::post('main-menu/store', [NavigationController::class,"store"])->name('navigation.store');
        Route::get('main-menu/index', [NavigationController::class,"index"])->name('navigation.index');
        Route::get('main-menu/edit/{id}', [NavigationController::class,"edit"])->name('navigation.edit');
        Route::post('main-menu/update/{id}', [NavigationController::class,"update"])->name('navigation.update');
        Route::get('main-menu/delete/{id}', [NavigationController::class,"delete"])->name('navigation.delete');


        Route::get('footer-menu/create', [Navigation2Controller::class,"create"])->name('navigation2.create');
        Route::post('footer-menu/store', [Navigation2Controller::class,"store"])->name('navigation2.store');
        Route::get('footer-menu/index', [Navigation2Controller::class,"index"])->name('navigation2.index');
        Route::get('footer-menu/edit/{id}', [Navigation2Controller::class,"edit"])->name('navigation2.edit');
        Route::post('footer-menu/update/{id}', [Navigation2Controller::class,"update"])->name('navigation2.update');
        Route::get('footer-menu/delete/{id}', [Navigation2Controller::class,"delete"])->name('navigation2.delete');

        // Site settings
        
        Route::get('settings/general', [SettingsController::class,"generalItem"])->name('settings.general');
        Route::post('settings/general/create', [SettingsController::class,"generalCreate"])->name('settings.general.create');
        Route::post('settings/general/update/{id}', [SettingsController::class,"generalUpdate"])->name('settings.general.update');

    });

Route::group(['prefix' => '/'], function () {

    Route::get("show-mail-template",function(){
        return view('mail');
    });
    Route::group(['middleware'=>'if.login'],function(){
        Route::get('login', [UserAuthController::class,'login'])->name('login');
        Route::post('login', [UserAuthController::class,'authenticate']);
        // Route::get('register',[UserAuthController::class, 'register'])->name('registration');
        // Route::post('register',[UserAuthController::class, 'store'])->name('registration');
    });
    Route::get('logout', [UserAuthController::class,'logout'])->name("logout");

    // Route::get('verify-email',function(){
    //     return view("Frontend.user.email-verify");
    // });
    Route::get('verify-email',[UserAuthController::class,'verifyEmail']);
    Route::get('sent-email',[UserAuthController::class,'sendMail']);

    Route::get('forgot-password', function () {
        return view("Frontend.User.forgot-password");
    })->name("forgot-password");
    Route::post('forgot-password',[UserAuthController::class,'forgotPassword']);

    Route::get('set-password', function () {
        return view("Frontend.User.set-password");
    })->name("set-password");

    Route::post("set-password/{id}",[UserAuthController::class,"setPassword"]);

});
// User Route end
Route::get('check-corn-job', [CheckCornJobController::class,"index"]);


Route::get('/questions/{type}/{lastQuestionStage}', [QuestionsController::class, 'list']);
Route::get('/questions/{type}/{lastQuestionStage}/{language}', [QuestionsController::class, 'listLan']);

Route::get('/individualpoints/{email}', [PointsController::class, 'individualPoints']);
Route::get('/individualpointsUpdate/{email}/{points}/{type}', [PointsController::class, 'individualpointsUpdate']);
Route::get('/individualpointsUpdateSponsors/{email}/{points}', [PointsController::class, 'individualpointsUpdateSponsors']);
Route::get('/Auth/login/{email}/{password}', [AuthController::class, 'login']);



