<?php

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

use App\Models\Carousel as Carousel;

Route::get('/', function () {
    $notices = \App\notices::get();
    $aboutus = \App\aboutus::get();
    $staffs = \App\staffs::get();

    return view('index', ['aboutus' => $aboutus, 'notices' => $notices, 'staffs' => $staffs]);
});


Route::get('/index', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();

    return view('index', ['aboutus' => $aboutus, 'notices' => $notices, 'staffs' => $staffs]);

});


Route::get('/about', function () {
    $aboutus = \App\aboutus::get();
    $staffs = \App\staffs::get();
    $notices = \App\notices::get();

    return view('about', ['aboutus' => $aboutus, 'staffs' => $staffs]);
});

Route::get('/blog', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();




    return view('blog', ['aboutus' => $aboutus, 'notices' => $notices]);





});

Route::get('/contact', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();

    return view('contact', ['aboutus' => $aboutus]);

});

Route::get('/portfolio', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();


    return view('portfolio', ['aboutus' => $aboutus]);
});

Route::get('/services', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();
    return view('services', ['aboutus' => $aboutus]);

});

Route::get('/gallery', function () {
    $aboutus = \App\aboutus::get();
    $documents = \App\documents::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();

    return view('gallery', ['documents' => $documents, 'aboutus' => $aboutus]);

});


Route::get('/sendform', function (\Illuminate\Http\Request $request) {
    $validator = Validator::make($request->all(), [



    ]);

    if ($validator->fails()) {
        return redirect('/contact')
            ->withInput()
            ->withErrors($validator);
    }

    $firstname = $request->firstname;
    $lastname = $request->lastname;
    $mobile = $request->mobile;
    $body = $request->body;
    $email = $request->email;


    $data = array('firstname' => "$firstname", 'lastname' => "$lastname", 'mobile' => "$mobile", 'body' => "$body", 'email' => "$email");

    Mail::send(['text' => 'mail'], $data, function ($message) use ($email) {
        $message->to('contact@itgnepal.com.np')->subject
        ('Message from itgnepal');
        $message->from($email);

    });




    echo "Email Sent.Thank you for contacting International Trade Group Nepal. We shall get back to you at the earliest";

    header("refresh:3; url=contact");


});






/*Route::post('sendbasicemail', 'MailController@basic_email', function (Request $request) {


}


);
Route::get('sendhtmlemail', 'MailController@html_email');
Route::get('sendattachmentemail', 'MailController@attachment_email');


/*Route::get('user/{name}', function ($name) {
    //
})
    ->where('name', '(foo|bar|baz)');
*/


/*Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/carousel', 'HomeController@carouselAdmin')->name('carouselAdmin');
Route::get('/carousel/{section}', 'CarouselController@index')->name('carousel');
Route::post('/intro/carousel', 'CarouselController@saveCarousel')->name('createCarousel');

Route::get('/about/block', 'BlockController@about')->name('about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hero', 'HomeController@hero')->name('hero');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
