<nav class="navbar navbar-expand-lg navbar-light top-nav">
    <div class="container">
        <ul class="navbar-nav d-inline-flex flex-row text-right">
            <li class="nav-item active">
                <a class="nav-link" href="#">معلومات عنا <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">اتصل بنا <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">الأحكام والشروط <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav d-inline-flex flex-row ">
            @auth
                <!-- Nav Item - User Information -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">تسجيل الخروج</span></a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">تسجيل دخول <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">تسجيل حساب جديد <span
                            class="sr-only">(current)</span></a>
                </li>

            @endauth
        </ul>
    </div>
</nav>
<div class="banner">
    <div class="container d-flex justify-content-sm-center align-items-center justify-content-md-start mb-3 ">
        <div class="image-banner ml-auto">
            <a href="#">
                <img src="{{ asset('images/l-e1598242545491.png') }}" alt="فى بلدى دوت كوم" />
            </a>
        </div>
        <div class="add-adv">
            <a href="#"><button class="btn"><i class="fas fa-plus"></i> اضافة اعلان</button></a>
        </div>
    </div>
    <div class="search-banner">
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="عن ماذا تبحث ؟">
                    </div>
                    <div class="col">
                        <select class="form-control">
                            <option selected>كل مصر</option>
                            <option value="1">الغربية</option>
                            <option value="2">الدقهلية</option>
                            <option value="3">القاهره</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control">
                            <option selected>اختر منطقة</option>
                            <option value="1">طنطا</option>
                            <option value="2">المحلة الكبرى</option>
                            <option value="3">زفتى</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="بحث" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
