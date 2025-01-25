@extends('admin.layouts.app')

@section('content')
<div class="section-content-right">
                    <!-- header-dashboard -->
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="index.html">
                                    <img class="" id="logo_header_mobile" alt="" src="{{asset('admin/images/logo/logo.png')}}" data-light="{{asset('admin/images/logo/logo.png')}}" data-dark="{{asset(('admin/images/logo/logo-dark.png'))}}" data-width="154px" data-height="52px" data-retina="{{asset('admin/images/logo/logo@2x.png')}}">
                                </a>
                                <div class="button-show-hide">
                                    <i class="icon-menu-left"></i>
                                </div>
                                <form class="form-search flex-grow">
                                    <fieldset class="name">
                                        <input type="text" placeholder="Search here..." class="show-search" name="name" tabindex="2" value="" aria-required="true" required="">
                                    </fieldset>
                                    <div class="button-submit">
                                        <button class="" type="submit"><i class="icon-search"></i></button>
                                    </div>
                                    <div class="box-content-search" id="box-content-search">
                                        <ul class="mb-24">
                                            <li class="mb-14">
                                                <div class="body-title">Top selling product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('admin/images/products/17.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Dog Food Rachael Ray Nutrish®</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('admin/images/products/18.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Natural Dog Food Healthy Dog Food</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('admin/images/products/19.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Freshpet Healthy Dog Food and Cat</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="">
                                            <li class="mb-14">
                                                <div class="body-title">Order product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('admin/images/products/20.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Sojos Crunchy Natural Grain Free...</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('admin/images/products/21.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Kristin Watson</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('admin/images/products/22.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Mega Pumpkin Bone</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/23.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Mega Pumpkin Bone</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div class="header-grid">
                                <div class="header-item country">
                                    <select class="image-select no-text">
                                        <option data-thumbnail="{{ asset('admin/images/country/1.png') }}">ENG</option>
                                        <option data-thumbnail="{{ asset('admin/images/country/9.png') }}">VIE</option>
                                    </select>
                                </div>
                                <div class="header-item button-dark-light">
                                    <i class="icon-moon"></i>
                                </div>
                                <div class="popup-wrap noti type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-bell"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton1" >
                                            <li>
                                                <h6>Message</h6>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="{{ asset('admin/images/avatar/user-11.png') }}" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Cameron Williamson</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Hello?</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="{{ asset('admin/images/avatar/user-12.png') }}" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Ralph Edwards</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Are you there? interested in this...</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="{{ asset('admin/images/avatar/user-13.png') }}" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Eleanor Pena</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Interested in this loads?</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="{{ asset('admin/images/avatar/user-11.png') }}" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Jane Cooper</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Okay...Do we have a deal?</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="popup-wrap message type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-message-square"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton2" >
                                            <li>
                                                <h6>Notifications</h6>
                                            </li>
                                            <li>
                                                <div class="message-item item-1">
                                                    <div class="image">
                                                        <i class="icon-noti-1"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Discount available</div>
                                                        <div class="text-tiny">Morbi sapien massa, ultricies at rhoncus at, ullamcorper nec diam</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-2">
                                                    <div class="image">
                                                        <i class="icon-noti-2"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Account has been verified</div>
                                                        <div class="text-tiny">Mauris libero ex, iaculis vitae rhoncus et</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-3">
                                                    <div class="image">
                                                        <i class="icon-noti-3"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order shipped successfully</div>
                                                        <div class="text-tiny">Integer aliquam eros nec sollicitudin sollicitudin</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-4">
                                                    <div class="image">
                                                        <i class="icon-noti-4"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order pending: <span>ID 305830</span></div>
                                                        <div class="text-tiny">Ultricies at rhoncus at ullamcorper</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-item button-zoom-maximize">
                                    <div class="">
                                        <i class="icon-maximize"></i>
                                    </div>
                                </div>
                                <div class="popup-wrap apps type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <i class="icon-grid"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton4" >
                                            <li>
                                                <h6>Related apps</h6>
                                            </li>
                                            <li>
                                                <ul class="list-apps">
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="{{ asset('admin/images/apps/item-1.png') }}" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Photoshop</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="{{ asset('admin/images/apps/item-2.png') }}" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Illustrator</div>
                                                        </a>
                                                    </li>
                                                    <!-- Add other app items similarly -->
                                                </ul>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all app</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <img src="{{ asset('admin/images/avatar/user-1.png') }}" alt="">
                                                </span>
                                                <span class="flex flex-column">
                                                    <span class="body-title mb-2">Kristin Watson</span>
                                                    <span class="text-tiny">Admin</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3" >
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <div class="body-title-2">Account</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-mail"></i>
                                                    </div>
                                                    <div class="body-title-2">Inbox</div>
                                                    <div class="number">27</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-file-text"></i>
                                                    </div>
                                                    <div class="body-title-2">Taskboard</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="setting.html" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-settings"></i>
                                                    </div>
                                                    <div class="body-title-2">Setting</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-headphones"></i>
                                                    </div>
                                                    <div class="body-title-2">Support</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login.html" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-log-out"></i>
                                                    </div>
                                                    <div class="body-title-2">Log out</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="tf-section-4 mb-30">
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#22C55E"/>
                                                    </svg>
                                                    <i class="icon-shopping-bag"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Sales</div>
                                                    <h4>34,945</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending up">
                                                <i class="icon-trending-up"></i>
                                                <div class="body-title number">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-1"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#FF5200"/>
                                                    </svg>
                                                    <i class="icon-dollar-sign"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Income</div>
                                                    <h4>$37,802</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending down">
                                                <i class="icon-trending-down"></i>
                                                <div class="body-title number">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-2"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#CBD5E1"/>
                                                    </svg>
                                                    <i class="icon-file"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Orders Paid</div>
                                                    <h4>34,945</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending">
                                                <i class="icon-trending-up"></i>
                                                <div class="body-title number">0.00%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-3"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#2377FC"/>
                                                    </svg>
                                                    <i class="icon-users"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Visitor</div>
                                                    <h4>34,945</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending up">
                                                <i class="icon-trending-up"></i>
                                                <div class="body-title number">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-4"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                </div>
                                <div class="tf-section-5 mb-30">
                                    <!-- chart -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Recent Order</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="line-chart-5"></div>
                                    </div>
                                    <!-- /chart -->
                                    <!-- top-product -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Top Products</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">3 days</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">7 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-top-product">
                                            <ul class="flex flex-column gap14">
                                                <li class="product-item">
                                                    <div class="image">
                                                        <img src="{{ asset('admin/images/products/1.png') }}" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Patimax Fragrance Long...</a>
                                                            <div class="text-tiny mt-3">100 Items</div>
                                                        </div>
                                                        <div>
                                                            <div class="text-tiny mb-3">Coupon Code</div>
                                                            <div class="body-text">Sflat</div>
                                                        </div>
                                                        <div class="country">
                                                            <img src="{{ asset('admin/images/country/2.png') }}" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="body-title-2 mb-3">-15%</div>
                                                            <div class="text-tiny">$27.00</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image">
                                                        <img src="{{ asset('admin/images/products/2.png') }}" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Nulo MedalSeries Adult Cat...</a>
                                                            <div class="text-tiny mt-3">100 Items</div>
                                                        </div>
                                                        <div>
                                                            <div class="text-tiny mb-3">Coupon Code</div>
                                                            <div class="body-text">Sflat</div>
                                                        </div>
                                                        <div class="country">
                                                            <img src="{{ asset('admin/images/country/3.png') }}" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="body-title-2 mb-3">-15%</div>
                                                            <div class="text-tiny">$27.00</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image">
                                                        <img src="{{ asset('admin/images/products/3.png') }}" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Pedigree Puppy Dry Dog...</a>
                                                            <div class="text-tiny mt-3">100 Items</div>
                                                        </div>
                                                        <div>
                                                            <div class="text-tiny mb-3">Coupon Code</div>
                                                            <div class="body-text">Sflat</div>
                                                        </div>
                                                        <div class="country">
                                                            <img src="{{ asset('admin/images/country/1.png') }}" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="body-title-2 mb-3">-15%</div>
                                                            <div class="text-tiny">$27.00</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image">
                                                        <img src="{{ asset('admin/images/products/4.png') }}" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Biscoito Premier Cookie...</a>
                                                            <div class="text-tiny mt-3">100 Items</div>
                                                        </div>
                                                        <div>
                                                            <div class="text-tiny mb-3">Coupon Code</div>
                                                            <div class="body-text">Sflat</div>
                                                        </div>
                                                        <div class="country">
                                                            <img src="{{ asset('admin/images/country/4.png') }}" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="body-title-2 mb-3">-15%</div>
                                                            <div class="text-tiny">$27.00</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image">
                                                        <img src="{{ asset('admin/images/products/5.png') }}" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2 mb-3">Pedigree Adult Dry Dog...</a>
                                                            <div class="text-tiny">100 Items</div>
                                                        </div>
                                                        <div>
                                                            <div class="text-tiny mb-3">Coupon Code</div>
                                                            <div class="body-text">Sflat</div>
                                                        </div>
                                                        <div class="country">
                                                            <img src="{{ asset('admin/images/country/5.png') }}" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="body-title-2 mb-3">-15%</div>
                                                            <div class="text-tiny">$27.00</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /top-product -->
                                    <!-- top-countries -->
                                    <div class="wg-box">
    <div class="flex items-center justify-between">
        <h5>Top Countries By Sales</h5>
        <div class="dropdown default">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="view-all">View all<i class="icon-chevron-down"></i></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>  
                    <a href="javascript:void(0);">3 days</a>
                </li>
                <li>  
                    <a href="javascript:void(0);">7 days</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex items-center gap10">
        <h4>$37,802</h4>
        <div class="box-icon-trending up">
            <i class="icon-trending-up"></i>
            <div class="body-title number">1.56%</div>
        </div>
        <div class="text-tiny">since last weekend</div>
    </div>
    <ul class="flex flex-column justify-between gap10 h-full">
        <li class="country-item">
            <div class="image">
                <img src="{{ asset('admin/images/country/6.png') }}" alt="Turkish Flag">
            </div>
            <div class="flex-grow flex items-center justify-between">
                <a href="countries.html" class="body-text name">Turkish Flag</a>
                <div class="box-icon-trending up">
                    <i class="icon-trending-up"></i>
                </div>
                <div class="body-text number">6,972</div>
            </div>
        </li>
        <li class="country-item">
            <div class="image">
                <img src="{{ asset('admin/images/country/7.png') }}" alt="Belgium">
            </div>
            <div class="flex-grow flex items-center justify-between">
                <a href="countries.html" class="body-text name">Belgium</a>
                <div class="box-icon-trending up">
                    <i class="icon-trending-up"></i>
                </div>
                <div class="body-text number">6,972</div>
            </div>
        </li>
        <li class="country-item">
            <div class="image">
                <img src="{{ asset('admin/images/country/8.png') }}" alt="Sweden">
            </div>
            <div class="flex-grow flex items-center justify-between">
                <a href="countries.html" class="body-text name">Sweden</a>
                <div class="box-icon-trending down">
                    <i class="icon-trending-down"></i>
                </div>
                <div class="body-text number">6,972</div>
            </div>
        </li>
        <li class="country-item">
            <div class="image">
                <img src="{{ asset('admin/images/country/9.png') }}" alt="Vietnamese">
            </div>
            <div class="flex-grow flex items-center justify-between">
                <a href="countries.html" class="body-text name">Vietnamese</a>
                <div class="box-icon-trending up">
                    <i class="icon-trending-up"></i>
                </div>
                <div class="body-text number">6,972</div>
            </div>
        </li>
        <li class="country-item">
            <div class="image">
                <img src="{{ asset('admin/images/country/10.png') }}" alt="Australia">
            </div>
            <div class="flex-grow flex items-center justify-between">
                <a href="countries.html" class="body-text name">Australia</a>
                <div class="box-icon-trending down">
                    <i class="icon-trending-down"></i>
                </div>
                <div class="body-text number">6,972</div>
            </div>
        </li>
        <li class="country-item">
            <div class="image">
                <img src="{{ asset('admin/images/country/11.png') }}" alt="Saudi Arabia">
            </div>
            <div class="flex-grow flex items-center justify-between">
                <a href="countries.html" class="body-text name">Saudi Arabia</a>
                <div class="box-icon-trending down">
                    <i class="icon-trending-down"></i>
                </div>
                <div class="body-text number">6,972</div>
            </div>
        </li>
    </ul>
</div>

                                    <!-- /top-countries -->
                                </div>
                                <div class="tf-section-6 mb-30">
                                    <!-- best-shop-sellers -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Best Shop Sellers</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">3 days</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">7 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-best-shop-sellers">
                                            <ul class="table-title flex gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Shop</div>
                                                </li>    
                                                <li>
                                                    <div class="body-title">Categories</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Total</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Status</div>
                                                </li>
                                            </ul>
                                            <ul class="flex flex-column gap18">
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="{{asset('admin/images/shop/1.png')}}" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Robert</a>
                                                            <div class="text-tiny mt-4">73 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Kitchen, Pets</div>
                                                        <div class="body-text">$1,000</div>
                                                        <div class="flex items-center justify-between gap10">
                                                            <div class="progress-level-bar">
                                                                <span data-progress="29" data-max="70" class=""></span>
                                                            </div>
                                                            <div class="text-tiny">100%</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="{{asset('images/shop/2.png')}}" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Calvin</a>
                                                            <div class="text-tiny mt-4">66 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Health, Grocery</div>
                                                        <div class="body-text">$4,000</div>
                                                        <div class="flex items-center justify-between gap10">
                                                            <div class="progress-level-bar t1">
                                                                <span data-progress="59" data-max="70" class=""></span>
                                                            </div>
                                                            <div class="text-tiny">100%</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="{{asset('admin/images/shop/3.png')}}" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Dwight</a>
                                                            <div class="text-tiny mt-4">15,890 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Electronics</div>
                                                        <div class="body-text">$2,700</div>
                                                        <div class="flex items-center justify-between gap10">
                                                            <div class="progress-level-bar t2">
                                                                <span data-progress="29" data-max="70" class=""></span>
                                                            </div>
                                                            <div class="text-tiny">100%</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="{{'admin/images/shop/4.png'}}" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Cody</a>
                                                            <div class="text-tiny mt-4">15 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Movies, Music</div>
                                                        <div class="body-text">$2,100</div>
                                                        <div class="flex items-center justify-between gap10">
                                                            <div class="progress-level-bar">
                                                                <span data-progress="25" data-max="70" class=""></span>
                                                            </div>
                                                            <div class="text-tiny">100%</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="{{asset('admin/images/shop/5.png')}}" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Bruce</a>
                                                            <div class="text-tiny mt-4">127 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Sports, Fitness</div>
                                                        <div class="body-text">$4,400</div>
                                                        <div class="flex items-center justify-between gap10">
                                                            <div class="progress-level-bar t3">
                                                                <span data-progress="52" data-max="70" class=""></span>
                                                            </div>
                                                            <div class="text-tiny">100%</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="{{asset('admin/images/shop/6.png')}}" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Jorge</a>
                                                            <div class="text-tiny mt-4">30 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Toys, Baby</div>
                                                        <div class="body-text">$4,750</div>
                                                        <div class="flex items-center justify-between gap10">
                                                            <div class="progress-level-bar t4">
                                                                <span data-progress="23" data-max="70" class=""></span>
                                                            </div>
                                                            <div class="text-tiny">100%</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="{{asset('admin/images/shop/7.png')}}" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Kristin Watson</a>
                                                            <div class="text-tiny mt-4">93 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Gift Cards</div>
                                                        <div class="body-text">$1,000</div>
                                                        <div class="flex items-center justify-between gap10">
                                                            <div class="progress-level-bar t5">
                                                                <span data-progress="45" data-max="70" class=""></span>
                                                            </div>
                                                            <div class="text-tiny">100%</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /best-shop-sellers -->
                                    <!-- product-overview -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Product overview</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">3 days</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">7 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-product-overview">
                                            <ul class="table-title flex gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Name</div>
                                                </li>    
                                                <li>
                                                    <div class="body-title">Product ID</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Price</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Quantity</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Sale</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Revenue</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Status</div>
                                                </li>
                                            </ul>
                                            <ul class="flex flex-column gap10">
                                                <li class="product-item gap14">
                                                    <div class="image">
                                                        <img src="{{asset('admin/images/products/6.png')}}" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Soft Fluffy Cats</a>
                                                        </div>
                                                        <div class="body-text">#327</div>
                                                        <div class="body-text">$11.70</div>
                                                        <div class="body-text">28</div>
                                                        <div class="body-text">On sale</div>
                                                        <div class="body-text">$328.85</div>
                                                        <div class="block-not-available">Not Available</div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image">
                                                        <img src="images/products/7.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Taste of the Wild Formula Finder</a>
                                                        </div>
                                                        <div class="body-text">#380</div>
                                                        <div class="body-text">$8.99</div>
                                                        <div class="body-text">10</div>
                                                        <div class="body-text">On sale</div>
                                                        <div class="body-text">$105.55</div>
                                                        <div class="block-not-available">Not Available</div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image">
                                                        <img src="images/products/8.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Wellness Natural Food</a>
                                                        </div>
                                                        <div class="body-text">#126</div>
                                                        <div class="body-text">$5.22</div>
                                                        <div class="body-text">578</div>
                                                        <div class="body-text">--/--</div>
                                                        <div class="body-text">$202.87</div>
                                                        <div class="block-not-available">Not Available</div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image">
                                                        <img src="images/products/9.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Dog Food Rachael Ray</a>
                                                        </div>
                                                        <div class="body-text">#582</div>
                                                        <div class="body-text">$14.81</div>
                                                        <div class="body-text">36</div>
                                                        <div class="body-text">--/--</div>
                                                        <div class="body-text">$475.22</div>
                                                        <div>
                                                            <div class="block-available">Available</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image">
                                                        <img src="images/products/10.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Best Buddy Bits Dog Treats</a>
                                                        </div>
                                                        <div class="body-text">#293</div>
                                                        <div class="body-text">$6.48</div>
                                                        <div class="body-text">84</div>
                                                        <div class="body-text">--/--</div>
                                                        <div class="body-text">$219.78</div>
                                                        <div class="block-not-available">Not Available</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="flex items-center justify-between flex-wrap gap10">
                                            <div class="text-tiny">Showing 5 entries</div>
                                            <ul class="wg-pagination">
                                                <li>
                                                    <a href="#"><i class="icon-chevron-left"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /product-overview -->
                                </div>
                                <div class="tf-section-3">
                                    <!-- orders -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Orders</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-orders">
                                            <ul class="table-title flex gap10 mb-14">
                                                <li>
                                                    <div class="body-title">Product</div>
                                                </li>    
                                                <li>
                                                    <div class="body-title">Price</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Delivery date</div>
                                                </li>
                                            </ul>
                                            <ul class="flex flex-column gap18">
                                                <li class="product-item gap14">
                                                    <div class="image small">
                                                        <img src="images/products/11.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap10">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Prodotti per il tuo cane...</a>
                                                        </div>
                                                        <div class="body-text">20 Nov 2023</div>
                                                        <div class="body-text">20 Nov 2023</div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image small">
                                                        <img src="images/products/12.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap10">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Wholesome Pride...</a>
                                                        </div>
                                                        <div class="body-text">20 Nov 2023</div>
                                                        <div class="body-text">20 Nov 2023</div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image small">
                                                        <img src="images/products/13.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap10">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Beneful Baked Delights...</a>
                                                        </div>
                                                        <div class="body-text">20 Nov 2023</div>
                                                        <div class="body-text">20 Nov 2023</div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image small">
                                                        <img src="images/products/14.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap10">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Taste of the Wild...</a>
                                                        </div>
                                                        <div class="body-text">20 Nov 2023</div>
                                                        <div class="body-text">20 Nov 2023</div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image small">
                                                        <img src="images/products/15.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap10">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Canagan - Britain's...</a>
                                                        </div>
                                                        <div class="body-text">20 Nov 2023</div>
                                                        <div class="body-text">20 Nov 2023</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /orders -->
                                    <!-- earnings -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Earnings</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap gap40">
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t1"></div>
                                                        <div class="text-tiny">Revenue</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>$37,802</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t2"></div>
                                                        <div class="text-tiny">Profit</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>$28,305</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="line-chart-6"></div>
                                    </div>
                                    <!-- /earnings -->
                                    <!-- new-comment -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>New Comments</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="flex flex-column gap20 overflow-h">
                                            <li class="comment-item">
                                                <div class="image">
                                                    <img src="images/avatar/user-2.png" alt="">
                                                </div>
                                                <div class="">
                                                    <div class="mb-4 name">
                                                        <a href="all-user.html" class="body-title-2">Kathryn Murphy</a>
                                                    </div>
                                                    <div class="ratings mb-10">
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1"></i>
                                                    </div>
                                                    <div class="text-tiny">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec dolor vel est interdum</div>
                                                </div>
                                            </li>
                                            <li class="comment-item">
                                                <div class="image">
                                                    <img src="images/avatar/user-3.png" alt="">
                                                </div>
                                                <div class="">
                                                    <div class="mb-4 name">
                                                        <a href="all-user.html" class="body-title-2">Leslie Alexander</a>
                                                    </div>
                                                    <div class="ratings mb-10">
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1"></i>
                                                    </div>
                                                    <div class="text-tiny">Cras nec viverra justo, a mattis lacus. Vestibulum eleifend, leo sit amet aliquam laoreet, turpis leo vulputate orci</div>
                                                </div>
                                            </li>
                                            <li class="comment-item">
                                                <div class="image">
                                                    <img src="images/avatar/user-4.png" alt="">
                                                </div>
                                                <div class="">
                                                    <div class="mb-4 name">
                                                        <a href="all-user.html" class="body-title-2">Devon Lane</a>
                                                    </div>
                                                    <div class="ratings mb-10">
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1"></i>
                                                    </div>
                                                    <div class="text-tiny">Morbi eget commodo diam. Praesent dignissim purus ac turpis porta</div>
                                                </div>
                                            </li>
                                            <li class="comment-item">
                                                <div class="image">
                                                    <img src="images/avatar/user-5.png" alt="">
                                                </div>
                                                <div class="">
                                                    <div class="mb-4 name">
                                                        <a href="all-user.html" class="body-title-2">Eleanor Pena</a>
                                                    </div>
                                                    <div class="ratings mb-10">
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1"></i>
                                                    </div>
                                                    <div class="text-tiny">Phasellus et eros ullamcorper, efficitur eros eget, pharetra ante. Sed blandit risus vitae dolor feugiat, eu vulputate elit rhoncus</div>
                                                </div>
                                            </li>
                                            <li class="comment-item">
                                                <div class="image">
                                                    <img src="images/avatar/user-2.png" alt="">
                                                </div>
                                                <div class="">
                                                    <div class="mb-4 name">
                                                        <a href="all-user.html" class="body-title-2">Kathryn Murphy</a>
                                                    </div>
                                                    <div class="ratings mb-10">
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1"></i>
                                                    </div>
                                                    <div class="text-tiny">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec dolor vel est interdum</div>
                                                </div>
                                            </li>
                                            <li class="comment-item">
                                                <div class="image">
                                                    <img src="images/avatar/user-3.png" alt="">
                                                </div>
                                                <div class="">
                                                    <div class="mb-4 name">
                                                        <a href="all-user.html" class="body-title-2">Leslie Alexander</a>
                                                    </div>
                                                    <div class="ratings mb-10">
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1"></i>
                                                    </div>
                                                    <div class="text-tiny">Cras nec viverra justo, a mattis lacus. Vestibulum eleifend, leo sit amet aliquam laoreet, turpis leo vulputate orci</div>
                                                </div>
                                            </li>
                                            <li class="comment-item">
                                                <div class="image">
                                                    <img src="images/avatar/user-4.png" alt="">
                                                </div>
                                                <div class="">
                                                    <div class="mb-4 name">
                                                        <a href="all-user.html" class="body-title-2">Devon Lane</a>
                                                    </div>
                                                    <div class="ratings mb-10">
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1"></i>
                                                    </div>
                                                    <div class="text-tiny">Morbi eget commodo diam. Praesent dignissim purus ac turpis porta</div>
                                                </div>
                                            </li>
                                            <li class="comment-item">
                                                <div class="image">
                                                    <img src="images/avatar/user-5.png" alt="">
                                                </div>
                                                <div class="">
                                                    <div class="mb-4 name">
                                                        <a href="all-user.html" class="body-title-2">Eleanor Pena</a>
                                                    </div>
                                                    <div class="ratings mb-10">
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1 active"></i>
                                                        <i class="icon-star1"></i>
                                                    </div>
                                                    <div class="text-tiny">Phasellus et eros ullamcorper, efficitur eros eget, pharetra ante. Sed blandit risus vitae dolor feugiat, eu vulputate elit rhoncus</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /new-comment -->
                                </div>
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 Remos. Design with</div>
                            <i class="icon-heart"></i>
                            <div class="body-text">by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All rights reserved.</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
</div>
@endsection
