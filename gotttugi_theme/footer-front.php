<?php 
$base_uri = get_stylesheet_directory_uri();
?>

<footer class="footer">
  <div class="footer_links__container container">
    <ul class="footer_links--menu">
      <li class="footer_links--menu__item"><a class="typo_content_bold" href="#">개인정보처리방침</a></li>
      <li class="footer_links--menu__item"><a class="typo_content" href="#">고객상담</a></li>	
      <li class="footer_links--menu__item"><a class="typo_content" href="#">찾아오시는 길</a></li>
      <li class="footer_links--menu__item"><a class="typo_content" href="#">오뚜기몰</a></li>
    </ul>
    <ul class="footer_links--social">
      <li class="s_media_social__item s_media_social__item--facebook hidden_text">페이스북</li>
      <li class="s_media_social__item s_media_social__item--twitter hidden_text">트위터</li>
      <li class="s_media_social__item s_media_social__item--youtube hidden_text">유투브</li>
    </ul>
  </div>
  <div class="footer_down__container container">
    <a class="sprites sprites--logo--footer footer_logo">로고</a>
    <div class="footer_infos">
      <ul class="footer_info__container">
        <li class="footer_info typo_content_small typo_content_small__lh">(주)오뚜기</li>
        <li class="footer_info typo_content_small typo_content_small__lh">사업자등록번호 : 000-00-00000</li>
        <li class="footer_info typo_content_small typo_content_small__lh">대표이사 그리즐리베어</li>
        <li class="footer_info typo_content_small typo_content_small__lh">주소 (14060) 경기도 안양시 동안구 흥안대로 405 (평촌동 160)</li>
        <li class="footer_info typo_content_small typo_content_small__lh">오뚜기 고객상담실 : 080-000-0000</li>
        <li class="footer_info typo_content_small typo_content_small__lh">오뚜기라면 고객상담실 : 080-000-0000 (월~금 08:30~17:30)</li>
      </ul>
      <br>
      <p class="footer_info__copyright typo_content_small">Copyright ⓒ Yeji.Lee co.,Ltd All Rights Reserved.</p>
    </div>      
    <div class="m_validate_ok">
      <a target="_blank" href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Frahata.dothome.co.kr%2Fgotttugi&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=ko">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="올바른 CSS입니다!" />
      </a>
    </div>
  </div>      
</footer>

<div class="page_buttons">
  <a class="m_scroll_down hidden_text" href="#" data-locale="footer.scroll_down">
    스크롤아래로
    <div class="m_scroll_down__icon">마우스</div>
    <div class="m_scroll_down__circle hidden_text">동그라미</div>
  </a>
  <a class="m_back_to_top" href="#" data-locale="footer.back_to_top">
    <div class="m_back_to_top__icon">화살표</div>
    <div class="m_back_to_top__text">위로가기</div>
  </a>
</div>

<?php wp_footer(); ?>

</body>
</html>

