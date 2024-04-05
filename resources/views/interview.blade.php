<x-layout title="インタビュー">
    <div class="flex flex-col items-center gap-4 w-full max-w-[520px] m-auto px-4 pt-16 pb-32">
        {{--オレンジパート--}}
        <section class="w-full">
            <h2 class="bg-dpt_bg text-white font-semibold text-xl py-4 px-8 rounded-md">{{$selected_emp["dpt-sec"]}}</h2>
            <article class="px-4 py-2">
                <p class="text-dpt_bg font-semibold text-xl">{{$selected_emp["title"]}}</p>
                <img src="{{asset('img/'.$selected_emp['path'])}}" class="w-full object-cover py-2" alt="image">
                <h3 class="font-semibold">{{$selected_emp["name"]}}</h3>
                <p>{{$selected_emp["dpt"]}}</p>
                <p class="py-5">{{$selected_emp["sec"]}}</p>
            </article>
        </section>

        {{--青パート--}}
        <div class="w-full flex flex-col gap-8">
            @foreach($selected_emp["questions"] as $key => $value)
                <section class="w-full">
                    <h2 class="bg-interview_blue text-white font-semibold py-2 px-8 rounded-md">{{$key}}</h2>
                    <p class="text-interview_gray px-4 pt-2">{{$value}}</p>
                </section>
            @endforeach
                <div class="w-full flex justify-center px-4 md:px-0">
                    <iframe class="w-full md:h-modalYoutube h-48" src="{{$selected_emp["youtube"]}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
        </div>
        <p  class="ml-auto text-xl px-4">→ <a onclick="history.back()" class="hover:underline">戻る</a></p>
    </div>
</x-layout>
