<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>中工南科</title>
    <link rel="stylesheet" type="text/css" href="/css/swiper.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/index.css"/>

    <script type="text/javascript" src="/js/swiper.min.js"></script>
    <script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
</head>
<body>
<!-- 头部 -->
<div class="header wrap clearfix">
    <div class="logo">
        <img src="/images/logo.png" alt=""/>
    </div>
    <ul class="nav">
        <li><a href="#">首页</a></li>
        <li><a href="#CompanyProfile">公司简介</a></li>
        <li><a href="#ProductCenter">产品中心</a></li>
        <li><a href="#VideoCenter">视频中心</a></li>
        <li><a href="#IndustryAnalysis">行业分析</a></li>
        <li><a href="#News">新闻资讯</a></li>
        <li class="nav-last"><a href="#ContactUs">联系我们</a></li>
    </ul>
    <div class="nav-r">
        <img src="/images/navR.png" alt=""/>
    </div>
</div>

<!-- banner -->
<div class="banner"></div>

<!-- 公司简介 -->
<div class="main01 wrap clearfix" id="CompanyProfile">
    <div class="main01-l fl">
        <img src="/images/img1.png" alt=""/>
    </div>
    <div class="main01-r fl">
        <h3>公司简介</h3>
        <span class="main01-r-e">ABOUT US</span>
        <p>
            湖北中工南科智能机械有限公司（以下简称中工南科），集科研、生产、销售于一体，先后引进欧美先进技术和工艺，率先研发制造环保矿山机械产品——制砂机，产品品类型号丰富，可根据客户需求量身定制，力求替客户高效解决制砂作业问题。</p>
        <p>中工南科背靠稳立行业40多年的实力雄厚总部.....</p>
        <a href="javascript:;" class="main01-r-more" id="main01-r-more">MORE</a>
    </div>
</div>
<!-- 弹出蒙版 -->
<div class="dask-opac hide"></div>
<div class="dask-team hide">
    <span class="team-colse ico"></span>
    <div class="tit">
        <h5>公司简介</h5>
    </div>
    <div class="dask-remark">
        <p>
            湖北中工南科智能机械有限公司（以下简称中工南科），集科研、生产、销售于一体，先后引进欧美先进技术和工艺，率先研发制造环保矿山机械产品——制砂机，产品品类型号丰富，可根据客户需求量身定制，力求替客户高效解决制砂作业问题。</p>
        <p>
            中工南科背靠稳立行业40多年的实力雄厚总部——湖北中工南方科技有限公司（原湖北南方煤矿机械厂），公司占地面积200余亩，其中厂房面积30000多平方米，设备齐全，有完善的机械加工和检测能力，并具有较强的产品设计、制造及研发能力，是国家安全生产监督管理局《煤矿矿用产品安全标志证书》认证企业。公司产品均已通过
            ISO900l质量体系认证，并全部通过国家安全生产矿用设备检测检验中心的检测验收，荣登国家安监局《中华安全榜》，产品行销全国20多个省（市）、自治区，并出口到东南亚等国家。</p>
        <p>
            中工南科顺应国家环境政策，将主力放在各类型制砂机、破碎机及传输带等配套系统设备的研发生产上，致力于为行业带来高效、节能、环保的制砂设备。我公司以“重诚守信、质量第一”为企业宗旨，努力把企业做强、做精、做优，竭诚为广大用户提供优质的产品和服务。</p>
    </div>
</div>


<!-- 企业荣誉 -->
<div class="main02bg">
    <div class="main02 wrap clearfix">
        <div class="main02-hd">
            <img src="/images/main02H.png" alt=""/>
            <h3>企业荣誉</h3>
            <img src="/images/main02H.png" alt=""/>
            <span class="main02-hd-e">ENTERPRISE HONOR</span>
        </div>
        <div class="main02-bd">
            <ul class="clearfix">
                <li><img src="/images/img2.png" alt=""/></li>
                <li><img src="/images/img3.png" alt=""/></li>
                <li><img src="/images/img4.png" alt=""/></li>
                <li><img src="/images/img5.png" alt=""/></li>
                <li><img src="/images/img6.png" alt=""/></li>
                <li><img src="/images/img6.png" alt=""/></li>
                <li><img src="/images/img6.png" alt=""/></li>
                <li><img src="/images/img6.png" alt=""/></li>
            </ul>
        </div>
    </div>
</div>

<!-- 产品中心 -->
<div class="main03bg" id="ProductCenter">
    <div class="main03 wrap clearfix">
        <div class="main03-hd">
            <img src="/images/main03H.png" alt=""/>
            <h3>产品中心</h3>
            <img src="/images/main03H.png" alt=""/>
        </div>
        <div class="main03-bd">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($products as $value) { ?>
                        <div class="swiper-slide">
                            <img src="<?= $value['image'] ?>" alt=""/>
                            <span class="main03-bd-title"><?= $value['name'] ?></span>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<!-- 视频中心 -->
<div class="main04 wrap clearfix" id="VideoCenter">
    <div class="main04-l fl">

    </div>
    <div class="main04-r fl">
        <span class="main04-r-bg"></span>
        <ul>
            <li class="main04-r-first">
                <a href="#">
                    视频中心
                    <span class="main04-e">VIDEO</span>
                </a>
            </li>
            <li><a href="#">宣传视频</a></li>
            <li><a href="#">产品视频</a></li>
            <li class="main04-r-last"><a href="#">应用视频</a></li>
        </ul>
    </div>
</div>

<!-- 行业分析 -->
<div class="main05 wrap clearfix" id="IndustryAnalysis">
    <div class="main05-hd">
        <img src="/images/main02H.png" alt=""/>
        <h3>行业分析</h3>
        <img src="/images/main02H.png" alt=""/>
        <span class="main05-hd-e">INDUSTRY ANALYSIS</span>
    </div>
    <div class="main05-bd">
        <ul class="clearfix">
            <li>
                <div class="main05-li-txt">
                    <h3>国家政策</h3>
                    <em></em>
                    <span>限挖河沙 限开采天然砂</span>
                    <p>国家政策明令限制挖河沙及开采天然砂，但全国建筑工程量极大，天然砂作为建筑行业混凝土的主要配料，不可或缺，目前，砂石市场供不应求。</p>
                </div>
                <div class="main05-li-img">
                    <img src="/images/img10.png" alt=""/>
                </div>
            </li>
            <li class="main05-bd-li02">
                <div class="main05-li-img">
                    <img src="/images/img11.png" alt=""/>
                </div>
                <div class="main05-li-txt">
                    <h3>制砂商机</h3>
                    <em></em>
                    <span>人工制砂难度大 效率低</span>
                    <p>由于国家政策的限制和人工制砂难度大，制砂机凭借应用性广，可破碎石料种类多，机械化程度高，制砂效率高等多项优点突围而出，成为制砂行业先锋。</p>
                </div>
            </li>
            <li class="main05-bd-li03">
                <div class="main05-li-txt">
                    <h3>中工南科制砂机</h3>
                    <em></em>
                    <span>可移动 制砂量大 制砂成本低 </span>
                    <p>中工南科移动制砂机，设备精良、运行不卡顿、破碎比大、产能巨大、经久耐用。一体化智能操作，可破碎超过200种石料，广泛应用于建筑、矿山、煤矿等数十个行业。</p>
                </div>
                <div class="main05-li-img">
                    <img src="/images/img12.png" alt=""/>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- 新闻资讯 -->
<div class="main06bg" id="News">
    <div class="main06 wrap">
        <div class="main06-hd">
            <h3>新闻资讯</h3>
            <span class="main06-e">/ NEWS</span>
        </div>
        <div class="main06-bd">
            <ul>
                <?php foreach ($news as $item) { ?>
                    <li><a href="#"><?= $item->title ?></a></li>
                <?php } ?>
            </ul>
            <a href="#" class="main01-r-more">MORE</a>
        </div>
    </div>
    <div class="main06-r">
        <img src="/images/img13.png" alt=""/>
    </div>
</div>

<!-- 欢迎 -->
<div class="main07bg"></div>
<div class="main08bg" id="ContactUs">
    <iframe src="/map/map.html" width="100%" height="570px" frameborder="0" scrolling="no"></iframe>
</div>

<!-- 底部 -->
<div class="footerbg">
    <div class="footer">
        <div class="footer-top wrap clearfix">
            <div class="footer-top-l fl">
                <img src="/images/logoft.png" alt=""/>
            </div>
            <div class="footer-top-m fl">
                <span>中工南科智能机械有限公司</span>
                <p>湖北省鄂州市鄂城区樊川大道13号</p>
            </div>
            <div class="footer-top-r fr">
                <img src="/images/ftR.png" alt=""/>
            </div>
        </div>
    </div>
    <p class="footer-copy">中工南科智能机械有限公司 版权所有 2019 粤ICP备1111111111号</p>
</div>


</body>
</html>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        autoplay: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#main01-r-more").on("click", function () {
            $(".dask-opac").removeClass("hide");
            $(".dask-team").removeClass("hide");
        });
        $(".team-colse").on("click", function () {
            $(".dask-opac").addClass("hide");
            $(".dask-team").addClass("hide");
        });
    })
</script>