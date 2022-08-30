<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Website';
$route['signup'] = 'Signup/SignUp';
$route['SponsorDetails'] = 'Signup/SignUp/SponsorDetails';
$route['Registration'] = 'Signup/SignUp/Registration';
$route['check-voucher'] = 'Signup/SignUp/Checkvoucher';
$route['login'] = 'Login/Login';

$route['Details'] = 'Signup/SignUp/Details';
$route['services'] = 'Profile/ProfileController/services';

$route['ForgetPassword'] = 'Admin/AdminController/ForgetPassword';
$route['ResetPassWord'] = 'Admin/AdminController/ResetPassWord';
$route['EnterOTP'] = 'Admin/AdminController/EnterOTP';
$route['PasswordResetFromUser'] = 'Admin/AdminController/PasswordResetFromUser';



$route['MemberPanel'] = 'Login/Login/LoginVerification';
$route['TransactionSubmit'] = 'TransactionController/TransactionPassSubmit/VerifyTransactionPass';
$route['logout'] = 'Login/Login/Logout';


$route['profile'] = 'Profile/ProfileController';
$route['UpdateProfile'] = 'Profile/ProfileController/UpdateProfile';
$route['ModifyiInformation'] = 'Profile/ProfileController/UpdateProfile';
$route['changeLoginPass'] = 'TransactionController/TransactionPassSubmit/VerifyTPassForChangeLoginPass';
$route['changeLoginPassVerify'] = 'TransactionController/TransactionPassSubmit/VerifyChangeLoginPass';
$route['changeTransactionPass'] = 'TransactionController/TransactionPassSubmit/ViewofTransactionPassChange';
$route['changeTransactionPassword'] = 'TransactionController/TransactionPassSubmit/ChangeTransactionPassword';
$route['UpdateBloodInfo'] = 'Profile/ProfileController/UpdateBloodInformation';


$route['FinancialManager'] = 'FinancialManager/TransactionController/transactionHistory';
$route['PointBank'] = 'FinancialManager/TransactionController/transactionHistory';

$route['VirtualBank'] = 'FinancialManager/VirtualBankController/VirtualBank';
$route['FundTransferView'] = 'FinancialManager/VirtualBankController/FundTransferView';
$route['FundTransfer'] = 'FinancialManager/VirtualBankController/FundTransfer';
$route['PayoutView'] = 'FinancialManager/VirtualBankController/PayoutView';
$route['PayOut'] = 'FinancialManager/VirtualBankController/PayOut';

//Updated User Role from Saiful vai 

$route['Task'] = 'Task/TaskController/taskList';
$route['AddTask'] = 'Task/TaskController/AddTask';
$route['SaveTask'] = 'Task/TaskController/SaveTask';
$route['UpdateTask'] = 'Task/TaskController/UpdateTask';

$route['Menu'] = 'Menu/MenuController/MenuList';
$route['AddMenu'] = 'Menu/MenuController/AddMenu';
$route['SaveMenu'] = 'Menu/MenuController/SaveMenu';
$route['UpdateMenu'] = 'Menu/MenuController/UpdateMenu';

$route['UserRole'] = 'UserRole/UserRoleController/UserRoleList';
$route['AddUserRole'] = 'UserRole/UserRoleController/AddUserRole';
$route['SaveUserRole'] = 'UserRole/UserRoleController/SaveUserRole';
$route['UpdateUserRole'] = 'UserRole/UserRoleController/UpdateUserRole';


$route['EPurchase'] = 'Voucher/VoucherController/VoucherView';
$route['GenerateVoucher'] = 'Voucher/VoucherController/GenerateVoucher';

//end  User Role

//Admin Panel
$route['PasswordReset'] = 'Admin/AdminController/';
$route['passwordResetVerify'] = 'Admin/AdminController/passwordResetVerify';
$route['ChangeEmail'] = 'Admin/AdminController/ChangeEmailForm';
$route['EmailChangeVerify'] = 'Admin/AdminController/EmailChangeVerify';
$route['UserList'] = 'Admin/AdminController/UserList';
$route['UpdateUser'] = 'Admin/AdminController/UpdateUser';

$route['CreateBannerPost'] = 'Admin/AdminController/CreateBannerPostForm';
$route['SaveBannerPost'] = 'Admin/AdminController/SavePost';

$route['ClassRoomView'] = 'Dashboard/DashboardController/ClassRoomView';
$route['Geneaology'] = 'Geneaology/GeneaologyController/View';


//New Routes for Transaction Password Checking


$route['TPChecker/(:any)'] = 'SignUp/SignUp/CheckTPPassword/'; 

//Commisions
$route['CoinBank'] = 'Commissions/CommissionsController/view';
$route['commission'] = 'Commissions/CommissionsController/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['SearchClassroomByUserID'] = 'Dashboard/DashboardController/SearchClassroomByUserID';
$route['SearchDownlineByUserID'] = 'Dashboard/DashboardController/SearchDownlineByUserID';

//Gallery
$route['gallery'] = 'Gallery/GalleryController/view';

$route['Messaging'] = 'Messaging/MessagingController/MessagingList';




//Voucher Part
$route['Purchasevouchers'] = 'Voucher/VoucherController/Purchasevouchers';
$route['VerifyVouchers'] = 'Voucher/VoucherController/CheckVoucher';


//Epoints
$route['Epoints'] = 'FinancialManager/TransactionController/Epoints';
$route['PurchasePoints'] = 'FinancialManager/TransactionController/PurchasePoints';


