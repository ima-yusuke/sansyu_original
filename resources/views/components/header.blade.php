<header class="w-full md:p-8 p-4 fixed bg-white bg-opacity-75 backdrop-blur-[0.1px] z-30">
    {{--header top--}}
    <div class="flex justify-between md:px-48">
        <div>
            <i  class="hamburger fa-solid fa-bars px-4 py-2.5 border border-solid border-gray-300 rounded-md hover:bg-sky-100 hover:cursor-pointer"></i>
        </div>
        <div>
            <a href="https://sansyu-jp.com/" class="bg-header_btn text-white px-4 py-2 block rounded-md hover:bg-sky-100">三秀HP</a>
        </div>
    </div>

    <div class="flex flex-col items-center gap-2">
        <p class="font-medium">採用特設サイト</p>
        <h1 class="font-bold text-2xl">株式会社 三秀</h1>
    </div>
</header>

<script>
    let hamburger = document.getElementsByClassName("hamburger")[0];
    let side_menu = document.getElementsByClassName("side_menu_off")[0];
    let main = document.getElementsByTagName("body")[0];
    let flag = false;

    // 画面グレー&サイドメニュー表示
    hamburger.addEventListener("click",function (){
        // 画面背景色グレーに
        let screen_cover = document.getElementsByClassName("screen_cover")[0];
        screen_cover.classList.add("popup-bg-cover");

        // サイドメニュー表示
        side_menu.classList.remove("side_menu_off")
        side_menu.classList.add("side_menu_show")

        // mainをスクロール不可に
        main.classList.add("scroll_none")

        // flag = true;

    })

    // メニューのいずれかもしくは✗クリック時に画面グレー&サイドメニュー非表示
    let side_li = document.getElementsByClassName("side_li");
    for(let i= 0; i<side_li.length;i++){
        side_li[i].addEventListener("click",function (e){
            let screen_cover = document.getElementsByClassName("screen_cover")[0];
            screen_cover.classList.remove("popup-bg-cover");

            side_menu.classList.remove("side_menu_show")
            side_menu.classList.add("side_menu_off")

            main.classList.remove("scroll_none")
        })
    }

    // サイドメニューの外をクリックしたらサイドメニュー閉じる
    document.addEventListener("click",function (e){
        if((!e.target.closest('div.side_wrapper'))&& e.target!==hamburger) {
            let screen_cover = document.getElementsByClassName("screen_cover")[0];
            screen_cover.classList.remove("popup-bg-cover");

            side_menu.classList.remove("side_menu_show")
            side_menu.classList.add("side_menu_off")

            main.classList.remove("scroll_none")
        }
    })


</script>




