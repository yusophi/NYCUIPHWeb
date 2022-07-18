<?php
/*
 * Template Name: law
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>
<div class="pro_page">
    <div class="upper_instruction">
        <div class="black_circle1 black_circle"></div>
        <div class="black_circle2 black_circle"></div>
        <div id="title">
            <?php if($locale == "zh_TW"):?>
            <div id="ch_title">流行病學領域</div>
            <div id="en_title">Division of Epidemiology</div>
            <?php else: ?>
            <div id="en_title">Division of Epidemiology</div>
            <?php endif; ?>
        </div>
        <div id="instruction">
            <div class="instru_img_container"><img id="instru_img" src="<?php bloginfo('template_url') ?>/images/page_pro_division/law_key_vision.png"></div>
            <div id="instru_content">
                您好!我們是國立陽明大學公共衛生研究所的｢健康政策與法律」組 (Division of Health Policy and Law)。本組創立於2006年，是我國率先整合健康政策和醫療倫理與法律師資的研究所，旨在培育對健康政策與法律的研究及實踐，有理想及熱情的碩、博士。
                <br><br>
                健康政策與法律的研究和實踐，必須仰賴高度的專業整合，並深入議題的社會脈絡。有別於傳統的公衛或衛政，我們提供跨領域和多領域(inter- & multi-disciplinary)的健康政策與法律的整合課程。我們具備健康經濟、醫療倫理與法律、醫學、流行病學、健康人權、健康政策與管理、醫療史，和健康政策與政治之師資。我們與中研院、國家衛生研究院、以及國外如Johns Hopkins University、University of Michigan、Armstrong Institute for Patient Safety and Quality、Welch Center for Prevention, Epidemiology and Clinical Research，等相關研究機構交流和合作研究。我們很樂於教學，啟發學生，提供紮實的學科和方法學學習。有部分課程採全英文教學，可以與來自歐、美、亞、非的國際學生齊聚一堂，體驗多元文化學習，豐富您的國際視野。
                <br><br>
                我們熱切歡迎對健康政策與法律之研究和實踐，有興趣的新生代。無論您從事醫療照護、法務、衛生行政、醫療機構管理，或社會服務，都歡迎您在本組的專業領域中，發現未來發展的定位。
                <br><br>
                我們主要的研究領域包括：衛生政策制定與評估、病人人權、醫療糾紛、醫療法律、生命科技與倫理、組織策略管理、國際衛生援助、健康保險、醫療體系、醫療利用、病患與醫師行為、藥物流行病學、藥物或物質濫用、兒童與青少年心理衛生，婦幼衛生、醫療與社會，並透過下列架構圖結合教學、研究與實踐。
                <br><br><br>
                <div class="img_container"><img src="<?php bloginfo('template_url') ?>/images/page_pro_division/law_pic.png"></div>
                <!-- Milo: modification required -->
                <br><br>
                我們的畢業生，出路很廣，如出國進修、擔任教職、於醫院、衛生行政機關、法務機構、藥廠，及非營利組織服務等。我們整理一些常被詢問的問題如下，希望對你有所幫助：
                <br><br>
                Q1：我想唸健康政策與法律，可是我沒有醫學、流行病學，或是公共衛生的背景，我適合讀這個所嗎?
                <br><br>
                A1：別擔心，很多我們的學生也沒有醫學或公共衛生的背景，我們的教學專業且活潑有趣，我們有完善的學生學習輔導，協助你學習你想學到的領域。
                <br><br>
                Q2：健康政策與法律畢業後的就業與出路為何?
                <br><br>
                A2：我們的畢業生，出路很廣，如出國進修、擔任教職、於醫院、衛生行政機關、法務機構、藥廠，及非營利組織服務等。
                <br><br>
                Q3：我還是不確定政策與法律領域是否適合我?
                <br><br>
                A3：請參考我們的<a href="">招生對象</a>或是進行<a href="">個人化線上招生測驗</a>
                <br><br>
                本領域相關資訊請點選此<a href="">連結</a>
            </div>
        </div>
    </div>
    <div id="divider"></div>
    <div id="divider_components">
        <div class="small_black_circle"></div>
        <div class="down_arrow"></div>
        <div class="section_indicator">s0</div>
    </div>
    <div class="pro_buttons">
        <div id="pro_classes_btn" class="pro_btn animation1_btn checked">領域課程</div>
        <div id="pro_teachers_btn" class="pro_btn animation1_btn">領域師資</div>
        <div id="pro_thoughts_btn" class="pro_btn animation1_btn">校友的話</div>
    </div>
    <div id="changing_content"></div>
    <?php get_template_part( 'template-parts/backtoTOP');?>
</div>

<div class="data invisible">
    <div id="classes_data">
        <div class="ls_segment changing_animation">
            <div class="std_clss">
                <div class="std_cls">碩士班</div>
                <div class="std_cls">博士班</div>
            </div>
            <div class="bubbles">
                <img src="<?php bloginfo('template_url') ?>/images/page_pro_division/bubble_right.png">
                <img src="<?php bloginfo('template_url') ?>/images/page_pro_division/bubble_left.png">
            </div>
            <div class="column_2_ls">
                <div class="ls_logo">必修<br>課程</div>
                <div class="ls_content_container">
                    <div class="ls_content">
                        流行病學原理或流行病學概論<br>
                        生物統計學<br>
                        經濟分析<br>
                        公衛倫理與法律<br>
                        醫療照護研究<br>
                        健康政法實證討論<br>
                    </div>
                </div>
                <div class="ls_content_container">
                    <div class="ls_content">
                        流行病學方法<br>
                        生物統計學<br>
                        生物統計模式與資料分析<br>
                        健康政法實證討論<br>
                        進階流行學實證討論或政法分析實作<br>
                    </div>
                </div>
            </div>
            <div class="column_2_ls" id="law_required_ls">
                <div class="ls_logo">選修<br>課程</div>
                <div class="ls_content_container">
                    <div class="ls_content">
                        <div class="ls_title">方法學類</div>
                        流行病學方法<br>
                        流行病學原理<br>
                        流行病學概論<br>
                        法學研究方法與寫作<br>
                        健康調查方法學<br>
                        健康政策計量分析<br>
                        系統性文獻回顧與統合分析<br>
                        空間流行病學<br>
                        <div class="ls_notes">*或經指導教授同意之方法學類科目。</div>
                        <div class="ls_title">政經法學類</div>
                        健康經濟學<br>
                        健康照護與法律<br>
                        社會正義與人權<br>
                        全球衛生概論<br>
                        <div class="ls_notes">*或經指導教授同意之方法學類科目。</div>
                        <div class="ls_title">政策議題類</div>
                        衛生政策實例<br>
                        制度與合作<br>
                        ／醫療制度與行為<br>
                        生命科技法律與倫理<br>
                        醫療糾紛專題<br>
                        比較醫療照護體系（英）<br>
                        ／醫療體系議題研討（中）<br>
                        當代醫療的社會研究<br>
                        物質使用與公共衛生<br>
                        心理衛生流行病學<br>
                        <div class="ls_notes btm_margined">*或經指導教授同意之方法學類科目。</div>
                    </div>
                </div>
                <div class="ls_content_container">
                    <div class="ls_content btm_padding">
                        <div class="ls_title">政法研究方法學類</div>
                        健康調查方法學<br>
                        法學研究方法與寫作<br>
                        健康政策計量分析<br>
                        系統性文獻回顧與統合分析<br>
                        空間流行病學<br>
                        <div class="ls_notes">*或經指導教授同意之方法學類科目。</div>
                        <div class="ls_title">政法理論類</div>
                        健康照護與法律<br>
                        公衛倫理與法律<br>
                        健康經濟學<br>
                        社會正義與人權<br>
                        健康行為促進<br>
                        當代醫療的社會研究<br>
                    </div>
                </div>
            </div>
            <div class="ls_instru">
                <div class="info_img_container"><img src="<?php bloginfo('template_url') ?>/images/page_pro_division/info.png"></div>
                <div class="ls_instru_text">
                    詳細課程資料請參看 <a href="#">公衛所學期課表</a><br>
                    —<br>
                    台灣聯大（陽清交央）相關系所選修課程：視同校內選修不受校外修課學分比例限制<br>
                    —<br>
                    跨領域選修課程<br>
                    <br>
                    由論文或課程指導教授依學生背景及研究方向輔導選修；請參考公衛所政策與法律，生物統計，國際衛生學程等領域課程。
                </div>
            </div>
        </div>
    </div>
    <div id="teachers_data"></div>
    <div id="thoughts_data">
        <div class="tgh_segment changing_animation">
            <div class="tgh_title">杜芸珮 【2010年公衛所政法組畢】</div>
            <br>
            <div class="tgh_passage">
                2008年我從台北大學法律系財經法組畢業後，選擇了一條與其他法律人不同的路，我來到了陽明大學公共衛生研究所，但我並沒有放棄一直以來對國際法的喜好，試圖將公共衛生與國際法結合，現正就讀位於美國西雅圖的華盛頓大學，且計畫繼續攻讀健康法博士學位。
                如果我沒有選擇念陽明公衛所，我不會有現在的學經歷，更不會立定志向。非常喜歡在楊秀儀老師身邊學習知識的時光，不只是醫療與法律學術本身，也讓我更認識我自己，訓練我的研究技能、也訓練自我規律的態度；雷文玫老師教授憲法與行政法，課程相當豐富有趣，沒有學過法律的同學，透過老師的帶領，也能順利的走進權力與權利的公法領域；另外黃心苑老師的研究方法課程，給予我找尋研究資料與科學寫作的能力；邱淑媞老師的慢性病防治課程，讓我對於健康政策的擬定相當有興趣，我很幸運在畢業後到政府機關工作兩年，主要做公共衛生、青年與國際議題分析，正好與邱老師有合作的機會，深刻體會老師上課的內容就是實際運作的經驗淬取；最後是郭文華老師公共衛生歷史的課程，對我啟發甚大，引領我從歷史層面思考公共衛生與法律的結合。
                陽明大學公共衛生研究所，很值得你來一試，總是會有讀書壓力的辛苦，但會在辛苦過後，人生的路更廣，享受甘甜與收穫。
            </div>
            <div class="tgh_title top_mr">
                黃馨慧【政策與法律領域碩士班畢業】
            </div>
            <br>
            <div class="tgh_passage">
                「浸泡與試誤」，兩年前新生座談會師長們的一席話，使我在陽明公衛所的生活充實，裝載著不同於他人的行囊…
                大家好，我是畢業於陽明大學公共衛生研究所政策與法律領域的黃馨慧，大學就讀於長庚大學醫務管理學系，幸運的應屆考上陽明公衛所，由白紙一張展開兩年碩士班的學習。
                陽明公衛所這個大家庭，每位同學都來自不同領域，尤其政策與法律領域的同學有律師、法官、醫護人員及公衛醫管等背景，若你也同樣身為未有工作經驗的一般生，請不要畏懼四周的在職生前輩們，只要肯花時間努力學習，勇於嘗試不怕挫折，絕對不會遜色於他人，且藉由與不同領域同學相互切磋，除了拓展視野之外，思考也能更加全面。
                碩士班的學習，學生本身主動積極的學習十分的重要，除此之外，良師們更是不可或缺的條件之一，而陽明公衛所每位教授都非常樂於將所學教導予學生，且不吝與學生分享、討論研究與生活，我很幸運的獲得兩位老師指導，老師每週固定撥冗與我討論研究，耐心指導我；想到與我研究相關的問題時，隨時與我討論；當我遇到挫折時，也不斷鼓勵、支持我繼續加油，是我在寫論文時的最大動力來源。而老師更鼓勵我們參與各項課外活動，期望我們在繁重的課業之餘，仍能為生活增添色彩。
                我想，進入研究所並不只是為了一張高學歷的文憑，在陽明公衛所，我與不同背景的同學熟識、瞭解研究結果的難能可貴、更訓練自己勇於挑戰新事物。若時光倒轉回到兩年前，我仍會做出相同的選擇，選擇陽明公衛所，這兩年，雖是學習生涯中最短的時光，但我的行囊卻是裝載最多的，感謝我親愛的老師及同學們，感謝陽明公衛所！
            </div>
            <div class="tgh_title top_mr">
                劉汗曦【政法組博班在學生】
            </div>
            <br>
            <div class="tgh_passage">
                我是劉汗曦，台大法律系及政大法研所畢業，現正展開第五年執業律師生涯，但我另一個身份是陽明公衛所政法組博士班二年級學生。
                黃茂榮大法官在法學院教授課程時，很喜歡分享他的人生智慧。畢業多年後，債總、債各可能早就還給老師，但那些字字珠璣卻長存心中。其中我特別記得老師總是苦口婆心的勸同學，不要太早把自己化成新台幣，應該要選定一個主題潛心研究個十年，把各種大大小小相關的問題都弄清楚。
                執業五年、工作七年，深深認同黃老師這些話的份量與重要。在這個學歷貶值、經濟不景氣、醫院五大皆空、律師每年錄取千人的現代。唯有興趣結合專業所形成的志業，才能站穩腳步、因應外界環境的快速改變。
                如果您是法律從業人員，想增添醫療、公衛、生技領域的知識與能力，以與周遭越來越壯大卻沒有區別的隊伍有所區別，歡迎考慮本所；如果您是醫療從業人員，想瞭解法律、倫理、規範的管制與應用，退則保護自己與同僚，進則改善環境與制度，歡迎考慮本所；如果您是應屆畢業學生，沒有比這個地方更神奇地讓你與執業多年的資深醫師、護理師、律師、法官、檢察官共聚一堂，深入討論每個有趣的社會議題；如果您想轉換跑道社會人士，這裡優秀且多元的師資，濃厚的學術氣息並紮實的專業訓練，醫與法領域各有專精的同學與學長姐，絕對是您踏入新領域的最好助力與指引。陽明公衛所政法組，歡迎大家來報考！
            </div>

            <div class="tgh_title top_mr">
                近五年資統組碩士班校友流向
            </div>
            <div class="img_container layerd"><img src="<?php bloginfo('template_url') ?>/images/page_pro_division/law_graph.png"></div>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/pro_division.js"></script>
<?php get_footer(); ?>