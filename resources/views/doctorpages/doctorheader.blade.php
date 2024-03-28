<header class="blade-header" id="dropdownHeader">
    <div class="header-left">
        <img src="{{ asset('images/cane.png') }}" alt="cane" id="cane" class="header-image">
    </div>
    <div class="header-middle">
        <h1>Graceful Haven Care Home<div><img src="{{ asset('images/wheelchair.png') }}" alt="wheelchair" id="crutch"></div></h1>
    </div>
    <div class="header-right">
        <a href="#" id="logoutLink">Logout</a>
    </div>
  </header>

    <aside class="sidebar" id="sidebar">
      <ul class="sidebar-menu">
          <li><a href="/doctorNavigation">Dashboard</a></li>
          <li><a href="/doctorNavigation/potd">Patient Of the Day</a></li>
       
      </ul>
    </aside>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          const dropdownHeader = document.getElementById('dropdownHeader');
          // const sidebar = document.getElementById('sidebar');
          const caneImage = document.getElementById('cane');

          // dropdownHeader.addEventListener('click', function() {
          //     sidebar.classList.toggle('active');
          // });

          caneImage.addEventListener('click', function() {
              sidebar.classList.toggle('active');
          });

          const logoutLink = document.getElementById('logoutLink');
          logoutLink.addEventListener('click', function(event) {
              event.preventDefault();
              window.location.href = '/login';
          });
      });

        </script>



