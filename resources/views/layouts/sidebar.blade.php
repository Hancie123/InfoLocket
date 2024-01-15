 <div class="sidebar-wrapper">
     <div class="sidebar sidebar-collapse" id="sidebar">
         <div class="sidebar__menu-group">
             <ul class="sidebar_nav">
                 <li class="{{request()->is('admin/dashboard')?'active':""}}">
                     <a href="{{ url('admin/dashboard') }}" class="{{request()->is('admin/dashboard')?'active':""}}">
                         <span class="nav-icon uil uil-create-dashboard"></span>
                         <span class="menu-text">@lang('translation.dashboard_btn')</span>

                     </a>

                 </li>

                 {{-- <li>
                     <a href="changelog.html" class>
                         <span class="nav-icon uil uil-arrow-growth"></span>
                         <span class="menu-text">Changelog</span>
                         <span class="badge badge-info-10 menuItem rounded-pill">1.1.7</span>
                     </a>
                 </li>

                 <li class="has-child">
                     <a href="#" class>
                         <span class="nav-icon uil uil-envelope"></span>
                         <span class="menu-text">Email</span>
                         <span class="toggle-icon"></span>
                     </a>
                     <ul>
                         <li class>
                             <a href="inbox.html">Inbox</a>
                         </li>
                         <li class>
                             <a href="read-email.html">Read
                                 Email</a>
                         </li>
                     </ul>
                 </li>
                 <li>
                     <a href="chat.html" class>
                         <span class="nav-icon uil uil-chat"></span>
                         <span class="menu-text">Chat</span>
                         <span class="badge badge-success menuItem rounded-circle">3</span>
                     </a>
                 </li>


                 <li class="has-child">
                     <a href="#" class>
                         <span class="nav-icon uil uil-images"></span>
                         <span class="menu-text">Blog</span>
                         <span class="toggle-icon"></span>
                     </a>
                     <ul>
                         <li class>
                             <a href="blog.html">style 1</a>
                         </li>
                         <li class>
                             <a href="blog2.html">Style 2</a>
                         </li>
                         <li class>
                             <a href="blog3.html">Style 3</a>
                         </li>
                         <li class>
                             <a href="blog-details.html">Details</a>
                         </li>
                     </ul>
                 </li> --}}

                <li class="{{ request()->is('admin/contacts') ? 'active' : '' }}">
                     <a href="{{ url('admin/contacts') }}">
                         <span class="nav-icon uil uil-at"></span>
                         <span class="menu-text">Contacts</span>
                     </a>
                 </li>

                 <li class>
                     <a href="sign-up.html">
                         <span class="nav-icon uil uil-sign-out-alt"></span>
                         <span class="menu-text">@lang('translation.sign_out_btn')</span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </div>
