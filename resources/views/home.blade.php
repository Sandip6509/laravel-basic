@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="max-w-5xl mx-auto p-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6"> Basic</h2>
        <!-- Tabs Navigation -->
        <div class="flex flex-wrap justify-center bg-gray-100 p-1 rounded-lg shadow-md w-fit mx-auto mb-6">
            <button class="tab-btn px-6 py-2 rounded-lg text-gray-700 hover:bg-indigo-500 hover:text-white active"
                data-tab="basic">Basic</button>
            <button class="tab-btn px-6 py-2 rounded-lg text-gray-700 hover:bg-indigo-500 hover:text-white"
                data-tab="advanced">Advanced</button>
            <button class="tab-btn px-6 py-2 rounded-lg text-gray-700 hover:bg-indigo-500 hover:text-white"
                data-tab="package">Package</button>
            <button class="tab-btn px-6 py-2 rounded-lg text-gray-700 hover:bg-indigo-500 hover:text-white"
                data-tab="relationship">Relationship</button>
            <button class="tab-btn px-6 py-2 rounded-lg text-gray-700 hover:bg-indigo-500 hover:text-white"
                data-tab="query">Query</button>
            <button class="tab-btn px-6 py-2 rounded-lg text-gray-700 hover:bg-indigo-500 hover:text-white"
                data-tab="livewire">Livewire</button>
            <button class="tab-btn px-6 py-2 rounded-lg text-gray-700 hover:bg-indigo-500 hover:text-white"
                data-tab="restapi">Rest API</button>
        </div>
        <!-- Tab Content -->
        <div class="tab-content">
            <div id="basic" class="tab-pane active bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Basic Topics</h3>
                <div class="grid grid-cols-3 gap-6">
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="{{ route('basic.create-first-project') }}">Create First Project</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Vapor Deployment</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Install Bootstrap 5</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Install Bootstrap 4</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Install Vue JS</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Install React JS</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="{{ route('basic.routing') }}"> Routing</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Resource Route</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Resource Controller</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Database Seeder</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Form Validation</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Ajax Form Validation</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Ajax Loading Spinner</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Middleware</a>
                        </li>
                    </ul>
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Ajax</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Fetch Data using Ajax</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Image Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Ajax Image Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> File Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#"> Multiple Image Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Pagination</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Ajax Pagination</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Cache Clear</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Carbon</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Model Observers</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Eloquent Relationships</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Model Events</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Authentication</a>
                        </li>
                    </ul>
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Email Verification</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Localization</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Mail</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Queue</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Tinker</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Collection</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Migration</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Soft Delete</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="advanced" class="tab-pane hidden bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Advanced Topics</h3>
                <div class="grid grid-cols-3 gap-6">
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Artisan Command </a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Route File </a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Middleware</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Validation Rule</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Error Page</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Helper function</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Helper facade</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Facade</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Config File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Log File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Flash Messages</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Notification</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Notification using Toastr JS</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Notification using Notify JS</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">SweetAlert</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Model Caching</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Comment System</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Follow UnFollow System</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Like DisLike System</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Reusable Component</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Scope</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Telescope</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Custom Directive</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Generate Unique Slug</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Memcached</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Send Mail on Exception</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Import CSV File using Queue</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Queue Supervisor Setup</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Stripe Checkout Payment</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Carousel Slider</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Contact US Page</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Google Translator</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Cookie Setup</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Pagination with Next and Previous</a>
                        </li>
                    </ul>
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Pagination from Array</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Pagination customize View</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Pagination - Infinite Scroll</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Pagination Pretty URL</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Mail using Markdown</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Mail using Queue</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Mail using Zoho Smtp</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Mail using SendGrid</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Mail using Mailgun</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Mail using Mailchimp</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Mail using Mailtrap</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Mail using Sendinblue</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Mail using MailJet</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">CMS Asgard</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">User Ban & Revoke</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Bail Rule</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Store Multi Select Value</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Copy File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Move File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Delete File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Session Lifetime</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Change Date Format</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Disable Register Routes</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Profile Image Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Exclude Route from CSRF Middleware</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Change Dynamic Mail Driver</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Send Scheduled Emails</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Country States City Dropdown</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">React JS Form Validation</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Cashier Stripe Subscription</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">E-Signature Docusign</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Pagination Serial Number</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Bootstrap Icon</a>
                        </li>
                    </ul>
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Country List with Flag</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Ajax Show Data in Modal</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Install Debugbar</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Event</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Trait</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Gates</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Cron Job</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Event BroadCasting</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Event Redis & Socket io</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Delete Record with Confirmbox</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Delete Record using Ajax</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Delete Multiple Record with Checkbox</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Components and Slots</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Multiple Database Connection</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Global Variable</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Migration Change Column Name</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Migration Remove Column</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Migration Change Table Name</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Migration Add Column in Existing Table</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Migration Add Foreign Key</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Migration Add Index</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Migration Add Enum</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Seeder with JSON File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Seeder with CSV File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Seeder US States</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">OpenAI API</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Validation Bail Rule</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Fallback Route</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Timezone List</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="package" class="tab-pane hidden bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Package Topics</h3>
                <div class="grid grid-cols-3 gap-6">
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Generate PDF File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Generate PDF File using TCPDF</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Generate PDF with Graph</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Generate PDF with Image</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Merge Multiple PDF File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Read PDF File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Ceate Word Document</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Import Export CSV File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Captcha</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Google ReCaptcha</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Cashier</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Passport</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Login with Google</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Login with Facebook</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Login with Twitter</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Login with Github</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Login with Linkedin</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">CORS Middleware</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Database Backup</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Install Adminer</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">API Testing Tool</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Generate QR Code</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Firebase Push Notification</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Firebase Phone Number Verification</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Firebase Push Notification on Android and IOS</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Signature Pad</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Circuit Breaker Pattern</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Send SMS with Nexmo</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Send SMS with Twilio</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Generate Barcode</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Generate QR Code</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">FullCalender Example</a>
                        </li>

                    </ul>
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Image Intervention</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">DropZone Image Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Crop Image before Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Resize Image Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Image Upload with CKeditor</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Image Upload with WaterMark</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Image Upload with Summernote</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Image Upload with Spatie's Media Library</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Algolia Search</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Typeahead Search</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Full Text Search</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Select2 Ajax Search</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Elastic Search</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">PayPal Integration</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Stripe Integration</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Razorpay Payment Gateway</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Botman Chatbot</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Shortener URL</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Yajra Datatables</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Datatables Server Side Process</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Datatables Custom Filter</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Datatables Dropdown Filter</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Datatables Date Sorting</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Datatables Action Button</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Datatables Export to Excel CSV</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Datatables Export to PDF</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">FCM Push Notification</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Install Moment JS</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Install FontAwesome</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Wysihtml5 Editor</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Summernote Editor</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">CKEditor Editor</a>
                        </li>

                    </ul>
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">CKEditor Image Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Livewire Example</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Chart using ConsoleTV</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Chart using Highcharts</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Chart using Google Chart</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Google Pie Chart</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Google Bar Chart</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Chart using Chart.JS</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Chart using LaraCharts</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Guzzle Http Request</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Curl Http Request</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Create Zip File</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Zip using Zipper</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Modular Structure</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Sitemap</a>
                        </li>

                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">RSS Feed</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">DropBox File Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Gravatar Image</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Inline Editing</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">File Manager</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Social Share Buttons</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Convert PDF to Image</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Webcam Capture Image</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Google Map</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Google Map Multiple Markers</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Multi Language Website</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Browser Screenshots Website</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="relationship" class="tab-pane hidden bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Relationship Topics</h3>
                <div class="grid grid-cols-2 gap-6">
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">One to One Relationship</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">One to Many Relationship</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Many to Many Relationship</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Has Many Through Relationship</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">One to Many Polymorphic Relationship</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Many to Many Polymorphic Relationship</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Eager Loading</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="query" class="tab-pane hidden bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Query Topics</h3>
                <div class="grid grid-cols-3 gap-6">
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Where Like</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">DB::Raw()</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Where Exists</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">orWhere Condition</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Multiple Where Condition</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Where with SQL Function</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Where with Date Format</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Where with Two Column</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">WhereDate</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">WhereDay</a>
                        </li>

                    </ul>
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">WhereMonth</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">WhereYear</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">firstWhere</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">WhereIn</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">WhereNotIn</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">WhereHas</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">orWhereHas</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">WhereKey</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">WhereIn</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">WhereNotIn</a>
                        </li>

                    </ul>
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Group By with Order By</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Order By Multiple Column</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Order By Random</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Group By with DB Raw</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Group By Multiple Column</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Where with Relationship</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Order By with Relationship</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Order By with Relationship Sum</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Eloquent Replicate</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">Query Execution Time</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="livewire" class="tab-pane hidden bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Livewire Topics</h3>
                <div class="grid grid-cols-3 gap-6">
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="{{ route('livewire.submit-form-request')}}">Submit Form Request</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="{{ route('livewire.change-event') }}">Change Event</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="{{ route('livewire.click-event') }}">Click Event</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="{{ route('livewire.sweetalert') }}">SweetAlert Example</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="{{ route('livewire.notification-demo') }}">Toastr Notification Example</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="{{ route('livewire.livewire-crud') }}">CRUD</a>
                        </li>
                        
                    </ul>
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="{{ route('livewire.dependant-dropdown') }}">Dependant Dropdown Example</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="#">Delete before Confirm</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="#">Wizard Form</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="#">Datatables Example</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="#">CRUD using Auth JetStream</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="#">using Auth JetStream</a>
                        </li>
                    </ul>
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="#">Load More Records</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="#">Image Upload</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="#">Pagination</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i> 
                            <a class="ms-2" href="#">File Upload</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="restapi" class="tab-pane hidden bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Rest API Topics</h3>
                <div class="grid grid-cols-2 gap-6">
                    <ul class="space-y-2 text-gray-700">
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">REST API Passport</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">REST API Sanctum</a>
                        </li>
                        <li>
                            <i class="fas fa-check text-green-500"></i>
                            <a class="ms-2" href="#">API SPA using Sanctum</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabButtons = document.querySelectorAll(".tab-btn");
            const tabPanes = document.querySelectorAll(".tab-pane");

            function activateTab(tab) {
                tabButtons.forEach(btn => btn.classList.remove("bg-indigo-500", "text-white"));
                tabPanes.forEach(pane => pane.classList.add("hidden"));

                tab.classList.add("bg-indigo-500", "text-white");
                document.getElementById(tab.dataset.tab).classList.remove("hidden");
            }

            tabButtons.forEach(button => {
                button.addEventListener("click", function() {
                    activateTab(this);
                });
            });

            // Set first tab as active by default
            activateTab(tabButtons[0]);
        });
    </script>
@endpush
