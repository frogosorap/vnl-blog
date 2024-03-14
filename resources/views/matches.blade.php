@extends('layouts.app')
<div class="marquee">
  <div>
    <span>🏆 VNL 2024 Finals The VNL 2024 Finals will be hosted in Thailand after the conclusion of the preliminary phase on June 16.</span>
    <span>🌍 VNL 2024 Schedule The VNL 2024 schedule includes matches across different pools, rounds, and genders, with various teams competing in different venues. Follow live matches and stay updated on the results.</span>
  </div>
</div>
@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="home-h1">
                    VNL 2023 Match Fixtures
                </h1>
                <a 
                    href="https://www.youtube.com/@volleyballworld" target="_blank"
                    class="readmore-button">
                    Watch More on YouTube
                </a>
            </div>
        </div>
    </div>
	<div class="profile-h2-div">
        <h2 class="profile-h2">
            Calendar
        </h2>
    </div>
    <div class="calendar">
		{{-- <h1>VNL Schedule July 2023</h1> --}}
		<p></a>
		<ul class="cal-ul">
			<li><time datetime="2023-07-01">1</time>VNL Pred Day 1</li>
			<li><time datetime="2023-07-02">2</time>VNL Pred Day 2</li>
			<li><time datetime="2023-07-03">3</time>VNL Pred Day 3</li>
			<li><time datetime="2023-07-04">4</time>Men's China VS Bulgaria, Netherlands</li>
			<li><time datetime="2023-07-05">5</time>Women's Italy VS Argentina, Philippines</li>
			<li><time datetime="2023-07-06">6</time>Men's Japan VS Iran, Philippines</li>
			<li><time datetime="2023-07-07">7</time>Men's USA VS Slovenia, Philippines</li>
			<li><time datetime="2023-07-08">8</time>VNL Commences</li>
			<li><time datetime="2023-07-09">9</time>----------</li>
			<li><time datetime="2023-07-10">10</time>----------</li>
			<li><time datetime="2023-07-11">11</time>----------</li>
			<li><time datetime="2023-07-12">12</time>VNL Travel Day 1</li>
			<li><time datetime="2023-07-13">13</time>VNL Travel Day 2</li>
			<li><time datetime="2023-07-14">14</time>----------</li>
			<li><time datetime="2023-07-15">15</time>----------</li>
			<li><time datetime="2023-07-16">16</time>VNL Pred Day 1</li>
			<li><time datetime="2023-07-17">17</time>VNL Pred Day 2</li>
			<li><time datetime="2023-07-18">18</time>VNL Pred Day 3</li>
			<li class="today"><time datetime="2023-07-19">19</time>-----------</li>
			<li><time datetime="2023-07-20">20</time>Men's Japan VS USA, USA</li>
			<li><time datetime="2023-07-21">21</time>Men's Germany VS Canada, USA</li>
			<li><time datetime="2023-07-22">22</time>Women's Turkey VS Poland, USA</li>
			<li><time datetime="2023-07-23">23</time>Women's Serbia VS Germany, USA</li>
			<li><time datetime="2023-07-24">24</time>----------</li>
			<li><time datetime="2023-07-25">25</time>VNL Championship Prep 1</li>
			<li><time datetime="2023-07-26">26</time>VNL Championship Prep 2</li>
			<li><time datetime="2023-07-27">27</time>Men's Group A Winner VS Group B Winner</li>
			<li><time datetime="2023-07-28">28</time>Men's Group C Winner VS Group D Winner</li>
			<li><time datetime="2023-07-28">29</time>Women's Group A Winner VS Group B Winner</li>
			<li><time datetime="2023-07-28">30</time>Women's Group C Winner VS Group D Winner</li>
			<li><time datetime="2023-07-28">31</time>VNL Championship</li>
		</ul>
	</div>

	<div class="profile-h2-div">
        <h2 class="profile-h2">
            2023-2024 Season
        </h2>
    </div>

     <div class="flex flex-col items-center bg-white py-10">

	<!-- Component Start -->
	{{-- <h1 class="text-lg text-black-400 font-medium">2023-2024 Season</h1> --}}
	<div class="flex flex-col mt-6">
		<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
			<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
				<div class="shadow overflow-hidden sm:rounded-lg">
					<table class="min-w-full text-sm text-black">
						<thead class="bg-white-800 text-xs uppercase font-medium">
							<tr>
								<th></th>
								<th scope="col" class="px-6 py-3 text-left tracking-wider">
									Country
								</th>
								<th scope="col" class="px-6 py-3 text-left tracking-wider">
									MP
								</th>
								<th scope="col" class="px-6 py-3 text-left tracking-wider">
									W
								</th>
								<th scope="col" class="px-6 py-3 text-left tracking-wider">
									D
								</th>
								<th scope="col" class="px-6 py-3 text-left tracking-wider">
									L
								</th>
								<th scope="col" class="px-6 py-3 text-left tracking-wider">
									GF
								</th>
								<th scope="col" class="px-6 py-3 text-left tracking-wider">
									GA
								</th>
								<th scope="col" class="px-6 py-3 text-left tracking-wider">
									GD
								</th>
								<th scope="col" class="px-6 py-3 text-left tracking-wider">
									Pts
								</th>
								<th scope="col" class="px-6 py-3 text-left tracking-wider">
									Last 5
								</th>	
							</tr>
						</thead>
						<tbody class="bg-white-800">
							
							<tr class="bg-gray-200 bg-opacity-20">
								<td class="pl-4">
									1
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/en/thumb/1/12/Flag_of_Poland.svg/35px-Flag_of_Poland.svg.png" alt="">
									<span class="ml-2 font-medium">Poland</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									11
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									3
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									3
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									34
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									24
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									10
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									34
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr>
								<td class="pl-4">
									2
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/35px-Flag_of_the_United_States.svg.png" alt="">
									<span class="ml-2 font-medium">United States</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									9
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									6
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									2
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									37
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									21
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									16
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									33
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr class="bg-gray-200 bg-opacity-20">
								<td class="pl-4">
									3
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/35px-Flag_of_Japan.svg.png" alt="">
									<span class="ml-2 font-medium">Japan</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									10
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									2
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									31
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									21
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									10
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									32
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr>
								<td class="pl-4">
									4
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/35px-Flag_of_Italy.svg.png" alt="">
									<span class="ml-2 font-medium">Italy</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									10
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									2
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									28
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									21
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									32
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr class="bg-gray-200 bg-opacity-20">
								<td class="pl-4">
									5
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/35px-Flag_of_Argentina.svg.png" alt="">
									<span class="ml-2 font-medium">Argentina</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									16
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									18
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									3
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									29
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									15
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									14
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									29
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr>
								<td class="pl-4">
									6
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png" alt="">
									<span class="ml-2 font-medium">Brazil</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									15
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									8
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									2
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									24
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									13
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									11
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									29
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr class="bg-gray-200 bg-opacity-20">
								<td class="pl-4">
									7
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Flag_of_Slovenia.svg/35px-Flag_of_Slovenia.svg.png" alt="">
									<span class="ml-2 font-medium">Slovenia</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									8
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									4
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									26
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									19
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									7
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									29
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr>
								<td class="pl-4">
									8
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/35px-Flag_of_France.svg.png" alt="">
									<span class="ml-2 font-medium">France</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									15
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									8
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									2
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									29
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									16
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									13
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									26
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr class="bg-gray-200 bg-opacity-20">
								<td class="pl-4">
									9
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/35px-Flag_of_Serbia.svg.png" alt="">
									<span class="ml-2 font-medium">Serbia</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									7
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									32
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									21
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									11
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									26
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr>
								<td class="pl-4">
									10
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/35px-Flag_of_the_Netherlands.svg.png" alt="">
									<span class="ml-2 font-medium">Netherlands</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									7
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									24
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									21
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									3
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									26
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr class="bg-gray-200 bg-opacity-20">
								<td class="pl-4">
									11
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/35px-Flag_of_Germany.svg.png" alt="">
									<span class="ml-2 font-medium">Germany</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									7
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									2
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									8
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									20
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									19
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									1
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									23
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr>
								<td class="pl-4">
									12
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/35px-Flag_of_Canada_%28Pantone%29.svg.png" alt="">
									<span class="ml-2 font-medium">Canada</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									7
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									2
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									8
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									30
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									33
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									-3
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									23
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr class="bg-gray-200 bg-opacity-20">
								<td class="pl-4">
									13
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Flag_of_Cuba.svg/35px-Flag_of_Cuba.svg.png" alt="">
									<span class="ml-2 font-medium">Cuba</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									6
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									4
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									7
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									22
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									29
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									-7
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									22
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr>
								<td class="pl-4">
									14
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png" alt="">
									<span class="ml-2 font-medium">Iran</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									18
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									6
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									4
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									8
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									19
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									26
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									-7
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									22
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr class="bg-gray-200 bg-opacity-20">
								<td class="pl-4">
									15
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/35px-Flag_of_Bulgaria.svg.png" alt="">
									<span class="ml-2 font-medium">Bulgaria</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									17
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									5
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									4
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									8
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									18
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									27
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									-9
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									19
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
							<tr>
								<td class="pl-4">
									16
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<img class="w-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/35px-Flag_of_the_People%27s_Republic_of_China.svg.png" alt="">
									<span class="ml-2 font-medium">China</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									16
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									4
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									4
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									8
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									9
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									21
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									-12
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									16
								</td>
								<td class="flex px-6 py-4 whitespace-nowrap">
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
									</svg>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- Component End  -->

</div>
    
@endsection