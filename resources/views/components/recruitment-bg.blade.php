<div class="w-full max-w-[520px] m-auto bg-main_bg min-h-full h-auto">
    <h2 class="text-center text-2xl font-medium pt-16">【{{$title}}】</h2>
    <section class="flex flex-col gap-1 pb-4">
        {{$slot}}
    </section>
    <p  class="flex justify-end text-xl pb-4 px-4">→ <a onclick="history.back()" class="hover:underline">戻る</a></p>
</div>

