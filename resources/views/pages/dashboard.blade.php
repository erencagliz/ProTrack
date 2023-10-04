<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express Node.js & Flask Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href=""/>
    <title>Ana Sayfa | Triooz</title><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ tr_favicon() }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('trapp') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('trapp') }}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('trapp') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('trapp') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    @livewireStyles
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        @include('includes.sidebar')
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" style="" class="header align-items-stretch">
                <!--begin::Brand-->
                <div class="header-brand">
                    <!--begin::Logo-->
                    <a href="{{ route('dashboard') }}">
                        <img alt="Logo" src="{{ tr_light_logo() }}" class="h-25px h-lg-25px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Aside minimize-->
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr092.svg-->
                        <span class="svg-icon svg-icon-1 me-n1 minimize-default">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.3" x="8.5" y="11" width="12" height="2" rx="1" fill="currentColor" />
										<path d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z" fill="currentColor" />
										<path opacity="0.5" d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z" fill="currentColor" />
									</svg>
								</span>
                        <!--end::Svg Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                        <span class="svg-icon svg-icon-1 minimize-active">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="currentColor" />
										<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="currentColor" />
										<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="currentColor" />
									</svg>
								</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Aside minimize-->
                    <!--begin::Aside toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                        <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Aside toggle-->
                </div>
                <!--end::Brand-->
                <!--begin::Toolbar-->
                <div class="toolbar d-flex align-items-stretch">
                    <!--begin::Toolbar container-->
                    <div class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                        <!--begin::Page title-->
                        <div class="page-title d-flex justify-content-center flex-column me-5">
                            <!--begin::Title-->
                            <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Ana Sayfa</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Ana Sayfa</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Action group-->
                        <div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">
                            <!--begin::Action wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Label-->
                                <span class="fs-7 text-gray-700 fw-bold pe-3 d-none d-xxl-block">Hızlı Araçlar:</span>
                                <!--end::Label-->
                                @include('includes.quick-tools')
                            </div>
                            <!--end::Action wrapper-->
                            <!--begin::Theme mode-->
                            <div class="d-flex align-items-center">
                                <!--begin::Menu toggle-->
                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
                                    <span class="svg-icon theme-light-show svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
													<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
													<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
													<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
													<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
													<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
													<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
													<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
													<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
                                    <span class="svg-icon theme-dark-show svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
													<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
													<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
													<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--begin::Menu toggle-->
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="javascript:void(0);" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
													<span class="menu-icon" data-kt-element="icon">
														<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
														<span class="svg-icon svg-icon-3">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
																<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
																<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
																<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
																<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
																<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
																<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
																<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
																<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
															</svg>
														</span>
                                                        <!--end::Svg Icon-->
													</span>
                                            <span class="menu-title">Aydınlık</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="javascript:void(0);" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
													<span class="menu-icon" data-kt-element="icon">
														<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
														<span class="svg-icon svg-icon-3">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
																<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
																<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
																<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
															</svg>
														</span>
                                                        <!--end::Svg Icon-->
													</span>
                                            <span class="menu-title">Karanlık</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="javascript:void(0);" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Sistem</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Theme mode-->
                        </div>
                        <!--end::Action group-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xxl">
                        <!--begin::Navbar-->
                        <div class="card mb-6 mb-xl-9">
                            <div class="card-body pt-9 pb-0">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                                    <!--begin::Image-->
                                    <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                        <img class="mw-50px mw-lg-75px" src="{{ asset('trapp') }}/assets/media/svg/brand-logos/volicity-9.svg" alt="image" />
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Wrapper-->
                                    <div class="flex-grow-1">
                                        <!--begin::Head-->
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center mb-1">
                                                    <a href="javascript:void();" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">{{ $project->title }}</a>
                                                    <span class="badge badge-{{ tr_status_class($project->status) }} me-auto">{{ tr_status_beautify($project->status) }} Proje</span>
                                                </div>
                                                <!--end::Status-->
                                                <!--begin::Description-->
                                                <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400">{{ $project->description }}</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Head-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap justify-content-start">
                                            <!--begin::Stats-->
                                            <div class="d-flex flex-wrap">
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        @if(tr_project_daily_sales($project->id, 'quantity') > tr_sales_between_dates(['type' => 'project', 'project_id' => $project->id, 'returns' => 'quantity', 'start_date' => date('Y-m-d 00:00:00', strtotime('yesterday')), 'end_date' => date('Y-m-d 23:59:59', strtotime('yesterday'))]))
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Düne göre {{ tr_project_daily_sales($project->id, 'quantity') - tr_sales_between_dates(['type' => 'project', 'project_id' => $project->id, 'returns' => 'quantity', 'start_date' => date('Y-m-d 00:00:00', strtotime('yesterday')), 'end_date' => date('Y-m-d 23:59:59', strtotime('yesterday'))]) }} satış fazla var.">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        @else
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Düne göre {{ tr_project_daily_sales($project->id, 'quantity') - tr_sales_between_dates(['type' => 'project', 'project_id' => $project->id, 'returns' => 'quantity', 'start_date' => date('Y-m-d 00:00:00', strtotime('yesterday')), 'end_date' => date('Y-m-d 23:59:59', strtotime('yesterday'))]) }} satış az var.">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        @endif
                                                        <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ tr_project_daily_sales($project->id, 'quantity') }}">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Günlük Satış</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        @if(tr_project_weekly_sales($project->id, 'quantity') > tr_sales_between_dates(['type' => 'project', 'project_id' => $project->id, 'returns' => 'quantity', 'start_date' => date('Y-m-d 00:00:00', strtotime('last monday')), 'end_date' => date('Y-m-d 23:59:59', strtotime('last sunday'))]))
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Geçen haftaya göre {{ tr_project_weekly_sales($project->id, 'quantity') - tr_sales_between_dates(['type' => 'project', 'project_id' => $project->id, 'returns' => 'quantity', 'start_date' => date('Y-m-d 00:00:00', strtotime('last monday')), 'end_date' => date('Y-m-d 23:59:59', strtotime('last sunday'))]) }} satış fazla var.">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        @else
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Geçen haftaya göre {{ tr_project_weekly_sales($project->id, 'quantity') - tr_sales_between_dates(['type' => 'project', 'project_id' => $project->id, 'returns' => 'quantity', 'start_date' => date('Y-m-d 00:00:00', strtotime('last monday')), 'end_date' => date('Y-m-d 23:59:59', strtotime('last sunday'))]) }} satış az var.">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        @endif
                                                        <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ tr_project_weekly_sales($project->id, 'quantity') }}">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Haftalık Satış</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        @if(tr_project_monthly_sales($project->id, 'quantity') > tr_sales_between_dates(['type' => 'project', 'project_id' => $project->id, 'returns' => 'quantity', 'start_date' => date('Y-m-d 00:00:00', strtotime('first day of last month')), 'end_date' => date('Y-m-d 23:59:59', strtotime('last day of last month'))]))
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Geçen aya göre {{ tr_project_monthly_sales($project->id, 'quantity') - tr_sales_between_dates(['type' => 'project', 'project_id' => $project->id, 'returns' => 'quantity', 'start_date' => date('Y-m-d 00:00:00', strtotime('first day of last month')), 'end_date' => date('Y-m-d 23:59:59', strtotime('last day of last month'))]) }} satış fazla var.">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        @else
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Geçen aya göre {{ tr_project_monthly_sales($project->id, 'quantity') - tr_sales_between_dates(['type' => 'project', 'project_id' => $project->id, 'returns' => 'quantity', 'start_date' => date('Y-m-d 00:00:00', strtotime('first day of last month')), 'end_date' => date('Y-m-d 23:59:59', strtotime('last day of last month'))]) }} satış az var.">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        @endif
                                                        <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ tr_project_monthly_sales($project->id, 'quantity') }}">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Aylık Satış</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                            </div>
                                            <!--end::Stats-->
                                            <!--begin::Users-->
                                            <div class="symbol-group symbol-hover mb-3">
                                                @foreach($project_users as $user)
                                                    <!--begin::User-->
                                                    <a href="{{ route('users.edit', ['id' => $user->id]) }}">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="{{ $user->name.' '.$user->surname }}">
                                                            <img alt="Pic" src="{{ tr_user_image($user->id) }}" />
                                                        </div>
                                                    </a>
                                                    <!--end::User-->
                                                @endforeach

                                            </div>
                                            <!--end::Users-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Details-->
                                <div class="separator"></div>
                                <!--begin::Nav-->
                                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                    <!--begin::Nav item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary py-5 me-6 active" href="../../demo8/dist/apps/projects/project.html">Overview</a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary py-5 me-6" href="../../demo8/dist/apps/projects/targets.html">Targets</a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary py-5 me-6" href="../../demo8/dist/apps/projects/budget.html">Budget</a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary py-5 me-6" href="../../demo8/dist/apps/projects/users.html">Users</a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary py-5 me-6" href="../../demo8/dist/apps/projects/files.html">Files</a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary py-5 me-6" href="../../demo8/dist/apps/projects/activity.html">Activity</a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary py-5 me-6" href="../../demo8/dist/apps/projects/settings.html">Settings</a>
                                    </li>
                                    <!--end::Nav item-->
                                </ul>
                                <!--end::Nav-->
                            </div>
                        </div>
                        <!--end::Navbar-->
                        <!--begin::Row-->
                        <div class="row g-6 g-xl-9">
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Summary-->
                                <div class="card card-flush h-lg-100">
                                    <!--begin::Card header-->
                                    <div class="card-header mt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title flex-column">
                                            <h3 class="fw-bold mb-1">Proje Hedefleri</h3>
                                            @if($targets->count() == 0)
                                                <div class="fs-6 fw-semibold text-gray-400">Projeye ait devam eden hiç hedef yok.</div>
                                            @else
                                                <div class="fs-6 fw-semibold text-gray-400">Projeye ait devam eden {{ $targets->count() }} tane hedef var.</div>
                                            @endif
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <a href="{{ route('targets.listing', ['project_id' => $project->id]) }}" class="btn btn-light btn-sm">Hedefleri Görüntüle</a>
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body p-9 pt-5">
                                        <div id="kt_carousel_1_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel" data-bs-interval="8000">
                                            <!--begin::Carousel-->
                                            <div class="carousel-inner">
                                                @php $sayi1 = 0; @endphp
                                                @foreach($targets as $target)
                                                    @php
                                                        $sayi1++;
                                                        if ($target->type == 'project') {
                                                            $sales = tr_sales_between_dates([
                                                                'start_date' => date('Y-m-d 00:00:00', strtotime($target->start_date)),
                                                                'end_date' => date('Y-m-d 23:59:59', strtotime($target->end_date)),
                                                                'returns' => $target->target_type,
                                                                'project_id' => $target->project_id,
                                                                'type' => 'project',
                                                            ]);
                                                        } else {
                                                            $sales = tr_sales_between_dates([
                                                                'start_date' => date('Y-m-d 00:00:00', strtotime($target->start_date)),
                                                                'end_date' => date('Y-m-d 23:59:59', strtotime($target->end_date)),
                                                                'returns' => $target->target_type,
                                                                'office_id' => $target->office_id,
                                                                'project_id' => $target->project_id,
                                                                'type' => 'office',
                                                            ]);
                                                        }
                                                    @endphp
                                                    <!--begin::Item-->
                                                    <div class="carousel-item @if($sayi1 == 1) active @endif">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-wrap">
                                                            <!--begin::Chart-->
                                                            <div class="position-relative d-flex flex-center h-175px w-175px me-15">
                                                                <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                                                    <span class="fs-2qx fw-bold">{{ $target->target }}</span>
                                                                    <span class="fs-6 fw-semibold text-gray-400">Hedef</span>
                                                                </div>
                                                                <canvas id="chartproje{{ $target->id }}"></canvas>
                                                            </div>
                                                            <!--end::Chart-->
                                                            <!--begin::Labels-->
                                                            <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11">
                                                                <!--begin::Label-->
                                                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                                    <h3 class="d-flex justify-content-center">
                                                                        @if($target->type == 'team')
                                                                            Takım Hedefi <span class="badge badge-primary mx-2">{{ tr_office_title($target->office_id) }}</span>
                                                                        @elseif($target->type == 'project')
                                                                            Proje Hedefi
                                                                        @endif
                                                                    </h3>
                                                                </div>
                                                                <!--end::Label-->
                                                                <!--begin::Label-->
                                                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                                    <div class="bullet bg-success me-3"></div>
                                                                    <div class="text-gray-400">Yapılan Satış Sayısı</div>
                                                                    <div class="ms-auto fw-bold text-gray-700">{{ $sales }}</div>
                                                                </div>
                                                                <!--end::Label-->
                                                                <!--begin::Label-->
                                                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                                    <div class="bullet bg-custom-gray me-3"></div>
                                                                    <div class="text-gray-400">Kalan Satış Sayısı</div>
                                                                    <div class="ms-auto fw-bold text-gray-700">{{ $target->target - $sales }}</div>
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Labels-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                @endforeach
                                            </div>
                                            <!--end::Carousel-->

                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center justify-content-center flex-wrap pb-5">
                                                <!--begin::Carousel Indicators-->
                                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                                    @php $sayi2 = -1; @endphp
                                                    @foreach($targets as $target)
                                                        @php $sayi2++; @endphp
                                                        <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="{{ $sayi2 }}" class="ms-1 @if($sayi2 == 0) active @endif"></li>
                                                    @endforeach
                                                </ol>
                                                <!--end::Carousel Indicators-->
                                            </div>
                                            <!--end::Heading-->
                                        </div>

                                        <!--begin::Notice-->
                                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-semibold">
                                                    <div class="fs-6 text-gray-700">
                                                        <a href="#" class="fw-bold me-1">Invite New .NET Collaborators</a>to create great outstanding business to business .jsp modutr class scripts</div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Summary-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Graph-->
                                <div class="card card-flush h-lg-100">
                                    <!--begin::Card header-->
                                    <div class="card-header mt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title flex-column">
                                            <h3 class="fw-bold mb-1">Tasks Over Time</h3>
                                            <!--begin::Labels-->
                                            <div class="fs-6 d-flex text-gray-400 fs-6 fw-semibold">
                                                <!--begin::Label-->
                                                <div class="d-flex align-items-center me-6">
														<span class="menu-bullet d-flex align-items-center me-2">
															<span class="bullet bg-success"></span>
														</span>Complete</div>
                                                <!--end::Label-->
                                                <!--begin::Label-->
                                                <div class="d-flex align-items-center">
														<span class="menu-bullet d-flex align-items-center me-2">
															<span class="bullet bg-primary"></span>
														</span>Incomplete</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Labels-->
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Select-->
                                            <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                                <option value="1">2020 Q1</option>
                                                <option value="2">2020 Q2</option>
                                                <option value="3" selected="selected">2020 Q3</option>
                                                <option value="4">2020 Q4</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-10 pb-0 px-5">
                                        <!--begin::Chart-->
                                        <div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Graph-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Card-->
                                <div class="card card-flush h-lg-100">
                                    <!--begin::Card header-->
                                    <div class="card-header mt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title flex-column">
                                            <h3 class="fw-bold mb-1">What's on the road?</h3>
                                            <div class="fs-6 text-gray-400">Total 482 participants</div>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Select-->
                                            <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                                <option value="1" selected="selected">Options</option>
                                                <option value="2">Option 1</option>
                                                <option value="3">Option 2</option>
                                                <option value="4">Option 3</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body p-9 pt-4">
                                        <!--begin::Dates-->
                                        <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                                            <!--begin::Date-->
                                            <li class="nav-item me-1">
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                                    <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                    <span class="fs-6 fw-bold">22</span>
                                                </a>
                                            </li>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <li class="nav-item me-1">
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                                    <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                    <span class="fs-6 fw-bold">23</span>
                                                </a>
                                            </li>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <li class="nav-item me-1">
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                                    <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                    <span class="fs-6 fw-bold">24</span>
                                                </a>
                                            </li>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <li class="nav-item me-1">
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                                    <span class="opacity-50 fs-7 fw-semibold">We</span>
                                                    <span class="fs-6 fw-bold">25</span>
                                                </a>
                                            </li>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <li class="nav-item me-1">
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                                    <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                                    <span class="fs-6 fw-bold">26</span>
                                                </a>
                                            </li>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <li class="nav-item me-1">
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                                    <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                                    <span class="fs-6 fw-bold">27</span>
                                                </a>
                                            </li>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <li class="nav-item me-1">
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                                    <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                                    <span class="fs-6 fw-bold">28</span>
                                                </a>
                                            </li>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <li class="nav-item me-1">
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                                    <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                    <span class="fs-6 fw-bold">29</span>
                                                </a>
                                            </li>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <li class="nav-item me-1">
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                                    <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                    <span class="fs-6 fw-bold">30</span>
                                                </a>
                                            </li>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <li class="nav-item me-1">
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                                    <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                    <span class="fs-6 fw-bold">31</span>
                                                </a>
                                            </li>
                                            <!--end::Date-->
                                        </ul>
                                        <!--end::Dates-->
                                        <!--begin::Tab Content-->
                                        <div class="tab-content">
                                            <!--begin::Day-->
                                            <div id="kt_schedule_day_0" class="tab-pane fade show">
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">10:00 - 11:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Walter White</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">10:00 - 11:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Peter Marcus</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">13:00 - 14:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Bob Harris</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Day-->
                                            <!--begin::Day-->
                                            <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">14:30 - 15:30
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Mark Randall</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">12:00 - 13:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Terry Robins</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">11:00 - 11:45
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Karina Clarke</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Day-->
                                            <!--begin::Day-->
                                            <div id="kt_schedule_day_2" class="tab-pane fade show">
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">10:00 - 11:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Terry Robins</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">11:00 - 11:45
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Mark Randall</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">9:00 - 10:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Peter Marcus</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Day-->
                                            <!--begin::Day-->
                                            <div id="kt_schedule_day_3" class="tab-pane fade show">
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">10:00 - 11:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Karina Clarke</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">12:00 - 13:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Michael Walters</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">14:30 - 15:30
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Walter White</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Day-->
                                            <!--begin::Day-->
                                            <div id="kt_schedule_day_4" class="tab-pane fade show">
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">10:00 - 11:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Peter Marcus</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">9:00 - 10:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Kendell Trevor</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">14:30 - 15:30
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Naomi Hayabusa</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Day-->
                                            <!--begin::Day-->
                                            <div id="kt_schedule_day_5" class="tab-pane fade show">
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">9:00 - 10:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Walter White</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">11:00 - 11:45
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Bob Harris</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">16:30 - 17:30
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Michael Walters</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Day-->
                                            <!--begin::Day-->
                                            <div id="kt_schedule_day_6" class="tab-pane fade show">
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">12:00 - 13:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Mark Randall</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">12:00 - 13:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Yannis Gloverson</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">16:30 - 17:30
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Mark Randall</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Day-->
                                            <!--begin::Day-->
                                            <div id="kt_schedule_day_7" class="tab-pane fade show">
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">12:00 - 13:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Yannis Gloverson</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">13:00 - 14:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Naomi Hayabusa</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">11:00 - 11:45
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Peter Marcus</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Day-->
                                            <!--begin::Day-->
                                            <div id="kt_schedule_day_8" class="tab-pane fade show">
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">10:00 - 11:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Naomi Hayabusa</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">14:30 - 15:30
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Terry Robins</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">11:00 - 11:45
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Mark Randall</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Day-->
                                            <!--begin::Day-->
                                            <div id="kt_schedule_day_9" class="tab-pane fade show">
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">10:00 - 11:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">David Stevenson</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">10:00 - 11:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Terry Robins</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Time-->
                                                <div class="d-flex flex-stack position-relative mt-8">
                                                    <!--begin::Bar-->
                                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                    <!--end::Bar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-5 text-gray-600">
                                                        <!--begin::Time-->
                                                        <div class="fs-5">12:00 - 13:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                        <!--end::Time-->
                                                        <!--begin::Title-->
                                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                        <!--end::Title-->
                                                        <!--begin::User-->
                                                        <div class="text-gray-400">Lead by
                                                            <a href="#">Bob Harris</a></div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Day-->
                                        </div>
                                        <!--end::Tab Content-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Card-->
                                <div class="card card-flush h-lg-100">
                                    <!--begin::Card header-->
                                    <div class="card-header mt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title flex-column">
                                            <h3 class="fw-bold mb-1">Latest Files</h3>
                                            <div class="fs-6 text-gray-400">Total 382 fiels, 2,6GB space usage</div>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body p-9 pt-3">
                                        <!--begin::Files-->
                                        <div class="d-flex flex-column mb-9">
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <img alt="Icon" src="{{ asset('trapp') }}/assets/media/svg/files/pdf.svg" />
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Details-->
                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Project tech requirements</a>
                                                    <div class="text-gray-400">2 days ago
                                                        <a href="#">Karina Clark</a></div>
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Menu-->
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                    <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	</g>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_637dfa22d270c">
                                                    <!--begin::Header-->
                                                    <div class="px-7 py-5">
                                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator border-gray-200"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Form-->
                                                    <div class="px-7 py-5">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Status:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <div>
                                                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_637dfa22d270c" data-allow-clear="true">
                                                                    <option></option>
                                                                    <option value="1">Approved</option>
                                                                    <option value="2">Pending</option>
                                                                    <option value="2">In Process</option>
                                                                    <option value="2">Rejected</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Member Type:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Options-->
                                                            <div class="d-flex">
                                                                <!--begin::Options-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                                    <span class="form-check-label">Author</span>
                                                                </label>
                                                                <!--end::Options-->
                                                                <!--begin::Options-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                    <span class="form-check-label">Customer</span>
                                                                </label>
                                                                <!--end::Options-->
                                                            </div>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Notifications:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Switch-->
                                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                <label class="form-check-label">Enabled</label>
                                                            </div>
                                                            <!--end::Switch-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex justify-content-end">
                                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <img alt="Icon" src="{{ asset('trapp') }}/assets/media/svg/files/doc.svg" />
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Details-->
                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Create FureStibe branding proposal</a>
                                                    <div class="text-gray-400">Due in 1 day
                                                        <a href="#">Marcus Blake</a></div>
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Menu-->
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                    <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	</g>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_637dfa22d4ba3">
                                                    <!--begin::Header-->
                                                    <div class="px-7 py-5">
                                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator border-gray-200"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Form-->
                                                    <div class="px-7 py-5">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Status:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <div>
                                                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_637dfa22d4ba3" data-allow-clear="true">
                                                                    <option></option>
                                                                    <option value="1">Approved</option>
                                                                    <option value="2">Pending</option>
                                                                    <option value="2">In Process</option>
                                                                    <option value="2">Rejected</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Member Type:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Options-->
                                                            <div class="d-flex">
                                                                <!--begin::Options-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                                    <span class="form-check-label">Author</span>
                                                                </label>
                                                                <!--end::Options-->
                                                                <!--begin::Options-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                    <span class="form-check-label">Customer</span>
                                                                </label>
                                                                <!--end::Options-->
                                                            </div>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Notifications:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Switch-->
                                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                <label class="form-check-label">Enabled</label>
                                                            </div>
                                                            <!--end::Switch-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex justify-content-end">
                                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <img alt="Icon" src="{{ asset('trapp') }}/assets/media/svg/files/css.svg" />
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Details-->
                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Completed Project Stylings</a>
                                                    <div class="text-gray-400">Due in 1 day
                                                        <a href="#">Terry Barry</a></div>
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Menu-->
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                    <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	</g>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_637dfa22d6fd7">
                                                    <!--begin::Header-->
                                                    <div class="px-7 py-5">
                                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator border-gray-200"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Form-->
                                                    <div class="px-7 py-5">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Status:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <div>
                                                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_637dfa22d6fd7" data-allow-clear="true">
                                                                    <option></option>
                                                                    <option value="1">Approved</option>
                                                                    <option value="2">Pending</option>
                                                                    <option value="2">In Process</option>
                                                                    <option value="2">Rejected</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Member Type:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Options-->
                                                            <div class="d-flex">
                                                                <!--begin::Options-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                                    <span class="form-check-label">Author</span>
                                                                </label>
                                                                <!--end::Options-->
                                                                <!--begin::Options-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                    <span class="form-check-label">Customer</span>
                                                                </label>
                                                                <!--end::Options-->
                                                            </div>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Notifications:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Switch-->
                                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                <label class="form-check-label">Enabled</label>
                                                            </div>
                                                            <!--end::Switch-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex justify-content-end">
                                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-30px me-5">
                                                    <img alt="Icon" src="{{ asset('trapp') }}/assets/media/svg/files/ai.svg" />
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Details-->
                                                <div class="fw-semibold">
                                                    <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Create Project Wireframes</a>
                                                    <div class="text-gray-400">Due in 3 days
                                                        <a href="#">Roth Bloom</a></div>
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Menu-->
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                    <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	</g>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_637dfa22d8c4e">
                                                    <!--begin::Header-->
                                                    <div class="px-7 py-5">
                                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator border-gray-200"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Form-->
                                                    <div class="px-7 py-5">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Status:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <div>
                                                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_637dfa22d8c4e" data-allow-clear="true">
                                                                    <option></option>
                                                                    <option value="1">Approved</option>
                                                                    <option value="2">Pending</option>
                                                                    <option value="2">In Process</option>
                                                                    <option value="2">Rejected</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Member Type:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Options-->
                                                            <div class="d-flex">
                                                                <!--begin::Options-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                                    <span class="form-check-label">Author</span>
                                                                </label>
                                                                <!--end::Options-->
                                                                <!--begin::Options-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                    <span class="form-check-label">Customer</span>
                                                                </label>
                                                                <!--end::Options-->
                                                            </div>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-semibold">Notifications:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Switch-->
                                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                <label class="form-check-label">Enabled</label>
                                                            </div>
                                                            <!--end::Switch-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex justify-content-end">
                                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                        </div>
                                        <!--end::Files-->
                                        <!--begin::Notice-->
                                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: svg/files/upload.svg-->
                                            <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.25" d="M8.375 11.167C8.375 6.54161 12.1246 2.79199 16.75 2.79199H43.9893C46.2105 2.79199 48.3407 3.67436 49.9113 5.24497L56.172 11.5057C57.7426 13.0763 58.625 15.2065 58.625 17.4277V55.8337C58.625 60.459 54.8754 64.2087 50.25 64.2087H16.75C12.1246 64.2087 8.375 60.459 8.375 55.8337V11.167Z" fill="#00A3FF" />
															<path d="M41.875 5.28162C41.875 3.90663 42.9896 2.79199 44.3646 2.79199V2.79199C46.3455 2.79199 48.2452 3.57889 49.6459 4.97957L56.4374 11.7711C57.8381 13.1718 58.625 15.0715 58.625 17.0524V17.0524C58.625 18.4274 57.5104 19.542 56.1354 19.542H44.6667C43.1249 19.542 41.875 18.2921 41.875 16.7503V5.28162Z" fill="#00A3FF" />
															<path d="M32.4311 25.3368C32.1018 25.4731 31.7933 25.675 31.5257 25.9427L23.1507 34.3177C22.0605 35.4079 22.0605 37.1755 23.1507 38.2657C24.2409 39.3559 26.0085 39.3559 27.0987 38.2657L30.708 34.6563V47.4583C30.708 49.0001 31.9579 50.25 33.4997 50.25C35.0415 50.25 36.2913 49.0001 36.2913 47.4583V34.6563L39.9007 38.2657C40.9909 39.3559 42.7585 39.3559 43.8487 38.2657C44.9389 37.1755 44.9389 35.4079 43.8487 34.3177L35.4737 25.9427C34.6511 25.1201 33.443 24.9182 32.4311 25.3368Z" fill="#00A3FF" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-semibold">
                                                    <h4 class="text-gray-900 fw-bold">Quick file uploader</h4>
                                                    <div class="fs-6 text-gray-700">Drag & Drop or choose files from computer</div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Card body -->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Card-->
                                <div class="card card-flush h-lg-100">
                                    <!--begin::Card header-->
                                    <div class="card-header mt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title flex-column">
                                            <h3 class="fw-bold mb-1">New Contibutors</h3>
                                            <div class="fs-6 text-gray-400">From total 482 Participants</div>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card toolbar-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Avatar-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Image-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-6.jpg" />
                                                </div>
                                                <!--end::Image-->
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="fw-semibold">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith</a>
                                                <div class="text-gray-400">8 Pending & 97 Completed Tasks</div>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Badge-->
                                            <div class="badge badge-light ms-auto">5</div>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Avatar-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Image-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Online-->
                                                <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                <!--end::Online-->
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="fw-semibold">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy</a>
                                                <div class="text-gray-400">5 Pending & 84 Completed</div>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Badge-->
                                            <div class="badge badge-light ms-auto">8</div>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Avatar-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Image-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-1.jpg" />
                                                </div>
                                                <!--end::Image-->
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="fw-semibold">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith</a>
                                                <div class="text-gray-400">9 Pending & 103 Completed</div>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Badge-->
                                            <div class="badge badge-light ms-auto">9</div>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <!--begin::Avatar-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Image-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-5.jpg" />
                                                </div>
                                                <!--end::Image-->
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="fw-semibold">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean</a>
                                                <div class="text-gray-400">3 Pending & 55 Completed</div>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Badge-->
                                            <div class="badge badge-light ms-auto">3</div>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Image-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-25.jpg" />
                                                </div>
                                                <!--end::Image-->
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="fw-semibold">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox</a>
                                                <div class="text-gray-400">4 Pending & 115 Completed</div>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Badge-->
                                            <div class="badge badge-light ms-auto">4</div>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Tasks-->
                                <div class="card card-flush h-lg-100">
                                    <!--begin::Card header-->
                                    <div class="card-header mt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title flex-column">
                                            <h3 class="fw-bold mb-1">My Tasks</h3>
                                            <div class="fs-6 text-gray-400">Total 25 tasks in backlog</div>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column mb-9 p-9 pt-3">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center position-relative mb-7">
                                            <!--begin::Label-->
                                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                            <!--end::Label-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Details-->
                                            <div class="fw-semibold">
                                                <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Create FureStibe branding logo</a>
                                                <!--begin::Info-->
                                                <div class="text-gray-400">Due in 1 day
                                                    <a href="#">Karina Clark</a></div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Menu-->
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_637dfa22e3857">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Menu separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Form-->
                                                <div class="px-7 py-5">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Status:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div>
                                                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_637dfa22e3857" data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Options-->
                                                        <div class="d-flex">
                                                            <!--begin::Options-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Switch-->
                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                        <!--end::Switch-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Menu 1-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center position-relative mb-7">
                                            <!--begin::Label-->
                                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                            <!--end::Label-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Details-->
                                            <div class="fw-semibold">
                                                <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>
                                                <!--begin::Info-->
                                                <div class="text-gray-400">Due in 3 days
                                                    <a href="#">Rober Doe</a></div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Menu-->
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_637dfa22e5fd7">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Menu separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Form-->
                                                <div class="px-7 py-5">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Status:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div>
                                                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_637dfa22e5fd7" data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Options-->
                                                        <div class="d-flex">
                                                            <!--begin::Options-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Switch-->
                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                        <!--end::Switch-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Menu 1-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center position-relative mb-7">
                                            <!--begin::Label-->
                                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                            <!--end::Label-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Details-->
                                            <div class="fw-semibold">
                                                <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">9 Degree Porject Estimation</a>
                                                <!--begin::Info-->
                                                <div class="text-gray-400">Due in 1 week
                                                    <a href="#">Neil Owen</a></div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Menu-->
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_637dfa22e806f">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Menu separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Form-->
                                                <div class="px-7 py-5">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Status:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div>
                                                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_637dfa22e806f" data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Options-->
                                                        <div class="d-flex">
                                                            <!--begin::Options-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Switch-->
                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                        <!--end::Switch-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Menu 1-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center position-relative mb-7">
                                            <!--begin::Label-->
                                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                            <!--end::Label-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Details-->
                                            <div class="fw-semibold">
                                                <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Dashgboard UI & UX for Leafr CRM</a>
                                                <!--begin::Info-->
                                                <div class="text-gray-400">Due in 1 week
                                                    <a href="#">Olivia Wild</a></div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Menu-->
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_637dfa22eab6d">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Menu separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Form-->
                                                <div class="px-7 py-5">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Status:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div>
                                                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_637dfa22eab6d" data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Options-->
                                                        <div class="d-flex">
                                                            <!--begin::Options-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Switch-->
                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                        <!--end::Switch-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Menu 1-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center position-relative">
                                            <!--begin::Label-->
                                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                            <!--end::Label-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Details-->
                                            <div class="fw-semibold">
                                                <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Mivy App R&D, Meeting with clients</a>
                                                <!--begin::Info-->
                                                <div class="text-gray-400">Due in 2 weeks
                                                    <a href="#">Sean Bean</a></div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Menu-->
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_637dfa22ecc6a">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Menu separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Form-->
                                                <div class="px-7 py-5">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Status:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div>
                                                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_637dfa22ecc6a" data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Options-->
                                                        <div class="d-flex">
                                                            <!--begin::Options-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Switch-->
                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                        <!--end::Switch-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Menu 1-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Tasks-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Table-->
                        <div class="card card-flush mt-6 mt-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header mt-5">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bold mb-1">Project Spendings</h3>
                                    <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div>
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar my-1">
                                    <!--begin::Select-->
                                    <div class="me-6 my-1">
                                        <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                            <option value="All" selected="selected">All time</option>
                                            <option value="thisyear">This year</option>
                                            <option value="thismonth">This month</option>
                                            <option value="lastmonth">Last month</option>
                                            <option value="last90days">Last 90 days</option>
                                        </select>
                                    </div>
                                    <!--end::Select-->
                                    <!--begin::Select-->
                                    <div class="me-4 my-1">
                                        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                            <option value="All" selected="selected">All Orders</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Declined">Declined</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="In Transit">In Transit</option>
                                        </select>
                                    </div>
                                    <!--end::Select-->
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-3 position-absolute ms-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                        <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                        <!--begin::Head-->
                                        <thead class="fs-7 text-gray-400 text-uppercase">
                                        <tr>
                                            <th class="min-w-250px">Manager</th>
                                            <th class="min-w-150px">Date</th>
                                            <th class="min-w-90px">Amount</th>
                                            <th class="min-w-90px">Status</th>
                                            <th class="min-w-50px text-end">Details</th>
                                        </tr>
                                        </thead>
                                        <!--end::Head-->
                                        <!--begin::Body-->
                                        <tbody class="fs-6">
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-6.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                        <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Oct 25, 2022</td>
                                            <td>$416.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
                                                        <div class="fw-semibold text-gray-400">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Apr 15, 2022</td>
                                            <td>$862.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                                        <div class="fw-semibold text-gray-400">max@kt.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 24, 2022</td>
                                            <td>$516.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-5.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                        <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Oct 25, 2022</td>
                                            <td>$991.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-25.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                                        <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Sep 22, 2022</td>
                                            <td>$666.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                                        <div class="fw-semibold text-gray-400">mik@pex.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Dec 20, 2022</td>
                                            <td>$943.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-9.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                                        <div class="fw-semibold text-gray-400">f.mit@kpmg.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Oct 25, 2022</td>
                                            <td>$691.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                        <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 20, 2022</td>
                                            <td>$486.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                                        <div class="fw-semibold text-gray-400">owen.neil@gmail.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 20, 2022</td>
                                            <td>$496.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-23.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
                                                        <div class="fw-semibold text-gray-400">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Dec 20, 2022</td>
                                            <td>$711.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                                        <div class="fw-semibold text-gray-400">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>May 05, 2022</td>
                                            <td>$961.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-12.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                                        <div class="fw-semibold text-gray-400">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 20, 2022</td>
                                            <td>$796.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
                                                        <div class="fw-semibold text-gray-400">robert@benko.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2022</td>
                                            <td>$714.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-13.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                        <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Sep 22, 2022</td>
                                            <td>$638.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                                        <div class="fw-semibold text-gray-400">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Aug 19, 2022</td>
                                            <td>$678.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-21.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                                        <div class="fw-semibold text-gray-400">ethan@loop.com.au</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Aug 19, 2022</td>
                                            <td>$433.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                                        <div class="fw-semibold text-gray-400">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2022</td>
                                            <td>$738.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                                        <div class="fw-semibold text-gray-400">max@kt.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 24, 2022</td>
                                            <td>$711.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-6.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                        <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Nov 10, 2022</td>
                                            <td>$701.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-12.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                                        <div class="fw-semibold text-gray-400">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 24, 2022</td>
                                            <td>$982.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-25.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                                        <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Nov 10, 2022</td>
                                            <td>$669.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
                                                        <div class="fw-semibold text-gray-400">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Oct 25, 2022</td>
                                            <td>$417.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                                        <div class="fw-semibold text-gray-400">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Mar 10, 2022</td>
                                            <td>$617.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-13.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                        <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Mar 10, 2022</td>
                                            <td>$552.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-13.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                        <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Sep 22, 2022</td>
                                            <td>$597.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-12.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                                        <div class="fw-semibold text-gray-400">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>May 05, 2022</td>
                                            <td>$746.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                                        <div class="fw-semibold text-gray-400">mik@pex.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>May 05, 2022</td>
                                            <td>$679.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                                        <div class="fw-semibold text-gray-400">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Feb 21, 2022</td>
                                            <td>$991.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-23.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
                                                        <div class="fw-semibold text-gray-400">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Apr 15, 2022</td>
                                            <td>$775.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('trapp') }}/assets/media/avatars/300-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                                        <div class="fw-semibold text-gray-400">max@kt.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Dec 20, 2022</td>
                                            <td>$598.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted fw-semibold me-1">&copy; {{ date('Y') }}</span>
                        <a href="javascript:void(0);" class="text-gray-800 text-hover-primary">trApp</a>
                    </div>
                    <!--end::Copyright-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->

<!--begin::Scrolltop-->
@include('includes.drawers')<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
        </svg>
    </span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>var hostUrl = "{{ asset('trapp') }}/assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('trapp') }}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('trapp') }}/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('trapp') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="{{ asset('trapp') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('trapp') }}/assets/js/custom/apps/projects/project/project.js"></script>
<script src="{{ asset('trapp') }}/assets/js/widgets.bundle.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/widgets.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/chat/chat.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/utilities/modals/users-search.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/utilities/modals/new-target.js"></script>
@livewireScripts
@include('includes.errors')

@php $sayi3 = 0; @endphp
@foreach($targets as $target)
    @php
        $sayi3++;
        if ($target->type == 'project') {
            $sales = tr_sales_between_dates([
                'start_date' => date('Y-m-d 00:00:00', strtotime($target->start_date)),
                'end_date' => date('Y-m-d 23:59:59', strtotime($target->end_date)),
                'returns' => $target->target_type,
                'project_id' => $target->project_id,
                'type' => 'project',
            ]);
        } else {
            $sales = tr_sales_between_dates([
                'start_date' => date('Y-m-d 00:00:00', strtotime($target->start_date)),
                'end_date' => date('Y-m-d 23:59:59', strtotime($target->end_date)),
                'returns' => $target->target_type,
                'office_id' => $target->office_id,
                'project_id' => $target->project_id,
                'type' => 'office',
            ]);
        }
    @endphp
    <script>
    var ctx{{ $sayi3 }} = document.getElementById('chartproje{{ $target->id }}');
    const config{{ $sayi3 }} = {
        type: "doughnut",
        data: {
            datasets: [{
                data: [{{ $sales }}, {{ $target->target - $sales }}],
                backgroundColor: ["#50CD89", "#E4E6EF"]
            }],
            labels: ["Yapılan Satış Sayısı", "Kalan Satış Sayısı"]
        },
        options: {
            chart: {
                fontFamily: "inherit"
            },
            cutoutPercentage: 75,
            responsive: !0,
            maintainAspectRatio: !1,
            cutout: "75%",
            title: {
                display: !1
            },
            animation: {
                animateScale: !0,
                animateRotate: !0
            },
            tooltips: {
                enabled: !0,
                intersect: !1,
                mode: "nearest",
                bodySpacing: 5,
                yPadding: 10,
                xPadding: 10,
                caretPadding: 0,
                displayColors: !1,
                backgroundColor: "#20D489",
                titleFontColor: "#ffffff",
                cornerRadius: 4,
                footerSpacing: 0,
                titleSpacing: 0
            },
            plugins: {
                legend: {
                    display: !1
                }
            }
        }
    };
    var myChart{{ $sayi3 }} = new Chart(ctx{{ $sayi3 }}, config{{ $sayi3 }});
</script>
@endforeach

<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
