@section('title') {{ 'Faqs' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')

    <!-- Start Hero -->
    <section
        class="relative table w-full py-32 lg:py-36 bg-[url('frontend/assets/images/bg/01.jpg')] bg-no-repeat bg-center">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Frequently
                    Asked
                    Questions</h3>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <div class="relative">
        <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start Section-->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-4 md:col-span-5">
                    <div class="rounded-md shadow dark:shadow-gray-700 p-6 sticky top-20">
                        <ul class="list-unstyled sidebar-nav mb-0 py-0" id="navmenu-nav">
                            <li class="navbar-item p-0"><a href="#tech" class="text-base font-medium navbar-link">Buying
                                    Questions</a></li>
                            <li class="navbar-item mt-3 p-0"><a href="#general"
                                                                class="text-base font-medium navbar-link">General
                                    Questions</a></li>
                            <li class="navbar-item mt-3 p-0"><a href="#payment"
                                                                class="text-base font-medium navbar-link">Payments
                                    Questions</a></li>
                            <li class="navbar-item mt-3 p-0"><a href="#support"
                                                                class="text-base font-medium navbar-link">Support
                                    Questions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-8 md:col-span-7">
                    <div id="tech">
                        <h5 class="text-2xl font-semibold">Buying Product</h5>

                        <div id="accordion-collapseone" data-accordion="collapse" class="mt-6">
                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-1">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                            aria-controls="accordion-collapse-body-1">
                                        <span>How does it work ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-1" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-1">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-2">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-2">
                                        <span>Do I need a designer to use Hously ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-2" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-3">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-3">
                                        <span>What do I need to do to start selling ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-3" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-3">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-4">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-4">
                                        <span>What happens when I receive an order ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-4" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-4">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="general" class="mt-8">
                        <h5 class="text-2xl font-semibold">General Questions</h5>

                        <div id="accordion-collapsetwo" data-accordion="collapse" class="mt-6">
                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-5">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-5" aria-expanded="true"
                                            aria-controls="accordion-collapse-body-5">
                                        <span>How does it work ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-5" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-5">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-6">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-6">
                                        <span>Do I need a designer to use Hously ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-6" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-6">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-7">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-7">
                                        <span>What do I need to do to start selling ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-7" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-7">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-8">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-8">
                                        <span>What happens when I receive an order ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-8" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-8">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="payment" class="mt-8">
                        <h5 class="text-2xl font-semibold">Payments Questions</h5>

                        <div id="accordion-collapsethree" data-accordion="collapse" class="mt-6">
                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-9">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-9" aria-expanded="true"
                                            aria-controls="accordion-collapse-body-9">
                                        <span>How does it work ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-9" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-9">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-10">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-10" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-10">
                                        <span>Do I need a designer to use Hously ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-10" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-10">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-11">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-11" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-11">
                                        <span>What do I need to do to start selling ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-11" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-11">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-12">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-12" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-12">
                                        <span>What happens when I receive an order ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-12" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-12">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="support" class="mt-8">
                        <h5 class="text-2xl font-semibold">Support Questions</h5>

                        <div id="accordion-collapsefour" data-accordion="collapse" class="mt-6">
                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-13">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-13" aria-expanded="true"
                                            aria-controls="accordion-collapse-body-13">
                                        <span>How does it work ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-13" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-13">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-14">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-14" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-14">
                                        <span>Do I need a designer to use Hously ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-14" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-14">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-15">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-15" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-15">
                                        <span>What do I need to do to start selling ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-15" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-15">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="text-lg font-medium" id="accordion-collapse-heading-16">
                                    <button type="button"
                                            class="flex justify-between items-center p-5 w-full font-medium text-left"
                                            data-accordion-target="#accordion-collapse-body-16" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-16">
                                        <span>What happens when I receive an order ?</span>
                                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-16" class="hidden"
                                     aria-labelledby="accordion-collapse-heading-16">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">There are many variations of
                                            passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                    Have Question ? Get in touch!</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties
                    without
                    any agent or commisions.</p>

                <div class="mt-6">
                    <a href="{{ url('/contact-us') }}"
                       class="btn bg-green-600 hover:bg-green-700 text-white rounded-md"><i
                            class="uil uil-phone align-middle mr-2"></i> Contact us</a>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

@endsection
