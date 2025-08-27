<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ URL::asset('build/images/favicon-32x32.png') }}" type="image/png">
    <title>@yield('title') | Laravel & Bootstrap 5 Admin Dashboard Template</title>

    @yield('css')

    @include('layouts.head-css')

</head>

<body>

@include('layouts.topbar')
@include('layouts.sidebar')

<!--start main wrapper-->
<main class="main-wrapper">
    <div class="main-content">

        @yield('content')

    </div>
</main>
<!--end main wrapper-->

<!--start overlay-->
    <div class="overlay btn-toggle"></div>
<!--end overlay-->

  @include('layouts.footer')

  @include('layouts.cart')

  @include('layouts.right-sidebar')

  @include('layouts.vendor-scripts')

  @yield('scripts')

  <style>
    #chatbot-launcher {
      position: fixed;
      left: 20px;
      bottom: 20px;
      width: 56px;
      height: 56px;
      border-radius: 50%;
      z-index: 1050;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    #chatbot-panel {
      position: fixed;
      left: 20px;
      bottom: 88px;
      width: 320px;
      max-height: 60vh;
      background: #fff;
      border: 1px solid rgba(0,0,0,0.08);
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.12);
      z-index: 1050;
      overflow: hidden;
      display: none;
    }
    #chatbot-panel .panel-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 14px;
      background: #0d6efd;
      color: #fff;
    }
    #chatbot-panel .panel-body {
      padding: 12px 14px;
      overflow: auto;
    }
  </style>

  <button id="chatbot-launcher" class="btn btn-primary shadow-lg">
    <span class="material-icons-outlined">chat</span>
  </button>
  <div id="chatbot-panel">
    <div class="panel-header">
      <strong>SmartWrist Assistant</strong>
      <button id="chatbot-close" class="btn btn-sm btn-light">×</button>
    </div>
    <div class="panel-body">
      <p class="mb-2">Hi! I can help explain alerts, vitals, and caregiver steps.</p>
      <ul class="mb-0">
        <li>What does this alert mean?</li>
        <li>How to improve sleep tonight?</li>
        <li>Safe temperature range?</li>
      </ul>
    </div>
  </div>

  <script>
    (function(){
      const btn = document.getElementById('chatbot-launcher');
      const panel = document.getElementById('chatbot-panel');
      const closeBtn = document.getElementById('chatbot-close');
      if (btn && panel) {
        btn.addEventListener('click', function(){
          panel.style.display = panel.style.display === 'none' || panel.style.display === '' ? 'block' : 'none';
        });
      }
      if (closeBtn && panel) {
        closeBtn.addEventListener('click', function(){ panel.style.display = 'none'; });
      }
    })();
  </script>

</body>

</html>
