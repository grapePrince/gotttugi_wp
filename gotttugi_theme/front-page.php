<?php
get_header();
?>

<section class="banner">
  <h2 class="hidden">배너광고</h2>
  <div class="sliderWrap">
    <img
      src="<?php echo BASE_URI .'/images/banner_1.jpg'?>"
      alt="진라면 호안미로 30주년 스페셜 에디션"
    />
    <img
      src="<?php echo BASE_URI .'/images/banner_2.jpg'?>"
      alt="진짜쫄면 쫄깃해 맛있어 탱글해! 올 여름에도 진짜쫄면"
    />
    <img
      src="<?php echo BASE_URI .'/images/banner_3.jpg'?>"
      alt="세상 어떤 맛보다 카레의 기억은 길다. 오뚜기 카레가 50년이 되었습니다."
    />
    <img
      src="<?php echo BASE_URI .'/images/banner_4.jpg'?>"
      alt="요즘- 이정도는 먹어주잖아. 오뚜기 컵밥, 맛 좀 아는 우리의 EAT템"
    />
  </div>
  <div class="left"></div>
  <div class="right"></div>
</section>
<section class="section--corporation section_corporation1" id="content">
  <div class="full-bg">
    <video
      data-autoplay
      muted
      loop
      poster="<?php echo BASE_URI .'/images/corporation_thumnail_1.jpg'?>"
    >
    <source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031503/corporation_1_gypopq.ogv" type="video/ogv" />
    <source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031434/corporation_1_ynsva3.mp4" type="video/mp4" />
    <source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031442/corporation_1_dxfa9n.webm" type="video/webm" />
    <span>이 브라우저는 video요소를 지원하지 않습니다.</span>
  </video>
  </div>           
  <div class="contents">
    <div class="item operation">
      <div class="center_center">
        <h2>지속가능경영</h2>
        <p>
          오뚜기는 <em>사회와</em> 더불어 발전하고 <em>사람과</em> 함께
          성장하는 기업입니다.
        </p>
        <div>
          <ul>
            <li
              class="society"
              data-locale="corporation.operation.society"
            >
              <div class="icon sprites">아이콘</div>
              <div class="text">사회공헌</div>
            </li>
            <li
              class="environment"
              data-locale="corporation.operation.environment"
            >
              <div class="icon sprites">아이콘</div>
              <div class="text">환경경영</div>
            </li>
            <li class="ethic" data-locale="corporation.operation.ethic">
              <div class="icon sprites">아이콘</div>
              <div class="text">윤리경영</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section_corporation2 section--corporation section--corporation--last">
  <div class="full-bg">
    <video
      data-autoplay
      muted
      loop
      poster="<?php echo BASE_URI .'/images/corporation_thumnail_2.jpg'?>"
    >
      <source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031413/corporation_2_tngco7.ogv" type="video/ogv" />
      <source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031419/corporation_2_b7uhyr.mp4" type="video/mp4" />
      <source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031485/corporation_2_mkwplr.webm" type="video/webm" />
      <span>이 브라우저는 video요소를 지원하지 않습니다.</span>
    </video>
  </div>
  <div class="contents">
    <div class="item ideology">
      <div class="center_center">
        <h2>오뚜기이념</h2>
        <p>
          오뚜기는 <em>기쁨</em>과 <em>만족</em>으로 인류 식생활에
          이바지합니다.
        </p>
        <ul>
          <li
            class="quality"
            data-locale="corporation.operation.quality"
          >
            <div class="icon sprites">아이콘</div>
            <div class="text">좋은품질</div>
          </li>
          <li
            class="nutrition"
            data-locale="corporation.operation.nutrition"
          >
            <div class="icon sprites">아이콘</div>
            <div class="text">높은영양</div>
          </li>
          <li
            class="products"
            data-locale="corporation.operation.products"
          >
            <div class="icon sprites">아이콘</div>
            <div class="text">앞선식품</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="new_product">
  <div
    class="new_product_section row--between row--base layout_row--product container"
  >
    <h2
      class="typo_title_small_smaller typo_title_small__lh title--line_from_left layout_row--product__title"
    >
      산초와 매운 고추를 원료로 한
      <span class="highlight--main">사천식 훠궈 마라탕 소스</span>
    </h2>
    <div class="layout_row--product__image">
      <img 
        src="<?php echo BASE_URI .'/images/newproduct_main.png'?>"
        alt="훠궈 마라탕소스" 
      />
    </div>
    <div class="detail layout_row--product__detail">
      <p
        class="typo_content_serif typo_content_title_small__lh bold"
      >
        중량 : 70g (2~3인분)<br />
        분류 : 조미소스 / 식품<br />
        특징 : 독특하고 얼얼한 맛
      </p>
      <a class="btn--square" href="product_detail.html">상세더보기</a>
      <a class="btn--square" href="#"
        ><span class="sprites shoplink--small"
          >몰로바로가기</span
        ></a
      >
    </div>
  </div>
  <div class="new_product_section line_background">
    <div class="row--between layout_row--desc container">
      <div class="new_product_section__desc1 gallery--item_fit layout_row--desc__item">
        <p
          class="typo_content_title_littlesmaller typo_content_title__lh type--light gallery--item_fit__text"
        >
          훠궈, 마라탕 뿐만 아니라<br />
          마라샹궈, 마라새우, 마파두부 등<br />
          다양한 사천식 요리에도 어울리는<br />
          훠궈 마라탕 소스입니다.
        </p>
        <img
          class="gallery--item_fit__image"
          src="<?php echo BASE_URI .'/images/newproduct_desc_left.jpg'?>"
          alt="맛있는 마라탕"
        />
      </div>
      <div class="new_product_section__desc2 gallery--item_fit layout_row--desc__item">
        <blockquote
          class="typo_content_title_littlesmaller typo_content_title__lh type--light gallery--item_fit__text"
        >
          소스 하나로 사천 요리가<br />
          가까워진 느낌이에요.
        </blockquote>
        <img
          class="gallery--item_fit__image"
          src="<?php echo BASE_URI .'/images/newproduct_desc_right.jpg'?>"
          alt="맛있는 마라국수"
        />
      </div>
    </div>
  </div>
  <div
    class="new_product_section new_product_section--more layout--5column container"
  >
    <div class="layout--5column__col layout-square">
      <div class="layout-square--content layout--5column__title__back">
        <h3 class="layout--5column__title">신제품 목록 더보기</h3>
      </div>
      <div class="layout--5column__triangle hidden_text">화살표</div>
    </div>
    <div class="thumnail_item layout--5column__col layout-square">
      <div class="layout-square--content">
        <a class="layout--5column__col__image" href="product_detail.html">
          <img src="<?php echo BASE_URI .'/images/newproduct_1.png'?>" alt=""/>
        </a>
        <a href="product_detail.html">
          <h4 class="thumnail_item--title">훠궈 마라탕소스</h4>
        </a>
      </div>
    </div>
    <div class="thumnail_item layout--5column__col layout-square">
      <div class="layout-square--content">
        <a class="layout--5column__col__image" href="product_detail.html">
          <img src="<?php echo BASE_URI .'/images/newproduct_2.png'?>" alt=""/>
        </a>
        <a href="product_detail.html">
          <h4 class="thumnail_item--title">훠궈 해선탕소스</h4>
        </a>
      </div>
    </div>
    <div class="thumnail_item layout--5column__col layout-square">
      <div class="layout-square--content">
        <a class="layout--5column__col__image" href="product_detail.html">
          <img src="<?php echo BASE_URI .'/images/newproduct_3.png'?>" alt=""/>
        </a>
        <a href="product_detail.html">
          <h4 class="thumnail_item--title">스페셜카레</h4>
        </a>
      </div>
    </div>
    <div class="thumnail_item layout--5column__col layout-square ">
      <div class="layout-square--content">
        <a class="layout--5column__col__image" href="product_detail.html">
          <img src="<?php echo BASE_URI .'/images/newproduct_4.png'?>" alt=""/>
        </a>
        <a href="product_detail.html">
          <h4 class="thumnail_item--title">궁중갈비찜 컵밥</h4>
        </a>
      </div>
    </div>
  </div>
</section>    
<section class="section--news layout--news container">
  <h2 class="layout--news__title typo_title_small">
    <span class="sprites sprites--logo--text">오뚜기</span>
    소식들
  </h2>
  <h3 class="layout--news__title--sub typo_content">이벤트/뉴스</h3>

  <div class="swiper-container">
      <div class="swiper-wrapper slider__wrapper slider__wrapper--news">
        <div class="swiper-slide slider__wrapper__slide">
          <img class="news_image_1" src="<?php echo BASE_URI .'/images/event_1.jpg'?>" alt="" />
        </div>
        <div class="swiper-slide slider__wrapper__slide slider__wrapper__slide--text">
          <div class="slider__wrapper__slide__container">
            <h3 class="slider_item--news__title">
              2019년 1월 1일부터 모든 농산물에 농약허용물질목록관리제도를 시행합니다.
            </h3>
            <div class="slider_item--news__date">2018.12.21</div>
            <p class="slider_item--news__content">
              더 강화된 농약관리, 더 안전해진 먹거리!<br>
              2019년 1월 1일부터모든 농산물에 농약허용물질목록관리제도(PLS)가 시행됩니다.<br>
              ※ 자세한 사항은 식품안전나라 홈페이지 PLS 자료실을 참조하세요.<br>
              식품안전나라 바로가기.
            </p>
            <div
              class="slider_item--news__link module_link--more--noborder"
            >
              <a href="#" class="module_link--more--noborder__text">
                자세히보기
              </a>
              <a href="#" class="sprites plus_more_black module_link--more--noborder__icon">
                +
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide slider__wrapper__slide">
          <img class="news_image_2" src="<?php echo BASE_URI .'/images/event_2.jpg'?>" alt="" />
        </div>
        <div class="swiper-slide slider__wrapper__slide">
          <div class="slider__wrapper__slide__container">
            <h3 class="slider_item--news__title">
              오뚜기 홈페이지 개인정보처리방침 개정 안내
            </h3>
            <div class="slider_item--news__date">
              2019.07.08
            </div>
            <p class="slider_item--news__content">
              오뚜기 홈페이지를 방문해 주신 분들께 진심으로 감사드립니다.<br>
              개인정보 보호책임자의 변경에 따라 오뚜기 홈페이지의 개인정보처리방침이 개정됨을 알려드립니다.<br> 
              개정된 개인정보처리방침은 7월 15일부터 시행됩니다.<br>
              개정된 개인정보처리방침을 참고하시어 홈페이지 이용에 불편이 없으시길 바랍니다.<br>
              개정된 개인정보처리방침 보러 가기.
            </p>
            <div
              class="slider_item--news__link module_link--more--noborder"
            >
              <a href="#" class="module_link--more--noborder__text">
                자세히보기
              </a>
              <a href="#" class="sprites plus_more_black module_link--more--noborder__icon">
                +
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide slider__wrapper__slide">
          <img  class="news_image_3" src="<?php echo BASE_URI .'/images/event_3.jpg'?>" alt="" />
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
</section>
<section class="popular">
  <div class="popular__main">
    <div class="container popular__main__container">
      <div class="popular__main__image">
        <img src="<?php echo BASE_URI .'/images/popular_main.png'?>" alt="진라면">
        <img class="popular__main__image__ramen" src="<?php echo BASE_URI .'/images/popular_main2.png'?>" alt="그릇에담긴라면">
      </div>
      <div class="popular_main_details l_title_sub_desc">
        <h3 class="l_title_sub_desc__title m_title_sub_desc__title">면이 그리울 땐<br>
          <em class="m_title_sub_desc__title__em">진라면</em>
        </h3>
        <div class="l_title_sub_desc__sub m_title_sub_desc__sub">Since 1979</div>
        <div class="l_title_sub_desc__desc m_title_sub_desc__desc">진라면과 함께 쫄깃하고 찰기있는 면을 즐겨보세요. 사골국물과 숙성된 매운맛이 조화되어 진하고 얼큰한 맛을 느끼실 수 있습니다.</div>
      </div>
    </div>
  </div>
  <div class="popular__details l_popular__details m_popular__details container">
    <div class="video__container">
      <video
      class="m_popular__details__video"
      data-autoplay
      muted
      loop
      poster="<?php echo BASE_URI .'/images/corporation_thumnail_2.jpg'?>"
      >
        <source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031413/corporation_2_tngco7.ogv" type="video/ogv" />
        <source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031419/corporation_2_b7uhyr.mp4" type="video/mp4" />
        <source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031485/corporation_2_mkwplr.webm" type="video/webm" />
        <span>이 브라우저는 video요소를 지원하지 않습니다.</span>
      </video>
      <div class="video__background hidden_text">마우스오버배경</div>
      <span class="video__icon sprites search_button">크게보기아이콘</span>
    </div>

    <div class="l_popular__details__attr m_popular__details__attr">
      <div class="l_popular__details__attr__text m_popular__details__attr__text">
        중량 : 120g<br>
        열량 : 500kcal<br>
        분류 : 라면류<br>
        특징 : 숙성된 매운 맛<br>
      </div>
        <div class="l_popular__details__attr__button m_button--square--border js-href" data-href="/product_detail.html" >
          상세 더보기
          <div class="m_button--square--border__icon--more">
          +  
          </div>
        </div>
      <div class="l_popular__details__attr__button m_button--square--border">
        <div class="m_button--square--border__icon--shoplink">쇼핑바로가기</div>
      </div>                
    </div>
  </div>
  <div class="popular__more container layout--5column">
    <div class="layout--5column__col layout-square thumnail_item">
      <div class="layout-square--content layout--5column__title__back">
        <h3 class="layout--5column__title">
          인기상품<br>
          목록<br> 
          더보기 
        </h3>                
      </div> 
      <div class="layout--5column__triangle hidden_text">화살표</div>                
    </div>
    <div class="layout--5column__col layout-square thumnail_item">
      <div class="layout-square--content">
        <a  class="layout--5column__col__image"  href="product_detail.html">
          <img src="<?php echo BASE_URI .'/images/popular_2.png'?>" alt=""/>
        </a>
        <a href="product_detail.html">
          <h4 class="thumnail_item--title">진라면매운맛</h4>
        </a>
      </div>   
    </div>
    <div class="layout--5column__col layout-square thumnail_item">
      <div class="layout-square--content">
        <a  class="layout--5column__col__image" href="product_detail.html">
          <img src="<?php echo BASE_URI .'/images/popular_3.png'?>" alt=""/>
        </a>
        <a href="product_detail.html">
          <h4 class="thumnail_item--title">3분카레</h4>
        </a>
      </div>   
    </div>
    <div class="layout--5column__col layout-square thumnail_item">
      <div class="layout-square--content">
        <a  class="layout--5column__col__image" href="product_detail.html">
          <img src="<?php echo BASE_URI .'/images/popular_4.png'?>" alt=""/>
        </a>
        <a href="product_detail.html">
          <h4 class="thumnail_item--title">베이컨치즈볶음밥</h4>
        </a>
      </div>   
    </div>
    <div class="layout--5column__col layout-square thumnail_item">
      <div class="layout-square--content">
        <a  class="layout--5column__col__image" href="product_detail.html">
          <img src="<?php echo BASE_URI .'/images/popular_1.png'?>" alt=""/>
        </a>
        <a href="product_detail.html">
          <h4 class="thumnail_item--title">오뚜기컵누들</h4>
        </a>
      </div>   
    </div>
  </div>
</section>
<section class="recipe container l_recipe">
  <div class="l_recipe_back hidden_text">배경</div>
  <h2 class="l_recipe_title s_recipe_title">면역력, 기력회복, 뼈건강엔 닭곰탕!</h2>
  <p class="l_recipe_title_sub s_recipe_title_sub">
    겨울철 보양식으로 소문난 닭곰탕, 매번 국물 우려내기 번거로우셨다면?<br>
    오뚜기 닭곰탕면으로 손쉽게 요리해 보세요.
  </p>
  <div class="l_recipe__main">
    <img class="l_recipe__main__image s_recipe__main__image" src="<?php echo BASE_URI .'/images/receipe_main.jpg'?>" alt="닭곰탕 사진">
    <div class="l_recipe__main__details s_recipe__main__details">
      <div class="l_recipe__main__ingredients s_recipe__main__ingredients">
        <h4 class="l_recipe__main__ingredients__title  s_recipe__main__ingredients__title">재료 및 분량</h4>
        <p class="s_recipe__main__ingredients__details">
          옛날 닭곰탕 1개<br>
          오뚜기 라면사리 1개<br>
          쪽파 10g<br>
          통참깨 3g
        </p>
      </div>
      <div class="l_recipe__main__products">
        <div class="l_recipe__main__product s_recipe__main__product">
          <img class="s_recipe__main__product__image"  src="<?php echo BASE_URI .'/images/recipe_ingredient_1.png'?>" alt="">
          <div class="m_button--square--border s_recipe__main__product__button" >
            <div class="m_button--square--border__icon--shoplink"></div>
          </div>
        </div>
        <div class="l_recipe_main__product s_recipe__main__product">
          <img class="s_recipe__main__product__image"  src="<?php echo BASE_URI .'/images/recipe_ingredient_2.png'?>" alt="">
          <div class="m_button--square--border s_recipe__main__product__button">
            <div class="m_button--square--border__icon--shoplink"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="l_recipe__process">
    <div class="recipe__process__item l_recipe__process__item s_recipe__process__item">
      <svg class="recipe__process__line s_recipe__process__line" xmlns="http://www.w3.org/2000/svg" viewBox="-2 2 160 160"><circle cx="78.5" cy="78.5" r="78.5"/></svg>
      <h4 class="l_receipe__process__item__title s_receipe__process__item__title">
        01<br>
        사리준비
      </h4>
      <p class="receipe__process__item__detail l_receipe__process__item__detail s_receipe__process__item__detail">
        끓는 물에 라면사리를 2분간 삶아 준 후 찬물에 헹궈 준다.
      </p>
    </div>
    <div class="recipe__process__item l_recipe__process__item s_recipe__process__item">
      <svg class="recipe__process__line s_recipe__process__line" xmlns="http://www.w3.org/2000/svg" viewBox="-2 2 160 160"><circle cx="78.5" cy="78.5" r="78.5"/></svg>
      <h4 class="l_receipe__process__item__title s_receipe__process__item__title">
        02<br>
        쪽파준비
      </h4>
      <p class="receipe__process__item__detail l_receipe__process__item__detail s_receipe__process__item__detail">
        쪽파를 송송 썰어 준다.
      </p>
    </div>
    <div class="recipe__process__item l_recipe__process__item s_recipe__process__item">
        <svg class="recipe__process__line s_recipe__process__line" xmlns="http://www.w3.org/2000/svg" viewBox="-2 2 160 160"><circle cx="78.5" cy="78.5" r="78.5"/></svg>
      <h4 class="l_receipe__process__item__title s_receipe__process__item__title">
        03<br>
        닭곰탕끓이기
      </h4>
      <p class="receipe__process__item__detail l_receipe__process__item__detail s_receipe__process__item__detail">
        닭곰탕을 끓여 준다.
      </p>
    </div>
    <div class="recipe__process__item l_recipe__process__item s_recipe__process__item">
        <svg class="recipe__process__line s_recipe__process__line" xmlns="http://www.w3.org/2000/svg" viewBox="-2 2 160 160"><circle cx="78.5" cy="78.5" r="78.5"/></svg>
      <h4 class="l_receipe__process__item__title s_receipe__process__item__title">
        04<br>
        사리넣기
      </h4>
      <p class="receipe__process__item__detail l_receipe__process__item__detail s_receipe__process__item__detail">
        닭곰탕이 끓기 시작하면 라면 사리를 넣고 1분 정도 끓여 준다.
      </p>
    </div>
    <div class="recipe__process__item l_recipe__process__item s_recipe__process__item">
        <svg class="recipe__process__line s_recipe__process__line" xmlns="http://www.w3.org/2000/svg" viewBox="-2 2 160 160"><circle cx="78.5" cy="78.5" r="78.5"/></svg>
      <h4 class="l_receipe__process__item__title s_receipe__process__item__title">
        05<br>
        마무리
      </h4>
      <p class="receipe__process__item__detail l_receipe__process__item__detail s_receipe__process__item__detail">
        그릇에 담은 후 쪽파와 통 참깨를 뿌려 주면 된다.
      </p>
    </div>
  </div>
  <div class="l_recipe__more m_button--square--border" >
    다른 레시피 더보기
    <div class="m_button--square--border__icon--more">
      +
    </div>
  </div>
</section>
<section class="factory l_factory s_factory">
  <div class="factory__container container">
    <div class="l_factory_title s_factory_title">
      <div class="l_factory_title__category s_factory_title__category">
        상시모집
      </div>
      <h3 class="s_factory_title__sub">
        가족 모두가 함께하는 놀이터
      </h3>
      <h2 class="l_factory_title__main s_factory_title__main">
        <em class="s_factory_title_em">오뚜기</em> 공장체험
      </h2>
      <div class="l_factory_title__icon1 s_factory_title__icon1">로봇아이콘</div>
      <div class="l_factory_title__icon2 s_factory_title__icon2">기어아이콘</div>
    </div>
    <div class="l_factory_features">
      <div class="l_factory_feature s_factory_feature">
        <div class="l_factory_feature__icon s_factory_feature__icon s_factory_feature__icon--1 hidden_text">공장견학</div>
        <div class="s_factory_feature__text">공장견학</div>  
      </div>
      <div class="l_factory_feature s_factory_feature">
        <div class="l_factory_feature__icon s_factory_feature__icon s_factory_feature__icon--2 hidden_text">요리교실</div>
        <div class="s_factory_feature__text">요리교실</div>  
      </div>
      <div class="l_factory_feature s_factory_feature">
        <div class="l_factory_feature__icon s_factory_feature__icon s_factory_feature__icon--3 hidden_text">선물증정</div>
        <div class="s_factory_feature__text">선물증정</div>  
      </div>
      <div class="l_factory_feature s_factory_feature">
        <div class="l_factory_feature__icon s_factory_feature__icon s_factory_feature__icon--4 hidden_text">기념촬영</div>
        <div class="s_factory_feature__text">기념촬영</div>  
      </div>
    </div>
    <div class="l_factory_button s_factory_button m_button--square--border--big js-href" data-href="/factory.html">
      신청하러 가기
      <div class="m_button--square--border__icon--more--big">
        +
      </div>
    </div>
    <img class="factory__image" src="<?php echo BASE_URI .'/images/factory_back_children.png'?>" alt="행복한 아이들">
  </div>
</section>
<section class="media l_media s_media js-happy">
  <h2 class="hidden">미디어광고속오뚜기</h2>
  <div class="l_media_container container">
    <div class="m_tab__container">
      <div class="m_tab__headers">
        <div class="m_tab__header m_tab__header--1 js-happy">
          <div class="m_tab__header__icon m_tab__header__icon--heart">하트</div>
          <div class="m_tab__header__text">오늘, 맛으로 행복한 세상</div>
        </div>
        <div class="m_tab__header m_tab__header--2 js-ramen">
          <div class="m_tab__header__icon m_tab__header__icon--ramen">라면</div>
          <div class="m_tab__header__text">뚜기네 라면 이야기</div>
        </div>
        <div class="m_tab__header m_tab__header--3 js-tabasco">
          <div class="m_tab__header__icon m_tab__header__icon--tabasco">타바스코</div>
          <div class="m_tab__header__text">타바스코 코리아</div>
        </div>
      </div>
      <div class="m_tab__content">
        <div class="l_media_contents js-happy">
            <div class="l_media_item">
              <div class="l_media_item__image">
                <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_1.jpg'?>"  alt="만떡만떡">
                <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                  <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                    더보기
                    <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                  </div>                        
                </div>
              </div>
              <p class="l_media_item__text s_media_item__text">&num;&lsqb;댓글이벤트&rsqb; 만떡만떡에 오뚜기 소스 조합은?</p>
            </div>
            <div class="l_media_item">
              <div class="l_media_item__image">
                <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_1.jpg'?>" alt="만떡만떡">
                <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                  <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                    더보기
                    <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                  </div>                        
                </div>
              </div>
              <p class="l_media_item__text s_media_item__text">&num;&lsqb;댓글이벤트&rsqb; 만떡만떡에 오뚜기 소스 조합은?</p>
            </div>
            <div class="l_media_item">
              <div class="l_media_item__image">
                <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_1.jpg'?>" alt="만떡만떡">
                <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                  <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                    더보기
                    <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                  </div>                        
                </div>
              </div>
              <p class="l_media_item__text s_media_item__text">&num;오뚜기 연구원 ASMR 신상케챂 2종</p>
            </div>                  
            <div class="l_media_item">
              <div class="l_media_item__image">
                <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_1.jpg'?>" alt="만떡만떡">
                <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                  <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                    더보기
                    <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                  </div>                        
                </div>
              </div>
              <p class="l_media_item__text s_media_item__text">&num;오뚜기 맛집탐방 4탄 을지로 원조 영락골뱅이</p>
            </div>                               
        </div>
        <div class="l_media_contents js-ramen">
            <div class="l_media_item">
              <div class="l_media_item__image">
                <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_1.jpg'?>" alt="만떡만떡">
                <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                  <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                    더보기
                    <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                  </div>                        
                </div>
              </div>
              <p class="l_media_item__text s_media_item__text">&num;&lsqb;댓글이벤트&rsqb; 만떡만떡에 오뚜기 소스 조합은?</p>
            </div>
            <div class="l_media_item">
              <div class="l_media_item__image">
                <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_2.jpg'?>" alt="만떡만떡">
                <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                  <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                    더보기
                    <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                  </div>                        
                </div>
              </div>
              <p class="l_media_item__text s_media_item__text">&num;오뚜기 연구원 ASMR 신상케챂 2종</p>
            </div>                  
            <div class="l_media_item">
              <div class="l_media_item__image">
                <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_2.jpg'?>" alt="만떡만떡">
                <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                  <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                    더보기
                    <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                  </div>                        
                </div>
              </div>
              <p class="l_media_item__text s_media_item__text">&num;오뚜기 연구원 ASMR 신상케챂 2종</p>
            </div>                                 
            <div class="l_media_item">
              <div class="l_media_item__image">
                <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_3.jpg'?>" alt="만떡만떡">
                <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                  <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                    더보기
                    <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                  </div>                        
                </div>
              </div>
              <p class="l_media_item__text s_media_item__text">&num;오뚜기 맛집탐방 4탄 을지로 원조 영락골뱅이</p>
            </div>                
        </div>
        <div class="l_media_contents js-tabasco">
          <div class="l_media_item">
            <div class="l_media_item__image">
              <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_1.jpg'?>" alt="만떡만떡">
              <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                  더보기
                  <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                </div>                        
              </div>
            </div>
            <p class="l_media_item__text s_media_item__text">&num;&lsqb;댓글이벤트&rsqb; 만떡만떡에 오뚜기 소스 조합은?</p>
          </div>
          <div class="l_media_item">
            <div class="l_media_item__image">
              <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_2.jpg'?>" alt="만떡만떡">
              <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                  더보기
                  <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                </div>                        
              </div>
            </div>
            <p class="l_media_item__text s_media_item__text">&num;오뚜기 연구원 ASMR 신상케챂 2종</p>
          </div>                  
          <div class="l_media_item">
            <div class="l_media_item__image">
              <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_3.jpg'?>" alt="만떡만떡">
              <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                  더보기
                  <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                </div>                        
              </div>
            </div>
            <p class="l_media_item__text s_media_item__text">&num;오뚜기 맛집탐방 4탄 을지로 원조 영락골뱅이</p>
          </div>                
          <div class="l_media_item">
            <div class="l_media_item__image">
              <img class="l_media_item__image_image s_media_item__image_image" src="<?php echo BASE_URI .'/images/sns_today_3.jpg'?>" alt="만떡만떡">
              <div class="media_item__image__hover l_media_item__image__hover s_media_item__image__hover">
                <div class="l_media_item__image__hover__content s_media_item__image__hover__content">
                  더보기
                  <span class="l_media_item__image__hover__icon s_media_item__image__hover__icon">+</span>
                </div>                        
              </div>
            </div>
            <p class="l_media_item__text s_media_item__text">&num;오뚜기 맛집탐방 4탄 을지로 원조 영락골뱅이</p>
          </div>                
        </div>
      </div>
    </div>            
  </div>
</section>

<div class="layer_notice">
  <div class="layer_notice__contents">
    <div class="clearfix">
      <span class="sprites close layer_notice__close">닫기</span>
    </div>
    <h2 class="typo_content_title_bold layer_notice__title color_red">안내사항</h2>
    <p class="layer_notice__text">
      이 페이지는 포트폴리오용으로 제작된<br>
      <em class="color_red">비 상업용</em> 사이트입니다.<br>
      반응형으로 제작되어 크기를 줄여 보실 수 있습니다.
    </p>
    <p class="layer_notice__info">문의 : kharrein@gmail.com / 010-2597-6547</p>
  </div>
</div>

<?php
get_footer();
?>