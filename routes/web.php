<?php

Route::get('/admin/login',[
    'uses' =>'admin_loginController@admin_login',
    'as' =>'admin_login'
]);

Route::get('/admin/forgot/password',[
    'uses' =>'forgot_passwordController@admin_forgot_password',
    'as' =>'admin_forgot_password'
]);

Route::post('/admin/password/send',[
    'uses' =>'forgot_passwordController@admin_password_Link',
    'as' =>'admin_password_Link'
]);

Route::get('/admin/change/password',[
    'uses' =>'forgot_passwordController@admin_change_password',
    'as' =>'admin_change_password'
]);

Route::post('/admin/change/password/save',[
    'uses' =>'forgot_passwordController@admin_Change_password_save',
    'as' =>'admin_Change_password_save'
]);



Route::get('/admin/register',[
    'uses' =>'admin_loginController@admin_register',
    'as' =>'admin_register'
]);

Route::post('/admin/register/save',[
    'uses' =>'admin_loginController@admin_registerSave',
    'as' =>'admin_registerSave'
]);

Route::get('/admin/register/verify',[
    'uses' =>'admin_loginController@admin_registerVerify',
    'as' =>'admin_registerVerify'
]);

Route::post('/admin/login/check',[
    'uses' =>'admin_loginController@admin_login_check',
    'as' =>'admin_login_check'
]);

Route::get('/admin/page',[
    'uses' =>'adminController@admin',
    'as' =>'admin',
   // 'middleware'=>'check_admin_login'
]);

Route::get('/farmer/Info',[
    'uses' =>'adminController@all_farmers',
    'as' =>'all_farmers'
]);
Route::get('/customers/Info',[
    'uses' =>'adminController@all_customers',
    'as' =>'all_customers'
]);
Route::get('/blog/add',[
    'uses' =>'adminController@blog_add',
    'as' =>'blog_add'
]);

Route::post('/blog/add/save',[
    'uses' =>'adminController@save_blog_add',
    'as' =>'save_blog_add'
]);

Route::get('/blog/manage',[
    'uses' =>'adminController@manage_blog_add',
    'as' =>'manage_blog_add'
]);

Route::get('/blog/edit/{id}',[
    'uses' =>'blog_edit_deleteController@edit_blog',
    'as' =>'edit_blog'
]);

Route::post('/blog/edit/save/{id}',[
    'uses' =>'blog_edit_deleteController@update_blog_add',
    'as' =>'update_blog_add'
]);

Route::get('/blog/delete/{id}',[
    'uses' =>'blog_edit_deleteController@blog_delete',
    'as' =>'blog_delete'
]);

Route::get('/category/add',[
    'uses' =>'adminController@category_add',
    'as' =>'category_add'
]);

Route::post('/category/add/save',[
    'uses' =>'adminController@save_category_add',
    'as' =>'save_category_add'
]);

Route::get('/category/manage',[
    'uses' =>'adminController@manage_category_add',
    'as' =>'manage_category_add'
]);

Route::get('/category/edit/{id}',[
    'uses' =>'category_edit_deleteController@edit_category',
    'as' =>'edit_category'
]);

Route::post('/category/edit/save/{id}',[
    'uses' =>'category_edit_deleteController@update_category_add',
    'as' =>'update_category_add'
]);

Route::get('/category/delete/{id}',[
    'uses' =>'category_edit_deleteController@delete_category',
    'as' =>'delete_category'
]);


Route::get('/gallary/add',[
    'uses' =>'adminController@gallary_add',
    'as' =>'gallary_add'
]);

Route::post('/gallary/add/save',[
    'uses' =>'adminController@gallary_save',
    'as' =>'gallary_save'
]);
Route::get('/gallary/manage',[
    'uses' =>'adminController@manage_gallary',
    'as' =>'manage_gallary'
]);
Route::get('/gallary/delete/{id}',[
    'uses' =>'adminController@gallary_delete',
    'as' =>'gallary_delete'
]);

Route::get('/manage/search',[
    'uses' =>'adminController@search',
    'as' =>'search'
]);

Route::get('/headFoot',[
    'uses'=>'my_homeController@headFoot',
    'as'=>'headFoot'
]);

Route::get('/',[
    'uses'=>'my_homeController@index',
    'as'=>'index'
]);
Route::get('/services',[
    'uses' =>'my_homeController@services',
    'as' =>'services'
]);
Route::get('/contact',[
    'uses' =>'my_homeController@contact_us',
    'as' =>'contact_us'
]);
Route::get('/about_us',[
    'uses' =>'my_homeController@about_us',
    'as' =>'about_us'
]);
Route::get('/gallary',[
    'uses' =>'my_homeController@gallary',
    'as' =>'gallary'
]);

Route::get('/search',[
    'uses' =>'my_homeController@search',
    'as' =>'search'
]);

Route::get('/user/register',[
    'uses' =>'userController@user_register',
    'as' =>'user_register'
]);

Route::post('/user/register/save',[
    'uses' =>'userController@registerSave',
    'as' =>'registerSave'
]);

Route::get('/user/register/verify',[
    'uses' =>'userController@registerVerify',
    'as' =>'registerVerify'
]);


Route::get('/user/login',[
    'uses' =>'userController@user_login',
    'as' =>'user_login'
]);

Route::post('/user/login/check',[
    'uses' =>'userController@user_login_check',
    'as' =>'user_login_check'
]);

Route::get('/user/forgot/password',[
    'uses' =>'forgot_passwordController@forgot_password',
    'as' =>'forgot_password'
]);

Route::post('/user/password/send',[
    'uses' =>'forgot_passwordController@password_Link',
    'as' =>'password_Link'
]);

Route::get('/user/change/password',[
    'uses' =>'forgot_passwordController@change_password',
    'as' =>'change_password'
]);

Route::post('/change/password/save',[
    'uses' =>'forgot_passwordController@Change_password_save',
    'as' =>'Change_password_save'
]);

Route::get('/page_view/{name}',[
    'uses' =>'viewController@page_view',
    'as' =>'page_view'
]);

Route::get('/page_view_details/{id}',[
    'uses' =>'viewController@page_view_details',
    'as' =>'page_view_details'
]);

Route::get('/page/comments/save',[
    'uses' =>'commentController@comment_save',
    'as' =>'comment_save'
]);

Route::get('/page/comments',[
    'uses' =>'commentController@admin_show_page_comments',
    'as' =>'admin_show_page_comments'
]);

Route::get('/delete/comments/{id}',[
    'uses' =>'commentController@delete_comment',
    'as' =>'delete_comment'
]);

//Route::group(['middleware'=>'check_admin_login'],function(){


//});
