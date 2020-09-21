@extends('app.layouts.master')


@section('content')
    <div role="main" class="main">
        <div class="slider-container rev_slider_wrapper">
            <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500]}">
                <ul>
                    <li data-transition="fade">
                        <img src="/app/img/slides/slide-bg.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption"
                             data-x="177"
                             data-y="188"
                             data-start="1000"
                             data-transform_in="x:[-300%];opacity:0;s:500;"><img src="/app/img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption top-label"
                             data-x="227"
                             data-y="180"
                             data-start="500"
                             data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>

                        <div class="tp-caption"
                             data-x="480"
                             data-y="188"
                             data-start="1000"
                             data-transform_in="x:[300%];opacity:0;s:500;"><img src="/app/img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption main-label"
                             data-x="135"
                             data-y="210"
                             data-start="1500"
                             data-whitespace="nowrap"
                             data-transform_in="y:[100%];s:500;"
                             data-transform_out="opacity:0;s:500;"
                             data-mask_in="x:0px;y:0px;">WEB DESIGN?</div>

                        <div class="tp-caption bottom-label"
                             data-x="['185','185','185','95']"
                             data-y="280"
                             data-start="2000"
                             data-fontsize="['20','20','20','30']"
                             data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>

                        <div class="tp-caption"
                             data-x="['910','910','910','930']"
                             data-y="248"
                             data-start="2500"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;"><img src="/app/img/slides/slide-concept-2-1.png" alt=""></div>

                        <div class="tp-caption"
                             data-x="['960','960','960','980']"
                             data-y="200"
                             data-start="3500"
                             data-transform_in="y:[300%];opacity:0;s:300;"><img src="/app/img/slides/slide-concept-2-2.png" alt=""></div>

                        <div class="tp-caption"
                             data-x="['930','930','930','950']"
                             data-y="170"
                             data-start="3650"
                             data-transform_in="y:[300%];opacity:0;s:300;"><img src="/app/img/slides/slide-concept-2-3.png" alt=""></div>

                        <div class="tp-caption"
                             data-x="['880','880','880','900']"
                             data-y="130"
                             data-start="3750"
                             data-transform_in="y:[300%];opacity:0;s:300;"><img src="/app/img/slides/slide-concept-2-4.png" alt=""></div>

                        <div class="tp-caption"
                             data-x="['610','610','610','630']"
                             data-y="80"
                             data-start="3950"
                             data-transform_in="y:[300%];opacity:0;s:300;"><img src="/app/img/slides/slide-concept-2-5.png" alt=""></div>

                        <div class="tp-caption blackboard-text"
                             data-x="['640','640','640','660']"
                             data-y="300"
                             data-start="3950"
                             data-fontsize="['37','37','37','47']"
                             data-transform_in="y:[300%];opacity:0;s:300;">Think</div>

                        <div class="tp-caption blackboard-text"
                             data-x="['665','665','665','685']"
                             data-y="350"
                             data-start="4150"
                             data-fontsize="['47','47','47','57']"
                             data-transform_in="y:[300%];opacity:0;s:300;">Outside</div>

                        <div class="tp-caption blackboard-text"
                             data-x="['690','690','690','710']"
                             data-y="400"
                             data-start="4350"
                             data-fontsize="['32','32','32','42']"
                             data-transform_in="y:[300%];opacity:0;s:300;">The box :)</div>
                    </li>
                    <li data-transition="fade">
                        <img src="/app/img/slides/slide-bg.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg" data-no-retina>

                        <div class="tp-caption top-label"
                             data-x="['155','155','155','110']"
                             data-y="['100','100','100','150']"
                             data-start="500"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"><img src="/app/img/slides/slide-concept.png" alt=""></div>

                        <div class="tp-caption blackboard-text"
                             data-x="['285','285','285','225']"
                             data-y="['180','180','180','230']"
                             data-start="1000"
                             data-fontsize="['30','30','30','40']"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;">easy to</div>

                        <div class="tp-caption blackboard-text"
                             data-x="['285','285','285','225']"
                             data-y="['220','220','220','270']"
                             data-start="1200"
                             data-fontsize="['40','40','40','50']"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;">customize!</div>

                        <div class="tp-caption main-label"
                             data-x="['685','685','685','630']"
                             data-y="['190','190','190','220']"
                             data-start="1800"
                             data-whitespace="nowrap"
                             data-fontsize="['62','62','62','82']"
                             data-transform_in="y:[100%];s:500;"
                             data-transform_out="opacity:0;s:500;"
                             data-mask_in="x:0px;y:0px;">DESIGN IT!</div>

                        <div class="tp-caption bottom-label"
                             data-x="['685','685','685','595']"
                             data-y="['250','250','250','300']"
                             data-start="2000"
                             data-fontsize="['20','20','20','30']"
                             data-lineheight="['20','20','20','30']"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                             data-transform_out="opacity:0;s:500;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-splitin="chars"
                             data-splitout="none"
                             data-responsive_offset="on"
                             data-elementdelay="0.05">Create slides with brushes and fonts</div>

                    </li>
                </ul>
            </div>
        </div>
        <div class="home-intro" id="home-intro">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>
                            The fastest way to grow your business with the leader in <em>Technology</em>
                            <span>Check out our options and features included.</span>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="get-started text-left text-lg-right">
                            <a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
                            <div class="learn-more">or <a href="index.html">learn more.</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section class="p-0 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0 text-center tataboghMarginTop">
                        <div class="px-xl-3">
                            <div>
                                <div class="d-inline-block mb-4 p-3 p-md-4 rounded-circle bg-primary-2-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon bg-primary-2" data-src="assets/img/icons/theme/navigation/route.svg">
                                        <title>Icon For Route</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                                            <path d="M8,7 C7.44771525,7 7,6.55228475 7,6 C7,5.44771525 7.44771525,5 8,5 L16,5 C18.209139,5 20,6.790861 20,9 C20,11.209139 18.209139,13 16,13 L8,13 C6.8954305,13 6,13.8954305 6,15 C6,16.1045695 6.8954305,17 8,17 L17,17 C17.5522847,17 18,17.4477153 18,18 C18,18.5522847 17.5522847,19 17,19 L8,19 C5.790861,19 4,17.209139 4,15 C4,12.790861 5.790861,11 8,11 L16,11 C17.1045695,11 18,10.1045695 18,9 C18,7.8954305 17.1045695,7 16,7 L8,7 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) "></path>
                                            <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) "></path>
                                        </g>
                                    </svg>
                                </div>
                                <h5>حسابرسی تامین اجتماعی</h5>
                                <div  class="servicesDetails">
                                    ارائه مشاوره حضوری و تلفنی ، تهیه و تنظیم لوایح اعتراضی و حضور در هیئت ها ، آموزش حسابرسی تامین اجتماعی به صورت پکیج و دوره های آموزشی های متنوع .
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 text-center tataboghMarginTop">
                        <div class="px-xl-3">
                            <div>
                                <div class="d-inline-block mb-4 p-3 p-md-4 rounded-circle bg-primary-2-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon bg-primary-2" data-src="assets/img/icons/theme/navigation/route.svg">
                                        <title>Icon For Route</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                                            <path d="M8,7 C7.44771525,7 7,6.55228475 7,6 C7,5.44771525 7.44771525,5 8,5 L16,5 C18.209139,5 20,6.790861 20,9 C20,11.209139 18.209139,13 16,13 L8,13 C6.8954305,13 6,13.8954305 6,15 C6,16.1045695 6.8954305,17 8,17 L17,17 C17.5522847,17 18,17.4477153 18,18 C18,18.5522847 17.5522847,19 17,19 L8,19 C5.790861,19 4,17.209139 4,15 C4,12.790861 5.790861,11 8,11 L16,11 C17.1045695,11 18,10.1045695 18,9 C18,7.8954305 17.1045695,7 16,7 L8,7 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) "></path>
                                            <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) "></path>
                                        </g>
                                    </svg>
                                </div>
                                <h5>مالی و مالیاتی</h5>
                                <div  class="servicesDetails">
                                    خدمات حسابداری ، حسابرسی داخلی ، حقوق و دستمزد ، تهیه و تنظیم لوایح اعتراضی و حضور درهیئت ها ، ارائه مشاوره در خصوص انتخاب نرم افزار و پیکر بندی آن

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 text-center tataboghMarginTop">
                        <div class="px-xl-3">
                            <div>
                                <div class="d-inline-block mb-4 p-3 p-md-4 rounded-circle bg-primary-2-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon bg-primary-2" data-src="assets/img/icons/theme/navigation/route.svg">
                                        <title>Icon For Route</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                                            <path d="M8,7 C7.44771525,7 7,6.55228475 7,6 C7,5.44771525 7.44771525,5 8,5 L16,5 C18.209139,5 20,6.790861 20,9 C20,11.209139 18.209139,13 16,13 L8,13 C6.8954305,13 6,13.8954305 6,15 C6,16.1045695 6.8954305,17 8,17 L17,17 C17.5522847,17 18,17.4477153 18,18 C18,18.5522847 17.5522847,19 17,19 L8,19 C5.790861,19 4,17.209139 4,15 C4,12.790861 5.790861,11 8,11 L16,11 C17.1045695,11 18,10.1045695 18,9 C18,7.8954305 17.1045695,7 16,7 L8,7 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) "></path>
                                            <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) "></path>
                                        </g>
                                    </svg>
                                </div>
                                <h5>حقوقی </h5>
                                <div  class="servicesDetails">
                                    ارائه مشاوره حضوری و تلفنی در خصوص عقد قراردادها ، پیگیری پرونده های بی نتیجه ، حضور در دادگاه های مربوطه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 text-center tataboghMarginTop">
                        <div class="px-xl-3">
                            <div>
                                <div class="d-inline-block mb-4 p-3 p-md-4 rounded-circle bg-primary-2-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon bg-primary-2" data-src="assets/img/icons/theme/navigation/route.svg">
                                        <title>Icon For Route</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                                            <path d="M8,7 C7.44771525,7 7,6.55228475 7,6 C7,5.44771525 7.44771525,5 8,5 L16,5 C18.209139,5 20,6.790861 20,9 C20,11.209139 18.209139,13 16,13 L8,13 C6.8954305,13 6,13.8954305 6,15 C6,16.1045695 6.8954305,17 8,17 L17,17 C17.5522847,17 18,17.4477153 18,18 C18,18.5522847 17.5522847,19 17,19 L8,19 C5.790861,19 4,17.209139 4,15 C4,12.790861 5.790861,11 8,11 L16,11 C17.1045695,11 18,10.1045695 18,9 C18,7.8954305 17.1045695,7 16,7 L8,7 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) "></path>
                                            <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) "></path>
                                        </g>
                                    </svg>
                                </div>
                                <h5> ارزیابی ریسک </h5>
                                <div  class="servicesDetails">
                                    انتخاب بهترین روش منطقی برای محاسبه ی مولفه های شدت پیامد رخداد و احتمال رویدادن آن در شرکت و تاثیر آن بر افراد،مواد،تجهیزات و محیط .
                                    بیمه ای : صدور فوری انواع بیمه نامه های ثالث بدنه آتش سوزی عمر ومسئولیت باربری و بیمه درمان و حرفه ای پزشکان.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 text-center tataboghMarginTop">
                        <div class="px-xl-3">
                            <div>
                                <div class="d-inline-block mb-4 p-3 p-md-4 rounded-circle bg-primary-2-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon bg-primary-2" data-src="assets/img/icons/theme/layout/layout-left-panel-2.svg">
                                        <title>Icon For Layout-left-panel-2</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                                            <path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"></path>
                                            <rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1"></rect>
                                        </g>
                                    </svg>
                                </div>
                                <h5>بیمه ای</h5>
                                <div  class="servicesDetails">
                                    صدور فوری انواع بیمه نامه های ثالث بدنه آتش سوزی عمر ومسئولیت باربری و بیمه درمان و حرفه ای پزشکان.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 text-center tataboghMarginTop">
                        <div class="px-xl-3">
                            <div>
                                <div class="d-inline-block mb-4 p-3 p-md-4 rounded-circle bg-primary-2-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon bg-primary-2" data-src="assets/img/icons/theme/shopping/box-2.svg">
                                        <title>Icon For Box#2</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                        </g>
                                    </svg>
                                </div>
                                <h5>اداری</h5>
                                <div class="servicesDetails">
                                    تامین نیروی انسانی ، آموزش و تعیین پروتکل های اداری ، ثبت آگهی استخدام ، ثبت برند و نام شرکت.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider divider-bottom"></div>
        </section>
        <section class="bg-light">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-9 col-md-7 col-lg-4 mb-3 mb-md-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="card card-body align-items-center shadow">

                            <div class="text-center mb-4">
                                <h4>Basic</h4>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <span class="h5 mb-0 mr-2">$</span>
                                    <span class="display-3 mb-0 text-dark">19</span>
                                </div>
                                <div>Per user, per month</div>
                            </div>
                            <ul class="list-unstyled p-0">
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">2GB Cloud Storage</h6>
                                    </div>
                                </li>
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">100GB CDN Bandwidth</h6>
                                    </div>
                                </li>
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">98.88% Uptime Guarantee</h6>
                                    </div>
                                </li>
                                <li class="my-3 opacity-50">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-danger-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-danger" data-src="assets/img/icons/interface/icon-x.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M18 6L6 18" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6 6L18 18" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Personal Account Manager</h6>
                                    </div>
                                </li>
                                <li class="my-3 opacity-50">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-danger-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-danger" data-src="assets/img/icons/interface/icon-x.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M18 6L6 18" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6 6L18 18" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Enterprise SLA</h6>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-block btn-outline-primary">Start with Basic</a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-7 col-lg-4 mb-3 mb-md-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="card card-body align-items-center shadow">
                            <div class="badge badge-success badge-pill mb-4">Best Value</div>
                            <div class="text-center mb-4">
                                <h4>Premium</h4>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <span class="h5 mb-0 mr-2">$</span>
                                    <span class="display-3 mb-0 text-dark">29</span>
                                </div>
                                <div>Per user, per month</div>
                            </div>
                            <ul class="list-unstyled p-0">
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">20GB Cloud Storage</h6>
                                    </div>
                                </li>
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">1TB CDN Bandwidth</h6>
                                    </div>
                                </li>
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">99.95% Uptime Guarantee</h6>
                                    </div>
                                </li>
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Personal Account Manager</h6>
                                    </div>
                                </li>
                                <li class="my-3 opacity-50">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-danger-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-danger" data-src="assets/img/icons/interface/icon-x.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M18 6L6 18" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6 6L18 18" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Enterprise SLA</h6>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-block btn-primary">Start with Premium</a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-7 col-lg-4 mb-3 mb-md-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="card card-body align-items-center shadow">

                            <div class="text-center mb-4">
                                <h4>Pro</h4>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <span class="h5 mb-0 mr-2">$</span>
                                    <span class="display-3 mb-0 text-dark">79</span>
                                </div>
                                <div>Per user, per month</div>
                            </div>
                            <ul class="list-unstyled p-0">
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Unlimited Storage</h6>
                                    </div>
                                </li>
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">100TB CDN Bandwidth</h6>
                                    </div>
                                </li>
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">99.999% Uptime Guarantee</h6>
                                    </div>
                                </li>
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Personal Account Manager</h6>
                                    </div>
                                </li>
                                <li class="my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Enterprise SLA</h6>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-block btn-outline-primary">Start with Pro</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-no-border background-color-light m-0 p-t">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-sm-8">
                        <h2 class="font-weight-bold text-center">بلاگ</h2>
                        <hr>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div style="direction: ltr;" class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 3}, '768': {'items': 5}, '992': {'items': 3}, '1200': {'items': 3}}, 'autoplay': true, 'autoplayTimeout': 5000, 'nav': true ,  'dots': true,'margin': 30}">
                        <article class="custom-post-blog">
								<span class="thumb-info custom-thumb-info-2">
								   <span class="thumb-info-wrapper">
								   <a target="_blank" href="https://dialenz.com/blog/%d9%84%d9%86%d8%b2-%d8%b7%d8%a8%db%8c-%d8%a7%db%8c%d8%b1%d8%a7%d9%be%d8%aa%db%8c%da%a9%d8%b3-air-optix">
								   <img src="https://dialenz.com/blog/wp-content/uploads/2020/07/maxresdefault.jpg" alt="maxresdefault" class="img-fluid" />
								   </a>
								   </span>
								   <span class="thumb-info-caption custom-box-shadow">
									  <span class="thumb-info-caption-text">
										 <a target="_blank" href="https://dialenz.com/blog/%d9%84%d9%86%d8%b2-%d8%b7%d8%a8%db%8c-%d8%a7%db%8c%d8%b1%d8%a7%d9%be%d8%aa%db%8c%da%a9%d8%b3-air-optix" class="text-decoration-none custom-secondary-font text-color-dark">
											<h4 class="font-weight-bold mb-4 text-center">
											   لنز طبی ایراپتیکس Air Optix
											</h4>
										 </a>
										 <div class="text-justify">
											لنز طبی ایراپتیکس Air Optix
											در ابتدا قبل از هر چیزی، خوب است بدانید که برای خرید لنز طبی ایراپتیکس (Air Optix) می توانید به وبسا...
										 </div>
									  </span>
									  <span class="custom-thumb-info-post-infos text-center">
										 <ul>
											<li class="text-uppercase">
											   <i class="fa fa-newspaper-o"></i>
											   1 ماه پیش
											</li>
										 </ul>
									  </span>
								   </span>
								</span>
                        </article>
                        <article class="custom-post-blog">
								<span class="thumb-info custom-thumb-info-2">
								   <span class="thumb-info-wrapper">
								   <a target="_blank" href="https://dialenz.com/blog/%d8%a7%d8%b5%d9%88%d9%84-%d8%a7%d8%b3%d8%aa%d9%81%d8%a7%d8%af%d9%87-%d8%a7%d8%b2-%d9%84%d9%86%d8%b2-%d8%aa%d9%85%d8%a7%d8%b3%db%8c">
								   <img src="https://dialenz.com/blog/wp-content/uploads/2020/06/people-2563491_1920-1568x1046-1.jpg" alt="people-2563491_1920-1568x1046" class="img-fluid" />
								   </a>
								   </span>
								   <span class="thumb-info-caption custom-box-shadow">
									  <span class="thumb-info-caption-text">
										 <a target="_blank" href="https://dialenz.com/blog/%d8%a7%d8%b5%d9%88%d9%84-%d8%a7%d8%b3%d8%aa%d9%81%d8%a7%d8%af%d9%87-%d8%a7%d8%b2-%d9%84%d9%86%d8%b2-%d8%aa%d9%85%d8%a7%d8%b3%db%8c" class="text-decoration-none custom-secondary-font text-color-dark">
											<h4 class="font-weight-bold mb-4 text-center">
											   اصول استفاده از لنز تماسی
											</h4>
										 </a>
										 <div class="text-justify">
											اصول استفاده از لنز تماسی
											میلیون ها نفر در سراسر جهان لنزهای تماسی را با موفقیت استفاده می کنند، اگرچه ممکن است متوجه شوید که دق...
										 </div>
									  </span>
									  <span class="custom-thumb-info-post-infos text-center">
										 <ul>
											<li class="text-uppercase">
											   <i class="fa fa-newspaper-o"></i>
											   1 ماه پیش
											</li>
										 </ul>
									  </span>
								   </span>
								</span>
                        </article>
                        <article class="custom-post-blog">
								<span class="thumb-info custom-thumb-info-2">
								   <span class="thumb-info-wrapper">
								   <a target="_blank" href="https://dialenz.com/blog/%d8%aa%d8%b9%d8%af%d8%a7%d8%af-%d9%85%d8%b9%d8%a7%db%8c%d9%86%d9%87-%da%86%d8%b4%d9%85-%d8%a7%d8%b2-40-%d8%b3%d8%a7%d9%84%da%af%db%8c">
								   <img src="https://dialenz.com/blog/wp-content/uploads/2020/04/man-reading-presbyopia.jpg" alt="man-reading-presbyopia" class="img-fluid" />
								   </a>
								   </span>
								   <span class="thumb-info-caption custom-box-shadow">
									  <span class="thumb-info-caption-text">
										 <a target="_blank" href="https://dialenz.com/blog/%d8%aa%d8%b9%d8%af%d8%a7%d8%af-%d9%85%d8%b9%d8%a7%db%8c%d9%86%d9%87-%da%86%d8%b4%d9%85-%d8%a7%d8%b2-40-%d8%b3%d8%a7%d9%84%da%af%db%8c" class="text-decoration-none custom-secondary-font text-color-dark">
											<h4 class="font-weight-bold mb-4 text-center">
											   تعداد معاینه چشم از 40 سالگی
											</h4>
										 </a>
										 <div class="text-justify">
											تعداد معاینه چشم از 40 سالگی
											تغییر در بینایی شما اتفاق می افتد، و گاهی اوقات آنها می توانند بدون هشدار اتفاق بیفتند، خصوصاً بعد...
										 </div>
									  </span>
									  <span class="custom-thumb-info-post-infos text-center">
										 <ul>
											<li class="text-uppercase">
											   <i class="fa fa-newspaper-o"></i>
											   3 ماه پیش
											</li>
										 </ul>
									  </span>
								   </span>
								</span>
                        </article>
                        <article class="custom-post-blog">
								<span class="thumb-info custom-thumb-info-2">
								   <span class="thumb-info-wrapper">
								   <a target="_blank" href="https://dialenz.com/blog/%d9%84%d9%86%d8%b2%d9%87%d8%a7%db%8c-%d8%aa%d9%85%d8%a7%d8%b3%db%8c-%d9%85%db%8c%d8%aa%d9%88%d8%a7%d9%86%d9%86%d8%af-%d8%a8%d8%a7%d8%b9%d8%ab-%d8%b3%d8%b1%d8%af%d8%b1%d8%af-%d8%b4%d9%88%d9%86%d8%af">
								   <img src="https://dialenz.com/blog/wp-content/uploads/2020/04/Headaches-and-Eye-Pain-1.jpg" alt="Headaches-and-Eye-Pain-1" class="img-fluid" />
								   </a>
								   </span>
								   <span class="thumb-info-caption custom-box-shadow">
									  <span class="thumb-info-caption-text">
										 <a target="_blank" href="https://dialenz.com/blog/%d9%84%d9%86%d8%b2%d9%87%d8%a7%db%8c-%d8%aa%d9%85%d8%a7%d8%b3%db%8c-%d9%85%db%8c%d8%aa%d9%88%d8%a7%d9%86%d9%86%d8%af-%d8%a8%d8%a7%d8%b9%d8%ab-%d8%b3%d8%b1%d8%af%d8%b1%d8%af-%d8%b4%d9%88%d9%86%d8%af" class="text-decoration-none custom-secondary-font text-color-dark">
											<h4 class="font-weight-bold mb-4 text-center">
											   لنزهای تماسی میتوانند باعث سردرد شوند؟
											</h4>
										 </a>
										 <div class="text-justify">
											لنزهای تماسی میتوانند باعث سردرد شوند؟
											مشکلات بینایی اغلب به دلیل خطای انکسار در بینایی شخص است. این در شرایطی است که نور وارد چ...
										 </div>
									  </span>
									  <span class="custom-thumb-info-post-infos text-center">
										 <ul>
											<li class="text-uppercase">
											   <i class="fa fa-newspaper-o"></i>
											   3 ماه پیش
											</li>
										 </ul>
									  </span>
								   </span>
								</span>
                        </article>
                        <article class="custom-post-blog">
								<span class="thumb-info custom-thumb-info-2">
								   <span class="thumb-info-wrapper">
								   <a target="_blank" href="https://dialenz.com/blog/%d8%b9%d9%88%d8%a7%d9%85%d9%84%db%8c-%da%a9%d9%87-%d8%a2%d8%b3%d8%aa%db%8c%da%af%d9%85%d8%a7%d8%aa%db%8c%d8%b3%d9%85-%d8%b1%d8%a7-%d8%a8%d8%af%d8%aa%d8%b1-%d9%85%db%8c%da%a9%d9%86%d8%af">
								   <img src="https://dialenz.com/blog/wp-content/uploads/2020/04/Fotolia_117192342_Subscription_Monthly_M.jpg" alt="Empty wood table top on blur  cafe restaurant in dark backgroun" class="img-fluid" />
								   </a>
								   </span>
								   <span class="thumb-info-caption custom-box-shadow">
									  <span class="thumb-info-caption-text">
										 <a target="_blank" href="https://dialenz.com/blog/%d8%b9%d9%88%d8%a7%d9%85%d9%84%db%8c-%da%a9%d9%87-%d8%a2%d8%b3%d8%aa%db%8c%da%af%d9%85%d8%a7%d8%aa%db%8c%d8%b3%d9%85-%d8%b1%d8%a7-%d8%a8%d8%af%d8%aa%d8%b1-%d9%85%db%8c%da%a9%d9%86%d8%af" class="text-decoration-none custom-secondary-font text-color-dark">
											<h4 class="font-weight-bold mb-4 text-center">
											   عواملی که آستیگماتیسم را بدتر میکند
											</h4>
										 </a>
										 <div class="text-justify">
											عواملی که آستیگماتیسم را بدتر میکند
											برای نگه داشتن اطلاعات در مورد علائم آستیگماتیسم و تجویز آن، توصیه می کنیم قرارهای منظم پزشک...
										 </div>
									  </span>
									  <span class="custom-thumb-info-post-infos text-center">
										 <ul>
											<li class="text-uppercase">
											   <i class="fa fa-newspaper-o"></i>
											   3 ماه پیش
											</li>
										 </ul>
									  </span>
								   </span>
								</span>
                        </article>
                        <article class="custom-post-blog">
								<span class="thumb-info custom-thumb-info-2">
								   <span class="thumb-info-wrapper">
								   <a target="_blank" href="https://dialenz.com/blog/%d8%a2%db%8c%d8%a7-%d8%a2%d8%ac%db%8c%d9%84-%d8%a8%d8%b1%d8%a7%db%8c-%da%86%d8%b4%d9%85-%d9%85%d9%86%d8%a7%d8%b3%d8%a8-%d8%a7%d8%b3%d8%aa%d8%9f">
								   <img src="https://dialenz.com/blog/wp-content/uploads/2020/04/iStock-496689738.jpg" alt="iStock-496689738" class="img-fluid" />
								   </a>
								   </span>
								   <span class="thumb-info-caption custom-box-shadow">
									  <span class="thumb-info-caption-text">
										 <a target="_blank" href="https://dialenz.com/blog/%d8%a2%db%8c%d8%a7-%d8%a2%d8%ac%db%8c%d9%84-%d8%a8%d8%b1%d8%a7%db%8c-%da%86%d8%b4%d9%85-%d9%85%d9%86%d8%a7%d8%b3%d8%a8-%d8%a7%d8%b3%d8%aa%d8%9f" class="text-decoration-none custom-secondary-font text-color-dark">
											<h4 class="font-weight-bold mb-4 text-center">
											   آیا آجیل برای چشم مناسب است؟
											</h4>
										 </a>
										 <div class="text-justify">
											آیا آجیل برای چشم مناسب است؟
											از کره بادام روی برش های سیب گرفته تا کره بادام زمینی و ساندویچ ژله با یک لیوان شیر سرد، آجیل ها می...
										 </div>
									  </span>
									  <span class="custom-thumb-info-post-infos text-center">
										 <ul>
											<li class="text-uppercase">
											   <i class="fa fa-newspaper-o"></i>
											   3 ماه پیش
											</li>
										 </ul>
									  </span>
								   </span>
								</span>
                        </article>
                        <article class="custom-post-blog">
								<span class="thumb-info custom-thumb-info-2">
								   <span class="thumb-info-wrapper">
								   <a target="_blank" href="https://dialenz.com/blog/%d9%84%d9%86%d8%b2%d9%87%d8%a7%db%8c-%d8%aa%d9%85%d8%a7%d8%b3%db%8c-%d9%85%d8%ae%d8%b5%d9%88%d8%b5-%d9%86%d8%a7%d8%a8%db%8c%d9%86%d8%a7%db%8c%d8%a7%d9%86">
								   <img src="https://dialenz.com/blog/wp-content/uploads/2020/04/5646-1.jpg" alt="5646" class="img-fluid" />
								   </a>
								   </span>
								   <span class="thumb-info-caption custom-box-shadow">
									  <span class="thumb-info-caption-text">
										 <a target="_blank" href="https://dialenz.com/blog/%d9%84%d9%86%d8%b2%d9%87%d8%a7%db%8c-%d8%aa%d9%85%d8%a7%d8%b3%db%8c-%d9%85%d8%ae%d8%b5%d9%88%d8%b5-%d9%86%d8%a7%d8%a8%db%8c%d9%86%d8%a7%db%8c%d8%a7%d9%86" class="text-decoration-none custom-secondary-font text-color-dark">
											<h4 class="font-weight-bold mb-4 text-center">
											   لنزهای تماسی مخصوص نابینایان
											</h4>
										 </a>
										 <div class="text-justify">
											لنزهای تماسی مخصوص نابینایان
											محققان در اسرائیل در حال کار بر روی نوع خاصی از لنزهای تماسی هستند که به گفته آنها این امکان را برا...
										 </div>
									  </span>
									  <span class="custom-thumb-info-post-infos text-center">
										 <ul>
											<li class="text-uppercase">
											   <i class="fa fa-newspaper-o"></i>
											   3 ماه پیش
											</li>
										 </ul>
									  </span>
								   </span>
								</span>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop