Route::get('/',[UserController::class,'index'])
Route::get('/users',[UserController::class,'index']);;
Route::get('/contact',[PagesController::class,'contact']);
Route::get('/about',[PagesController::class,'about'])