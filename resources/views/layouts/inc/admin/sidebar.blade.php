<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">داشبورد</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">دسته بندی ها</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu ">

              <li class="nav-item px-5"> <a class="nav-link" href="{{ route('category.index') }}">مدیریت دسته بندی ها</a></li>
              <li class="nav-item px-5"> <a class="nav-link" href="{{ route('category.create') }}">افزودن دست بندی جدید</a></li>



          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <i class="mdi mdi-view-headline menu-icon"></i>
          <span class="menu-title">سفارشات</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false" aria-controls="products">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">محصولات</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="products">
          <ul class="nav flex-column sub-menu ">

              <li class="nav-item px-5"> <a class="nav-link" href="{{ route('product.index')}}">مدیریت محصولات</a></li>
              <li class="nav-item px-5"> <a class="nav-link" href="{{ route('product.create')}}">افزودن محصول جدید</a></li>

          </ul>
        </div>
      </li>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#colors" aria-expanded="false" aria-controls="colors">
        <i class="mdi mdi-circle-outline menu-icon"></i>
        <span class="menu-title">رنگ محصولات</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="colors">
        <ul class="nav flex-column sub-menu ">

            <li class="nav-item px-5"> <a class="nav-link" href="{{ route('colors.index')}}">مدیریت رنگ ها</a></li>
            <li class="nav-item px-5"> <a class="nav-link" href="{{ route('colors.create')}}">افزودن رنگ جدید</a></li>

        </ul>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('brand.index') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">برند ها</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          {{-- <i class="mdi mdi-emoticon menu-icon"></i> --}}
          <i class="mdi mdi-account menu-icon"></i>

          <span class="menu-title">مدیریت کاربران</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('sliders.index') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">اسلایدر صفحه نخست</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">اسلایدر صفحه نخست</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="documentation/documentation.html">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">تنظیمات سایت</span>
        </a>
      </li>
    </ul>
  </nav>
