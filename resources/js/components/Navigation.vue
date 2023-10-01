<template>
    <div class="app-container app-theme-gray">
        <div class="app-main">
            <div class="app-sidebar-wrapper">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <img src="https://member.remotebisnis.com/img/iconrebi.png" class="rounded-circle rebi-small">
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                        </span>
                        </button>
                    </div>
                    <div class="scrollbar-sidebar scrollbar-container">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li>
                                    <router-link :to="{ name: 'home'}">
                                    <i class="metismenu-icon fa fa-home">
                                    </i>Home
                                    </router-link>
                                </li>
                                <li>
                                    <router-link :to="{ name: 'news'}">
                                    <i class="metismenu-icon pe-7s-news-paper">
                                    </i>News
                                    </router-link>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Bisnis Saya
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li><a href="index.html">Lead Affiliate</a></li>
                                        <li><a href="management-dashboard.html">KOMBI</a></li>
                                        <li><a href="advertisement-dashboard.html">Software</a></li>
                                        <li><a href="helpdesk-dashboard.html">Wedding Invitation</a></li>
                                        <li><a href="monitoring-dashboard.html">My Brand</a></li>
                                        <li><a href="crypto-dashboard.html">PLR REBI</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="metismenu-icon pe-7s-cart"></i>
                                    Merchandise
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="pages-login.html">
                                            <i class="metismenu-icon"></i>
                                            Login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-login-boxed.html">
                                            <i class="metismenu-icon">
                                            </i>Login Boxed
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">
                                            <i class="metismenu-icon">
                                            </i>Register
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-register-boxed.html">
                                            <i class="metismenu-icon">
                                            </i>Register Boxed
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-forgot-password.html">
                                            <i class="metismenu-icon">
                                            </i>Forgot Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-forgot-password-boxed.html">
                                            <i class="metismenu-icon">
                                            </i>Forgot Password Boxed
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">Materi</li>
                                <li>
                                    <router-link :to="{ name: 'panduan'}">
                                    <i class="metismenu-icon pe-7s-notebook">
                                    </i>Panduan
                                    </router-link>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="metismenu-icon pe-7s-video"></i>
                                    E-Course Gold
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                            <i class="metismenu-icon"></i>
                                            Buttons
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="elements-buttons-standard.html">
                                                    <i class="metismenu-icon">
                                                    </i>Standard
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="elements-buttons-pills.html">
                                                    <i class="metismenu-icon">
                                                    </i>Pills
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="elements-buttons-square.html">
                                                    <i class="metismenu-icon">
                                                    </i>Square
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="elements-buttons-shadow.html">
                                                    <i class="metismenu-icon">
                                                    </i>Shadow
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="elements-buttons-icons.html">
                                                    <i class="metismenu-icon">
                                                    </i>With Icons
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon">
                                            </i>Dropdowns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-icons.html">
                                            <i class="metismenu-icon">
                                            </i>Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-badges-labels.html">
                                            <i class="metismenu-icon">
                                            </i>Badges
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-cards.html">
                                            <i class="metismenu-icon">
                                            </i>Cards
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-loaders.html">
                                            <i class="metismenu-icon">
                                            </i>Loading Indicators
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-list-group.html">
                                            <i class="metismenu-icon">
                                            </i>List Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-navigation.html">
                                            <i class="metismenu-icon">
                                            </i>Navigation Menus
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-timelines.html">
                                            <i class="metismenu-icon">
                                            </i>Timeline
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-utilities.html">
                                            <i class="metismenu-icon">
                                            </i>Utilities
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="metismenu-icon pe-7s-bookmarks"></i>
                                    E-Book
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="components-tabs.html">
                                            <i class="metismenu-icon">
                                            </i>Tabs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-accordions.html">
                                            <i class="metismenu-icon">
                                            </i>Accordions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-notifications.html">
                                            <i class="metismenu-icon">
                                            </i>Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-modals.html">
                                            <i class="metismenu-icon">
                                            </i>Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-loading-blocks.html">
                                            <i class="metismenu-icon">
                                            </i>Loading Blockers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-progress-bar.html">
                                            <i class="metismenu-icon">
                                            </i>Progress Bar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-tooltips-popovers.html">
                                            <i class="metismenu-icon">
                                            </i>Tooltips &amp; Popovers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-carousel.html">
                                            <i class="metismenu-icon">
                                            </i>Carousel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-calendar.html">
                                            <i class="metismenu-icon">
                                            </i>Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-pagination.html">
                                            <i class="metismenu-icon">
                                            </i>Pagination
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-count-up.html">
                                            <i class="metismenu-icon">
                                            </i>Count Up
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-scrollable-elements.html">
                                            <i class="metismenu-icon">
                                            </i>Scrollable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-tree-view.html">
                                            <i class="metismenu-icon">
                                            </i>Tree View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-maps.html">
                                            <i class="metismenu-icon">
                                            </i>Maps
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-ratings.html">
                                            <i class="metismenu-icon">
                                            </i>Ratings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-image-crop.html">
                                            <i class="metismenu-icon">
                                            </i>Image Crop
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-guided-tours.html">
                                            <i class="metismenu-icon">
                                            </i>Guided Tours
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">Lainnya</li>
                                <li>
                                    <a href="#">
                                    <i class="metismenu-icon pe-7s-tools"></i>
                                    Tools
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="forms-controls.html">
                                            <i class="metismenu-icon">
                                            </i>Controls
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-layouts.html">
                                            <i class="metismenu-icon">
                                            </i>Layouts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-validation.html">
                                            <i class="metismenu-icon">
                                            </i>Validation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-wizard.html">
                                            <i class="metismenu-icon">
                                            </i>Wizard
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="metismenu-icon pe-7s-joy"></i>
                                    Template & Assets
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="forms-datepicker.html">
                                            <i class="metismenu-icon">
                                            </i>Datepicker
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-range-slider.html">
                                            <i class="metismenu-icon">
                                            </i>Range Slider
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-input-selects.html">
                                            <i class="metismenu-icon">
                                            </i>Input Selects
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-toggle-switch.html">
                                            <i class="metismenu-icon">
                                            </i>Toggle Switch
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-wysiwyg-editor.html">
                                            <i class="metismenu-icon">
                                            </i>WYSIWYG Editor
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-input-mask.html">
                                            <i class="metismenu-icon">
                                            </i>Input Mask
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-clipboard.html">
                                            <i class="metismenu-icon">
                                            </i>Clipboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-textarea-autosize.html">
                                            <i class="metismenu-icon">
                                            </i>Textarea Autosize
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <router-link :to="{ name: 'profile'}">
                                    <i class="metismenu-icon pe-7s-user">
                                    </i>Profile
                                    </router-link>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html">
                                    <i class="metismenu-icon pe-7s-comment">
                                    </i>Kritik/ Saran
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <img src="https://member.remotebisnis.com/img/iconrebi.png" class="rounded-circle rebi-small">
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                            <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                            </span>
                            </button>
                            <div class="app-header__menu">
                                <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                                </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-header">
                        <div class="page-title-heading">
                            {{ $route.meta.title }}
                            <div class="page-title-subheading">
                                member.remotebisnis.com
                            </div>
                        </div>
                        <div class="app-header-right">
                            <div class="search-wrapper">
                                <i class="search-icon-wrapper fa fa-search"></i>
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="header-dots">
                                    <div class="dropdown">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                        <i class="typcn typcn-th-large-outline"></i>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-danger">
                                                    <div class="menu-header-image opacity-4"></div>
                                                    <div class="menu-header-content text-white">
                                                        <h5 class="menu-header-title">Pintasan</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-menu grid-menu-xl grid-menu-3col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-bookmarks icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                        Panduan
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-display1 icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                        KOMBI
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="fa fa-heart icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                        Wedding Invitation
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-note2 icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                        PLR REBI
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-joy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                        Quick Interest
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-pen icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                        Copywriting
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 btn btn-link">
                                        <i class="typcn typcn-bell"></i>
                                        <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header mb-0">
                                                <div class="dropdown-menu-header-inner bg-danger">
                                                    <div class="menu-header-image opacity-5"></div>
                                                    <div class="menu-header-content text-light">
                                                        <h5 class="menu-header-title">News/ Notifikasi</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-events-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container ps">
                                                            <div class="p-3">
                                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                            </div>
                                                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">Tandai sudah dibaca</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                <img width="42" class="rounded" src="https://duniaundercover.files.wordpress.com/2022/12/lvab.gif" alt="">
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                                </a>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-danger">
                                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                                            <div class="menu-header-content text-left">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Nama user</div>
                                                                            <div class="widget-subheading opacity-8">sdfksjdflj@gmal.com</div>
                                                                        </div>
                                                                        <div class="widget-content-right mr-2">
                                                                            <button class="btn-pill btn-shadow btn-shine btn btn-danger">Profile
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scroll-area-xs" style="height: 250px;">
                                                        <div class="scrollbar-container ps">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item-header nav-item"><i class="fa fa-star"></i> Member Badge <small>*Scroll</small></li>
                                                            </ul>
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Badge</th>
                                                                        <th>Deskripsi</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="https://duniaundercover.files.wordpress.com/2022/12/rlv1.png" width="80px"></td>
                                                                        <td><b>Congrats</b><br>
                                                                            Pecah Telor !, Sudah melakukan 1 Closing Affiliate
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="https://duniaundercover.files.wordpress.com/2022/12/rlv2.png" width="80px"></td>
                                                                        <td><b>Bronze Badge</b><br>
                                                                            Sudah mendapatakan Closing Affiliate sekitar 2-20 orang
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="https://duniaundercover.files.wordpress.com/2022/12/rlv3.png" width="80px"></td>
                                                                        <td><b>Silver Badge</b><br>
                                                                            Sudah mendapatakan Closing Affiliate sekitar 21-30 orang
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="https://duniaundercover.files.wordpress.com/2022/12/rlv4.png" width="80px"></td>
                                                                        <td><b>Gold Badge</b><br>
                                                                            Sudah mendapatakan Closing Affiliate sekitar 31-50
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="https://duniaundercover.files.wordpress.com/2022/12/lvab.gif" width="80px"></td>
                                                                        <td><b>B.Gem Badge</b><br>
                                                                            Sudah mendapatakan Closing Affiliate lebih dari 50 dan dibawah 130
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="https://duniaundercover.files.wordpress.com/2022/12/lvad.gif" width="80px"></td>
                                                                        <td><b>Diamond</b><br>
                                                                            Sudah mendapatakan Closing Affiliate lebih dari 130 dan dibawah 250
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="https://duniaundercover.files.wordpress.com/2022/12/lvar.gif" width="80px"></td>
                                                                        <td><b>Ruby</b><br>
                                                                            Sudah mendapatakan Closing Affiliate lebih dari 250
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <p class="p-2">Untuk Anda yang sudah mencapai Badge <u>Gold Badge Keatas</u> akan memiliki akses ke halaman/fitur khusus yaitu Audience Insights REBI, ini berguna untuk melihat data yang telah di buat oleh Algoritma REBI, ini bisa menjadi acuan atau referensi Anda untuk melakukan promosi atau beriklan.<br><br> Halaman ini berisi data-data hasil Algoritma REBI seperti <b>Kota mana yang potensial, usia yang potensial, sumber traffic atau sosial media yang potensial untuk promosi dll</b>, Atau singkatnya fitur ini seperti Audience Insights di Facebook tapi versi REBI</p>

                                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                            </div>
                                                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider nav-item"></li>
                                                        <li class="nav-item-btn text-center nav-item">
                                                            <button class="btn-wide btn btn-warning btn-sm">
                                                            Keluar
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-header-overlay d-none animated fadeIn"></div>
                    </div>
                </div>
                <div class="app-inner-layout app-inner-layout-page">
                    <div class="app-inner-layout__wrapper">
                        <div class="app-inner-layout__content">
                            <div class="tab-content">
                                <router-view></router-view>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="header-megamenu nav">
                                        <li class="nav-item">
                                            <a class="nav-link" data-original-title="" title="">
                                                <small>Copyright © </small>
                                                <div class="badge badge-danger ml-0 ml-1">
                                                    <small>v8.8</small>
                                                </div>
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>


        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-outline-2x btn-outline-focus">
            <i class="fa fa-sync-alt icon-anim-pulse fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <a href="" class="themeoptions-heading text-success"><i class="fa-brands fa-whatsapp"></i> &nbsp; Bantuan..</a>
                        <h3 class="themeoptions-heading">Materi Rekomendasi</h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div style="height: 230px;overflow-y: scroll;">
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br>
                                    sld;fksdf <br></div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">Layout</h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="app-sidebar-full">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Full Sidebar</div>
                                                <div class="widget-subheading">Removes sidebar layout spacing.</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Menu Option
                            </div>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Pilih warna tema</h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light"></div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light"></div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light"></div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light"></div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light"></div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light"></div>
                                        <div class="divider"></div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light"></div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light"></div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light"></div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light"></div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light"></div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light"></div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light"></div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light"></div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light"></div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light"></div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light"></div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light"></div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light"></div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light"></div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light"></div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light"></div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light"></div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Background</h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="app-theme-white">
                                            White Theme
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class active" data-class="app-theme-gray">
                                            Gray Theme
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  watch: {
    $route(to) {
        document.title = to.meta.title + ' - Remote Bisnis' || 'Terdapat kesalahan..';
    }
  },
  mounted () {
    this.$Progress.finish()
    CKEDITOR.replace( 'editor1' )
  },
  created () {
    this.$Progress.start()
    this.$router.beforeEach((to, from, next) => {
      if (to.meta.progress !== undefined) {
        let meta = to.meta.progress
        this.$Progress.parseMeta(meta)
      }
      this.$Progress.start()
      next()
    })
    this.$router.afterEach((to, from) => {
      this.$Progress.finish()
    })
  }
}
</script>
