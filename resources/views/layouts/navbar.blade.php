<nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>
            @guest

            <div class="nav-item d-flex align-items-center">
                <a href='/'> <button type="button" class="btn rounded-pill btn-outline-secondary">@lang('lang.Home')</button></a>&nbsp;
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                
                <li class="nav-item lh-1 me-3">
                <a href='/login'> <button type="button" class="btn rounded-pill btn-outline-secondary">@lang('lang.Login')</button></a>
                </li>
                <li class="nav-item lh-1 me-3">
                <a href="{{ route('etudiants.create') }}" ><button type="button" class="btn rounded-pill btn-outline-secondary">@lang('lang.AddNewStudent')</button></a>
                </li>
                <li class="nav-item lh-1 me-3">
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <a href="/lang/fr" ><button type="button" class="btn btn-outline-secondary">@lang('lang.French')</button></a>
                              <a href="/lang/en" ><button type="button" class="btn btn-outline-secondary">@lang('lang.English')</button></a>
                            </div>
                </li>
                </ul>
                  </div>
                @else

                
                <div class="nav-item d-flex align-items-center">
                <a href='/articles'> <button type="button" class="btn rounded-pill btn-outline-secondary">Articles</button></a>&nbsp;
                <a href='/documents'> <button type="button" class="btn rounded-pill btn-outline-secondary">Documents</button></a>

                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"></span>
                            <small class="text-muted">@lang('lang.std')</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                    <a class="dropdown-item" href="/lang/en"> @lang('lang.English')</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="/lang/fr"> @lang('lang.French')</a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/logout">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">@lang('lang.logout')</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
                @endguest

              
          </nav>