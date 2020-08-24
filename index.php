<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="portfolio/favi.ico" />
    <meta
      name="viewport"
      content="width=device-width initial-scale=1, minimum-scale=1"
    />
    <title>timesky82@gmail.com</title>
    <meta
      property="og:image"
      content="portfolio/og_img.jpg"
    />
    <link href="css/basic.css" type="text/css" rel="stylesheet" />
    <link href="css/ionicons.min.css" type="text/css" rel="stylesheet" />
    <link href="css/animate.css" type="text/css" rel="stylesheet" />
    <link href="css/slick.css" type="text/css" rel="stylesheet" />
    <link href="css/slick-theme.css" type="text/css" rel="stylesheet" />
    <link href="css/style.css?200130" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/lazyload.min.js" type="text/javascript"></script>
    <script src="js/animate.css.min.js" type="text/javascript"></script>
    <script src="js/slick.js" type="text/javascript"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
  </head>

  <body id="">
    <div id="accessibility">
      <a href="#gnb">글로벌 네비게이션</a>
      <a href="#search">검색</a>
      <a href="#content">본문 바로가기</a>
    </div>
    <div class="wrap_pop_area">
      <div class="pop_dim ir" id="pop_dim">팝업 닫기</div>
      <div class="pop_area v01" style="display: none;">
        <button class="btn_pop_cl">
          <i class="ion ion-md-close"></i><span class="ir">팝업 닫기</span>
        </button>
        <div class="pic_area">
          <img src="images/item_photo_01.jpg" alt="갤럭시 이미지" />
        </div>
        <div class="article_area">
          <div class="tit_area">
            <h3 class="tit"></h3>
            <p class="sub_tit"></p>
            <p class="txt"></p>
          </div>
        </div>
      </div>
      <div class="pop_area v02" style="display: none;">
        <button class="btn_pop_cl">
          <i class="ion ion-md-close"></i><span class="ir">팝업 닫기</span>
        </button>
        <div
          id="video"
          style="
            position: relative;
            height: 0;
            padding-bottom: 56.25%;
            margin: 0px;
          "
        >
          <iframe
            title="youtube"
            id="video_"
            width="560"
            height="315"
            src=""
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            style="position: absolute; width: 100%; height: 100%;"
          ></iframe>
        </div>
      </div>
    </div>
    <div class="wrap">
      <!--header-->
      <div class="header">
        <!-- gnb -->
        <div class="gnb" id="gnb">
          <button class="btn_gnb_m on">
            <i class="ion ion-ios-menu"></i>
            <span class="ir">글로벌 메뉴 열기</span>
          </button>
          <button class="btn_gnb_m off">
            <i class="ion ion-md-close"></i>
            <span class="ir">글로벌 메뉴 닫기</span>
          </button>
          <a href="mailto:timesky82@gmail.com" class="logo">Timesky82</a>
          <div class="dim">
            <div class="ir">닫기</div>
          </div>
          <!-- wrap_gnb_list -->
          <div class="wrap_gnb_list">
            <ul class="gnb_list">
              <li class="on">
                <a target="_blank" href="http://timesky.dothome.co.kr"
                  ><i class="ion ion-ios-videocam"></i><span>Vue.js 개인프로젝트</span></a
                >
              </li>
              <li class="">
                <a href=""
                  ><i class="ion ion-ios-paper"></i
                  ><span>더미-내용없음</span></a
                >
              </li>
              <li class="">
                <a href=""
                  ><i class="ion ion-ios-bulb"></i><span>더미-내용없음</span></a
                >
              </li>
              <li class="">
                <a href=""
                  ><i class="ion ion-ios-images"></i
                  ><span>더미-내용없음</span></a
                >
              </li>
              <li class="">
                <a href=""
                  ><i class="ion ion-ios-mail"></i><span>더미-내용없음</span></a
                >
              </li>
            </ul>
            <div class="sns_list">
              <li>
                <a class="facebook"
                  ><i class="ion ion-logo-facebook"></i
                  ><span class="ir">페이스북 링크</span></a
                >
              </li>
              <li>
                <a class="insta"
                  ><i class="ion ion-logo-instagram"></i
                  ><span class="ir">인스타 링크</span></a
                >
              </li>
              <li>
                <a class="youtube"
                  ><i class="ion ion-logo-youtube"></i
                  ><span class="ir">유튜브 링크</span></a
                >
              </li>
              <li>
                <a class="tweet"
                  ><i class="ion ion-logo-twitter"></i
                  ><span class="ir">트위터 링크</span></a
                >
              </li>
            </div>
          </div>
          <!-- wrap_gnb_list -->
          <!-- gnb_list_more -->
          <ul class="gnb_list_more">
            <li><a href="#work">Work</a></li>
            <li><a href="#web_dev">Web_dev</a></li>
          </ul>
          <!--// gnb_list_more -->
          <!-- wrap_search -->
          <div class="wrap_search">
            <button class="btn_search on">
              <i class="ion ion-ios-search"></i><span class="ir">검색</span>
            </button>
            <button class="btn_search close">
              <i class="ion ion-md-close"></i><span class="ir">검색창닫기</span>
            </button>
            <div class="search">
              <label for="search" class="a11y">검색</label>
              <input
                type="text"
                id="search"
                class="search"
                name="query"
                placeholder="search"
              />
              <button class="btn_search_data">
                <i class="ion ion-ios-search"></i><span class="ir">검색</span>
              </button>
            </div>
          </div>
          <!--// wrap_search -->
        </div>
        <!--// gnb -->
        <!-- snb -->
        <div class="snb">
          <!-- sns_list -->
          <ul class="sns_list">
            <li>
              <a class="facebook"
                ><i class="ion ion-logo-facebook"></i
                ><span class="ir">페이스북 링크</span></a
              >
            </li>
            <li>
              <a class="insta"
                ><i class="ion ion-logo-instagram"></i
                ><span class="ir">인스타 링크</span></a
              >
            </li>
            <li>
              <a class="youtube"
                ><i class="ion ion-logo-youtube"></i
                ><span class="ir">유튜브 링크</span></a
              >
            </li>
            <li>
              <a class="tweet"
                ><i class="ion ion-logo-twitter"></i
                ><span class="ir">트위터 링크</span></a
              >
            </li>
          </ul>
          <!--// sns_list -->
          <!-- nav -->
          <div class="nav">
            01
          </div>
          <!--// nav -->
        </div>
        <!--// snb -->
      </div>
      <!--//header-->
      <!-- content -->
      <div id="content" class="content">
        <!-- section wrap_main_slide -->
        <section class="wrap_main_slide">
          <!-- control -->
          <div class="control">
            <button class="btn_next">
              <i class="ion ion-ios-arrow-down"></i
              ><span class="ir">nextslide</span>
            </button>
            <button class="btn_pre">
              <i class="ion ion-ios-arrow-up"></i
              ><span class="ir">preslide</span>
            </button>
            <div class="wrap_play">
              <button class="btn_play off">
                <i class="ion ion-md-play"></i
                ><span class="ir">play slide</span>
              </button>
              <button class="btn_pause">
                <i class="ion ion-ios-pause"></i
                ><span class="ir">pause slide</span>
              </button>
            </div>
          </div>
          <!--// control -->
          <!-- main_slide -->
          <div class="main_slide">
            <div target="_blank" class="page">
              <div class="pic_area">
                <img
                  src="images/lazy.gif"
                  data-lazy="images/sl_main_01.jpg"
                  alt="여자 얼굴사진이 메인인 파스텔톤 웹디자인 "
                />
              </div>
              <div class="article_box">
                <h2 class="tit">
                  아래의 공개 디자인을 사용하여 하드코딩한 결과물입니다.
                </h2>
                <span class="tit_sub">
                  Designed by Tranmautritam for Mass Impressions.</span
                >
              </div>
            </div>
            <div class="page">
              <div class="pic_area">
                <img
                  src="images/lazy.gif"
                  data-lazy="images/sl_main_02.jpg"
                  alt="아이맥 맥북 아이패드에 반응형 웹을 표현"
                />
              </div>
              <div class="article_box">
                <h2 class="tit">작업 순서</h2>
                <span class="tit_sub">
                  - 레티나 포함 반응형 작업
                  <br />- 카로셀 커스텀 <br />- 탭 및 모달 스크립트 <br />-
                  Hover,버튼 인터렉션 <br />- Lazy Load 최적화
                </span>
              </div>
            </div>
            <div class="page">
              <div class="pic_area">
                <img
                  src="images/lazy.gif"
                  data-lazy="images/sl_main_03.jpg"
                  alt="sass compass vue가 설명된브로슈어"
                />
              </div>
              <div class="article_box">
                <h2 class="tit">Skill</h2>
                <span class="tit_sub"
                  >- Sass<br />
                  - Compass <br />
                  - Greensock<br />
                </span>
              </div>
            </div>
            <div class="page">
              <div class="pic_area">
                <img
                  src="images/lazy.gif"
                  data-lazy="images/sl_main_04.jpg"
                  alt="각종 도구가 정리된 브라운 계열 사진"
                />
              </div>
              <div class="article_box">
                <h2 class="tit">Tool</h2>
                <span class="tit_sub"
                  >- sublimetext <br />- git <br />- svn
                </span>
              </div>
            </div>
            <div class="page">
              <div class="pic_area">
                <img
                  src="images/lazy.gif"
                  data-lazy="images/sl_main_05.jpg"
                  alt="두루마리 2개가 있는 문서 사진 "
                />
              </div>
              <div class="article_box">
                <h2 class="tit">교육수료</h2>
                <p class="tit_sub">
                  - 2019.02 디지털디자인 향상 과정<br />
                  - 2017.03 모던 자바스크립트 과정 <br />
                  - 2016.07 WCAG2 +ARIA1 접근성과정 <br />
                  - 2015.03 SASS & Frameworks 모던 워크플로우과정 <br />
                </p>
              </div>
            </div>
            <div class="page">
              <div class="pic_area">
                <img
                  src="images/lazy.gif"
                  data-lazy="images/sl_main_06.jpg"
                  alt="카페에서 맥북을 펴고있는 사진"
                />
              </div>
              <div class="article_box">
                <h2 class="tit">자격증</h2>
                <span class="tit_sub">
                  - 2016.07 정보처리 기사
                  <br />- 2012.12 공인중개사 <br />- 2001.12 컴퓨터 그래픽스
                  운용기능사
                </span>
              </div>
            </div>
          </div>
          <!--// main_slide -->
        </section>
        <section class="wrap_list_box">
          <div class="wrap_tab_area">
            <div class="tab_area">
              <a id="work" href="" class="on">News1</a>
              <a href="" class="">Daum soft</a>
            </div>
          </div>
          <div class="tab_content on list_pop_up">
            <div
              class="item_photo ani fadeInLeft"
              data-wow-delay="0s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_04.jpg"
                    alt="맥북에 페이지가 늘어져있는 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">NEWS1 PC</h3>
                  <span class="tit_sub"
                    >초기 구축과 유지보수 파편화로 리뉴얼 진행중 / 유지보수 및
                    리뉴얼작업</span
                  >
                  <p class="txt">2016.05 ~</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo c_02 ani fadeInDown"
              data-wow-delay="0s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_01.jpg"
                    alt="갤럭시10사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">NEWS1 Mobile</h3>
                  <span class="tit_sub">전체 작업 </span>
                  <p class="txt">2016.05 ~</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo ani fadeInDown"
              data-wow-delay=".3s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_12.jpg"
                    alt="아이패드 아이폰 맥북 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">뉴스1 마크업 가이드</h3>
                  <span class="tit_sub">부트스트랩 반응형</span>
                  <p class="txt">2016.05 ~</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo c_02 ani fadeInRight"
              data-wow-delay="0s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_11.jpg"
                    alt="아이패드 아이폰 맥북 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">크립토 허브</h3>
                  <span class="tit_sub">Bulma 베이스 반응형</span>
                  <p class="txt">2017.04</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo c_02 ani fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_07.jpg"
                    alt="아이맥 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">여행 파일롯 사이트</h3>
                  <span class="tit_sub">fullpage.js 기반 반응형</span>
                  <p class="txt">2017.03</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo ani fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration=".3s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_13.jpg"
                    alt="아이맥 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">뉴스1 평창 특별사이트</h3>
                  <span class="tit_sub">PC</span>
                  <p class="txt">2017.06</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo c_02 ani fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_14.jpg"
                    alt="아이맥 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">RFIF 포럼</h3>
                  <span class="tit_sub">반응형</span>
                  <p class="txt">2019.09</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo ani fadeInRight"
              data-wow-delay=".3s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_15.jpg"
                    alt="갤럭시 s10 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">뉴스1 커피한잔</h3>
                  <span class="tit_sub">Swiper 기반 뉴스 서비스</span>
                  <p class="txt">2019.05</p>
                </div>
              </a>
            </div>
          </div>
          <div class="tab_content list_pop_up">
            <div
              class="item_photo ani fadeInLeft"
              data-wow-delay="0s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_02.jpg"
                    alt="아이패드 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">소셜 모니터링 시스템</h3>
                  <span class="tit_sub">문화체육관광부</span>
                  <p class="txt">2015.05</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo c_02 ani fadeInDown"
              data-wow-delay="0s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_16.jpg"
                    alt="아이패드 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">다모아 서비스</h3>
                  <span class="tit_sub">교보생명 태블릿 전용 서비스</span>
                  <p class="txt">2015.03</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo ani fadeInDown"
              data-wow-delay=".3s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_05.jpg"
                    alt="아이맥 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">Open API</h3>
                  <span class="tit_sub"
                    >연합뉴스 Masonry 기반 반응형 서비스</span
                  >
                  <p class="txt">2014.12</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo c_02 ani fadeInRight"
              data-wow-delay="0s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_17.jpg"
                    alt="아이맥 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">통합 리스닝 플랫폼</h3>
                  <span class="tit_sub">MBC,KBS,SBS,JTBC,EBS</span>
                  <p class="txt">2014.03</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo c_02 ani fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_06.jpg"
                    alt="아이맥 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">농식품 맞춤 소비정보 시스템</h3>
                  <span class="tit_sub">농림부</span>
                  <p class="txt">2014.08</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo ani fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration=".3s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_08.jpg"
                    alt="아이맥 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">HELPER</h3>
                  <span class="tit_sub">IE8 전용 현대 캐피탈 내부 서비스</span>
                  <p class="txt">2014.11</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo c_02 ani fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_09.jpg"
                    alt="아이패드 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">Social Analysis Report</h3>
                  <span class="tit_sub">KB 카드</span>
                  <p class="txt">2014.04</p>
                </div>
              </a>
            </div>
            <div
              class="item_photo ani fadeInRight"
              data-wow-delay=".3s"
              data-wow-duration=".8s"
            >
              <a href="">
                <i class="icon_link ion ion-ios-arrow-round-up"></i>
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/item_photo_03.jpg"
                    alt="아이맥 사진"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">Smart3</h3>
                  <span class="tit_sub">발명진흥회 특허 분석 평가 시스템</span>
                  <p class="txt">2014.03</p>
                </div>
              </a>
            </div>
          </div>
        </section>
        <section class="wrap_news_box">
          <h2 class="tit">Web_dev</h2>
          <ul class="news_list">
            <li
              class="ani fadeInUp"
              data-wow-delay="0.4s"
              data-wow-duration=".5s"
            >
              <a
                class="news"
                href="http://timesky.dothome.co.kr/#/"
                target="_blank"
              >
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/news_02.jpg"
                    alt="vue 관련 개인프로젝트"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">
                    <strong>Vue.js</strong> <br />
                    Vue.js 개인프로젝트
                  </h3>
                  <p class="writer">윤상기</p>
                </div>
              </a>
            </li>
            <li
              class="ani fadeInLeft"
              data-wow-delay="0.3s"
              data-wow-duration=".5s"
            >
              <a
                id="web_dev"
                class="news"
                href="https://web.dev/native-lazy-loading/"
                target="_blank"
              >
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/news_01.jpg"
                    alt="레이지 로드 설명글 이미지"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">
                    <strong>Lazy_load</strong><br />효율적 이미지 로딩
                  </h3>
                  <p class="writer">Addy Osmani</p>
                </div>
              </a>
            </li>
            
            <li
              class="ani fadeInRight"
              data-wow-delay="0.1s"
              data-wow-duration=".5s"
            >
              <a class="news" href="https://vuejs.org/" target="_blank">
                <div class="pic_area">
                  <img
                    class="lazyload"
                    src="images/lazy.gif"
                    data-src="images/news_03.jpg"
                    alt="뷰 설명글 이미지"
                  />
                </div>
                <div class="tit_area">
                  <h3 class="tit">
                    <strong>vuejs</strong><br />
                    프로그레시브 프레임워크
                  </h3>
                  <p class="writer">Evan You</p>
                </div>
              </a>
            </li>
          </ul>
          <div class="avi_wrap">
            <a
              href=""
              class="avi_bottom ani fadeInLeft"
              data-wow-delay="0.3s"
              data-wow-duration=".5s"
            >
              <div class="pic_area" data-avi="YPMARa8Ex58">
                <img class="lazyload" src="images/lazy.gif" alt="유튜브 사진" />
                <i class="ion ion-md-play"></i>
              </div>
              <div class="tit_area">
                <h3 class="tit">2020 자바스크립트 트렌드는 어떻게 될까?</h3>
                <p class="date">2020. 1. 20.</p>
              </div>
            </a>
            <a
              href=""
              class="avi_bottom ani fadeInUp"
              data-wow-delay="0.4s"
              data-wow-duration=".5s"
            >
              <div class="pic_area" data-avi="pt-b_1xoqUY">
                <img class="lazyload" src="images/lazy.gif" alt="유튜브 사진" />
                <i class="ion ion-md-play"></i>
              </div>
              <div class="tit_area">
                <h3 class="tit">React JS Fundamentals</h3>
                <p class="date">2017. 9. 21</p>
              </div>
            </a>
            <a
              href=""
              class="avi_bottom ani fadeInDown"
              data-wow-delay="0.3s"
              data-wow-duration=".5s"
            >
              <div class="pic_area" data-avi="9-F2vE8sFY4">
                <img class="lazyload" src="images/lazy.gif" alt="유튜브 사진" />
                <i class="ion ion-md-play"></i>
              </div>
              <div class="tit_area">
                <h3 class="tit">
                  CodeDrop - A Web Application for Programming Students and
                  their Instructors
                </h3>
                <p class="date">2019. 12. 2</p>
              </div>
            </a>
          </div>
        </section>
      </div>
      <!--// content -->
      <div id="footer">
        <a target="_blank" href="mailto:timesky82@gmail.com" class="copy">
          COPYRIGHT ⓒ Timesky82 ALL RIGHTS RESERVED.</a
        >
        <a target="_blank" href="mailto:timesky82@gmail.com" class="copy">
          <i class="ion ion-md-mail"></i>timesky82@gmail.com</a
        >
      </div>
    </div>
  </body>
</html>
