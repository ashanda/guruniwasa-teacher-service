<?php

use App\Http\Controllers\ScanQRCodeController;
use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\ZoomMettingController;
use App\Http\Controllers\Web\StudentDetailsController;
use App\Http\Controllers\Web\AnalysisReportController;
use App\Http\Controllers\Web\MonthlyIncomeController;
use App\Http\Controllers\Web\StudentVideoController;
use App\Http\Controllers\Web\StudentApprovalController;


use App\Http\Controllers\Web\ClassController;
use App\Http\Controllers\Web\VideoController;
use App\Http\Controllers\Web\FeesController;
use App\Http\Controllers\Web\PaymentHistoryController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\TutesAndBookController;
use App\Http\Controllers\Web\TimeTableController;
use App\Http\Controllers\Web\ClassPaperController;

use App\Http\Controllers\Web\NoticeBoardController;
use App\Http\Controllers\Web\OnlineExamController;

use App\Http\Controllers\Web\NoteAndPaperController;

use App\Http\Controllers\Web\ItemShopController;


use App\Http\Controllers\Web\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// AuthController
Route::get('/', [AuthController::class, 'loginView'])->name('web.index');

Route::get('/login', [AuthController::class, 'loginView'])->name('web.login');
Route::post('/login', [AuthController::class, 'login'])->name('api.teachers.login');




Route::middleware(['check.authorization'])->group(function () {
Route::get('/home', [HomeController::class, 'index'])->name('web.home');
Route::post('/logout', [AuthController::class, 'logout'])->name('web.logout');

// ZoomMettingController


Route::get('/zoom-metting/view', [ZoomMettingController::class, 'zoomMettingView'])->name('web.zoom-metting');
Route::get('/zoom-metting/view-list', [ZoomMettingController::class, 'zoomMettingList'])->name('web.zoom-metting.list');
Route::get('/zoom-metting/special-class', [ZoomMettingController::class, 'zoomSpecialClass'])->name('web.zoom-metting.special-class');
Route::post('/live-lesson.update', [ZoomMettingController::class, 'updateLiveLesson'])->name('web.live-lesson.update');


Route::get('/class-analysing/report', [ZoomMettingController::class, 'analysingReport'])->name('web.analysing-report');
// Video Recordings
Route::get('/video/view', [VideoController::class, 'videoView'])->name('web.video.view');
Route::get('/video/subject/view-list', [VideoController::class, 'videoSubjectList'])->name('web.video.subject.list');


// NoteAndPaperController

Route::get('/note-paper-ansewer-list', [NoteAndPaperController::class, 'notePaperList'])->name('web.note-paper.list');
Route::get('/pending-list', [NoteAndPaperController::class, 'pendingList'])->name('web.pending.list');
Route::get('/note-view/{id}', [NoteAndPaperController::class, 'noteView'])->name('web.note.view');
Route::get('/note-upload', [NoteAndPaperController::class, 'noteUpload'])->name('web.note.upload');

Route::post('/note-paper-create', [NoteAndPaperController::class, 'notePaperCreate'])->name('web.note-paper.store');
Route::post('/note-paper-update', [NoteAndPaperController::class, 'notePaperUpdate'])->name('web.note-paper.update');
Route::get('/note-paper-destroy/{id}', [NoteAndPaperController::class, 'notePaperDestroy'])->name('web.note-paper.destroy');




// Class Tutes And Books
Route::get('/tutes-books', [TutesAndBookController::class, 'tutesBook'])->name('web.tutes.book');

Route::get('/tutes-view', [TutesAndBookController::class, 'tutesView'])->name('web.tutes.open');





// Class paper
Route::get('/class-paper', [ClassPaperController::class, 'classPaper'])->name('web.class.paper');

Route::get('/class-paper-open', [ClassPaperController::class, 'classPaperView'])->name('web.paper.open');



// Student Details
Route::get('/student-details', [StudentDetailsController::class, 'studentDetails'])->name('web.student.details');
Route::get('/student-details-view', [StudentDetailsController::class, 'studentDetailsView'])->name('web.student.details_view');
Route::get('/student-payment-view', [StudentDetailsController::class, 'studentPaymentView'])->name('web.student.payment_view');
Route::get('/student-inactive-accounts', [StudentDetailsController::class, 'inactiveAccount'])->name('web.student.inactive_account');

Route::get('/student-non-paid', [StudentDetailsController::class, 'nonPaid'])->name('web.student.non_paid');



// profile

Route::get('/my-profile', [ProfileController::class, 'myProfile'])->name('web.profile');

// TIME TABLES
Route::get('/time-table', [TimeTableController::class, 'timeTable'])->name('web.time.table');





// NoticeBoardController
Route::get('/notice-board', [NoticeBoardController::class, 'noticeBoard'])->name('web.notice.board');
Route::get('/birthday-list', [NoticeBoardController::class, 'birthdayList'])->name('web.notice.birthday_lis');





// VideoController

Route::get('/video/monthly/view', [VideoController::class, 'videoMonthlyView'])->name('web.video.monthly');
Route::get('/video/monthly/list', [VideoController::class, 'videoMonthlyListView'])->name('web.video.list.monthly');
Route::get('/video/monthly/set', [VideoController::class, 'videoMonthlySet'])->name('web.video.set.monthly');

Route::get('/video/subject/view', [VideoController::class, 'videoSubjectView'])->name('web.video.subject');
// Route::get('/video/subject/view', [VideoController::class, 'videoUpdate'])->name('web.videos.update');


// StudentVideoController
Route::get('/student-video', [StudentVideoController::class, 'studentVideo'])->name('web.student_video.view');

//teacher student video 
Route::post('/video-update', [VideoController::class, 'videoUpdate'])->name('web.videos.update');



// StudentApprovalController
Route::get('/student-approval', [StudentApprovalController::class, 'studentApproval'])->name('web.student.approval');
Route::get('/scholarship-details', [StudentApprovalController::class, 'scholarshipdetails'])->name('web.student_video.scholarship');
Route::get('/other-grade', [StudentApprovalController::class, 'otherGrade'])->name('web.student_video.other_grade');
Route::get('/free-video-access', [StudentApprovalController::class, 'freeVideo'])->name('web.student_video.free_video');





// Fees
Route::get('/fees/view', [FeesController::class, 'feesView'])->name('web.fees.view');
Route::get('/fees/class', [FeesController::class, 'feesClass'])->name('web.fees.class');
Route::get('/fees/month-view', [FeesController::class, 'monthFees'])->name('web.fees.month_fees');
 






// LIVE CLASSES
Route::get('/class/view', [ClassController::class, 'classView'])->name('web.class.view');






// PaymentHistory
Route::get('/payment-history-month', [PaymentHistoryController::class, 'paymentHistoryMonth'])->name('web.payment.month');
Route::get('/payment-history-list', [PaymentHistoryController::class, 'paymentHistoryList'])->name('web.payment.list');







// Class Tutes And Books
Route::get('/tutes-books', [TutesAndBookController::class, 'tutesBook'])->name('web.tutes.book');
Route::get('/tutes-books-view', [TutesAndBookController::class, 'tutesBookMonthly'])->name('web.tutes.view');
Route::get('/tutes-view', [TutesAndBookController::class, 'tutesView'])->name('web.tutes.open');
Route::post('/tutes-view', [TutesAndBookController::class, 'tutesstore'])->name('web.tutes_books.store');
Route::get('/tutes_books/{id}', [TutesAndBookController::class, 'destroy'])->name('web.tutes_books.destroy');


// Online exam
Route::get('/online-exam', [OnlineExamController::class, 'onlineExam'])->name('web.online.exam');
Route::get('/online-exam-view', [OnlineExamController::class, 'onlineExamMonthly'])->name('web.online.view');
Route::get('/add-questions', [OnlineExamController::class, 'addQuestions'])->name('web.online.questions');



// Analysis Report


Route::get('/analysis', [AnalysisReportController::class, 'analysis'])->name('web.analysis.view');
Route::get('/analysis-report', [AnalysisReportController::class, 'analysisReport'])->name('web.analysis.report');


Route::get('/monthly-income', [MonthlyIncomeController::class, 'monthlyIncome'])->name('web.monthly.income');
Route::get('/monthly-income-view', [MonthlyIncomeController::class, 'monthlyIncomeView'])->name('web.monthly.view');






// ItemShopController
Route::get('/item-shop', [ItemShopController::class, 'itemShop'])->name('web.item-shop');



//Scan QR Code
Route::get('/scan-qr-code', [ScanQRCodeController::class, 'scanQRCode'])->name('web.scan-qr-code');
Route::post('/scan-qr-code', [ScanQRCodeController::class, 'scanQRCodeData'])->name('web.qrcode.scan');
});

