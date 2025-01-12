<!-- القائمة الجانبية -->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{route('admin.dashboard')}}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item  open ">
                <a href="{{route('admin.dashboard')}}"><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الامتحانات الوطنية </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\NationalExam::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.nationalexams')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.nationalexams.create')}}" data-i18n="nav.dash.crypto">أضافة
                            امتحان وطني جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الاختبارات </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Test::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.tests')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.tests.create')}}" data-i18n="nav.dash.crypto">أضافة
                             اختبار جديد </a>
                    </li>
                </ul>
            </li>


            <!-- <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> المواد المطلوبة </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                              مادة جديدة </a>
                    </li>
                </ul>
            </li> -->

            <li class="nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> المحاضرات  </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Lecture::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                              محاضرة جديدة </a>
                    </li>
                </ul>
            </li>

            <!-- <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الكتّاب</span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            كاتب جديد  </a>
                    </li>
                </ul>
            </li> -->


            <li class="nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">أسئلة امتحانية</span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\Question::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.questions')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.questions.create')}}" data-i18n="nav.dash.crypto">أضافة
                            سؤال امتحاني جديد  </a>
                    </li>
                </ul>
            </li>

            <!-- <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الطلاب  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            طالب </a>
                    </li>
                </ul>
            </li> -->


            <!-- <li class="nav-item">
                <a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الأسئلة   </span>
                    <span
                        class="badge badge badge-danger  badge-pill float-right mr-2">0</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> تذاكر الطلاب </a>
                    </li>
                </ul>
            </li> -->

                    <span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</div>
