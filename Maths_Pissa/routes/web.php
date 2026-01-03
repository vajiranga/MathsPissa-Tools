<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeminiController;

Route::get('/calculator', function () {
    return view('free tool.calculator');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/chatbot', function () {
    return view('chatbot');
})->name('chatbot.ui');

Route::post('/api/chat', [GeminiController::class, 'generateContent'])->name('gemini.chat');

Route::get('/Multiplication_Table', function () {
    return view('free tool.Multiplication_Table');
});

Route::get('/index', function () {
    return view('free tool.index');
});

Route::get('/othertools', function () {
    return view('free tool.other tools.othertools');
});

Route::get('/sixtonine', function () {
    return view('free lessons.six to nine.sixtonine');
});

Route::get('/tenandeleven', function () {
    return view('free lessons.ten and eleven.tenandeleven');
});

Route::get('/ol', function () {
    return view('free lessons.ol.ol');
});

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/contact', function () {
    return view('about.contact');
});

Route::get('/reviews', function () {
    return view('about.reviews');
});

Route::get('/others', function () {
    return view('about.others');
});

Route::get('/6-1term', function () {
    return view('free lessons.six to nine.grade 6.term 1.6-1term');
});

Route::get('/6-2term', function () {
    return view('free lessons.six to nine.grade 6.term 2.6-2term');
});

Route::get('/6-3term', function () {
    return view('free lessons.six to nine.grade 6.term 3.6-3term');
});

Route::get('/6grade', function () {
    return view('free lessons.six to nine.grade 6.6grade');
});

Route::get('/7-1term', function () {
    return view('free lessons.six to nine.grade 7.term 1.7-1term');
});

Route::get('/7-2term', function () {
    return view('free lessons.six to nine.grade 7.term 2.7-2term');
});

Route::get('/7-3term', function () {
    return view('free lessons.six to nine.grade 7.term 3.7-3term');
});

Route::get('/7grade', function () {
    return view('free lessons.six to nine.grade 7.7grade');
});

Route::get('/8-1term', function () {
    return view('free lessons.six to nine.grade 8.term 1.8-1term');
});

Route::get('/8-2term', function () {
    return view('free lessons.six to nine.grade 8.term 2.8-2term');
});

Route::get('/8-3term', function () {
    return view('free lessons.six to nine.grade 8.term 3.8-3term');
});

Route::get('/8grade', function () {
    return view('free lessons.six to nine.grade 8.8grade');
});

Route::get('/9-1term', function () {
    return view('free lessons.six to nine.grade 9.term 1.9-1term');
});

Route::get('/9-2term', function () {
    return view('free lessons.six to nine.grade 9.term 2.9-2term');
});

Route::get('/9-3term', function () {
    return view('free lessons.six to nine.grade 9.term 3.9-3term');
});

Route::get('/9grade', function () {
    return view('free lessons.six to nine.grade 9.9grade');
});

Route::get('/10-1term', function () {
    return view('free lessons.ten and eleven.grade 10.term 1.10-1term');
});

Route::get('/10-2term', function () {
    return view('free lessons.ten and eleven.grade 10.term 2.10-2term');
});

Route::get('/10-3term', function () {
    return view('free lessons.ten and eleven.grade 10.term 3.10-3term');
});

Route::get('/10grade', function () {
    return view('free lessons.ten and eleven.grade 10.10grade');
});

Route::get('/11-1term', function () {
    return view('free lessons.ten and eleven.grade 11.term 1.11-1term');
});

Route::get('/11-2term', function () {
    return view('free lessons.ten and eleven.grade 11.term 2.11-2term');
});

Route::get('/11-3term', function () {
    return view('free lessons.ten and eleven.grade 11.term 3.11-3term');
});

Route::get('/11grade', function () {
    return view('free lessons.ten and eleven.grade 11.11grade');
});

Route::get('/donation details', function () {
    return view('about.donation details.donation details');
});

Route::get('/Data Analysis Mean Median Mode', function () {
    return view('free tool.other tools.algebra.Data Analysis Mean Median Mode');
});

Route::get('/Arithmetic and Geometric Sequences and Series Calculator', function () {
    return view('free tool.other tools.geometry.Arithmetic and Geometric Sequences and Series Calculator');
});

Route::get('/Logarithm Calculator Base 10 & Natural', function () {
    return view('free tool.other tools.geometry.Logarithm Calculator Base 10 & Natural');
});

Route::get('/Number Base Converter Dec Bin Oct Hex', function () {
    return view('free tool.other tools.geometry.Number Base Converter Dec Bin Oct Hex');
});

Route::get('/Area and Volume Calculator', function () {
    return view('free tool.other tools.Numbers and operations.Area and Volume Calculator');
});

Route::get('/Decimal Fraction Percent Converter', function () {
    return view('free tool.other tools.Numbers and operations.Decimal Fraction Percent Converter');
});

Route::get('/Fraction Calculator', function () {
    return view('free tool.other tools.Numbers and operations.Fraction Calculator');
});

Route::get('/Fraction Simplifier', function () {
    return view('free tool.other tools.Numbers and operations.Fraction Simplifier');
});

Route::get('/LCM & HCF Calculator', function () {
    return view('free tool.other tools.Numbers and operations.LCM & HCF Calculator');
});

Route::get('/Measurement Converter', function () {
    return view('free tool.other tools.Numbers and operations.Measurement Converter');
});

Route::get('/prime factorization', function () {
    return view('free tool.other tools.Numbers and operations.prime factorization');
});

Route::get('/Mean Median Mode Range Finder', function () {
    return view('free tool.other tools.Numbers and operations.Mean Median Mode Range Finder');
});

Route::get('/Date Difference Calculator', function () {
    return view('free tool.other tools.Time and Money.Date Difference Calculator');
});

Route::get('/derivatives', function () {
    return view('free tool.other tools.Time and Money.derivatives');
});

Route::get('/Math Problem Solver Basic Equations', function () {
    return view('free tool.other tools.Time and Money.Math Problem Solver Basic Equations');
});

Route::get('/Math Puzzle Generator', function () {
    return view('free tool.other tools.Time and Money.Math Puzzle Generator');
});

Route::get('/phpinfo', function () {
    return phpinfo();
});