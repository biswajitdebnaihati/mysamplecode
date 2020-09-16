<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	https://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Language Switch
$route['admin/language/(:any)'] = 'LanguageSwitcher/switchLang/$1';
$route['pastor/language/(:any)'] = 'LanguageSwitcher/switchLang/$1';
$route['staff/language/(:any)'] = 'LanguageSwitcher/switchLang/$1';
$route['member/language/(:any)'] = 'LanguageSwitcher/switchLang/$1';

// For Frontend
$route['home'] = 'home/index';

// For Admin
$route['admin'] = 'admin/home/index';
$route['admin/login'] = 'admin/home/index';
$route['admin/login-submit'] = 'admin/home/login_submit';
$route['admin/logout'] = 'admin/home/logout';

//Admin Account
$route['admin/dashboard'] = 'admin/dashboard/index';
$route['admin/account-setting'] = 'admin/Account_setting/index';
$route['admin/account-setting-submit'] = 'admin/Account_setting/account_setting_submit';
$route['admin/change-username'] = 'admin/Account_setting/change_username';
$route['admin/change-password'] = 'admin/Account_setting/change_password';
$route['admin/change-logo'] = 'admin/Account_setting/change_image';
$route['admin/get-city'] = 'admin/Account_setting/getCity';

//Pastor List
$route['admin/pastor-list'] = 'admin/Pastor/index';
$route['admin/pastor-add'] = 'admin/Pastor/add';
$route['admin/pastor-add-submit'] = 'admin/Pastor/add_submit';
$route['admin/pastor-edit/(:any)'] = 'admin/Pastor/edit/$1';
$route['admin/pastor-edit-submit'] = 'admin/Pastor/edit_submit';
$route['admin/delete-pastor/(:any)'] = 'admin/Pastor/delete/$1';
$route['admin/view-pastor/(:any)'] = 'admin/Pastor/view/$1';
$route['admin/pastor-report-view/(:any)'] = 'admin/Pastor/report_view/$1';

//Church List
$route['admin/church-list'] = 'admin/Church/index';
$route['admin/church-add'] = 'admin/Church/add';
$route['admin/church-add-submit'] = 'admin/Church/add_submit';
$route['admin/church-edit/(:any)'] = 'admin/Church/edit/$1';
$route['admin/church-edit-submit'] = 'admin/Church/edit_submit';
$route['admin/delete-church/(:any)'] = 'admin/Church/delete/$1';
$route['admin/view-church/(:any)'] = 'admin/Church/view/$1';
$route['admin/view-church-payment/(:any)'] = 'admin/Church/view_payment/$1';

//Staff List
$route['admin/staff-list'] = 'admin/Staff/index';
$route['admin/staff-add'] = 'admin/Staff/add';
$route['admin/staff-add-submit'] = 'admin/Staff/add_submit';
$route['admin/staff-edit/(:any)'] = 'admin/Staff/edit/$1';
$route['admin/staff-edit-submit'] = 'admin/Staff/edit_submit';
$route['admin/delete-staff/(:any)'] = 'admin/Staff/delete/$1';
$route['admin/view-staff/(:any)'] = 'admin/Staff/view/$1';
$route['admin/view-staff-attendence'] = 'admin/Staff/attendence';

//Prayer Group List
$route['admin/prayer-group-list'] = 'admin/Prayer_group/index';
$route['admin/prayer-group-add'] = 'admin/Prayer_group/add';
$route['admin/prayer-group-add-submit'] = 'admin/Prayer_group/add_submit';
$route['admin/prayer-group-edit/(:any)'] = 'admin/Prayer_group/edit/$1';
$route['admin/prayer-group-edit-submit'] = 'admin/Prayer_group/edit_submit';
$route['admin/delete-prayer-group/(:any)'] = 'admin/Prayer_group/delete/$1';
$route['admin/view-prayer-group/(:any)'] = 'admin/Prayer_group/view/$1';
$route['admin/view-prayer-group-members/(:any)'] = 'admin/Prayer_group/members/$1';
$route['admin/attendence-list/(:any)'] = 'admin/Attendence/list/$1';

//Member List
$route['admin/member-list'] = 'admin/Member/index';
$route['admin/member-add'] = 'admin/Member/add';
$route['admin/member-add-submit'] = 'admin/Member/add_submit';
$route['admin/member-edit/(:any)'] = 'admin/Member/edit/$1';
$route['admin/member-edit-submit'] = 'admin/Member/edit_submit';
$route['admin/delete-member/(:any)'] = 'admin/Member/delete/$1';
$route['admin/view-member/(:any)'] = 'admin/Member/view/$1';
$route['admin/view-member-payment/(:any)'] = 'admin/Member/view_payment/$1';
$route['admin/getMember'] = 'admin/Member/getMember';

//Member Payment List
$route['admin/payment-list'] = 'admin/Payment/index';
$route['admin/payment-add'] = 'admin/Payment/add';
$route['admin/payment-add-submit'] = 'admin/Payment/add_submit';

//Events List
$route['admin/event-list'] = 'admin/Event/index';
$route['admin/event-add'] = 'admin/Event/add';
$route['admin/event-add-submit'] = 'admin/Event/add_submit';
$route['admin/event-edit/(:any)'] = 'admin/Event/edit/$1';
$route['admin/event-edit-submit'] = 'admin/Event/edit_submit';
$route['admin/delete-event/(:any)'] = 'admin/Event/delete/$1';

//Messages List
$route['admin/message-list'] = 'admin/Message/index';
$route['admin/message-send'] = 'admin/Message/add';
$route['admin/message-add-submit'] = 'admin/Message/add_submit';
$route['admin/get-receiver'] = 'admin/Message/getReceiver';

//Messages List
$route['admin/audio-list'] = 'admin/Audio/index';
$route['admin/audio-send'] = 'admin/Audio/add';
$route['admin/audio-add-submit'] = 'admin/Audio/add_submit';

//Messaging
$route['admin/message-view/(:any)'] = 'admin/Chat/index/$1';


// For pastor
$route['pastor'] = 'pastor/home/index';
$route['pastor/login'] = 'pastor/home/index';
$route['pastor/login-submit'] = 'pastor/home/login_submit';
$route['pastor/logout'] = 'pastor/home/logout';

//pastor Account
$route['pastor/dashboard'] = 'pastor/dashboard/index';
$route['pastor/account-setting'] = 'pastor/Account_setting/index';
$route['pastor/account-setting-submit'] = 'pastor/Account_setting/account_setting_submit';
$route['pastor/change-username'] = 'pastor/Account_setting/change_username';
$route['pastor/change-password'] = 'pastor/Account_setting/change_password';
$route['pastor/change-logo'] = 'pastor/Account_setting/change_image';
$route['pastor/get-city'] = 'pastor/Account_setting/getCity';

//Pastor List
$route['pastor/pastor-list'] = 'pastor/Pastor/index';
$route['pastor/pastor-add'] = 'pastor/Pastor/add';
$route['pastor/pastor-add-submit'] = 'pastor/Pastor/add_submit';
$route['pastor/pastor-edit/(:any)'] = 'pastor/Pastor/edit/$1';
$route['pastor/pastor-edit-submit'] = 'pastor/Pastor/edit_submit';
$route['pastor/delete-pastor/(:any)'] = 'pastor/Pastor/delete/$1';
$route['pastor/view-pastor/(:any)'] = 'pastor/Pastor/view/$1';

//Church List
$route['pastor/church-list'] = 'pastor/Church/index';
$route['pastor/church-add'] = 'pastor/Church/add';
$route['pastor/church-add-submit'] = 'pastor/Church/add_submit';
$route['pastor/church-edit/(:any)'] = 'pastor/Church/edit/$1';
$route['pastor/church-edit-submit'] = 'pastor/Church/edit_submit';
$route['pastor/delete-church/(:any)'] = 'pastor/Church/delete/$1';
$route['pastor/view-church/(:any)'] = 'pastor/Church/view/$1';

//Staff List
$route['pastor/staff-list'] = 'pastor/Staff/index';
$route['pastor/staff-add'] = 'pastor/Staff/add';
$route['pastor/staff-add-submit'] = 'pastor/Staff/add_submit';
$route['pastor/staff-edit/(:any)'] = 'pastor/Staff/edit/$1';
$route['pastor/staff-edit-submit'] = 'pastor/Staff/edit_submit';
$route['pastor/delete-staff/(:any)'] = 'pastor/Staff/delete/$1';
$route['pastor/view-staff/(:any)'] = 'pastor/Staff/view/$1';
$route['pastor/view-staff-attendence'] = 'pastor/Staff/attendence';

//Prayer Group List
$route['pastor/prayer-group-list'] = 'pastor/Prayer_group/index';
$route['pastor/prayer-group-add'] = 'pastor/Prayer_group/add';
$route['pastor/prayer-group-add-submit'] = 'pastor/Prayer_group/add_submit';
$route['pastor/prayer-group-edit/(:any)'] = 'pastor/Prayer_group/edit/$1';
$route['pastor/prayer-group-edit-submit'] = 'pastor/Prayer_group/edit_submit';
$route['pastor/delete-prayer-group/(:any)'] = 'pastor/Prayer_group/delete/$1';
$route['pastor/view-prayer-group/(:any)'] = 'pastor/Prayer_group/view/$1';
$route['pastor/attendence-lists/(:any)'] = 'pastor/Attendence/list/$1';


//Member List
$route['pastor/member-list'] = 'pastor/Member/index';
$route['pastor/member-add'] = 'pastor/Member/add';
$route['pastor/member-add-submit'] = 'pastor/Member/add_submit';
$route['pastor/member-edit/(:any)'] = 'pastor/Member/edit/$1';
$route['pastor/member-edit-submit'] = 'pastor/Member/edit_submit';
$route['pastor/delete-member/(:any)'] = 'pastor/Member/delete/$1';
$route['pastor/view-member/(:any)'] = 'pastor/Member/view/$1';
$route['pastor/getMember'] = 'pastor/Member/getMember';

//Member Payment List
$route['pastor/payment-list'] = 'pastor/Payment/index';
$route['pastor/payment-add'] = 'pastor/Payment/add';
$route['pastor/payment-add-submit'] = 'pastor/Payment/add_submit';

//Events List
$route['pastor/event-list'] = 'pastor/Event/index';
$route['pastor/event-add'] = 'pastor/Event/add';
$route['pastor/event-add-submit'] = 'pastor/Event/add_submit';
$route['pastor/event-edit/(:any)'] = 'pastor/Event/edit/$1';
$route['pastor/event-edit-submit'] = 'pastor/Event/edit_submit';
$route['pastor/delete-event/(:any)'] = 'pastor/Event/delete/$1';

//Messages List
$route['pastor/message-list'] = 'pastor/Message/index';
$route['pastor/message-send'] = 'pastor/Message/add';
$route['pastor/message-add-submit'] = 'pastor/Message/add_submit';
$route['pastor/get-receiver'] = 'pastor/Message/getReceiver';

//Messages List
$route['pastor/audio-list'] = 'pastor/Audio/index';
$route['pastor/audio-send'] = 'pastor/Audio/add';
$route['pastor/audio-add-submit'] = 'pastor/Audio/add_submit';

//Pastor Report List
$route['pastor/attendence-list'] = 'pastor/Attendence/index';
$route['pastor/attendence-add'] = 'pastor/Attendence/add';
$route['pastor/attendence-add-submit'] = 'pastor/Attendence/add_submit';
$route['pastor/attendence-edit/(:any)'] = 'pastor/Attendence/edit/$1';
$route['pastor/attendence-edit-submit'] = 'pastor/Attendence/edit_submit';
$route['pastor/delete-attendence/(:any)'] = 'pastor/Attendence/delete/$1';

//Messaging
$route['pastor/message-view/(:any)'] = 'pastor/Chat/index/$1';


// For member
$route['member'] = 'member/home/index';
$route['member/login'] = 'member/home/index';
$route['member/login-submit'] = 'member/home/login_submit';
$route['member/logout'] = 'member/home/logout';

//member Account
$route['member/dashboard'] = 'member/dashboard/index';
$route['member/account-setting'] = 'member/Account_setting/index';
$route['member/account-setting-submit'] = 'member/Account_setting/account_setting_submit';
$route['member/change-username'] = 'member/Account_setting/change_username';
$route['member/change-password'] = 'member/Account_setting/change_password';
$route['member/change-logo'] = 'member/Account_setting/change_image';
$route['member/get-city'] = 'member/Account_setting/getCity';

//Pastor List
$route['member/pastor-list'] = 'member/Pastor/index';
$route['member/pastor-add'] = 'member/Pastor/add';
$route['member/pastor-add-submit'] = 'member/Pastor/add_submit';
$route['member/pastor-edit/(:any)'] = 'member/Pastor/edit/$1';
$route['member/pastor-edit-submit'] = 'member/Pastor/edit_submit';
$route['member/delete-pastor/(:any)'] = 'member/Pastor/delete/$1';
$route['member/view-pastor/(:any)'] = 'member/Pastor/view/$1';

//Church List
$route['member/church-list'] = 'member/Church/index';
$route['member/church-add'] = 'member/Church/add';
$route['member/church-add-submit'] = 'member/Church/add_submit';
$route['member/church-edit/(:any)'] = 'member/Church/edit/$1';
$route['member/church-edit-submit'] = 'member/Church/edit_submit';
$route['member/delete-church/(:any)'] = 'member/Church/delete/$1';
$route['member/view-church/(:any)'] = 'member/Church/view/$1';

//Staff List
$route['member/staff-list'] = 'member/Staff/index';
$route['member/staff-add'] = 'member/Staff/add';
$route['member/staff-add-submit'] = 'member/Staff/add_submit';
$route['member/staff-edit/(:any)'] = 'member/Staff/edit/$1';
$route['member/staff-edit-submit'] = 'member/Staff/edit_submit';
$route['member/delete-staff/(:any)'] = 'member/Staff/delete/$1';
$route['member/view-staff/(:any)'] = 'member/Staff/view/$1';

//Prayer Group List
$route['member/prayer-group-list'] = 'member/Prayer_group/index';
$route['member/prayer-group-add'] = 'member/Prayer_group/add';
$route['member/prayer-group-add-submit'] = 'member/Prayer_group/add_submit';
$route['member/prayer-group-edit/(:any)'] = 'member/Prayer_group/edit/$1';
$route['member/prayer-group-edit-submit'] = 'member/Prayer_group/edit_submit';
$route['member/delete-prayer-group/(:any)'] = 'member/Prayer_group/delete/$1';
$route['member/view-prayer-group/(:any)'] = 'member/Prayer_group/view/$1';

//Member List
$route['member/member-list'] = 'member/Member/index';
$route['member/member-add'] = 'member/Member/add';
$route['member/member-add-submit'] = 'member/Member/add_submit';
$route['member/member-edit/(:any)'] = 'member/Member/edit/$1';
$route['member/member-edit-submit'] = 'member/Member/edit_submit';
$route['member/delete-member/(:any)'] = 'member/Member/delete/$1';
$route['member/view-member/(:any)'] = 'member/Member/view/$1';

//Member Payment List
$route['member/payment-list'] = 'member/Payment/index';
$route['member/payment-add'] = 'member/Payment/add';
$route['member/payment-add-submit'] = 'member/Payment/add_submit';

//Events List
$route['member/event-list'] = 'member/Event/index';
$route['member/event-add'] = 'member/Event/add';
$route['member/event-add-submit'] = 'member/Event/add_submit';
$route['member/event-edit/(:any)'] = 'member/Event/edit/$1';
$route['member/event-edit-submit'] = 'member/Event/edit_submit';
$route['member/delete-event/(:any)'] = 'member/Event/delete/$1';

//Messages List
$route['member/message-list'] = 'member/Message/index';
$route['member/message-send'] = 'member/Message/add';
$route['member/message-add-submit'] = 'member/Message/add_submit';
$route['member/get-receiver'] = 'member/Message/getReceiver';

//Messages List
$route['member/audio-list'] = 'member/Audio/index';
$route['member/audio-send'] = 'member/Audio/add';
$route['member/audio-add-submit'] = 'member/Audio/add_submit';

//Messaging
$route['member/message-view/(:any)'] = 'member/Chat/index/$1';


// For staff
$route['staff'] = 'staff/home/index';
$route['staff/login'] = 'staff/home/index';
$route['staff/login-submit'] = 'staff/home/login_submit';
$route['staff/logout'] = 'staff/home/logout';

//staff Account
$route['staff/dashboard'] = 'staff/dashboard/index';
$route['staff/account-setting'] = 'staff/Account_setting/index';
$route['staff/account-setting-submit'] = 'staff/Account_setting/account_setting_submit';
$route['staff/change-username'] = 'staff/Account_setting/change_username';
$route['staff/change-password'] = 'staff/Account_setting/change_password';
$route['staff/change-logo'] = 'staff/Account_setting/change_image';
$route['staff/get-city'] = 'staff/Account_setting/getCity';

//Pastor List
$route['staff/pastor-list'] = 'staff/Pastor/index';
$route['staff/pastor-add'] = 'staff/Pastor/add';
$route['staff/pastor-add-submit'] = 'staff/Pastor/add_submit';
$route['staff/pastor-edit/(:any)'] = 'staff/Pastor/edit/$1';
$route['staff/pastor-edit-submit'] = 'staff/Pastor/edit_submit';
$route['staff/delete-pastor/(:any)'] = 'staff/Pastor/delete/$1';
$route['staff/view-pastor/(:any)'] = 'staff/Pastor/view/$1';

//Church List
$route['staff/church-list'] = 'staff/Church/index';
$route['staff/church-add'] = 'staff/Church/add';
$route['staff/church-add-submit'] = 'staff/Church/add_submit';
$route['staff/church-edit/(:any)'] = 'staff/Church/edit/$1';
$route['staff/church-edit-submit'] = 'staff/Church/edit_submit';
$route['staff/delete-church/(:any)'] = 'staff/Church/delete/$1';
$route['staff/view-church/(:any)'] = 'staff/Church/view/$1';

//Staff List
$route['staff/staff-list'] = 'staff/Staff/index';
$route['staff/staff-add'] = 'staff/Staff/add';
$route['staff/staff-add-submit'] = 'staff/Staff/add_submit';
$route['staff/staff-edit/(:any)'] = 'staff/Staff/edit/$1';
$route['staff/staff-edit-submit'] = 'staff/Staff/edit_submit';
$route['staff/delete-staff/(:any)'] = 'staff/Staff/delete/$1';
$route['staff/view-staff/(:any)'] = 'staff/Staff/view/$1';

//Prayer Group List
$route['staff/prayer-group-list'] = 'staff/Prayer_group/index';
$route['staff/prayer-group-add'] = 'staff/Prayer_group/add';
$route['staff/prayer-group-add-submit'] = 'staff/Prayer_group/add_submit';
$route['staff/prayer-group-edit/(:any)'] = 'staff/Prayer_group/edit/$1';
$route['staff/prayer-group-edit-submit'] = 'staff/Prayer_group/edit_submit';
$route['staff/delete-prayer-group/(:any)'] = 'staff/Prayer_group/delete/$1';
$route['staff/view-prayer-group/(:any)'] = 'staff/Prayer_group/view/$1';
$route['staff/view-prayer-group-member/(:any)'] = 'staff/Prayer_group/view_member/$1';

//Member List
$route['staff/member-list'] = 'staff/Member/index';
$route['staff/member-add'] = 'staff/Member/add';
$route['staff/member-add-submit'] = 'staff/Member/add_submit';
$route['staff/member-edit/(:any)'] = 'staff/Member/edit/$1';
$route['staff/member-edit-submit'] = 'staff/Member/edit_submit';
$route['staff/delete-member/(:any)'] = 'staff/Member/delete/$1';
$route['staff/view-member/(:any)'] = 'staff/Member/view/$1';
$route['staff/getMember'] = 'staff/Member/getMember';

//Member Payment List
$route['staff/payment-list'] = 'staff/Payment/index';
$route['staff/payment-add'] = 'staff/Payment/add';
$route['staff/payment-add-submit'] = 'staff/Payment/add_submit';

//Events List
$route['staff/event-list'] = 'staff/Event/index';
$route['staff/event-add'] = 'staff/Event/add';
$route['staff/event-add-submit'] = 'staff/Event/add_submit';
$route['staff/event-edit/(:any)'] = 'staff/Event/edit/$1';
$route['staff/event-edit-submit'] = 'staff/Event/edit_submit';
$route['staff/delete-event/(:any)'] = 'staff/Event/delete/$1';

//Messages List
$route['staff/message-list'] = 'staff/Message/index';
$route['staff/message-send'] = 'staff/Message/add';
$route['staff/message-add-submit'] = 'staff/Message/add_submit';
$route['staff/get-receiver'] = 'staff/Message/getReceiver';

//Messages List
$route['staff/audio-list'] = 'staff/Audio/index';
$route['staff/audio-send'] = 'staff/Audio/add';
$route['staff/audio-add-submit'] = 'staff/Audio/add_submit';

//Messaging
$route['staff/message-view/(:any)'] = 'staff/Chat/index/$1';

//Staff Report List
$route['staff/attendence-list/(:any)'] = 'staff/Attendence/list/$1';
$route['staff/attendence-add/(:any)'] = 'staff/Attendence/add/$1';
$route['staff/attendence-add-submit'] = 'staff/Attendence/add_submit';
$route['staff/attendence-edit/(:any)'] = 'staff/Attendence/edit/$1';
$route['staff/attendence-edit-submit'] = 'staff/Attendence/edit_submit';
$route['staff/delete-attendence/(:any)'] = 'staff/Attendence/delete/$1';

//Video List Admin
$route['admin/video-list'] = 'admin/Video/index';
$route['admin/video-add'] = 'admin/Video/add';
$route['admin/video-add-submit'] = 'admin/Video/add_submit';
$route['admin/video-edit/(:any)'] = 'admin/Video/edit/$1';
$route['admin/video-edit-submit'] = 'admin/Video/edit_submit';
$route['admin/delete-video/(:any)'] = 'admin/Video/delete/$1';
$route['admin/view-video/(:any)'] = 'admin/Video/view/$1';
$route['admin/view-video-payment/(:any)'] = 'admin/Video/view_payment/$1';

//Notification Admin
$route['admin/notification-list'] = 'admin/Notification/index';
$route['admin/notification-add'] = 'admin/Notification/add';
$route['admin/notification-add-submit'] = 'admin/Notification/add_submit';

//Registration Admin
$route['admin/registration-list'] = 'admin/Registration/index';
