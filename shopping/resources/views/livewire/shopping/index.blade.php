<div>
    {{-- Success is as dangerous as failure. --}}
    <div  class="flex flex-col items-center justify-center">
        <h1 class="text-5xl font-bold">SHOP</h1>
        <span class="text-gray-700 text-2xl m-4">회원기능</span>
        <div class="mb-4">
        <button class="bg-gray-400 hover:bg-gray-500 rounded-md px-9 py-5 text-white text-2xl focus:border-gray-500 ">
            <a href="{{ route('member_form') }}"> 회원 가입</a>
        </button>
        <button class="bg-gray-400 hover:bg-gray-500 rounded-md px-9 py-5 text-white text-2xl focus:border-gray-500">
            회원 목록
        </button>
        </div>
        <span class="text-gray-700 text-2xl m-4">상품기능</span>
        <div class="mb-4">
            <button class="bg-indigo-300 hover:bg-indigo-400 rounded-md px-9 py-5 text-white text-2xl focus:border-indigo-400">
                상품 등록
            </button>
            <button class="bg-indigo-300 hover:bg-indigo-400 rounded-md px-9 py-5 text-white text-2xl focus:border-indigo-400">
                주문 목록
            </button>
        </div>
        <span class="text-gray-700 text-2xl m-4">주문기능</span>
        <div class="mb-4">
            <button class="bg-blue-300 hover:bg-blue-400 rounded-md px-9 py-5 text-white text-2xl focus:border-blue-400">
                상품 주문
            </button>
            <button class="bg-blue-300 hover:bg-blue-400 rounded-md px-9 py-5 text-white text-2xl focus:border-blue-400">
                주문 내역
            </button>
        </div>
    </div>
</div>
