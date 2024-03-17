<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="md:grid md:grid-cols-2 md:gap-8">
        <div class="p-12">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
            <g>
                <path class="st0" d="M306.068,156.129c-6.566-5.771-14.205-10.186-22.912-13.244c-8.715-3.051-17.82-4.58-27.326-4.58   c-9.961,0-19.236,1.59-27.834,4.752c-8.605,3.171-16.127,7.638-22.576,13.41c-6.449,5.772-11.539,12.9-15.272,21.384   c-3.736,8.486-5.604,17.937-5.604,28.34h44.131c0-7.915,2.258-14.593,6.785-20.028c4.524-5.426,11.314-8.138,20.369-8.138   c8.598,0,15.328,2.661,20.197,7.974c4.864,5.322,7.297,11.942,7.297,19.856c0,3.854-0.965,7.698-2.887,11.543   c-1.922,3.854-4.242,7.586-6.959,11.197l-21.26,27.232c-4.527,5.884-16.758,22.908-16.758,40.316v10.187h44.129v-7.128   c0-2.938,0.562-5.996,1.699-9.168c1.127-3.162,6.453-10.904,8.268-13.168l21.264-28.243c4.752-6.333,8.705-12.839,11.881-19.518   c3.166-6.67,4.752-14.308,4.752-22.913c0-10.86-1.926-20.478-5.772-28.85C317.832,168.969,312.627,161.892,306.068,156.129z" />
                <rect x="234.106" y="328.551" class="st0" width="46.842" height="45.144" />
                <path class="st0" d="M256,0C114.613,0,0,114.615,0,256s114.613,256,256,256c141.383,0,256-114.615,256-256S397.383,0,256,0z    M256,448c-105.871,0-192-86.131-192-192S150.129,64,256,64c105.867,0,192,86.131,192,192S361.867,448,256,448z" />
            </g>
        </svg>

        </div>
        <div class="p-12">
            <h1 class="text-7xl">The Teller</h1>
            <form action="/tell">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10">
                            <label for="datetime" class="block pb-2 text-lg font-medium leading-6 text-gray-900">Date and Time to Check</label>
                            <input type="text" id="datetime" name="datetime" autocomplete="datetime-name" placeholder="Type in a date and time..." class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" />
                            <label for="timezone" class="block py-2 text-lg font-medium leading-6 text-gray-900">Timezone</label>
                            <select id="timezone" name="timezone" autocomplete="timezone-name" placeholder="Type in timezone..." class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="America/Los_Angeles">(PST) America/Los_Angeles</option>
                                <option value="America/Phoenix">(MST) America/Phoenix</option>
                                <option value="America/Chicago" selected>(CST) America/Chicago</option>
                                <option value="America/New_York">(EST) America/New_York</option>
                            </select>
                            
                            {{-- <div class="mt-5">
                                <label for="Month" class="block text-md font-medium leading-6 text-gray-900">Month</label>
                                <div class="mt-2">
                                    <select id="month" name="month" autocomplete="month-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option {{ (date('F') == 'January') ? 'selected':'' }} value="1">January</option>
                                        <option {{ (date('F') == 'February') ? 'selected':'' }} value="2">February</option>
                                        <option {{ (date('F') == 'March') ? 'selected':'' }} value="3">March</option>
                                        <option {{ (date('F') == 'April') ? 'selected':'' }} value="4">April</option>
                                        <option {{ (date('F') == 'May') ? 'selected':'' }} value="5">May</option>
                                        <option {{ (date('F') == 'June') ? 'selected':'' }} value="6">June</option>
                                        <option {{ (date('F') == 'July') ? 'selected':'' }} value="7">July</option>
                                        <option {{ (date('F') == 'August') ? 'selected':'' }} value="8">August</option>
                                        <option {{ (date('F') == 'September') ? 'selected':'' }} value="9">September</option>
                                        <option {{ (date('F') == 'October') ? 'selected':'' }} value="10">October</option>
                                        <option {{ (date('F') == 'November') ? 'selected':'' }} value="11">November</option>
                                        <option {{ (date('F') == 'December') ? 'selected':'' }} value="12">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-5">
                                <label for="Month" class="block text-md font-medium leading-6 text-gray-900">Day</label>
                                <div class="mt-2">
                                    <select id="day" name="day" autocomplete="day-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option {{ (date('j') == '2') ? 'selected':'' }}>2</option>
                                        <option {{ (date('j') == '1') ? 'selected':'' }}>1</option>
                                        <option {{ (date('j') == '3') ? 'selected':'' }}>3</option>
                                        <option {{ (date('j') == '4') ? 'selected':'' }}>4</option>
                                        <option {{ (date('j') == '5') ? 'selected':'' }}>5</option>
                                        <option {{ (date('j') == '6') ? 'selected':'' }}>6</option>
                                        <option {{ (date('j') == '7') ? 'selected':'' }}>7</option>
                                        <option {{ (date('j') == '8') ? 'selected':'' }}>8</option>
                                        <option {{ (date('j') == '9') ? 'selected':'' }}>9</option>
                                        <option {{ (date('j') == '10') ? 'selected':'' }}>10</option>
                                        <option {{ (date('j') == '11') ? 'selected':'' }}>11</option>
                                        <option {{ (date('j') == '12') ? 'selected':'' }}>12</option>
                                        <option {{ (date('j') == '13') ? 'selected':'' }}>13</option>
                                        <option {{ (date('j') == '14') ? 'selected':'' }}>14</option>
                                        <option {{ (date('j') == '15') ? 'selected':'' }}>15</option>
                                        <option {{ (date('j') == '16') ? 'selected':'' }}>16</option>
                                        <option {{ (date('j') == '17') ? 'selected':'' }}>17</option>
                                        <option {{ (date('j') == '18') ? 'selected':'' }}>18</option>
                                        <option {{ (date('j') == '19') ? 'selected':'' }}>19</option>
                                        <option {{ (date('j') == '20') ? 'selected':'' }}>20</option>
                                        <option {{ (date('j') == '21') ? 'selected':'' }}>21</option>
                                        <option {{ (date('j') == '22') ? 'selected':'' }}>22</option>
                                        <option {{ (date('j') == '23') ? 'selected':'' }}>23</option>
                                        <option {{ (date('j') == '24') ? 'selected':'' }}>24</option>
                                        <option {{ (date('j') == '25') ? 'selected':'' }}>25</option>
                                        <option {{ (date('j') == '26') ? 'selected':'' }}>26</option>
                                        <option {{ (date('j') == '27') ? 'selected':'' }}>27</option>
                                        <option {{ (date('j') == '28') ? 'selected':'' }}>28</option>
                                        <option {{ (date('j') == '29') ? 'selected':'' }}>29</option>
                                        <option {{ (date('j') == '30') ? 'selected':'' }}>30</option>
                                        <option {{ (date('j') == '31') ? 'selected':'' }}>31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-5">
                                <label for="Year" class="block text-md font-medium leading-6 text-gray-900">Year</label>
                                <div class="mt-2">
                                    <select id="year" name="year" autocomplete="year-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option {{ (date('Y') == '2024') ? 'selected':'' }}>2024</option>
                                        <option {{ (date('Y') == '2025') ? 'selected':'' }}>2025</option>
                                        <option {{ (date('Y') == '2026') ? 'selected':'' }}>2026</option>
                                        <option {{ (date('Y') == '2027') ? 'selected':'' }}>2027</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-5">
                                <label for="Time" class="block text-md font-medium leading-6 text-gray-900">Time</label>
                                <div class="mt-2">
                                    <input type="text" id="time" name="time" placeholder="Enter time like: 8:00 AM" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" />
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center gap-x-6">
                    {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let&rsquo;s Check!</button>
                </div>
            </form>


        </div>
    </div>
</body>
</html>