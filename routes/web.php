<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AlisonController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\SkillAssessmentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\User\UserAlisonController;
use App\Http\Controllers\User\UserPageController;
use App\Http\Controllers\User\UserPostController;
use App\Models\Quiz;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');

Route::get('/news-and-updates', [PageController::class, 'blog']);

Route::get('blog-post/{slug}', [PageController::class, 'blogdetails'])->name('blogdetails');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/register', [PageController::class, 'register']);

Route::get('/verify-email', [PageController::class, 'verifyemail'])->middleware('auth')->name('verify.email');

Route::post('/resend-activation-email', [AuthController::class, 'resendActivationEmail'])->middleware('throttle:5,1')->name('resend.activation.email');

Route::post('/sigin', [AuthController::class, 'signin'])->name('signin');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/savelogin', [AuthController::class, 'savelogin'])->name('savelogin');

Route::get('/forget-password', [PageController::class, 'resetpassword'])->name('forget.password.get');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('/forget-password-link', [ResetPasswordController::class, 'ForgetPasswordStore'])->name('forget.password.post');

Route::post('/reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/activate/{code}', [AuthController::class, 'activateAccount'])->name('activate.account');


Route::middleware(['auth'])->get('/pathway', [PageController::class, 'pathway'])->name('pathway');

Route::middleware(['auth'])->get('/choose-a-pathway', [PageController::class, 'choosepathway'])->name('choosepathway');

Route::middleware(['auth'])->get('/scholarship-form', [PageController::class, 'scholarship'])->name('scholarship');

Route::middleware(['auth'])->post('/scholarship-apply', [UserPostController::class, 'savescholarship'])->name('scholarship.apply');

Route::middleware(['auth'])->get('/skill-assessment', [UserPageController::class, 'skillassessment'])->name('learnerskillassessment');

Route::middleware(['auth'])->get('/start-skill-assessment', [UserPageController::class, 'assessment'])->name('learnerassessment');

Route::middleware(['auth'])->post('/assessment/submit', [UserPostController::class, 'submitAnswers'])->name('assessment.submit');

Route::middleware(['auth'])->get('/assessment/result', [UserPageController::class, 'showResult'])->name('assessment.result');



Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {

    Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('admindashboard');

    Route::get('/settings', [AdminPageController::class, 'setting'])->name('adminsettings');


    Route::get('/affiliate', [AdminPageController::class, 'affiliate'])->name('adminafiliate');


    Route::get('/category', [AdminPageController::class, 'category'])->name('admincategory');

    Route::post('save-course-category', [AdminPostController::class, 'savecoursecategory']);

    Route::post('update-course-category/{id}', [AdminPostController::class, 'updatecoursecategory'])->name('updatecoursecategory');

    Route::get('delete-course-category/{id}', [AdminPostController::class, 'deletecoursecategory'])->name('deletecoursecategory');


    Route::get('/courses', [AdminPageController::class, 'courses'])->name('admincourses');

    Route::get('/add-course', [AdminPageController::class, 'addcourse']);

    Route::post('/save-course', [AdminPostController::class, 'savecourse']);

    Route::get('edit-course/{slug}', [AdminPageController::class, 'editcourse'])->name('admineditcourse');

    Route::post('update-course/{slug}', [AdminPostController::class, 'updatecourse'])->name('updatecourse');

    Route::get('delete-course/{id}', [AdminPostController::class, 'deletecourse'])->name('admindeletecourse');

    Route::get('deactivate-course/{id}', [AdminPostController::class, 'deactivatecourse'])->name('admindeactivatecourse');

    Route::get('/approve-course/{id}', [AdminPostController::class, 'activatecourse'])->name('adminactivatecourse');

    Route::get('/alison/test-token', [AlisonController::class, 'testAccessToken']);

    Route::get('/acourses', [AlisonController::class, 'listSpecificCourses'])->name('alison.courses');

    Route::get('/acourse/{slug}', [AlisonController::class, 'viewCourse'])->name('alison.course.details');

    Route::post('/start-course/{courseSlug}', [AlisonController::class, 'startCourse'])->name('alison.start.course');



    Route::get('members', [AdminPageController::class, 'users']);

    Route::get('activate-user', [AuthController::class, 'activateuser'])->name('activateuser');

    Route::get('deactivate-user', [AuthController::class, 'deactivateuser'])->name('deactivateuser');


    Route::get('/resources', [AdminPageController::class, 'resources'])->name('adminresources');

    Route::get('/add-resources', [AdminPageController::class, 'addresources']);

    Route::post('/save-resources', [AdminPostController::class, 'saveresources']);

    Route::get('delete-resources/{id}', [AdminPostController::class, 'deleteresources'])->name('deleteresources');


    Route::get('reviews', [AdminPageController::class, 'reviews']);

    Route::get('delete-review/{id}', [AdminPostController::class, 'deletereview'])->name('deletereview');

    Route::get('/approve-review/{id}', [AdminPostController::class, 'approvereview'])->name('adminapprovereview');


    Route::get('orders', [AdminPageController::class, 'orders']);


    Route::get('/skill-assessment', [SkillAssessmentController::class, 'skillassessmentquestion'])->name('adminskillassessmentquestion');

    Route::get('/add-skill-assessment-question', [SkillAssessmentController::class, 'addskillassessmentquestion']);

    Route::post('/save-skill-assessment-question', [SkillAssessmentController::class, 'saveskillassessmentquestion']);

    Route::get('edit-skill-assessment-question/{id}', [SkillAssessmentController::class, 'editskillassessmentquestion'])->name('admineditskillassessmentquestion');

    Route::post('update-skill-assessment-question/{id}', [SkillAssessmentController::class, 'updateskillassessmentquestion'])->name('adminupdateskillassessmentquestion');

    Route::get('delete-skill-assessment-question/{id}', [SkillAssessmentController::class, 'deleteskillassessmentquestion'])->name('admindeleteskillassessmentquestion');

    Route::get('deactivate-skill-assessment-question/{id}', [SkillAssessmentController::class, 'deactivateskillassessmentquestion'])->name('admindeactivateskillassessmentquestion');

    Route::get('/approve-skill-assessment-question/{id}', [SkillAssessmentController::class, 'activateskillassessmentquestion'])->name('adminactivateskillassessmentquestion');


    Route::get('/skill-assessment-score', [SkillAssessmentController::class, 'assessmentscore'])->name('adminassessmentscore');



    Route::get('/quiz', [QuizController::class, 'quizquestion'])->name('adminquizquestion');

    Route::get('/add-quiz-question', [QUizController::class, 'addquizquestion']);

    Route::post('/save-quiz-question', [QuizController::class, 'savequizquestion']);

    Route::get('edit-quiz-question/{id}', [QuizController::class, 'editquizquestion'])->name('admineditquizquestion');

    Route::post('update-quiz-question/{id}', [QuizController::class, 'updatequizquestion'])->name('adminupdatequizquestion');

    Route::get('delete-quiz-question/{id}', [QuizController::class, 'deletequizquestion'])->name('admindeletequizquestion');

    Route::get('deactivate-quiz-question/{id}', [QuizController::class, 'deactivatequizquestion'])->name('admindeactivatequizquestion');

    Route::get('/approve-quiz-question/{id}', [QuizController::class, 'activatequizquestion'])->name('adminactivatequizquestion');


    Route::get('/quiz-score', [QuizController::class, 'quizscore'])->name('adminquizscore');


    Route::get('/blog', [AdminPageController::class, 'blog'])->name('blog');

    Route::get('/add-blog', [AdminPageController::class, 'addblog']);

    Route::post('save-blog', [BlogController::class, 'saveblog']);

    Route::get('blog/{slug}', [AdminPageController::class, 'blogdetails'])->name('blogview');

    Route::get('edit-blog/{slug}', [AdminPageController::class, 'editblog'])->name('editblog');

    Route::post('update-blog/{slug}', [BlogController::class, 'updateBlog'])->name('adminupdateblog');

    Route::get('delete-blog/{slug}', [BlogController::class, 'deleteblog'])->name('deleteblog');

    Route::get('/blog-category', [AdminPageController::class, 'blogcategory']);

    Route::post('/save-blog-category', [BlogController::class, 'saveblogcategory']);

    Route::post('update-category/{id}', [BlogController::class, 'updatecategory'])->name('updatecategory');

    Route::get('delete-category/{id}', [BlogController::class, 'deletecategory'])->name('deletecategory');


    Route::get('email-templates', [EmailTemplateController::class, 'index'])->name('admin.email_templates.index');

    Route::get('email-templates/{id}/edit', [EmailTemplateController::class, 'edit'])->name('admin.email_templates.edit');

    Route::post('email-templates/{id}', [EmailTemplateController::class, 'update'])->name('admin.email_templates.update');
});


Route::group(['middleware' => 'auth', 'prefix' => 'learner', 'before' => 'learner'], function () {

    Route::get('/dashboard', [UserPageController::class, 'dashboard'])->name('learnerdashboard');

    Route::get('/settings', [UserPageController::class, 'setting'])->name('learnersettings');

    Route::post('/update-profile', [AuthController::class, 'updateprofile'])->name('learnerupdateprofile');

    Route::post('/update-password', [AuthController::class, 'updatePassword'])->name('updatePassword');

    Route::get('/resources', [UserPageController::class, 'resources'])->name('learnerresources');


    Route::get('/categories', [UserPageController::class, 'categories'])->name('learnercategories');

    Route::get('/courses/{id}', [UserPageController::class, 'generalcourse'])->name('learnergeneralcourses');

    Route::get('/tech-courses', [UserPageController::class, 'techcourses'])->name('learnertechcourses');

    Route::get('/nursing-courses', [UserPageController::class, 'nursingcourses'])->name('learnernursingcourses');

    Route::get('course-details/{slug}', [UserPageController::class, 'coursedetails'])->name('user.course.details');

    Route::get('/scourses', [UserAlisonController::class, 'listCourses'])->name('user.list.courses');

    Route::get('/alison/test-token', [UserAlisonController::class, 'testAccessToken']);

    Route::get('/acourses', [UserAlisonController::class, 'listCourses'])->name('user.alison.courses');

    Route::get('/acourse/{slug}', [UserAlisonController::class, 'viewCourse'])->name('user.alison.course.details');

    Route::post('/start-course/{courseSlug}', [UserAlisonController::class, 'startCourse'])->name('user.alison.start.course');

    Route::get('/courses/search', [UserPageController::class, 'search'])->name('courses.search');


    Route::get('/support', [UserPageController::class, 'review'])->name('learnerreview');

    Route::post('/save-ticket', [UserPostController::class, 'saveticket'])->name('learnersaveticket');


    Route::get('/quiz', [UserPageController::class, 'quiz'])->name('learnerquiz');

    Route::get('/start-quiz', [UserPageController::class, 'startquiz'])->name('learnerstartquiz');

    Route::post('/quiz/submit', [UserPostController::class, 'submitquiz'])->name('quiz.submit');

    Route::get('/quizS/result', [UserPageController::class, 'showQuizResult'])->name('quiz.result');


    Route::get('/affiliate', [UserPageController::class, 'affiliate'])->name('learnerafiliate');
});
