<div class="topBanner">
    <div class="wrap clearfix">
        <div class="banner-board">
            <div class="recommend_list">
                <div>
                    <span>GS인증 1등급</span>
                    <a href=""><span>자세히보기</span></a>
                </div>
                <div>
                    <span>신SW상품대상 수상</span>
                    <a href="https://itnbasic.com/?uid=70&mod=document&page_id=43" target="_blank"><span>자세히보기</span></a>
                </div>
            </div>
            <script>
                $('.recommend_list').slick({
                    vertical: true,
                    speed: 1400,
                    autoplay: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    verticalSwiping: true,
                });
            </script>
        </div>

        <form class="ng-pristine ng-valid">
            <fieldset>
                <legend class="blind">오늘 하루 열지않기</legend>
                <span class="today-check">
                  <input type="checkbox" id="check_today_close" title="오늘 하루 열지않기 체크"><label for="check_today_close">오늘 하루 열지않기</label>
             </span>
                <button class="btn-mainbanner-close" ng-click="event.closePop();">배너 닫기</button>
            </fieldset>
        </form>
    </div>
</div>
