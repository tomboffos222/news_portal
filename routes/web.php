<?php
//User
Route::get('/','UserController@Home')->name('Home');
Route::get('/shop','UserController@Shop')->name('shop');
Route::get('shop/{productId?}','UserController@Product')->name('Product');
Route::get('shop/category/{categoryId?}','UserController@Category')->name('Category');
Route::get('search/','UserController@Search')->name('Search');
Route::get('addProduct/', 'UserController@AddProduct')->name('AddProduct');
Route::get('show/cart' , 'UserController@CartPage')->name('CartPage');
Route::get('search/form', 'UserController@SearchForm')->name('SearchForm');
Route::get('order/form','UserController@OrderForm')->name('OrderForm');
Route::get('order/create','UserController@OrderCreate')->name('OrderCreate');
Route::get('article/{articleId}','UserController@Article')->name('Article');
Route::get('category/{categoryId}','UserController@ArticleCategory')->name('ArticleCategory');
Route::get('test','UserController@Test')->name('Test');
Route::get('popular','UserController@Popular')->name('Popular');
Route::get('fresh','UserController@FreshArticles')->name('FreshArticles');
Route::get('search','UserController@Search')->name('Search');
Route::get('search/product','UserController@SearchProduct')->name('SearchProduct');
Route::get('fail/payment','UserController@PaymentFail')->name('PaymentFail');
Route::get('success/payment','UserController@PaymentGood')->name('PaymentGood');

//Admin
Route::get('admin','AdminController@LoginPage')->name('admin.LoginPage');
Route::post('admin/login','AdminController@Login')->name('admin.Login');
Route::name('kz.')->prefix('kz')->group(function(){
    Route::get('/','LangController@Home')->name('Home');
    Route::get('/shop','LangController@Shop')->name('shop');
    Route::get('shop/{productId?}','LangController@Product')->name('Product');
    Route::get('shop/category/{categoryId?}','LangController@Category')->name('Category');
    Route::get('search/','LangController@Search')->name('Search');
    Route::get('addProduct/', 'LangController@AddProduct')->name('AddProduct');
    Route::get('show/cart' , 'LangController@CartPage')->name('CartPage');
    Route::get('search/form', 'LangController@SearchForm')->name('SearchForm');
    Route::get('order/form','LangController@OrderForm')->name('OrderForm');
    Route::get('order/create','LangController@OrderCreate')->name('OrderCreate');
    Route::get('article/{articleId}','LangController@Article')->name('Article');
    Route::get('category/{categoryId}','LangController@ArticleCategory')->name('ArticleCategory');
    Route::get('test','LangController@Test')->name('Test');
    Route::get('popular','LangController@Popular')->name('Popular');
    Route::get('fresh','LangController@FreshArticles')->name('FreshArticles');
    Route::get('search','LangController@Search')->name('Search');
    Route::get('search/product','LangController@SearchProduct')->name('SearchProduct');
//Admin
});

Route::name('admin.')->prefix('admin')->middleware(['adminCheck'])->group(function () {
    Route::get('article/view','AdminController@Posts')->name('Posts');
    Route::get('articles/view/{id?}','AdminController@ViewPost')->name('ViewPost');
    Route::get('articles/delete/{id?}','AdminController@DeletePost')->name('DeletePost');
    Route::post('articles/edit/{id?}','AdminController@EditArticle')->name('EditArticle');
    Route::get('users','AdminController@Users')->name('Users');
    Route::get('out','AdminController@Out')->name('Out');
    Route::post('RegisterUser','AdminController@RegisterUser')->name('RegisterUser');
    Route::get('tree/{userId?}','AdminController@Tree')->name('Tree');
    Route::get('RejectUser/{userId}','AdminController@RejectUser')->name('RejectUser');

    Route::get('delete/product/{productId?}','HomeController@DeleteProduct')->name('DeleteProduct');
    Route::get('product/view','AdminController@ProductView')->name('ProductView');
    Route::get('shop/view', 'AdminController@ShopView')->name('ShopView');
    Route::get('add/category','AdminController@CategoryAdd')->name('CategoryAdd');
    Route::get('add/category','AdminController@PostCatAdd')->name('PostCatAdd');
    Route::get('author/add','AdminController@AuthorAdd')->name('AuthorAdd');
    Route::get('message/page','AdminController@MessagePage')->name('MessagePage');
    Route::get('create/post','AdminController@CreatePost')->name('CreatePost');
    Route::get('message/answer','AdminController@MessageAnswer')->name('MessageAnswer');
    Route::get('withdraws', 'AdminController@WithdrawShow')->name('WithdrawShow');
    Route::get('withdraw/allow/{withdrawId?}' , 'AdminController@WithdrawAllow')->name('WithdrawAllow');
    Route::get('orders','AdminController@Orders')->name('Orders');
    Route::get('orders/view/{id?}','AdminController@OrdersView')->name('OrdersView');
    Route::get('withdraw/reject/{withdrawId?}', 'AdminController@WithdrawReject')->name('WithdrawReject');
    Route::post('create/product','AdminController@CreateProduct')->name('CreateProduct');
    Route::get('store/article','AdminController@Store')->name('Store');
    Route::post('upload','AdminController@upload')->name('upload');
    Route::post('article/store','AdminController@StoreArticle')->name('StoreArticle');

});




