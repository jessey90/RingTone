<div id="popup_content">
    <div class="popup-header">
        <h2>Nhạc chờ</h2>
        <a class="close_popup" href="javascript:void(0)"></a>
    </div>
    <div class="contentwrapper">
        <div class="contentcolumn1">
            <div class="innertube">
                <div class="song_info">
                    <div class="song_name">
                        <?php echo $song->name; ?>
                    </div>
                    <div class="song_artist">
                        <?php
                        $artist = Artist::model()->findbypk($song->artist);
                        echo $artist->name;
                        ?>
                    </div>
                    <div class="song_download">
                        <img src="images/luot_nghe.png" alt="">
                        <?php echo $song->view ?>
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
            <source src="horse.ogg" type="audio/ogg">
            <source src="<?php echo $song->file_offline?>">
            Trình duyệt của bạn không hỗ trợ định dạng audio này.
        </audio>
    </div>
    <div class="info_popup" style="text-align:left;font-weight:bold;font-size:13px;line-height:15px">
        Soạn Tin:  <font color="red"><?php echo $song->code;?></font> gửi <font color="blue">1221(mạng Viettel)</font></br></br>
        <div class="btn_setup" style="font-size:13px">Bạn chưa đăng ký? <input type="button" style="margin-top:0px;" value="Đăng ký"/></div>
    </div>
</div>