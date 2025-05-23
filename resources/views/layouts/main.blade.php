<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ !isset($title) ? 'Dashboard | Overview' : $title }}</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gradient-to-br {{ env('BG_GRADIENT') ?? 'from-[#141424] to-[#0a0a15]' }} text-white min-h-screen flex">
    
    @include('partials.sidebar')
  
    <main class="flex-1 h-screen overflow-y-auto py-4 px-8">
      <x-breadcrumb :links="$breadcrumb" />
      {{ $slot }}
    </main>

    <script>
      $(document).ready(function () {
        $('[data-toggle]').on('click', function () {
          const targetId = $(this).data('toggle');
          const $submenu = $('#' + targetId);
          const $button = $(this);
          const $chevron = $(this).find('.chevron-icon');
    
          const isVisible = $submenu.is(':visible');

          $chevron.toggleClass('rotate-90', !isVisible);

          $submenu.slideToggle(200, function () {
            $button.toggleClass(`text-white bg-indigo-600`, !isVisible);
            $button.toggleClass(`text-indigo-300 hover:bg-indigo-600 hover:text-white`, isVisible);
          });
        });
      });
    </script>
    {{-- <script>
      // Global var
      window.clickedSidebarItem = null;

      function scrollToMenu(el) {
        const $sidebar = $('#sidebar');
        if ($sidebar.length) {
          localStorage.setItem('sidebar-scroll', $sidebar.scrollTop());
        }
        window.clickedSidebarItem = el;
      }

      document.addEventListener('livewire:navigated', () => {
        setTimeout(() => {
          const $sidebar = $('#sidebar');

          if (!$sidebar.length) {
            console.warn('Sidebar not found.');
            return;
          }

          const scroll = localStorage.getItem('sidebar-scroll');
          if (scroll !== null) {
            $sidebar.animate({ scrollTop: scroll }, 300); 
          }

          if (window.clickedSidebarItem) {
            const offsetTop = $(window.clickedSidebarItem).position().top;
            $sidebar.animate({ scrollTop: offsetTop - 100 }, 400);
            window.clickedSidebarItem = null;
          }
        }, 150);
      });
    </script> --}}

    
</body>
</html>