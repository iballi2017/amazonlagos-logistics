  <!-- <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar"> -->
  <aside id="user-account-sidebar" class="hidden lg:block fixed h-full w-full lg:h-auto lg:w-auto lg:relative left-0 right-0 bottom-0 top-0 z-40 lg:z-0" aria-label="Sidebar">
      <div class="h-full overflow-y-auto lg:rounded-lg bg-white shadow">
          <h2 class="flex lg:block items-center gap-4 p-4 text-lg font-bold bg-theme-clr-light-100 text-theme-clr-secondary">
              <button aria-controls="user-account-sidebar" data-target="user-account-sidebar">
                  <img src="./assets/icons/icon-chevron-left-solid.svg" alt="close" class="w-3 lg:hidden">
              </button>
              Account Management
          </h2>
          <ul id="tabs-nav" class="space-y-2 font-medium px-3 py-4">
              <!-- <li>
                                <a href="#" class="flex items-center p-2 text-theme-clr-secondary rounded-lg dark:text-white hover:bg-theme-clr-primary group">
                                    <svg class="w-5 h-5 text-theme-clr-secondary transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                    </svg>
                                    <span class="ms-3">Dashboard</span>
                                </a>
                            </li> -->
              <li>
                  <a href="?tab=shipping-address" class="flex items-center p-2 text-theme-clr-secondary rounded-lg dark:text-white hover:bg-theme-clr-primary group">
                      <img src="./assets/icons/icon-map-marker-alt-solid.svg" alt="map marker icon" class="w-4">
                      <span class="flex-1 ms-3 whitespace-nowrap">Shipping Address</span>
                  </a>
              </li>
              <li>
                  <a href="?tab=user-profile" class="tab-link | flex items-center p-2 text-theme-clr-secondary rounded-lg dark:text-white hover:bg-theme-clr-primary group">
                      <img src="./assets/icons/icon-user-alt-solid.svg" alt="user icon" class="w-4">
                      <span class="flex-1 ms-3 whitespace-nowrap">Your Profile</span>
                  </a>
              </li>
              <li>
                  <a href="?tab=orders" class="flex items-center p-2 text-theme-clr-secondary rounded-lg dark:text-white hover:bg-theme-clr-primary group">
                      <img src="./assets/icons/icon-shopping-bag-solid.svg" alt="shopping bag icon" class="w-4">
                      <span class="flex-1 ms-3 whitespace-nowrap">Orders</span>
                  </a>
              </li>
              <li>
                  <a href="?tab=tracking" class="flex items-center p-2 text-theme-clr-secondary rounded-lg dark:text-white hover:bg-theme-clr-primary group">
                      <img src="./assets/icons/icon-location-arrow-solid.svg" alt="location arrow icon" class="w-4">
                      <span class="flex-1 ms-3 whitespace-nowrap">Tracking status</span>
                  </a>
              </li>
              <li>
                  <a href="?tab=notification" class="flex items-center p-2 text-theme-clr-secondary rounded-lg dark:text-white hover:bg-theme-clr-primary group">
                      <img src="./assets/icons/icon-bell-solid.svg" alt="notification bell icon" class="w-4">
                      <span class="flex-1 ms-3 whitespace-nowrap">Notifications</span>
                      <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">10</span>
                  </a>
              </li>
              <li>
                  <a href="?tab=change-password" class="flex items-center p-2 text-theme-clr-secondary rounded-lg dark:text-white hover:bg-theme-clr-primary group">
                      <img src="./assets/icons/icon-unlock-alt-solid.svg" alt="unlock icon" class="w-4">
                      <span class="flex-1 ms-3 whitespace-nowrap">Change Password</span>
                  </a>
              </li>
              <li class="pt-40">
                  <a href="#" class="flex items-center p-2 text-red-500 rounded-lg dark:text-red-600 hover:bg-red-600 hover:text-white">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M19.4141 10.6639L12.8516 17.2264C12.2656 17.8124 11.25 17.4022 11.25 16.5624V12.8124H5.9375C5.41797 12.8124 5 12.3944 5 11.8749V8.12485C5 7.60532 5.41797 7.18735 5.9375 7.18735H11.25V3.43735C11.25 2.60142 12.2617 2.18735 12.8516 2.77329L19.4141 9.33579C19.7773 9.70298 19.7773 10.2967 19.4141 10.6639ZM7.5 17.0311V15.4686C7.5 15.2108 7.28906 14.9999 7.03125 14.9999H3.75C3.05859 14.9999 2.5 14.4413 2.5 13.7499V6.24985C2.5 5.55845 3.05859 4.99985 3.75 4.99985H7.03125C7.28906 4.99985 7.5 4.78892 7.5 4.5311V2.9686C7.5 2.71079 7.28906 2.49985 7.03125 2.49985H3.75C1.67969 2.49985 0 4.17954 0 6.24985V13.7499C0 15.8202 1.67969 17.4999 3.75 17.4999H7.03125C7.28906 17.4999 7.5 17.2889 7.5 17.0311Z" />
                      </svg>

                      <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                  </a>
              </li>
          </ul>
      </div>
  </aside>