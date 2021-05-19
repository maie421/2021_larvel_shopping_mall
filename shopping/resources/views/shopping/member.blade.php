<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('회원 목록') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 ">
            {{ Debugbar::info($user_list)}}
            <table class="border-collapse border border-gray-300 table-auto mb-8">
                <thead>
                <tr>
                    <th class="p-6 border border-black" scope="col">이름</th>
                    <th class="p-6 border border-black" scope="col">이메일</th>
                    <th class="p-6 border border-black" scope="col">생성일</th>
                    <th class="p-6 border border-black" scope="col">업데이트일</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($user_list as $user_list_data)
                    <tr>
                        <td class="p-6 border border-black">{{$user_list_data->name}}</td>
                        <td class="p-6 border border-black">{{$user_list_data->email}}</td>
                        <td class="p-6 border border-black">{{$user_list_data->created_at}}</td>
                        <td class="p-6 border border-black">{{$user_list_data->updated_at}}</td>
                    </tr>
                @endforeach
                <tbody>
            </table>
            {!! $user_list->links() !!}
        </div>
    </div>
</x-app-layout>
