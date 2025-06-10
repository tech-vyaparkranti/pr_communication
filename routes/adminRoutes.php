<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\WebSiteElementsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BrandPortfolioController;
use App\Http\Controllers\ClientTestimonialController;
use App\Http\Controllers\BrandAssociationController;
use App\Http\Controllers\BrandServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\OverViewController;


Route::get("login",[AdminController::class,"Login"])->name("login");
Route::post("AdminUserLogin",[AdminController::class,"AdminLoginUser"])->name("AdminLogin");
Route::get("getmenu-items",[HomePageController::class,"getMenu"]);
//pages

Route::middleware(['auth'])->group(function () {
    Route::get("/new-dashboard",[AdminController::class,"dashboard"])->name("new-dashboard");
    
    // Route::get("site-navigation",[AdminController::class,"siteNav"])->name("siteNav");
    // Route::post("addEditNavigation",[AdminController::class,"addEditNavigation"])->name("addNaviagtion");
    // Route::post("deleteNavigation",[AdminController::class,"deleteNavigation"])->name("deleteNavigation");
    // Route::post("navDataTable",[AdminController::class,"navDataTable"])->name("navDataTable");

    Route::get("add-web-site-elements", [WebSiteElementsController::class, "addWebSiteElements"])->name("webSiteElements");
    Route::post("save-web-site-element", [WebSiteElementsController::class, "saveWebSiteElement"])->name("saveWebSiteElement");
    Route::post("web-site-elements-data", [WebSiteElementsController::class, "getWebElementsData"])->name("webSiteElementsData");

    Route::get("manage-gallery",[AdminController::class,"manageGallery"])->name("manageGallery");
    Route::post("addGalleryItems",[AdminController::class,"addGalleryItems"])->name("addGalleryItems");
    Route::post("addGalleryDataTable",[AdminController::class,"addGalleryDataTable"])->name("addGalleryDataTable");

    Route::get("add-destinations", [DestinationController::class, "destinationMaster"])->name("DestinationsMaster");
    Route::post("save-destinations", [DestinationController::class, "saveDestinations"])->name("saveDestinations");
    Route::post("destinations-data", [DestinationController::class, "destinationsData"])->name("DestinationsData");

    Route::get("mange-contact-us",[ContactUsController::class,"manageContactUs"])->name("manageContactUs");
    Route::post("contact-us-data",[ContactUsController::class,"contactUsData"])->name("ContactUsData");

    Route::get("view-brand", [BrandAssociationController::class, "viewBrand"])->name("viewBrand");
    Route::post("save-brand", [BrandAssociationController::class, "saveBrand"])->name("saveBrand");
    Route::post("get-brand", [BrandAssociationController::class, "getBrand"])->name("getBrand");

    Route::get("view-brand-portfolio", [BrandPortfolioController::class, "viewBrandPortfolio"])->name("viewBrandPortfolio");
    Route::post("save-brand-portfolio", [BrandPortfolioController::class, "saveBrandPortfolio"])->name("saveBrandPortfolio");
    Route::post("get-brand-portfolio", [BrandPortfolioController::class, "getBrandPortfolio"])->name("getBrandPortfolio");

    Route::get("view-client-testimonial", [ClientTestimonialController::class, "viewClientTestimonial"])->name("viewClientTestimonial");
    Route::post("save-client-testimonial", [ClientTestimonialController::class, "saveClientTestimonial"])->name("saveClientTestimonial");
    Route::post("get-client-testimonial", [ClientTestimonialController::class, "getClientTestimonial"])->name("getClientTestimonial");

    Route::get("view-brand-service", [BrandServiceController::class, "viewBrandService"])->name("viewBrandService");
    Route::post("save-brand-service", [BrandServiceController::class, "saveBrandService"])->name("saveBrandService");
    Route::post("get-brand-service", [BrandServiceController::class, "brandServiceData"])->name("brandServiceData");

    Route::get("view-subscribe", [SubscribeController::class, "getSubscribe"])->name("getSubscribe");
    Route::post("subscribe-data", [SubscribeController::class, "subscribeData"])->name("subscribeData");
   

    Route::get("view-over-view", [OverViewController::class, "viewOverView"])->name("viewOverView");
    Route::post("save-over-view", [OverViewController::class, "getOverView"])->name("getOverView");
    Route::post("get-over-view", [OverViewController::class, "saveOverView"])->name("saveOverView");
    Route::get('logout',function ()
    {
        Auth::logout();
        return redirect('login');
    });

});