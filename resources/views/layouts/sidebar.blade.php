 <!--  BEGIN SIDEBAR  -->
 <div class="sidebar-wrapper sidebar-theme">

     <nav id="sidebar">
         <div class="shadow-bottom"></div>
         <ul class="list-unstyled menu-categories" id="accordionExample">

             <li class="menu">
                 <a href="{{ url('/admin/dashboard') }}"
                     data-active="{{ request()->is('admin/dashboard*') ? 'true' : '' }}" aria-expanded="false"
                     class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-home">
                             <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                             <polyline points="9 22 9 12 15 12 15 22"></polyline>
                         </svg>
                         <span>Dashboard</span>
                     </div>
                 </a>
             </li>




             <li class="menu">
                 <a href="#app" data-toggle="collapse" data-active="{{ request()->is('admin/apps*') ? 'true' : '' }}" aria-expanded="false" class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-cpu">
                             <rect x="4" y="4" width="16" height="16" rx="2"
                                 ry="2"></rect>
                             <rect x="9" y="9" width="6" height="6"></rect>
                             <line x1="9" y1="1" x2="9" y2="4"></line>
                             <line x1="15" y1="1" x2="15" y2="4"></line>
                             <line x1="9" y1="20" x2="9" y2="23"></line>
                             <line x1="15" y1="20" x2="15" y2="23"></line>
                             <line x1="20" y1="9" x2="23" y2="9"></line>
                             <line x1="20" y1="14" x2="23" y2="14"></line>
                             <line x1="1" y1="9" x2="4" y2="9"></line>
                             <line x1="1" y1="14" x2="4" y2="14"></line>
                         </svg>
                         <span>Apps</span>
                     </div>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                             <polyline points="9 18 15 12 9 6"></polyline>
                         </svg>
                     </div>
                 </a>
                 <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">

                     <li class="{{ request()->is('admin/apps/contacts') ? 'active' : '' }}">
                         <a href="{{ url('/admin/apps/contacts') }}">Contacts </a>
                     </li>

                 </ul>
             </li>





             <li class="menu">
                 <a href="#" aria-expanded="false" class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-target">
                             <circle cx="12" cy="12" r="10"></circle>
                             <circle cx="12" cy="12" r="6"></circle>
                             <circle cx="12" cy="12" r="2"></circle>
                         </svg>
                         <span>My Expenses</span>
                     </div>
                 </a>
             </li>






             <li class="menu">
                 <a href="#users" data-toggle="collapse"
                     data-active="{{ request()->is('admin/profile*') ? 'true' : '' }}" aria-expanded="false"
                     class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-users">
                             <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                             <circle cx="9" cy="7" r="4"></circle>
                             <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                             <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                         </svg>
                         <span>Users</span>
                     </div>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                             <polyline points="9 18 15 12 9 6"></polyline>
                         </svg>
                     </div>
                 </a>
                 <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                     <li class="{{ request()->is('admin/profile') ? 'active' : '' }}">
                         <a href="{{ url('admin/profile') }}"> Profile </a>
                     </li>
                     <li class="{{ request()->is('admin/profile/account-setting') ? 'active' : '' }}">
                         <a href="{{ url('/admin/profile/account-setting') }}">Account Settings </a>
                     </li>
                 </ul>
             </li>






             <li class="menu">
                 <a href="{{url('/logout')}}" aria-expanded="false" class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-log-out">
                             <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                             <polyline points="16 17 21 12 16 7"></polyline>
                             <line x1="21" y1="12" x2="9" y2="12"></line>
                         </svg>
                         <span>Logout</span>
                     </div>
                 </a>
             </li>






         </ul>
         <!-- <div class="shadow-bottom"></div> -->

     </nav>

 </div>
 <!--  END SIDEBAR  -->
