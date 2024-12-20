<div class="bg-theme-clr-light text-on-theme-clr-light">
    <ul class="main-container | flex flex-wrap items-center justify-between text-sm py-3">
        <li class="flex gap-2">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_230_956)">
                    <path d="M9.50002 16.625C10.4357 16.625 11.3622 16.4407 12.2266 16.0826C13.0911 15.7245 13.8765 15.1997 14.5382 14.5381C15.1998 13.8765 15.7246 13.091 16.0827 12.2266C16.4407 11.3621 16.625 10.4356 16.625 9.49996C16.625 8.56429 16.4407 7.63778 16.0827 6.77334C15.7246 5.90889 15.1998 5.12344 14.5382 4.46182C13.8765 3.80021 13.0911 3.27538 12.2266 2.91732C11.3622 2.55925 10.4357 2.37496 9.50002 2.37496C7.61035 2.37496 5.79808 3.12563 4.46188 4.46182C3.12569 5.79802 2.37502 7.61029 2.37502 9.49996C2.37502 11.3896 3.12569 13.2019 4.46188 14.5381C5.79808 15.8743 7.61035 16.625 9.50002 16.625ZM18.2084 9.49996C18.2084 14.3093 14.3094 18.2083 9.50002 18.2083C4.69065 18.2083 0.791687 14.3093 0.791687 9.49996C0.791687 4.69058 4.69065 0.791626 9.50002 0.791626C14.3094 0.791626 18.2084 4.69058 18.2084 9.49996ZM11.875 12.9944L8.70835 9.82771V4.35413H10.2917V9.17221L12.9944 11.875L11.875 12.9944Z" fill="#94AE0A" />
                </g>
                <defs>
                    <clipPath id="clip0_230_956">
                        <rect width="19" height="19" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <span>Working time: Mon -Fri, 8:00am - 9:00pm</span>
        </li>
        <li class="flex items-center">
            <span class="flex items-center gap-2 font-semibold">
                <button class="show-register-modal-btn" id="open-register-form-btn">Register</button>
                <span>/</span>
                <button class="show-login-modal-btn" id="open-login-form-btn">Login</button>
            </span>
            <span class="flex items-center gap-2 font-semibold">
                <div class="relative">
                    <button aria-controls="user-notification-dropdown" data-dropdown-toggle="user-notification-dropdown">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_230_960)">
                                <rect width="20" height="19" rx="9.5" fill="#C3DE35" />
                                <path d="M9.99996 16.2292C10.802 16.2292 11.4583 15.6446 11.4583 14.93H8.54163C8.54163 15.6446 9.19788 16.2292 9.99996 16.2292ZM14.375 12.3317V9.08387C14.375 7.08968 13.1864 5.42028 11.0937 4.97857V4.53686C11.0937 3.99771 10.6052 3.5625 9.99996 3.5625C9.39475 3.5625 8.90621 3.99771 8.90621 4.53686V4.97857C6.82079 5.42028 5.62496 7.08318 5.62496 9.08387V12.3317L4.16663 13.6309V14.2804H15.8333V13.6309L14.375 12.3317ZM12.9166 12.9813H7.08329V9.08387C7.08329 7.47293 8.18433 6.16079 9.99996 6.16079C11.8156 6.16079 12.9166 7.47293 12.9166 9.08387V12.9813Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_230_960">
                                    <rect width="20" height="19" rx="9.5" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                    <div id="user-notification-dropdown" class="z-50 overflow-hidden hidden absolute right-0 left-0 w-96 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                        <h6 class="text-lg text-center p-2 bg-[#EBEBEB] text-theme-clr-secondary font-bold">Notification</h6>
                      
                        <?php include ("notification-list.php");?>
                    </div>
                </div>

                <!-- User account dropdown -->
                <div class="relative">
                    <button id="dropdownDefaultButton" aria-controls="user-account-dropdown" data-dropdown-toggle="user-account-dropdown" class="font-medium rounded-lg text-sm text-center inline-flex items-center" type="button">
                        Hi Adeleke. O
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="user-account-dropdown" class="z-10 overflow-hidden hidden absolute right-0 left-0 w-60 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                        <h6 class="text-lg text-center p-2 bg-[#EBEBEB] text-theme-clr-secondary font-bold">Account Management</h6>
                        <ul class="py-2 px-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="user-account.php?tab=shipping-address" class="flex items-center gap-2 px-4 py-2 hover:bg-theme-clr-primary rounded-md">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 4.0625C7.9144 4.0625 8.31183 4.22712 8.60485 4.52015C8.89788 4.81317 9.0625 5.2106 9.0625 5.625C9.0625 5.83019 9.02208 6.03337 8.94356 6.22294C8.86504 6.41251 8.74995 6.58476 8.60485 6.72986C8.45976 6.87495 8.28751 6.99004 8.09794 7.06856C7.90837 7.14709 7.70519 7.1875 7.5 7.1875C7.0856 7.1875 6.68817 7.02288 6.39515 6.72986C6.10212 6.43683 5.9375 6.0394 5.9375 5.625C5.9375 5.2106 6.10212 4.81317 6.39515 4.52015C6.68817 4.22712 7.0856 4.0625 7.5 4.0625ZM7.5 1.25C8.66032 1.25 9.77312 1.71094 10.5936 2.53141C11.4141 3.35188 11.875 4.46468 11.875 5.625C11.875 8.90625 7.5 13.75 7.5 13.75C7.5 13.75 3.125 8.90625 3.125 5.625C3.125 4.46468 3.58594 3.35188 4.40641 2.53141C5.22688 1.71094 6.33968 1.25 7.5 1.25ZM7.5 2.5C6.6712 2.5 5.87634 2.82924 5.29029 3.41529C4.70424 4.00134 4.375 4.7962 4.375 5.625C4.375 6.25 4.375 7.5 7.5 11.6938C10.625 7.5 10.625 6.25 10.625 5.625C10.625 4.7962 10.2958 4.00134 9.70971 3.41529C9.12366 2.82924 8.3288 2.5 7.5 2.5Z" fill="black" />
                                    </svg>
                                    Shipping Address
                                </a>
                            </li>
                            <li>
                                <a href="user-account.php?tab=user-profile" class="flex items-center gap-2 px-4 py-2 hover:bg-theme-clr-primary rounded-md">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_230_1636)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.5C8 5.03043 7.78929 5.53914 7.41421 5.91421C7.03914 6.28929 6.53043 6.5 6 6.5C5.46957 6.5 4.96086 6.28929 4.58579 5.91421C4.21071 5.53914 4 5.03043 4 4.5C4 3.96957 4.21071 3.46086 4.58579 3.08579C4.96086 2.71071 5.46957 2.5 6 2.5C6.53043 2.5 7.03914 2.71071 7.41421 3.08579C7.78929 3.46086 8 3.96957 8 4.5ZM7 4.5C7 4.76522 6.89464 5.01957 6.70711 5.20711C6.51957 5.39464 6.26522 5.5 6 5.5C5.73478 5.5 5.48043 5.39464 5.29289 5.20711C5.10536 5.01957 5 4.76522 5 4.5C5 4.23478 5.10536 3.98043 5.29289 3.79289C5.48043 3.60536 5.73478 3.5 6 3.5C6.26522 3.5 6.51957 3.60536 6.70711 3.79289C6.89464 3.98043 7 4.23478 7 4.5Z" fill="#1F2406" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0.5C2.9625 0.5 0.5 2.9625 0.5 6C0.5 9.0375 2.9625 11.5 6 11.5C9.0375 11.5 11.5 9.0375 11.5 6C11.5 2.9625 9.0375 0.5 6 0.5ZM1.5 6C1.5 7.045 1.8565 8.007 2.454 8.771C2.87362 8.21995 3.41495 7.77337 4.03572 7.46616C4.65648 7.15894 5.33987 6.9994 6.0325 7C6.71616 6.99935 7.39096 7.15476 8.00547 7.45439C8.61997 7.75402 9.15798 8.18996 9.5785 8.729C10.0117 8.1608 10.3034 7.49761 10.4294 6.79429C10.5555 6.09098 10.5122 5.36777 10.3032 4.68449C10.0943 4.00122 9.72561 3.37752 9.22774 2.86502C8.72988 2.35251 8.11713 1.96593 7.44019 1.73725C6.76326 1.50858 6.0416 1.44439 5.33493 1.54999C4.62826 1.65559 3.9569 1.92795 3.37638 2.34453C2.79587 2.76111 2.32291 3.30994 1.99661 3.9456C1.67032 4.58126 1.50009 5.28548 1.5 6ZM6 10.5C4.96697 10.5016 3.96513 10.1462 3.164 9.494C3.48646 9.03237 3.91567 8.65546 4.4151 8.39534C4.91452 8.13523 5.46939 7.9996 6.0325 8C6.58858 7.99955 7.13674 8.13179 7.63146 8.38571C8.12618 8.63964 8.55318 9.00793 8.877 9.46C8.06965 10.1334 7.05129 10.5015 6 10.5Z" fill="#1F2406" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_230_1636">
                                                <rect width="12" height="12" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Your Profile
                                </a>
                            </li>
                            <li>
                                <a href="user-account.php?tab=orders" class="flex items-center gap-2 px-4 py-2 hover:bg-theme-clr-primary rounded-md">
                                    <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 2.80282V1.97183C6 1.71289 5.94827 1.45648 5.84776 1.21724C5.74725 0.97801 5.59993 0.760637 5.41421 0.577536C5.2285 0.394435 5.00802 0.24919 4.76537 0.150097C4.52272 0.0510029 4.26264 0 4 0C3.73736 0 3.47728 0.0510029 3.23463 0.150097C2.99198 0.24919 2.7715 0.394435 2.58579 0.577536C2.40007 0.760637 2.25275 0.97801 2.15224 1.21724C2.05173 1.45648 2 1.71289 2 1.97183V3.94366C2 4.01837 2.0301 4.09002 2.08368 4.14285C2.13727 4.19567 2.20994 4.22535 2.28571 4.22535C2.36149 4.22535 2.43416 4.19567 2.48774 4.14285C2.54133 4.09002 2.57143 4.01837 2.57143 3.94366V3.3662H4.85714V2.80282H2.57143V1.97183C2.57143 1.59829 2.72194 1.24004 2.98985 0.975906C3.25776 0.71177 3.62112 0.56338 4 0.56338C4.37888 0.56338 4.74224 0.71177 5.01015 0.975906C5.27806 1.24004 5.42857 1.59829 5.42857 1.97183V3.92958C5.42857 4.00429 5.45867 4.07594 5.51226 4.12876C5.56584 4.18159 5.63851 4.21127 5.71429 4.21127C5.79006 4.21127 5.86273 4.18159 5.91632 4.12876C5.9699 4.07594 6 4.00429 6 3.92958V3.3662H7.42857V8.43662H0.571429V3.3662H1.42857V2.80282H0V8.46197C0 8.60467 0.0574947 8.74152 0.159836 8.84241C0.262177 8.94331 0.400982 9 0.545714 9H7.45429C7.59902 9 7.73782 8.94331 7.84016 8.84241C7.94251 8.74152 8 8.60467 8 8.46197V2.80282H6Z" fill="#1F2406" />
                                    </svg>

                                    Orders
                                </a>
                            </li>
                            <li>
                                <a href="user-account.php?tab=tracking" class="flex items-center gap-2 px-4 py-2 hover:bg-theme-clr-primary rounded-md">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.87925 2.88375C4.15701 2.60388 4.48739 2.38172 4.85135 2.23005C5.21532 2.07838 5.60569 2.00019 6 2C6.795 2 7.558 2.3175 8.12075 2.88375C8.68425 3.4516 9.00032 4.21926 9 5.01925C9 6.40075 8.234 7.65125 7.436 8.5745C7.09973 8.96169 6.73514 9.32335 6.34525 9.6565C6.23251 9.75317 6.11739 9.84703 6 9.938C5.88267 9.84695 5.76756 9.75309 5.65475 9.6565C5.26486 9.32335 4.90028 8.96169 4.564 8.5745C3.766 7.65125 3 6.40075 3 5.01925C3 4.218 3.3165 3.45 3.87925 2.88375ZM5.856 10.4543L6 10.25L6.144 10.4543C6.10185 10.4839 6.05156 10.4999 6 10.4999C5.94844 10.4999 5.89815 10.4839 5.856 10.4543ZM5.856 10.4543L6 10.25L6.144 10.4543L6.145 10.4537L6.1475 10.452L6.155 10.4462L6.1845 10.425C6.20983 10.4065 6.24567 10.3795 6.292 10.344C6.384 10.2735 6.5145 10.1698 6.67025 10.0365C7.07911 9.68704 7.46141 9.30766 7.814 8.9015C8.641 7.945 9.5 6.58 9.5 5.019C9.5 4.0865 9.1315 3.1915 8.4755 2.5315C8.15128 2.20483 7.76564 1.94551 7.34078 1.76848C6.91593 1.59145 6.46026 1.50021 6 1.5C5.53976 1.50017 5.0841 1.59138 4.65925 1.76837C4.2344 1.94535 3.84875 2.20462 3.5245 2.53125C2.86793 3.1928 2.49964 4.08718 2.5 5.01925C2.5 6.58 3.359 7.945 4.186 8.9015C4.53859 9.30766 4.9209 9.68704 5.32975 10.0365C5.48575 10.1698 5.616 10.2735 5.708 10.344C5.75313 10.3788 5.79872 10.4129 5.84475 10.4465L5.85275 10.452L5.855 10.4537L5.856 10.4543ZM5 5C5 4.73478 5.10536 4.48043 5.29289 4.29289C5.48043 4.10536 5.73478 4 6 4C6.26522 4 6.51957 4.10536 6.70711 4.29289C6.89464 4.48043 7 4.73478 7 5C7 5.26522 6.89464 5.51957 6.70711 5.70711C6.51957 5.89464 6.26522 6 6 6C5.73478 6 5.48043 5.89464 5.29289 5.70711C5.10536 5.51957 5 5.26522 5 5ZM6 3.5C5.60218 3.5 5.22064 3.65804 4.93934 3.93934C4.65804 4.22064 4.5 4.60218 4.5 5C4.5 5.39782 4.65804 5.77936 4.93934 6.06066C5.22064 6.34196 5.60218 6.5 6 6.5C6.39783 6.5 6.77936 6.34196 7.06066 6.06066C7.34197 5.77936 7.5 5.39782 7.5 5C7.5 4.60218 7.34197 4.22064 7.06066 3.93934C6.77936 3.65804 6.39783 3.5 6 3.5Z" fill="black" />
                                    </svg>

                                    Tracking Status
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-center text-red-600">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </span>
        </li>
    </ul>
</div>





<!--  -->



<?php include "components/register-form.php" ?>
<?php include "components/login-form.php" ?>