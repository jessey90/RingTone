<div id="page" xmlns="http://www.w3.org/1999/html">
    <div id="header">
        <img src="../images/logo.png" alt="Hay ghe">
    </div>
    <div class="nav">
        <div id="navigator">
            <div id="contentcolumn">
                <input type="text" name="s" value="Tìm kiếm" onclick="if(this.value=='Tìm kiếm'){this.value=''}" onblur="if(this.value==''){this.value='Tìm kiếm'}">

            </div>
        </div>
        <div id="leftcolumn">
            <div class="innertube">
                <div class="btn_cat">
                    <div class="pages">
                        <ul>
                            <a class="showMenu" href="#menu"><img src="../images/button1.png" alt="" style="width:70%"></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="rightcolumn">
            <div class="innertube">
                <input type="submit" class="btn_search">Tìm kiếm</input>
            </div>
        </div>
    </div>
    <div id="filter">
        <ul>
            <li class="chia3" id="new_songs"><a href="#" data-target="new">Mới nhất</a></li>
            <li class="chia3" id="hot_songs"><a href="#" data-target="hot" class="active">Tải nhiều</a></li>
            <li class="chia3" id="type"><a href="#" data-target="download">Thể loại</a></li>
        </ul>
    </div>
    <div id="wrapper">
        <!-- Start Looping -->
        <?php foreach($song as $var){?>
        <div class="item">
            <div class="contentwrapper">
                <div class="contentcolumn1">
                    <div class="innertube">
                        <div class="song_info">
                            <a class="various fancybox.iframe" href="http://nhaccho.hayghe88.net/detail?id=<?php echo $var->ID;?>" style="color: #000000;">
                                <div class="song_name" name="open_popup" rel="webPopup" href="#popup_content" data-id="<?php echo $var->ID;?>">
                                    <?php echo $var->name; ?>
                                </div>
                            </a>
                            <div class="song_artist">
                                <?php
                                $artist = Artist::model()->findbypk($var->artist);
                                echo $artist->name;
                                ?>

                            </div>
                            <div class="song_download">
                                <img src="../images/luot_nghe.png" alt="">
                                <?php echo $var->view ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leftcolumn1">
                <div class="innertube">
                    <div class="song_image">
                        <img src="../images/note.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="rightcolumn1">
                <div class="song_setringtune">
                    <div class="btn_setup">
                        <input type="button" name="open_popup" rel="webPopup" href="#popup_content" value="Cài nhạc chờ"/>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- End Looping -->
    </div>
    <nav id="menu">
        <div class="cat_title">
            Dòng nhạc
        </div>
        <ul>
            <li><a href="#home" class="contentLink">Nhạc Trịnh</a></li>
            <li><a href="#home" class="contentLink">Nhạc Cách Mạng</a></li>
            <li><a href="#home" class="contentLink">Nhạc Tiền Chiến</a></li>
        </ul>
    </nav>
</div>
<div id="popup_content" class="popup">
    <div class="popup-header">
        <h2>Nhạc chờ</h2>
        <a class="close_popup" href="javascript:void(0)"></a>
    </div>
    <div class="contentwrapper">
        <div class="contentcolumn1">
            <div class="innertube">
                <div class="song_info">
                    <div class="song_name">
                        <?php echo "Vị ngọt đôi môi"; ?>
                    </div>
                    <div class="song_artist">
                        <?php echo "Quang Dũng"; ?>
                    </div>
                    <div class="song_download">
                        <img src="../images/luot_nghe.png" alt="">
                        <?php echo "300"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="leftcolumn1">
        <div class="innertube">
            <div class="song_image">
                <img src="images/note.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="rightcolumn1">
        <div class="song_setringtune">
            <div class="btn_setup">
                <input type="button" name="open_popup" rel="webPopup" href="#popup_content" value="Cài nhạc chờ"/>
            </div>
        </div>
    </div>
    <div class="info_popup">
        <audio controls style="width: 80%;
margin-top: 20px;">
            <script type="text/javascript">console.log(target);</script>
            <source src="horse.ogg" type="audio/ogg">
            <source src="http://imedia.imuzik.com.vn/Resources/Data/CRBT/601/661/0/0000/0015/205.mp3" type="audio/mpeg">
            Trình duyệt của bạn không hỗ trợ định dạng audio này.
        </audio>
    </div>
    <div class="info_popup" style="text-align:left;font-weight:bold;font-size:13px;line-height:15px">
        Soạn Tin:  <font color="red">BH 66115205</font> gửi <font color="blue">1221(mạng Viettel)</font></br></br>
        <div class="btn_setup" style="font-size:13px">Bạn chưa đăng ký? <input type="button" style="margin-top:0px;" value="Đăng ký"/></div>
    </div>
</div>
