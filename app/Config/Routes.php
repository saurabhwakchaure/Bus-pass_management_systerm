<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/myproject','Home::myfun');
$routes->get('/one','MyController::one');
$routes->get('/home','MyController::home');
$routes->get('/project','MyController::project');
$routes->get('/courses','MyController::courses');
$routes->get('/team','MyController::team');
$routes->get('/team1','MyController::team1');
$routes->get('/contact','MyController::contact');
$routes->get('/myui','MyController::myui');
$routes->get('/enterbus','BookingController::enterbus');
$routes->get('/insertbus','BookingController::insertbus');

//for reservation control
$routes->get('/backup','BookingController::backup');
$routes->get('insertreserve','BookingController::insertreserve');
$routes->get('viewreservation','BookingController::viewreservation');
$routes->get('demo','BookingController::demo');
$routes->get('fare','BookingController::fare');
$routes->get('getBooking','BookingController::getBooking');
$routes->get('booking','BookingController::booking');
$routes->get('deleteBooking/(:num)','BookingController::deleteBooking/$1');
$routes->get('printBooking/(:num)','BookingController::printBooking/$1');
$routes->get('tabledesign','MyController::tabledesign');
$routes->get('transactionbooking','BookingController::transactionbooking');
$routes->post('insertransactionTicket','BookingController::insertransactionTicket');
$routes->get('getTransactionTicket','BookingController::getTransactionTicket');
$routes->get('deleteTransactionBooking/(:num)','BookingController::deleteTransactionBooking/$1');

//for pass control
$routes->get('pass','PassController::pass');
$routes->post('insertpass','PassController::insertpass');
$routes->get('getPass','PassController::getPass');
$routes->get('transactionpass','PassController::transactionpass');
$routes->post('insertransactionpass','PassController::insertransactionpass');
$routes->get('getTransactionPassvalue','PassController::getTransactionPassvalue');
$routes->get('getTransactionPass','PassController::getTransactionPass');
$routes->get('printPass/(:num)','PassController::printPass/$1');
$routes->get('deletePass/(:num)','PassController::deletePass/$1');
$routes->get('deleteTransactionPass/(:num)','PassController::deleteTransactionPass/$1');


//on server
$routes->get('dashboardserver','ServerController::dashboardserver');
$routes->get('fareform','ServerController::fareform');


//about
$routes->get('about','AboutController::About');
$routes->get('aboutdepo','AboutController::aboutdepo');


//login
$routes->get('login','LoginController::login');


//resume
$routes->get('resume','ResumeController::resume');



