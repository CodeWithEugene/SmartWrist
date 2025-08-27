<aside class="sidebar-wrapper">
    <div class="sidebar-header">
      <div class="logo-icon">
        <img src="{{ URL::asset('build/images/logo-icon.png') }}" class="logo-img" alt="">
      </div>
      <div class="logo-name flex-grow-1">
        <h5 class="mb-0">SmartWrist</h5>
      </div>
      <div class="sidebar-close">
        <span class="material-icons-outlined">close</span>
      </div>
    </div>
    <div class="sidebar-nav" data-simplebar="true">

        <!--navigation-->
        <ul class="metismenu" id="sidenav">
          <li>
            <a href="/">
              <div class="parent-icon"><i class="material-icons-outlined">home</i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>

          <li class="menu-label">AGI Wristband</li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">smart_toy</i>
              </div>
              <div class="menu-title">Monitoring</div>
            </a>
            <ul>
              <li><a href="/agi/dashboard"><i class="material-icons-outlined">arrow_right</i>Dashboard</a></li>
              <li><a href="/agi/history"><i class="material-icons-outlined">arrow_right</i>History & Reports</a></li>
              <li><a href="/agi/alerts"><i class="material-icons-outlined">arrow_right</i>Alerts & Guidance</a></li>
            </ul>
          </li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">settings</i>
              </div>
              <div class="menu-title">Configuration</div>
            </a>
            <ul>
              <li><a href="/agi/device"><i class="material-icons-outlined">arrow_right</i>Device</a></li>
              <li><a href="/agi/caregiver"><i class="material-icons-outlined">arrow_right</i>Caregiver Coach</a></li>
              <li><a href="/agi/accessibility"><i class="material-icons-outlined">arrow_right</i>Accessibility</a></li>
            </ul>
          </li>
        </ul>
        <!--end navigation-->
    </div>
    <div class="sidebar-bottom gap-4">
        <div class="dark-mode">
          <a href="javascript:;" class="footer-icon dark-mode-icon">
            <i class="material-icons-outlined">dark_mode</i>
          </a>
        </div>
        <div class="dropdown dropup-center dropup dropdown-laungauge">
          <a class="dropdown-toggle dropdown-toggle-nocaret footer-icon" href="avascript:;" data-bs-toggle="dropdown">
            <span class="d-inline-block" style="width:22px;height:22px;overflow:hidden;border-radius:50%;">
              <svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <clipPath id="kenyaCircle">
                    <circle cx="11" cy="11" r="11" />
                  </clipPath>
                </defs>
                <g clip-path="url(#kenyaCircle)">
                  <rect x="0" y="0" width="22" height="22" fill="#000" />
                  <rect x="0" y="7.33" width="22" height="7.34" fill="#BB0000" />
                  <rect x="0" y="14.67" width="22" height="7.33" fill="#046A38" />
                  <rect x="0" y="6.33" width="22" height="1" fill="#FFFFFF" />
                  <rect x="0" y="14.33" width="22" height="1" fill="#FFFFFF" />
                </g>
              </svg>
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ URL::asset('build/images/county/01.png') }}" width="20" alt=""><span class="ms-2">English</span></a>
            </li>
            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ URL::asset('build/images/county/02.png') }}" width="20" alt=""><span class="ms-2">Catalan</span></a>
            </li>
            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ URL::asset('build/images/county/03.png') }}" width="20" alt=""><span class="ms-2">French</span></a>
            </li>
            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ URL::asset('build/images/county/04.png') }}" width="20" alt=""><span class="ms-2">Belize</span></a>
            </li>
            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ URL::asset('build/images/county/05.png') }}" width="20" alt=""><span class="ms-2">Colombia</span></a>
            </li>
            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ URL::asset('build/images/county/06.png') }}" width="20" alt=""><span class="ms-2">Spanish</span></a>
            </li>
            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ URL::asset('build/images/county/07.png') }}" width="20" alt=""><span class="ms-2">Georgian</span></a>
            </li>
            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ URL::asset('build/images/county/08.png') }}" width="20" alt=""><span class="ms-2">Hindi</span></a>
            </li>
          </ul>
        </div>
        <div class="dropdown dropup-center dropup dropdown-help">
          <a class="footer-icon  dropdown-toggle dropdown-toggle-nocaret option" href="javascript:;"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-icons-outlined">
              info
            </span>
          </a>
          <div class="dropdown-menu dropdown-option dropdown-menu-end shadow">
            <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                  class="material-icons-outlined fs-6">inventory_2</i>Archive All</a></div>
            <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                  class="material-icons-outlined fs-6">done_all</i>Mark all as read</a></div>
            <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                  class="material-icons-outlined fs-6">mic_off</i>Disable Notifications</a></div>
            <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                  class="material-icons-outlined fs-6">grade</i>What's new ?</a></div>
            <div>
              <hr class="dropdown-divider">
            </div>
            <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                  class="material-icons-outlined fs-6">leaderboard</i>Reports</a></div>
          </div>
        </div>

    </div>
</aside>
