<aside id="sidebar" class="fixed justify-between top-0 left-0 z-50 sm:static sm:z-auto sm:flex sm:flex-col w-72 sm:w-64 bg-[#1c1c2e] h-screen overflow-y-scroll pl-2">
  <div>
    <div class="w-full flex justify-center py-4 text-2xl font-bold text-indigo-400 mb-4 border-b border-gray-700">
      MyDashboard
    </div>

    <nav class="space-y-2">

      <div class="text-xs uppercase text-gray-400 tracking-wide py-2 px-4">
        Main Menu
      </div>

      <a href="{{ route('dashboard') }}" wire:navigate class="text-md w-full flex items-center py-2 px-2 rounded-md transition-all duration-200 {{ Request::is('_dashboard/home*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-layout-collage"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M10 4l4 16" /><path d="M12 12l-8 2" /></svg>
        <span class=" ml-2 font-semibold relative">Overview</span>
      </a>

      <a href="{{ route('inbox') }}" wire:navigate class="text-md w-full flex items-center py-2 px-2 rounded-md transition-all duration-200 {{ Request::is('_dashboard/inbox*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
        <span class=" ml-2 font-semibold relative">Inbox</span>
        <span class="ml-auto text-sm font-semibold text-indigo-400 bg-gray-800 rounded-md px-2 py-0.5">
          9+
        </span>
      </a>

      <a href="{{ route('promotion') }}" wire:navigate class="text-md w-full flex items-center py-2 px-2 rounded-md transition-all duration-200 {{ Request::is('_dashboard/promotion*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-tag"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z" /></svg>
        <span class=" ml-2 font-semibold relative">Promotion</span>
      </a>

      <!-- Nested Menu 1 -->
      <div>
        <button class="text-md w-full flex items-center py-2 px-2 rounded-md  transition-all duration-200 {{ Request::is('_dashboard/media-*') ? 'text-white bg-indigo-600' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}"
          data-toggle="nested-management-media">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="chevron-icon transition-transform duration-300 icon icon-tabler icons-tabler-outline icon-tabler-chevron-right {{ Request::is('_dashboard/media-*') ? "rotate-90" : "" }}"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
          <span class="text-md ml-2 font-semibold">Media</span>
        </button>

        <!-- Nested submenu -->
        <div id="nested-management-media" class="ml-4 mt-2 space-y-1 {{ Request::is('_dashboard/media-*') ? '' : 'hidden'}}">
          <a href="{{ route('media-news') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_dashboard/media-news*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>News</span>
          </a>
          <a href="{{ route('media-event') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_dashboard/media-event*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Event</span>
          </a>
          <a href="{{ route('media-stream') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_dashboard/media-stream*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Stream</span>
          </a>
          <a href="{{ route('media-guide') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_dashboard/media-guide*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Guide</span>
          </a>
          <a href="{{ route('media-gallery') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_dashboard/media-gallery*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Gallery</span>
          </a>
        </div>
      </div>

      <div class="text-xs uppercase text-gray-400 tracking-wide py-2 px-4">
        Project
      </div>

      <a href="#" class="text-md w-full flex items-center py-2 px-2 rounded-md transition-all duration-200 {{ Request::is('_table_website*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-nintendo"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-16h-3a4 4 0 0 0 -4 4v8a4 4 0 0 0 4 4h3z" /><path d="M14 20v-16h3a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-3z" /><circle cx="17.5" cy="15.5" r="1" fill="currentColor" /><circle cx="6.5" cy="8.5" r="1" fill="currentColor" /></svg>
        <span class=" ml-2 font-semibold relative">Mini Games</span>
      </a>

      <a href="#" class="text-md w-full flex items-center py-2 px-2 rounded-md transition-all duration-200 {{ Request::is('_table_website*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-template"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" /><path d="M4 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M14 12l6 0" /><path d="M14 16l6 0" /><path d="M14 20l6 0" /></svg>
        <span class=" ml-2 font-semibold relative">Template</span>
      </a>

      <a href="#" class="text-md w-full flex items-center py-2 px-2 rounded-md transition-all duration-200 {{ Request::is('_table_website*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-mobile"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14z" /><path d="M11 4h2" /><path d="M12 17v.01" /></svg>
        <span class=" ml-2 font-semibold relative">Mobile Apps</span>
      </a>

      <a href="#" class="text-md w-full flex items-center py-2 px-2 rounded-md transition-all duration-200 {{ Request::is('_table_website*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-api"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 13h5" /><path d="M12 16v-8h3a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-3" /><path d="M20 8v8" /><path d="M9 16v-5.5a2.5 2.5 0 0 0 -5 0v5.5" /></svg>
        <span class=" ml-2 font-semibold relative">Projects</span>
      </a>

      <div class="text-xs uppercase text-gray-400 tracking-wide py-2 px-4">
        Settings
      </div>
            
      {{-- <a href="{{ route('table-website') }}" wire:navigate class="text-md w-full flex items-center py-2 px-2 rounded-md transition-all duration-200 {{ Request::is('_settings/table-website*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-world"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M3.6 9h16.8" /><path d="M3.6 15h16.8" /><path d="M11.5 3a17 17 0 0 0 0 18" /><path d="M12.5 3a17 17 0 0 1 0 18" /></svg>
        <span class=" ml-2 font-semibold relative">Table Website</span>
      </a> --}}

      <a href="{{ route('preferences') }}" wire:navigate class="text-md w-full flex items-center py-2 px-2 rounded-md transition-all duration-200 {{ Request::is('_settings/preferences*') ? 'bg-indigo-600 text-white' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-horizontal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M4 6l8 0" /><path d="M16 6l4 0" /><path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M4 12l2 0" /><path d="M10 12l10 0" /><path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M4 18l11 0" /><path d="M19 18l1 0" /></svg>
        <span class=" ml-2 font-semibold relative">Preferences</span>
        <span class="ml-auto text-sm font-semibold text-indigo-400 bg-gray-800 rounded-md px-2 py-0.5">
          2
        </span>
      </a>

      <!-- Nested Menu 1 -->
      <div>
        <button class="text-md w-full flex items-center py-2 px-2 rounded-md  transition-all duration-200 {{ Request::is('_settings/user-management-*') ? 'text-white bg-indigo-600' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}"
          data-toggle="nested-management-user-management">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="chevron-icon transition-transform duration-300 icon icon-tabler icons-tabler-outline icon-tabler-chevron-right {{ Request::is('_settings/user-management-*') ? "rotate-90" : "" }}"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
          <span class="text-md ml-2 font-semibold">User Management</span>
        </button>

        <!-- Nested submenu -->
        <div id="nested-management-user-management" class="ml-4 mt-2 space-y-1 {{ Request::is('_settings/user-management-*') ? '' : 'hidden'}}">
          <a href="{{ route('user-management-users') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_settings/user-management-users*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Users</span>
          </a>
          <a href="{{ route('user-management-roles') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_settings/user-management-roles*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Roles</span>
          </a>
          <a href="{{ route('user-management-permissions') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_settings/user-management-permissions*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Permissions</span>
          </a>
        </div>
      </div>

      <!-- Nested Menu 2 -->
      <div>
        <button class="text-md w-full flex items-center py-2 px-2 rounded-md text-indigo-300 transition-all duration-200 hover:bg-indigo-600 hover:text-white"
          data-toggle="nested-management-configuration">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="chevron-icon transition-transform duration-300 icon icon-tabler icons-tabler-outline icon-tabler-chevron-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
          <span class="text-md ml-2 font-semibold">Configuration</span>
        </button>

        <!-- Nested submenu 2 -->
        <div id="nested-management-configuration" class="ml-4 mt-2 space-y-1 hidden">
          <a href="#" class="flex items-center gap-2 text-indigo-200 text-sm py-1 px-2 rounded-md hover:bg-indigo-700 hover:text-white">
            <div class="dotsub bg-indigo-200"></div>
            <span>Ip Settings</span>
          </a>
          <a href="#" class="flex items-center gap-2 text-indigo-200 text-sm py-1 px-2 rounded-md hover:bg-indigo-700 hover:text-white">
            <div class="dotsub bg-indigo-200"></div>
            <span>Meta Config</span>
          </a>
          <a href="#" class="flex items-center gap-2 text-indigo-200 text-sm py-1 px-2 rounded-md hover:bg-indigo-700 hover:text-white">
            <div class="dotsub bg-indigo-200"></div>
            <span>Dashboard Settings</span>
          </a>
        </div>
      </div>
      
      <div class="text-xs uppercase text-gray-400 tracking-wide py-2 px-4">
        Component
      </div>

      <div>
        <button class="text-md w-full flex items-center py-2 px-2 rounded-md  transition-all duration-200 {{ Request::is('_component/*') ? 'text-white bg-indigo-600' : 'hover:bg-indigo-600 hover:text-white text-indigo-300' }}"
          data-toggle="nested-management-component">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="chevron-icon transition-transform duration-300 icon icon-tabler icons-tabler-outline icon-tabler-chevron-right {{ Request::is('_component/*') ? "rotate-90" : "" }}"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
          <span class="text-md ml-2 font-semibold">Component List</span>
        </button>

        <!-- Nested submenu 2 -->
        <div id="nested-management-component" class="ml-4 mt-2 space-y-1 {{ Request::is('_component/*') ? '' : 'hidden'}}">
          <a href="{{ route('component-box') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_component/component-box') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Box</span>
          </a>
          <a href="{{ route('component-table') }}" wire:navigate onclick="scrollToMenu(this)" class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_component/component-table') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Table</span>
          </a>
          <a href="{{ route('component-form') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_component/component-form') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Form</span>
          </a>
          <a href="{{ route('component-modal') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_component/component-modal') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Modal</span>
          </a>
          <a href="{{ route('component-button') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_component/component-button') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Button</span>
          </a>
          <a href="{{ route('component-card') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_component/component-card') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Card</span>
          </a>
          <a href="{{ route('component-other') }}" wire:navigate class="flex items-center gap-2 text-sm py-1 px-2 rounded-md {{ Request::is('_component/component-other') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <div class="dotsub bg-indigo-200"></div>
            <span>Other</span>
          </a>
        </div>
      </div>
    </nav>
  </div>

  <!-- Profile at bottom -->
  <div class="border-t border-gray-700 p-4 mt-4">
    <div class="flex items-center gap-3">
      <img src="https://placehold.co/40" alt="Profile" class="w-10 h-10 rounded-full">
      <div>
        <div class="text-sm font-medium">Dedaunan</div>
        <div class="text-xs text-gray-400">Admin</div>
      </div>
    </div>
  </div>
</aside>