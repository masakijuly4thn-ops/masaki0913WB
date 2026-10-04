/***********************************************
 * Const
 * ********************************************/
 const html = document.documentElement;
 const body = document.body;
 const windowHeight = window.innerHeight;
   // ハンバーガーボタン
 const hamburgerButton = document.getElementById('js-hamburgerButton');

  // ハンバーガーメニュー
 const header = document.getElementById('js-header');
 const headerNav = document.getElementById('js-headerNav');

 /***********************************************
   * Method
 * ********************************************/
 window.addEventListener("load", () => {
   body.classList.add("is-loaded");
 });

 // ページ内リンクのみ取得
 let scroll = new SmoothScroll('a[href*="#"]', {
   speed: 300, //スクロールする速さ
   header: "#js-header",
 });


 //mv以降表示 js-active付与
 window.addEventListener('scroll', function () {
   let scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
   const header = document.getElementById("js-header");
   const mv = document.getElementById("js-mv").clientHeight;;
   if (scrollTop < mv) {
     header.classList.remove("js-active")
   } else {
     header.classList.add("js-active")
   }
 });


  // ------------------------ ハンバーガーメニュー
  const OpenHeaderNav = ()=>{
    hamburgerButton.addEventListener('click', ()=>{
      const headerNavOpened = body.classList.contains('is-navOpen');
        if (headerNavOpened) {
          body.classList.remove('is-navOpen');
          html.style.overflow = '';
        } else {
          body.classList.add('is-navOpen');
          html.style.overflow = 'hidden';
        }
    });
  }
  if(hamburgerButton) {
    OpenHeaderNav();
  }

 //ハンバーガーメニュー内をクリックすると閉じる is-navOpenを消す
 const closeHeaderNav = ()=>{
    headerNav.addEventListener('click', ()=>{
      const headerNavOpened = body.classList.contains('is-navOpen');
        if (headerNavOpened) {
          body.classList.remove('is-navOpen');
          html.style.overflow = '';
        }
    });
  }
  if(headerNav) {
    closeHeaderNav();
  }

  // inview
 /**
  * @function HTMLElement.prototype.inview　HTML要素と画面の交差を判定し処理を実行する
  */
 if (!HTMLElement.prototype.inview) {
   Object.defineProperty(HTMLElement.prototype, "inview", {
     configurable: true,
     enumerable: false,
     writable: true,
     /**
      * @function callbackInView  HTML要素が画面内に入った時に実行する関数
      * @function callbackOutView  HTML要素が画面から出た時に実行する関数
      */
     value: function (callbackInView, callbackOutView) {
       const options = {
         root: null,
         rootMargin: "0px 0px -10% 0px", //画面下10%手前で判定
         threshold: [0.15], //縦長の要素（SPのカード一覧など）でも発火するよう15%で判定
       };
       const observer = new IntersectionObserver(function (entries) {
         entries.forEach(function (e) {
           if (
             e.isIntersecting &&
             Object.prototype.toString.call(callbackInView) ===
               "[object Function]"
           ) {
             callbackInView(e);
           }
           //要素が画面から出た時
           else if (
             !e.isIntersecting &&
             Object.prototype.toString.call(callbackOutView) ===
               "[object Function]"
           ) {
             callbackOutView(e);
           }
         });
       }, options);
       observer.observe(this);
     },
   });
 }
 window.addEventListener("load", function () {
   const item = document.querySelectorAll(".iv");
   for (let i = 0; i < item.length; i++) {
     const elem = item[i];
     //要素が画面内に入った時クラスを付与
     setTimeout(function () {
       elem.inview(function () {
         elem.classList.add("view");
       });
     }, 800);
   }
 });

 const item = document.querySelectorAll(".iv");
 for (let i = 0; i < item.length; i++) {
   const elem = item[i];
   //要素が画面内に入った時クラスを付与
   elem.inview(function () {
     elem.classList.add("view");
   });
 }


 //  ページ内のimg要素サイズを取得
 const myFunc = function (src) {
     return new Promise(function(resolve, reject){
         const image = new Image();
         image.src = src;
         image.onload = function(){
             resolve(image);
         }
         image.onerror = function(error){
             reject(error);
         }
     });
 }
 const imgs = document.getElementsByTagName('img');
 for (const img of imgs) {
     const src = img.getAttribute('src');
     myFunc(src)
     .then(function(res){
         if(!img.hasAttribute('width')){
             img.setAttribute('width', res.width);
         }
         if(!img.hasAttribute('height')){
             img.setAttribute('height', res.height);
         }
     })
     .catch(function(error){
         console.log(error);
     });
 }
