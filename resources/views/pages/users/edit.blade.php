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
    <title>Kullanıcı Düzenle | Triooz</title><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ tr_favicon() }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('trapp') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('trapp') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link href="{{ asset('trapp') }}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
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
                            <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Kullanıcı Düzenle</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="{{ route('dashboard') }}">Ana Sayfa</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">></li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Kullanıcılar</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">></li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Kullanıcı Düzenle</li>
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
                    <div id="kt_content_container" class="container-fluid">
                        <!--begin::Layout-->
                        <div class="d-flex flex-column flex-lg-row">
                            <!--begin::Sidebar-->
                            <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                                <!--begin::Card-->
                                <div class="card mb-5 mb-xl-8">
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Summary-->
                                        <!--begin::User Info-->
                                        <div class="d-flex flex-center flex-column py-5">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-100px symbol-circle mb-7">
                                                <img src="{{ tr_user_image($user->id) }}" alt="image" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <a class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">{{ $user->name.' '.$user->surname }}</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="d-flex justify-content-around gap-2">
                                                <!--begin::Badge-->
                                                <div class="badge badge-lg badge-light-primary d-inline">{{ tr_user_group_title($user->id) }}</div>
                                                <!--begin::Badge-->
                                                <!--begin::Badge-->
                                                <div class="badge badge-lg badge-light-success d-inline">{{ tr_user_office_title($user->id) }}</div>
                                                <!--begin::Badge-->
                                                <!--begin::Badge-->
                                                <div class="badge badge-lg badge-light-danger d-inline">{{ tr_user_project_title($user->id) }}</div>
                                                <!--begin::Badge-->
                                            </div>
                                            <!--end::Position-->
                                        </div>
                                        <!--end::User Info-->
                                        <!--end::Summary-->
                                        <!--begin::Details toggle-->
                                        <div class="d-flex flex-stack fs-4 py-3">
                                            <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Detaylar
                                                <span class="ms-2 rotate-180">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <span>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Düzenle</a>
                                            </span>
                                        </div>
                                        <!--end::Details toggle-->
                                        <div class="separator"></div>
                                        <!--begin::Details content-->
                                        <div id="kt_user_view_details" class="collapse show">
                                            <div class="pb-5 fs-6">
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">ID</div>
                                                <div class="text-gray-600">{{ $user->id }}</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">İsim</div>
                                                <div class="text-gray-600">{{ $user->name }}</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">Soyisim</div>
                                                <div class="text-gray-600">{{ $user->surname }}</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">Kullanıcı Adı</div>
                                                <div class="text-gray-600">{{ $user->username }}</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">Telefon</div>
                                                <div class="text-gray-600">{{ $user->phone }}</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">Şifre</div>
                                                <div class="text-gray-600">{{ $detail->password }}</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">Durum</div>
                                                <div class="text-{{ tr_status_class($user->status) }}">{{ tr_status_beautify($user->status) }}</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">Son Görülme</div>
                                                <div class="text-gray-600">{{ \Carbon\Carbon::createFromDate($user->last_seen)->translatedFormat('j F Y, H:i:s') }}</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">Oluşturulma Tarihi</div>
                                                <div class="text-gray-600">{{ \Carbon\Carbon::createFromDate($user->created_at)->translatedFormat('j F Y, H:i:s') }}</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">Son Düzenlenme Tarihi</div>
                                                <div class="text-gray-600">{{ \Carbon\Carbon::createFromDate($user->updated_at)->translatedFormat('j F Y, H:i:s') }}</div>
                                                <!--begin::Details item-->
                                            </div>
                                        </div>
                                        <!--end::Details content-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Sidebar-->
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid ms-lg-15">
                                <!--begin:::Tabs-->
                                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#satis">Satış Listesi</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#yapilacak">Yapılacak Listesi</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#hedefler">Hedef Listesi</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#izinler">İzinler</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#molalar">Molalar</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#dosyalar">Dosyalar</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#yetkiler">Yetkiler</a>
                                    </li>
                                    <!--end:::Tab item-->
                                </ul>
                                <!--end:::Tabs-->
                                <!--begin:::Tab content -->
                                <div class="tab-content" id="myTabContent">
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade show active" id="satis" role="tabpanel">
                                        @if(tr_project_type($detail->project_id) == "sale")
                                            @php
                                                $projects = \App\Models\Project::query()->where(['type' => 'sale'])->get();
                                                $offices = \App\Models\Office::query()->get();
                                                $products = \App\Models\Product::query()->get();
                                                $start_date = request()->start_date;
                                                $end_date = request()->end_date;
                                                $status = request()->status;
                                                $office_id = request()->office_id;
                                                $project_id = request()->project_id;
                                                $user_id = request()->user_id;
                                                $product_id = request()->product_id;
                                                $sales = \App\Models\Sale::query()
                                                ->select('sales.*', 'products.name as product_name', 'products.title as product_title')
                                                ->join('products', 'products.id', '=', 'sales.product_id')
                                                ->join('projects', 'projects.id', '=', 'sales.project_id')
                                                ->where(function ($query) use ($start_date, $end_date, $status, $office_id, $product_id, $project_id, $user) {
                                                    if ($start_date) {
                                                        $query->where('sales.created_at', '>=', $start_date.' 00:00:00');
                                                    }
                                                    if ($end_date) {
                                                        $query->where('sales.created_at', '<=', $end_date.' 23:59:59');
                                                    }
                                                    if ($status) {
                                                        $query->where('sales.status', $status);
                                                    }
                                                    if ($office_id) {
                                                        $query->where('sales.office_id', $office_id);
                                                    }
                                                    if ($product_id) {
                                                        $query->where('sales.product_id', $product_id);
                                                    }
                                                    if ($project_id) {
                                                        $query->where('sales.project_id', $project_id);
                                                    }
                                                    $query->where('sales.user_id', $user->id);
                                                })
                                                ->orderBy('sales.created_at', 'desc')
                                                ->get();
                                                $sale_count = \App\Models\Sale::query()->where(['user_id' => $user->id, 'status' => 'active'])->count();
                                            @endphp
                                            <!--begin::Products-->
                                            <div class="card card-flush mb-6 mb-xl-9">
                                                <!--begin::Card header-->
                                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                                    <!--begin::Card title-->
                                                    <div class="card-title flex-column">
                                                        <h2 class="mb-1">Kullanıcının Satış Listesi</h2>
                                                        <div class="fs-6 fw-semibold text-muted">
                                                            @if (count($sales) == 0)
                                                                Kullanıcının hiç satışı yok.
                                                            @else
                                                                Kullanıcının toplamda {{ count($sales) }} tane satışı bulunmakta.
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end::Card title-->
                                                    <!--begin::Card toolbar-->
                                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                                        <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            Filtre
                                                        </button>
                                                        <form method="get" action="" id="filter_form" class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" style="">
                                                            <!--begin::Header-->
                                                            <div class="px-7 py-5">
                                                                <div class="fs-5 text-dark fw-bold">Filtre</div>
                                                            </div>
                                                            <!--end::Header-->
                                                            <!--begin::Separator-->
                                                            <div class="separator border-gray-200"></div>
                                                            <!--end::Separator-->
                                                            <!--begin::Content-->
                                                            <div class="px-7 py-5 row" data-kt-user-table-filter="form">
                                                                <!--begin::Input group-->
                                                                <div class="col-md-6 mb-5">
                                                                    <label class="form-label fs-6 fw-semibold">Başlangıç Tarihi:</label>
                                                                    <input  value="{{ $_GET['start_date'] }}" class="form-control form-control-solid rounded rounded-end-0" name="start_date" type="date" placeholder="Başlangıç Tarihi" id="" />
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-md-6 mb-5">
                                                                    <label class="form-label fs-6 fw-semibold">Bitiş Tarihi:</label>
                                                                    <input value="{{ $_GET['end_date'] }}" class="form-control form-control-solid rounded rounded-end-0" name="end_date" type="date" placeholder="Bitiş Tarihi" id="" />
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-md-6 mb-5">
                                                                    <label class="form-label fs-6 fw-semibold">Durum:</label>
                                                                    <!--begin::Select2-->
                                                                    <select name="status" class="form-select form-select-solid" data-control="select2" >
                                                                        <option selected value="">Seçiniz...</option>
                                                                        <option {{ $_GET['status'] == "active" ? "selected" : "" }} value="active">Aktif</option>
                                                                        <option {{ $_GET['status'] == "passive" ? "selected" : "" }} value="passive">Pasif</option>
                                                                        <option {{ $_GET['status'] == "pending" ? "selected" : "" }} value="pending">Beklemede</option>
                                                                    </select>
                                                                    <!--end::Select2-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-md-6 mb-5">
                                                                    <label class="form-label fs-6 fw-semibold">Ofis:</label>
                                                                    <!--begin::Select2-->
                                                                    <select  name="office_id" class="form-select form-select-solid" data-control="select2" >
                                                                        <option selected value="">Seçiniz...</option>
                                                                        @foreach($offices as $row)
                                                                            <option {{ $_GET['office_id'] == $row->id ? "selected" : "" }} value="{{ $row->id }}">{{ $row->title }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <!--end::Select2-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-md-6 mb-5">
                                                                    <label class="form-label fs-6 fw-semibold">Proje:</label>
                                                                    <!--begin::Select2-->
                                                                    <select  name="project_id" class="form-select form-select-solid" data-control="select2" >
                                                                        <option selected value="">Seçiniz...</option>
                                                                        @foreach($projects as $row)
                                                                            <option  {{ $_GET['project_id'] == $row->id ? "selected" : "" }} value="{{ $row->id }}">{{ $row->title }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <!--end::Select2-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-md-6 mb-5">
                                                                    <label class="form-label fs-6 fw-semibold">Ürün:</label>
                                                                    <!--begin::Select2-->
                                                                    <select name="product_id" class="form-select form-select-solid" data-control="select2">
                                                                        <option selected value="">Seçiniz...</option>
                                                                        @foreach($products as $row)
                                                                            <option  {{ $_GET['product_id'] == $row->id ? "selected" : "" }} value="{{ $row->id }}">{{ $row->name }} ({{ $row->title }})</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <!--end::Select2-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Actions-->
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="{{ route('sales.all-sales') }}" class="btn btn-light mx-3 fw-semibold px-6" >Sıfırla</a>
                                                                    <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true">Uygula</button>
                                                                </div>
                                                                <!--end::Actions-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </form>
                                                        <!--begin::Flatpickr-->
                                                    </div>
                                                    <!--end::Card toolbar-->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                        <!--begin::Table row-->
                                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="">
                                                                #
                                                            </th>
                                                            <th class="">Müşteri Temsilcisi</th>
                                                            <th class="">Ürün</th>
                                                            <th class="">Adet</th>
                                                            <th class="">Puan</th>
                                                            <th class="">Detaylar</th>
                                                            <th class="">Durum</th>
                                                            <th class="">Eklenme Tarihi</th>
                                                            <th class="">Son Düzenlenme Tarihi</th>
                                                            <th class="text-end">İşlemler</th>
                                                        </tr>
                                                        <!--end::Table row-->
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody class="fw-semibold text-gray-600">
                                                        @foreach($sales as $row)
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Checkbox-->
                                                                <td>
                                                                    {{ $row->id }}
                                                                </td>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Customer=-->
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin:: Avatar -->
                                                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                            <a>
                                                                                <div class="symbol-label">
                                                                                    <img src="{{ tr_user_image($row->user_id) }}" alt="Ethan Wilder" class="w-100" />
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <div class="ms-5">
                                                                            <!--begin::Title-->
                                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ tr_user_fullname($row->user_id) }}</a>
                                                                            <!--end::Title-->
                                                                            <br>
                                                                            {{ tr_project_title($row->project_id) }}
                                                                            /
                                                                            {{ tr_office_title($row->office_id) }}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <!--end::Customer=-->
                                                                <!--begin::Customer=-->
                                                                <td>
                                                                    <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $row->product_title }} - {{ $row->product_name }}</a>
                                                                </td>
                                                                <!--end::Customer=-->
                                                                <!--begin::Customer=-->
                                                                <td>
                                                                    {{ $row->quantity }}
                                                                </td>
                                                                <!--end::Customer=-->
                                                                <!--begin::Customer=-->
                                                                <td>
                                                                    {{ $row->point }}
                                                                </td>
                                                                <!--end::Customer=-->
                                                                <!--begin::Customer=-->
                                                                <td>
                                                                    @php
                                                                        $json = json_decode($row->custom, true);
                                                                        if ($json) {
                                                                            foreach ($json as $key => $value) {
                                                                                if ($key == "iban_verify") {
                                                                                    if ($value == true) {
                                                                                        echo "<div class='badge badge-success'>IBAN Var</div><br>";
                                                                                    }
                                                                                } elseif ($key == "sms_verify") {
                                                                                    if ($value == true) {
                                                                                        echo "<div class='badge badge-success'>SMS & E-posta Onaylı</div><br>";
                                                                                    }
                                                                                } elseif ($key == "customer_phone") {
                                                                                    if ($value == true) {
                                                                                        echo "<div class='badge badge-success'>".$value."</div><br>";
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    @endphp
                                                                </td>
                                                                <!--end::Customer=-->
                                                                <!--begin::Status=-->
                                                                <td class="pe-0">
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-{{ tr_status_class($row->status) }}">{{ tr_status_beautify($row->status) }}</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <!--end::Status=-->
                                                                <!--begin::Date Added=-->
                                                                <td class="">
                                                                    <span class="fw-bold">{{ \Carbon\Carbon::createFromDate($row->created_at)->translatedFormat('j F Y, H:i:s') }}</span>
                                                                </td>
                                                                <!--end::Date Added=-->
                                                                <!--begin::Date Modified=-->
                                                                <td class="">
                                                                    <span class="fw-bold">{{ \Carbon\Carbon::createFromDate($row->updated_at)->translatedFormat('j F Y, H:i:s') }}</span>
                                                                </td>
                                                                <!--end::Date Modified=-->
                                                                <!--begin::Action=-->
                                                                <td class="text-end">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">İşlemler
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                        <span class="svg-icon svg-icon-5 m-0">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
                                                                        <!--end::Svg Icon--></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        @if($row->status !== "passive")
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="{{ route('sales.all-sales.delete', ['id' => $row->id]) }}" class=" menu-link px-3">Pasifleştir</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        @endif
                                                                        @if($row->status !== "active")
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="{{ route('sales.all-sales.active', ['id' => $row->id]) }}" class=" menu-link px-3">Aktifleştir</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        @endif
                                                                        @if($row->status !== "pending")
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="{{ route('sales.all-sales.pending', ['id' => $row->id]) }}" class=" menu-link px-3">Beklemeye Al</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        @endif
                                                                    </div>
                                                                    <!--end::Menu-->
                                                                </td>
                                                                <!--end::Action=-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                        @endforeach
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Products-->
                                        @endif
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="yetkiler" role="tabpanel">
                                        <!--begin::Card-->
                                        <form method="post" action="{{ route('users.edit.perm_post') }}" class="card mb-6 mb-xl-9">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $user->id }}"/>
                                            <div style="padding:2.25rem 2.25rem;padding-bottom:0;">
                                                <div class="alert alert-danger d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                                    <span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
															<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor"></path>
														</svg>
													</span>
                                                    <!--end::Svg Icon-->
                                                    <div class="d-flex flex-column">
                                                        <h4 class="mb-1 text-danger">Uyarı</h4>
                                                        <span>Yetkilerde düzenleme yapmanız kullanıcıda sorun çıkmasına sebep olabilir. Lütfen bilginiz dışında ise dokunmayınız.</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--begin::Card header-->
                                            <div class="card-header">

                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2>Kullanıcı Yetkileri</h2>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0 pb-5">
                                                <!--begin::Table wrapper-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                                        <!--begin::Table body-->
                                                        <tbody class="fs-6 fw-semibold text-gray-600">
                                                        @php
                                                            $custom = json_decode($detail->custom, true);
                                                            $json = $custom['permissions'];
                                                        @endphp
                                                        @foreach($local_permissions as $a => $b)
                                                            <!--begin::Table row-->
                                                            <tr data-key="{{ $a }}">
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">{{ $b['title'] }}</td>
                                                                <!--end::Label-->
                                                                <!--begin::Input group-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex justify-content-end">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input {{ tr_user_permission_check($user->id, $a) == true ? "checked" : "" }} class="form-check-input" type="radio" value="true" name="perm[{{ $a }}]" />
                                                                            <span class="form-check-label">Evet</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input {{ tr_user_permission_check($user->id, $a) == false ? "checked" : "" }} class="form-check-input" type="radio" value="false" name="perm[{{ $a }}]" />
                                                                            <span class="form-check-label">Hayır</span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Input group-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                        @endforeach
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table wrapper-->
                                            </div>
                                            <!--end::Card body-->
                                            <!--begin::Card foot-->
                                            <div class="card-footer justify-content-end d-flex">
                                                <!--begin::Button-->
                                                <button type="submit" class="btn btn-primary">Düzenle</button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::Card foot-->
                                        </form>
                                        <!--end::Card-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="yapilacak" role="tabpanel">
                                        <!--begin::Tasks-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">Kullanıcının Yapılacaklar Listesi</h2>
                                                    <div class="fs-6 fw-semibold text-muted">
                                                        @if(count($todo) == 0)
                                                            Kullanıcının yapılacak listesinde hiçbir şey yok.
                                                        @else
                                                            Kullanıcının toplamda {{ count($todo) }} tane yapılacak işi var.
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">
                                                        <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                                                        <span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="currentColor" />
																	<rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="currentColor" />
																	<rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor" />
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->Yapılacak Ekle</button>
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column">
                                                @foreach($todo as $row)
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center position-relative mb-7">
                                                        <!--begin::Label-->
                                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-{{ tr_todo_status_class($row->todo_status) }} w-4px"></div>
                                                        <!--end::Label-->
                                                        <!--begin::Details-->
                                                        <div class="fw-semibold ms-5">
                                                            <a class="fs-5 fw-bold text-dark text-hover-primary">{{ $row->title }}</a> <div class="badge badge-{{ tr_todo_status_class($row->todo_status) }}">{{ tr_todo_status_beautify($row->todo_status) }}</div>
                                                            <p style="margin-bottom:4px;">{{ $row->description }}</p>
                                                            <!--begin::Info-->
                                                            <div class="fs-7 text-muted">
                                                                {{ \Carbon\Carbon::createFromDate($row->expire_date)->diffForHumans() }} bitiyor. <br>
                                                                {{ tr_user_fullname($row->added_by) }} tarafından eklendi.
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Menu-->
                                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                        <!--begin::Task menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                                            <!--begin::Header-->
                                                            <div class="px-7 py-5">
                                                                <div class="fs-5 text-dark fw-bold">Durum Düzenle</div>
                                                            </div>
                                                            <!--end::Header-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator border-gray-200"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Form-->
                                                            <form method="post" action="{{ route('users.edit.todo_update') }}" class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                                @csrf
                                                                <input type="hidden" value="{{ $row->id }}" name="id">
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-10">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label fs-6 fw-semibold">Durum:</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <select class="form-select form-select-solid" name="todo_status" data-kt-select2="true" data-placeholder="Seçiniz">
                                                                        <option></option>
                                                                        <option {{ $row->todo_status == "completed" ? "selected" : "" }} value="completed">Tamamlandı</option>
                                                                        <option {{ $row->todo_status == "not_completed" ? "selected" : "" }} value="not_completed">Tamamlanamadı</option>
                                                                        <option {{ $row->todo_status == "in_progress" ? "selected" : "" }} value="in_progress">Devam Ediyor</option>
                                                                    </select>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Actions-->
                                                                <div class="d-flex justify-content-end">
                                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">Düzenle</button>
                                                                </div>
                                                                <!--end::Actions-->
                                                            </form>
                                                            <!--end::Form-->
                                                        </div>
                                                        <!--end::Task menu-->
                                                        <a href="{{ route('users.edit.delete_todo', ['id' => $row->id]) }}" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                            <span class="svg-icon svg-icon-3">
																	<i class="fa fa-x"></i>
																</span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Item-->
                                                @endforeach
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Tasks-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="hedefler" role="tabpanel">
                                        <!--begin::Tasks-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">Kullanıcının Hedef Listesi</h2>
                                                    <div class="fs-6 fw-semibold text-muted">
                                                        @if(count($targets) == 0)
                                                            Kullanıcının hedef listesinde hiçbir şey yok.
                                                        @else
                                                            Kullanıcının toplamda {{ count($targets) }} tane tamamlanacak hedefi var.
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column">
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="target_list_table">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="w-10px pe-2">
                                                            #
                                                        </th>
                                                        <th class="min-w-125px">Hedef Tipi</th>
                                                        <th class="min-w-125px">Hedef</th>
                                                        <th class="min-w-125px">Tarih</th>
                                                        <th class="min-w-125px">Hedef Durumu</th>
                                                        <th class="min-w-125px">Durum</th>
                                                        <th class="min-w-125px">Oluşturulma Tarihi</th>
                                                        <th class="text-end min-w-100px">İşlemler</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody class="text-gray-600 fw-semibold">
                                                    @foreach($targets as $row)
                                                        <tr>
                                                            <td>
                                                                {{ $row->id }}
                                                            </td>
                                                            <td>
                                                                @if($row->type == 'team')
                                                                    Takım Hedefi <br><span class="badge badge-primary">{{ tr_office_title($row->office_id) }} - {{ tr_project_title($row->project_id) }}</span>
                                                                @elseif($row->type == 'user')
                                                                    Kişisel Hedef <br><span class="badge badge-primary">{{ tr_user_fullname($row->user_id) }}</span>
                                                                @elseif($row->type == 'project')
                                                                    Proje Hedefi <br><span class="badge badge-primary">{{ tr_project_title($row->project_id) }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($row->target_status == "continues")
                                                                    @php
                                                                        $sales = 0;
                                                                        if ($row->type == "team") {
                                                                            $sales = tr_sales_between_dates([
                                                                                'start_date' => date('Y-m-d 00:00:00', strtotime($row->start_date)),
                                                                                'end_date' => date('Y-m-d 00:00:00', strtotime($row->end_date)),
                                                                                'returns' => $row->target_type,
                                                                                'office_id' => $row->office_id,
                                                                                'project_id' => $row->project_id,
                                                                                'type' => 'office',
                                                                            ]);
                                                                        } else if ($row->type == "project") {
                                                                            $sales = tr_sales_between_dates([
                                                                                'start_date' => date('Y-m-d 00:00:00', strtotime($row->start_date)),
                                                                                'end_date' => date('Y-m-d 00:00:00', strtotime($row->end_date)),
                                                                                'returns' => $row->target_type,
                                                                                'project_id' => $row->project_id,
                                                                                'type' => 'project',
                                                                            ]);
                                                                        } else if ($row->type == "user") {
                                                                            $sales = tr_sales_between_dates([
                                                                                'start_date' => date('Y-m-d 00:00:00', strtotime($row->start_date)),
                                                                                'end_date' => date('Y-m-d 00:00:00', strtotime($row->end_date)),
                                                                                'returns' => $row->target_type,
                                                                                'user_id' => $row->user_id,
                                                                                'type' => 'user',
                                                                            ]);
                                                                        }
                                                                        $left = $row->target - $sales;
                                                                    @endphp
                                                                    {{ $row->target }} {{ $row->target_type == "quantity" ? "Satış" : "Puan" }}
                                                                    <br><span class="badge badge-primary">Kalan: {{ $left }} {{ $row->target_type == "quantity" ? "Satış" : "Puan" }}</span>
                                                                @elseif($row->target_status == "not_completed")
                                                                    @php
                                                                        $sales = 0;
                                                                        if ($row->type == "team") {
                                                                            $sales = tr_sales_between_dates([
                                                                                'start_date' => date('Y-m-d 00:00:00', strtotime($row->start_date)),
                                                                                'end_date' => date('Y-m-d 00:00:00', strtotime($row->end_date)),
                                                                                'returns' => $row->target_type,
                                                                                'office_id' => $row->office_id,
                                                                                'project_id' => $row->project_id,
                                                                            ]);
                                                                        } else if ($row->type == "project") {
                                                                            $sales = tr_sales_between_dates([
                                                                                'start_date' => date('Y-m-d 00:00:00', strtotime($row->start_date)),
                                                                                'end_date' => date('Y-m-d 00:00:00', strtotime($row->end_date)),
                                                                                'returns' => $row->target_type,
                                                                                'project_id' => $row->project_id,
                                                                            ]);
                                                                        } else if ($row->type == "user") {
                                                                            $sales = tr_sales_between_dates([
                                                                                'start_date' => date('Y-m-d 00:00:00', strtotime($row->start_date)),
                                                                                'end_date' => date('Y-m-d 00:00:00', strtotime($row->end_date)),
                                                                                'returns' => $row->target_type,
                                                                                'user_id' => $row->user_id,
                                                                            ]);
                                                                        }
                                                                        $left = $row->target - $sales;
                                                                    @endphp
                                                                    {{ $row->target }} {{ $row->target_type == "quantity" ? "Satış" : "Puan" }}
                                                                    <br><span class="badge badge-primary">Kalan: {{ $left }} {{ $row->target_type == "quantity" ? "Satış" : "Puan" }}</span>
                                                                @else
                                                                    {{ $row->target }} {{ $row->target_type == "quantity" ? "Satış" : "Puan" }}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ \Carbon\Carbon::createFromDate($row->start_date)->translatedFormat('j F') }}
                                                                /
                                                                {{ \Carbon\Carbon::createFromDate($row->end_date)->translatedFormat('j F') }}
                                                            </td>
                                                            <td>
                                                                {{ tr_target_status_beautifier($row->target_status) }}
                                                                <br>
                                                                <span class="badge badge-{{ tr_target_status_class($row->target_status) }}">
                                                                    Güncellenme Tarihi: {{ \Carbon\Carbon::createFromDate($row->target_status_date)->translatedFormat('j F Y') }}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <div class="badge badge-{{ tr_status_class($row->status) }}">
                                                                    {{ tr_status_beautify($row->status) }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                {{ \Carbon\Carbon::createFromDate($row->created_at)->translatedFormat('j F Y, H:i:s') }}
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="javascript:void(0);" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">İşlemler
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                    <span class="svg-icon svg-icon-5 m-0">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
                                                                    <!--end::Svg Icon--></a>
                                                                <!--begin::Menu-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ route('targets.edit', ['id' => $row->id]) }}" class=" menu-link px-3">Düzenle</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    @if($row->status !== "passive")
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="{{ route('targets.listing.delete', ['id' => $row->id]) }}" class=" menu-link px-3">Pasifleştir</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    @endif
                                                                    @if($row->status !== "active")
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="{{ route('targets.listing.active', ['id' => $row->id]) }}" class=" menu-link px-3">Aktifleştir</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    @endif
                                                                    @if($row->status !== "pending")
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="{{ route('targets.listing.pending', ['id' => $row->id]) }}" class=" menu-link px-3">Beklemeye Al</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    @endif
                                                                </div>
                                                                <!--end::Menu-->
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Tasks-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="izinler" role="tabpanel">
                                        <!--begin::Tasks-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">Kullanıcının İzin Listesi</h2>
                                                    <div class="fs-6 fw-semibold text-muted">
                                                        @if(count($offdays) == 0)
                                                            Kullanıcının izin listesinde hiçbir şey yok.
                                                        @else
                                                            Kullanıcının toplamda {{ count($offdays) }} tane izni var.
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column">
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="offdays_list">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                    <!--begin::Table row-->
                                                    <tr style="" class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-125px">İzin Tipi</th>
                                                        <th class="min-w-125px">Eksik Süre</th>
                                                        <th class="min-w-125px">Tarih</th>
                                                        <th></th>
                                                        <th class="text-end min-w-100px">İşlemler</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody class="text-gray-600 fw-semibold">
                                                    @foreach($offdays as $row)
                                                        <tr>
                                                            <td>
                                                                {{ $row->type == "datetime" ? "Süre" : "Gün" }}
                                                                @if($row->type == "date")
                                                                    <span class="badge badge-primary mx-3">
                                                        {{ tr_offday_date_type($row->date_type) }}
                                                    </span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($row->type == "datetime")
                                                                    @foreach(json_decode($row->movements, true) as $key => $value)
                                                                        <span class="badge badge-primary">
                                                            {{ $value['move'] == "in" ? "Girdi" : "Çıktı" }} - {{ $value['time'] }}
                                                        </span>
                                                                    @endforeach
                                                                @elseif($row->type == "date")
                                                                    Tam Gün
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ $row->date }}
                                                            </td>
                                                            <td></td>
                                                            <!--begin::Action=-->
                                                            <td class="text-end">
                                                                <a href="javascript:void(0);" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">İşlemler
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                    <span class="svg-icon svg-icon-5 m-0">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
                                                                    <!--end::Svg Icon--></a>
                                                                <!--begin::Menu-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ route('offdays.edit', ['id'=> $row->id]) }}" class="menu-danger menu-link px-3">Düzenle</a>
                                                                        <a data-href="{{ route('offdays.details.delete', ['id'=> $row->id]) }}" class="menu-danger delete-button menu-link px-3">Sil</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu-->
                                                            </td>
                                                            <!--end::Action=-->
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Tasks-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="molalar" role="tabpanel">
                                        <!--begin::Tasks-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">Kullanıcının Mola Listesi</h2>
                                                    <div class="fs-6 fw-semibold text-muted">
                                                        @if(count($pauses) == 0)
                                                            Kullanıcının mola listesinde hiçbir şey yok.
                                                        @else
                                                            Kullanıcının toplamda {{ count($pauses) }} tane molası var.
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column">
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="breaks_list">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                    <!--begin::Table row-->
                                                    <tr style="" class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-125px">Başlangıç Tarihi</th>
                                                        <th class="min-w-125px">Bitiş Tarihi</th>
                                                        <th class="min-w-125px">Toplam Mola Süresi</th>
                                                        <th></th>
                                                        <th class="text-end min-w-100px">İşlemler</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody class="text-gray-600 fw-semibold">
                                                    @foreach($pauses as $row)
                                                        <tr>
                                                            <td>
                                                                {{ $row->start_date }}
                                                            </td>
                                                            <td>
                                                                {!! $row->end_date ? $row->end_date : "<span class='text-danger'>Kullanıcı hala molada.</span>" !!}
                                                            </td>
                                                            <td>
                                                                @php
                                                                    $created_at_hour = substr($row->start_date, 11);
                                                                    $updated_at_hour = $row->end_date ? substr($row->end_date, 11) : date('Y-m-d H:i:s');
                                                                    $break_time = gmdate("H:i:s", strtotime($updated_at_hour) - strtotime($created_at_hour));
                                                                @endphp
                                                                {{ $break_time }}
                                                            </td>
                                                            <td></td>
                                                            <!--begin::Action=-->
                                                            <td class="text-end">
                                                                <a href="javascript:void(0);" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">İşlemler
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                    <span class="svg-icon svg-icon-5 m-0">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <!--begin::Menu-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ route('pause.listing.delete', ['id'=> $row->id]) }}" class="menu-danger menu-link px-3">Sil</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu-->
                                                            </td>
                                                            <!--end::Action=-->
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Tasks-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="dosyalar" role="tabpanel">
                                        <!--begin::Tasks-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">Kullanıcının Dosya Listesi</h2>
                                                    <div class="fs-6 fw-semibold text-muted">
                                                        @if(count($files) == 0)
                                                            Kullanıcının dosya listesinde hiçbir şey yok.
                                                        @else
                                                            Kullanıcının toplamda {{ count($files) }} tane dosyası var.
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column">
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="files_list">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="">
                                                            #
                                                        </th>
                                                        <th class="">Başlık</th>
                                                        <th class="">Dosya Adı</th>
                                                        <th class="">Durum</th>
                                                        <th class="">Eklenme Tarihi</th>
                                                        <th class="text-end">İşlemler</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody class="fw-semibold text-gray-600">
                                                    @foreach($files as $row)
                                                        <tr>
                                                            <td>{{ $row->id }}</td>
                                                            <td>{{ $row->title }}</td>
                                                            <td>{{ $row->file }}</td>
                                                            <td>
                                                                <div class="badge badge-{{ tr_status_class($row->status) }}">
                                                                    {{ tr_status_beautify($row->status) }}
                                                                </div>
                                                            </td>
                                                            <td>{{ \Carbon\Carbon::createFromDate($row->created_at)->translatedFormat('j F Y, H:i:s') }}</td>
                                                            <td>
                                                                <a href="{{ asset('trapp/uploads/files/'.$row->file) }}" target="_blank" class="btn btn-sm btn-light-primary">
                                                                    <i class="la la-eye"></i>Görüntüle
                                                                </a>
                                                                <a href="{{ route('files.listing.delete', ['id' => $row->id]) }}" class="btn btn-sm btn-light-danger">
                                                                    <i class="la la-trash-o"></i>Sil
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Tasks-->
                                    </div>
                                    <!--end:::Tab pane-->
                                </div>
                                <!--end:::Tab content-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Layout-->
                        <!--begin::Modals-->
                        <!--begin::Modal - Update user details-->
                        <div class="modal fade" id="kt_modal_update_details"  aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <form method="post" enctype="multipart/form-data" action="{{ route('users.edit.post') }}" class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Kullanıcı Düzenle</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																		<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
																	</svg>
																</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <div class="form">
                                            @csrf
                                            <input type="hidden" value="{{ $user->id }}" name="user_id"/>
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="d-block fw-semibold fs-6 mb-5">Resim</label>
                                                    <!--end::Label-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ tr_user_image($user->id) }}');"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Resmi Değiştir">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="image" accept=".png, .jpg, .jpeg, .webp" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Resmi İptal Et">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove--
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Resmi Sil">
                                                                    <i class="bi bi-x fs-2"></i>
                                                                </span>
                                                        <--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Yüklemeye izin verilen dosya türleri: png, jpg, jpeg ve webp.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-2">İsim</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="İsim" value="{{ $user->name }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-2">Soyisim</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="surname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Soyisim" value="{{ $user->surname }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-2">Kullanıcı Adı</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div class="input-group">
                                                        <input type="text" name="username" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Kullanıcı Adı" value="{{ $user->username }}" />
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="button"><i class="fa fa-rotate"></i></button>
                                                        </div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-2">Şifre</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div class="input-group">
                                                        <input type="text" name="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Şifre" value="{{ $detail->password }}" />
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="button"><i class="fa fa-rotate"></i></button>
                                                        </div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-2">Telefon</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" id="phoneinput" name="phone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Telefon" value="{{ $user->phone }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class=" fw-semibold fs-6 mb-2">Adres</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Adres" value="{{ $detail->address }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class=" fw-semibold fs-6 mb-2">Doğum Tarihi</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="date" name="birthdate" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Doğum Tarihi" value="{{ $detail->birthdate }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class=" fw-semibold fs-6 mb-2">T.C. Kimlik Numarası</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="identity" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="T.C. Kimlik Numarası" value="{{ $detail->identity }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class=" fw-semibold fs-6 mb-2">İş Başlama Tarihi</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="date" name="work_start_date" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="İş Başlama Tarihi" value="{{ $detail->work_start_date }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class=" fw-semibold fs-6 mb-2">İş Sonlanma Tarihi</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="date" name="work_end_date" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="İş Sonlanma Tarihi" value="{{ $detail->work_end_date ? $detail->work_end_date : "" }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <label class="form-label fs-6 fw-semibold">Durum:</label>
                                                    <!--begin::Select2-->
                                                    <select name="status" class="form-select form-select-solid" >
                                                        <option {{ $user->status == 'active' ? "selected" : "" }} value="active">Aktif</option>
                                                        <option {{ $user->status == 'passive' ? "selected" : "" }} value="passive">Pasif</option>
                                                        <option {{ $user->status == 'pending' ? "selected" : "" }} value="pending">Beklemede</option>
                                                    </select>
                                                    <!--end::Select2-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-5">Kullanıcı Grubu</label>
                                                    <!--end::Label-->
                                                    <!--begin::Roles-->
                                                    <!--begin::Input row-->
                                                    <div class="fv-row">
                                                        @foreach($groups_active as $row)
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3" name="group_id" type="radio" value="{{ $row->id }}" id="group_{{ $row->id }}" {{ $detail->group_id == $row->id ? "checked" : "" }} />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="group_{{ $row->id }}">
                                                                    <div class="fw-bold text-gray-800">{{ $row->title }}</div>
                                                                    <div class="text-gray-600">{{ $row->description }}</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Radio--><br>
                                                        @endforeach
                                                    </div>
                                                    <!--end::Input row-->
                                                    <div class='separator separator-dashed my-5'></div>
                                                    <!--end::Roles-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-5">Proje</label>
                                                    <!--end::Label-->
                                                    <!--begin::Roles-->
                                                    <!--begin::Input row-->
                                                    <div class="fv-row">
                                                        @foreach($projects_active as $row)
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3" name="project_id" type="radio" value="{{ $row->id }}" id="project_{{ $row->id }}" {{ $detail->project_id == $row->id ? "checked" : "" }} />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="project_{{ $row->id }}">
                                                                    <div class="fw-bold text-gray-800">{{ $row->title }}</div>
                                                                    <div class="text-gray-600">{{ $row->description }}</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Radio--><br>
                                                        @endforeach
                                                    </div>
                                                    <!--end::Input row-->
                                                    <div class='separator separator-dashed my-5'></div>
                                                    <!--end::Roles-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-5">Ofis</label>
                                                    <!--end::Label-->
                                                    <!--begin::Roles-->
                                                    <!--begin::Input row-->
                                                    <div class="fv-row">
                                                        @foreach($offices_active as $row)
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3" name="office_id" type="radio" value="{{ $row->id }}" id="office_{{ $row->id }}" {{ $detail->office_id == $row->id ? "checked" : "" }} />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="office_{{ $row->id }}">
                                                                    <div class="fw-bold text-gray-800">{{ $row->title }}</div>
                                                                    <div class="text-gray-600">{{ $row->address }}</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Radio--><br>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Scroll-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                    <!--begin::Modal foot-->
                                    <div class="modal-footer flex-center">

                                        <!--begin::Button-->
                                        <button type="submit" class="btn btn-primary">Düzenle</button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Modal foot-->
                                </form>
                                <!--end::Modal content-->
                            </div>
                        </div>
                        <!--end::Modal - Update user details-->
                        <!--begin::Modal - Add task-->
                        <div class="modal fade" id="kt_modal_add_task"  aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Yapılacak Ekle</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form method="post" action="{{ route('users.edit.add_todo') }}" id="kt_modal_add_task_form" class="form">
                                            @csrf
                                            <input type="hidden" value="{{ $user->id }}" name="user_id"/>
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">Başlık</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="title" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mb-2">Açıklama</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="description" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">Bitiş Tarihi</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="Pick date" name="expire_date" type="date" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="text-center pt-15">
                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">Ekle</button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - Add task-->
                        <!--end::Modals-->
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
<!--end::Main-->
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
<!--begin::Javascript-->
<script>var hostUrl = "{{ asset('trapp') }}/assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('trapp') }}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('trapp') }}/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('trapp') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/user-management/users/view/view.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/user-management/users/view/update-details.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/user-management/users/view/add-schedule.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/user-management/users/view/add-task.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/user-management/users/view/update-email.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/user-management/users/view/update-password.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/user-management/users/view/update-role.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/user-management/users/view/add-auth-app.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/user-management/users/view/add-one-time-password.js"></script>
<script src="{{ asset('trapp') }}/assets/js/widgets.bundle.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/widgets.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/apps/chat/chat.js"></script>
<script src="{{ asset('trapp') }}/assets/js/custom/utilities/modals/users-search.js"></script>
<script>
    $('#kt_ecommerce_sales_table').DataTable({
        "ordering": false
    });
    $('#target_list_table').DataTable({
        "ordering": false
    });
    $('#offdays_list').DataTable({
        "ordering": false
    });
    $('#files_list').DataTable({
        "ordering": false
    });
    $('#breaks_list').DataTable({
        "ordering": false
    });

    $('.delete-button').click(function () {
        var href = $(this).data('href');
        Swal.fire({
            title: "Silmek istediğinize emin misiniz?",
            text: "Silmeniz durumunda veritabanından kalıcı olarak silinir ve işlem geri alınamaz.",
            icon: "error",
            showCancelButton: true,
            confirmButtonText: "Evet, sil!",
            cancelButtonText: "Hayır, iptal et!",
            reverseButtons: true
        }).then(function (result) {
            if (result.value) {
                window.location.href = href;
            }
        });
    });

    $(document).ready(function () {
        Inputmask({
            "mask" : "+\\90 (999) 999-9999"
        }).mask("#phoneinput");
    });
</script>
@livewireScripts
@include('includes.errors')
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
