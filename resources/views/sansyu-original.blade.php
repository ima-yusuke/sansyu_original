<x-layout title="三秀">
    {{--ヘッダー--}}
    <x-header></x-header>

    {{--メイン--}}
    <main class="flex flex-col items-center gap-4 px-main_x pt-44">
        <div class="flex flex-col items-center">
            <img src="{{asset("img/sansyu-top.jpg")}}" class="object-cover pb-4" alt="image">
            <p class="text-main_blue text-center text-3xl font-semibold">1年目から企画提案<br>新規事業の中心メンバーに！</p>
            <p class="font-semibold text-xl">やりたいこと、どんどん言える<br>三秀で自分の可能性を試そう！</p>
        </div>

        {{--背景ブルーパート--}}
        <div class="bg-main_bg w-[88%] px-8 py-12 flex flex-col gap-8">

            {{--first section--}}
            <section class="bg-white flex flex-col items-center py-12 px-5 gap-2 rounded-md">
                <h2 class="font-semibold text-xl text-center">メッセージ</h2>
                <p class="text-main_blue font-semibold text-xl text-center">弊社のモットーは「即行動」！<br>前向きな人を求めています</p>
                <img src="{{asset("img/president.png")}}" class="object-cover rounded-md" alt="image">
                <p class="mb-8 text-center">代表取締役社長 塩原 輝久</p>
                <p class="mb-8">
                    当社には、大きな柱として建設機械やフォークリフトを量産する事業部と、型枠事業部があります。 従業員約70名という規模にしては顧客社数が多いのですが、小回りが利く分、市場変化の対応に強い会社になってきていると思っています。
                </p>
                <p>
                    採用に際しては、ひとつでも得意なことがある人に惹かれます。 何かを頑張っている強い想いは、会社の成長に繋がりますから。弊社の新しい柱をたてるために、社員のみなさんから色々な意見を提案してもらっています。 新しいことは不安を伴いますが、一歩を踏み出すことが楽しめるような方が欲しいですね。 弊社はこれから色々なことにチャレンジしていきます。例えば最近では、人材育成や管理・派遣などもスタートし、キャンプ用品の自社製品をはじめ、色々なことに挑戦しています。積極的に意見を出せる人を募集していますので、よろしくお願いいたします。
                </p>
                <div>
                    <iframe width="348" height="258" src="https://www.youtube.com/embed/XI9MvnfwbbA?si=y65NVNuwXv86t42-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </section>

            {{--second section--}}
            <section class="bg-white flex flex-col items-center py-12 px-5 gap-2 rounded-md">
                <h2 class="font-semibold text-xl text-center">Column</h2>
                <p class="text-main_blue font-semibold text-xl text-center">ホームページを飾るイラスト</p>
                <img src="{{asset("img/column.png")}}" class="object-cover rounded-md" alt="image">
                <div class="flex flex-col items-start">
                    <p class="my-8">
                        制作当時(2021年）、三秀の目標は自社製品を開発して一般顧客に販売することでした。イラストにはこれまで手掛けた製品に加え、未来となる2031年、2050年の年号と、これまで作ったことのない製品（テントやフライパン）なども描きました。 今、三秀はこれらの夢を少しずつ実現しています。
                    </p>
                    <p>
                        イラスト：AMISIKI（ami okamoto）さん<br>
                        オランダ在住のアーティストです
                    </p>
                </div>
                <p  class="ml-auto">→ <a href="http://amisiki.com/" class="hover:underline">AMISIKIさん</a></p>
            </section>

            {{--third section--}}
            <section class="bg-white flex flex-col items-center pt-12 pb-6 px-5 gap-2 rounded-md">
                <h2 class="font-semibold text-xl text-center pb-8">社員インタビュー</h2>

                {{--インタビュー要素 (articleがそれぞれのインタビュー)--}}
                <div class="flex flex-col gap-3">
                    @foreach($interviews as $value)
                        <a href="{{route("interview",$value["id"])}}" class="block w-full h-full">
                            <article class="bg-interview_orange px-6 pt-16 pb-6 shadow-md">
                                <img src="{{asset('img/'.$value["path"])}}" class="w-employee_width h-employee_height object-cover" alt="image">
                                <p class="bg-dpt_bg text-center text-white font-medium text-xl py-3">{{$value["dpt"]}}</p>
                                <div class="flex flex-col gap-3 pl-6 pt-3">
                                    <p class="font-semibold text-xl">{{$value["name"]}}</p>
                                    <p class="text-xl">{{$value["sec"]}}</p>
                                </div>
                            </article>
                        </a>
                    @endforeach
                </div>
            </section>
        </div>

        {{--採用情報 section--}}
        <section class="bg-white flex flex-col items-center pt-12 pb-6 px-5 gap-2 rounded-md w-full">
            <h2 class="font-semibold text-xl text-center pb-8">採用情報</h2>

            <div class="flex flex-col w-[80%]">

                @foreach($recruitment as $value)
                    <a href="http://amisiki.com/" class="w-full block h-full border-b border-solid border-sky-300">
                        <article class="flex items-center py-2 gap-4 w-full">
                            <img src="{{asset('img/'.$value["path"])}}" class="w-12 h-12 object-cover" alt="image">
                            <p class="text-center font-medium text-xl py-3">{{$value["title"]}}</p>
                        </article>
                    </a>
                @endforeach
            </div>
        </section>
    </main>

    <x-footer></x-footer>
</x-layout>
