$(function(){
    // $('#body').ripples();

    /* ===============================
		index
    ================================= */
    // 読み込み時動作
    $('#splash .hide-top-pictures img').each(function(index){

        let $this = $(this);
        delayTime = index;

        setTimeout(function(){
            $this.addClass('fadeup');
        }, 300 * delayTime);
    });


    // メニュー順番に下から出現
    $('.global-nav .global-item').each(function(index){

        let $this = $(this);
        delayTime = index;

        setTimeout(function(){
            $this.addClass('fadeup');
        }, 1600 + (300 * delayTime));
    });


//     // タイトル文字 ランダムに出現
//     var Obj = {
//         loop: false,
//         minDisplayTime: 2000,// アニメーションの間隔時間
//         initialDelay: 500, // アニメーション開始までの遅延時間
//         autoStart: true,
//         in: {
//             effect: 'fadeInDown',//animate.css の中にある採用したい動きのクラス名
//             delayScale: 2,// 遅延時間の指数
//             delay: 100,// 文字ごとの遅延時間
//             sync: false,// アニメーションをすべての文字に同時適用するかどうか
//             shuffle: true,// 文字表示がランダムな順に表示されるかどうか
//         },
//         out: {// 終了時のアニメーション設定をしたい場合はここに追記
//         }
//     }

//     var element
//     //初期設定
//     function RandomInit() {
//         element= $(".randomAnime");
//         $(element[0]).textillate(Obj);
//     }

//     function RandomAnimeControl() {
// 		var elemPos = $(element[1]).offset().top - 50;
// 		var scroll = $(window).scrollTop();
// 		var windowHeight = $(window).height();

// 		if (scroll >= elemPos - windowHeight) {
// 			$(element[1]).textillate(Obj);
// 		}
// }

//     RandomInit();
//     RandomAnimeControl();

    
    $("#splash").delay(1500).fadeOut(1000);
});




    /* ===============================
		gallery area
    ================================= */

$(function(){

    // ページ読み込み（初期状態）
    $('.page-title').fadeIn(1000);
    $('.gallery-button').delay(400).fadeIn(1000);


    $('.photo-list1 img').each(function(index){
        let $this = $(this);
        let delayTime = index;

        setTimeout(function(){
            $this.addClass('fadeup');
        }, 100 + 70 * delayTime);
    });



    // Glalley ページ
        //gallery切り替え
        function orderdFadeOut1(){
            $('.photo-list1 img').each(function(index){
                let $this = $(this);
                let delayTime = index;
    
                setTimeout(function(){
                    $this.removeClass('fadeup');
                }, 70 * delayTime);    
            });
        }

        function orderdFadeIn1(){
            $('.photo-list1 img').each(function(index){
                let $this = $(this);
                let delayTime = index;
    
                setTimeout(function(){
                    $this.addClass('fadeup');
                }, 70 * delayTime);    
            });
        }

        function orderdFadeOut2(){
            $('.photo-list2 img').each(function(index){
                let $this = $(this);
                let delayTime = index;
    
                setTimeout(function(){
                    $this.removeClass('fadeup');
                }, 70 * delayTime);    
            });
        }

        function orderdFadeIn2(){
            $('.photo-list2 img').each(function(index){
                let $this = $(this);
                let delayTime = index;
    
                setTimeout(function(){
                    $this.addClass('fadeup');
                }, 70 * delayTime);    
            });
        }

        $('.gallery-button').on('click', function(){
            orderdFadeOut1();

            setTimeout(function(){
                orderdFadeIn2();
            },200);
            

            $('.gallery-button').stop().delay(150).fadeOut();
            $('.gallery-button2').stop().delay(550).fadeIn(800);
        });

        $('.gallery-button2').on('click', function(){
            orderdFadeOut2();

            setTimeout(function(){
                orderdFadeIn1();
            },200);
            

            $('.gallery-button2').stop().delay(150).fadeOut();
            $('.gallery-button').stop().delay(550).fadeIn(800);
        });


        // Light-Box 
        $('.photo-list1 img, .photo-list2 img').on('click',function(){
            let $selectedPhoto = $(this).attr("src");
            $('.lb-photo').attr("src", $selectedPhoto);
            $('.light-box').fadeIn();
        });

        $('.light-box').on('click',function(){
            $(this).fadeOut();
        });
});

/* ===============================
		about me ここから
================================= */
$(function(){
    $('.item-box').each(function(index){
        let $this = $(this);
        let delayTime = index;

        setTimeout(function(){
            $this.addClass('fadeup');
        },300 + 300 * delayTime);
    });
});






/* ===============================
		contact ここから
================================= */
$(function(){

    $('.visual-box img').delay(200).fadeIn();

     // contact
    let contactItem = $('.contact-form').contents();

    $(contactItem).each(function(index){
        let $this = $(this);
        delayTime = index;

        setTimeout(function(){
            $this.addClass('fadeup');
        }, 200 * delayTime);
    });

});