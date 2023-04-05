<?php /* Template_ 2.2.7 2022/05/18 15:57:32 /www/unpobby147_godomall_com/data/skin/front/moment/board/skin/default/list.html 000013439 */ ?>
<?php if($TPL_VAR["bdList"]["cfg"]["bdHeader"]&&!$TPL_VAR["inList"]){?>
<div class="addition_zone">
    <p><?php echo $TPL_VAR["bdList"]["cfg"]["bdHeader"]?></p>
</div>
<?php }?>
<div class="board_zone_sec">
<?php if(!$TPL_VAR["inList"]){?>
    <div class="board_zone_tit">
        <h2><?php echo __($TPL_VAR["bdList"]["cfg"]["bdNm"])?></h2>
    </div>
<?php }?>
    <div class="board_zone_cont">
        <div class="board_zone_list" align="<?php echo $TPL_VAR["bdList"]["cfg"]["bdAlign"]?>">
            <table class="board_list_table" <?php echo $TPL_VAR["bdList"]["cfg"]["bdWidthStyle"]?>>
                <colgroup>
                    <col style="width:6%">
<?php if($TPL_VAR["bdList"]["cfg"]["bdListImageFl"]=='y'){?>
                    <col>
<?php }?>
<?php if($TPL_VAR["bdList"]["cfg"]["bdCategoryFl"]=='y'){?>
                    <col style="width:10%">
<?php }?>
                    <col style="width:37%;">
                    <col style="width:12%">
                    <col style="width:7%">
                    <col style="width:15%">
<?php if($TPL_VAR["bdList"]["cfg"]["bdRecommendFl"]=='y'){?>
                    <col style="width:6%">
<?php }?>
<?php if($TPL_VAR["bdList"]["cfg"]["bdPcHitFl"]=='y'){?>
                    <col style="width:6%">
<?php }?>
                </colgroup>
                <thead>
                <tr>
                    <th><?php echo __('번호')?></th>
<?php if($TPL_VAR["bdList"]["cfg"]["bdListImageFl"]=='y'){?>
                    <th><?php echo __('이미지')?></th>
<?php }?>
<?php if($TPL_VAR["bdList"]["cfg"]["bdCategoryFl"]=='y'){?>
                    <th><?php echo __('말머리')?></th>
<?php }?>
                    <th><?php echo __('제목')?></th>
<?php if($TPL_VAR["bdList"]["cfg"]["bdGoodsPtFl"]=='y'){?>
                    <th><?php echo __('별점')?></th>
<?php }?>
                    <th><?php echo __('날짜')?></th>
                    <th><?php echo __('작성자')?></th>
<?php if($TPL_VAR["bdList"]["cfg"]["bdRecommendFl"]=='y'){?>
                    <th><?php echo __('추천')?></th>
<?php }?>
<?php if($TPL_VAR["bdList"]["cfg"]["bdPcHitFl"]=='y'){?>
                    <th><?php echo __('조회')?></th>
<?php }?>
                </tr>
                </thead>
                <tbody>
<?php if((is_array($TPL_R1=$TPL_VAR["bdList"]["noticeList"])&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?>
                <tr <?php echo $TPL_VAR["bdList"]["cfg"]["bdHeightStyle"]?>>
                    <td><img src="<?php echo $TPL_VAR["bdList"]["cfg"]["iconImage"]["notice"]["url"]?>" alt="<?php echo __('공지')?>"/></td>
<?php if($TPL_VAR["bdList"]["cfg"]["bdListImageFl"]=='y'){?>
                    <td>
<?php if($TPL_VAR["bdList"]["cfg"]["bdListNoticeImageDisplayPc"]=='y'){?>
                        <div class="board_img">
                            <a href="javascript:gd_btn_view('<?php echo $TPL_VAR["req"]["bdId"]?>',<?php echo $TPL_V1["sno"]?> , '<?php echo $TPL_V1["auth"]["view"]?>')">
                                <img src="<?php echo gd_isset($TPL_V1["viewListImage"],'/data/skin/front/moment/board/skin/default/img/etc/noimg.png')?>" width="<?php echo $TPL_VAR["bdList"]["cfg"]["bdListImgWidth"]?>" height="<?php echo $TPL_VAR["bdList"]["cfg"]["bdListImgHeight"]?>" class="js_image_load" alt="<?php echo $TPL_V1["imageTitle"]?>"/>
                            </a>
                        </div>
<?php }?>
                    </td>
<?php }?>
<?php if($TPL_VAR["bdList"]["cfg"]["bdCategoryFl"]=='y'){?>
                    <td> <?php if($TPL_V1["category"]){?>[<?php echo $TPL_V1["category"]?>]<?php }?> </td>
<?php }?>
                    <td class="board_tit">
                        <a href="javascript:gd_btn_view('<?php echo $TPL_VAR["req"]["bdId"]?>',<?php echo $TPL_V1["sno"]?> ,'<?php echo $TPL_V1["auth"]["view"]?>')">
                            <strong><?php echo $TPL_V1["subject"]?></strong>
<?php if($TPL_VAR["bdList"]["cfg"]["bdMemoFl"]=='y'&&$TPL_V1["memoCnt"]> 0){?>
                            <span>(<?php echo $TPL_V1["memoCnt"]?>)</span>
<?php }?>
                        </a>
                    </td>
<?php if($TPL_VAR["bdList"]["cfg"]["bdGoodsPtFl"]=='y'){?>
                    <td>
                        <span class="rating_star">
                            <span style="width:<?php echo $TPL_V1["goodsPtPer"]?>%;"><?php echo __('별 다섯개중 다섯개')?></span>
                        </span>
                    </td>
<?php }?>
                    <td> <?php echo $TPL_V1["regDate"]?> </td>
                    <td> <?php echo $TPL_V1["writer"]?> </td>
<?php if($TPL_VAR["bdList"]["cfg"]["bdRecommendFl"]=='y'){?>
                    <td> <?php echo $TPL_V1["recommend"]?> </td>
<?php }?>
<?php if($TPL_VAR["bdList"]["cfg"]["bdPcHitFl"]=='y'){?>
                    <td> <?php echo $TPL_V1["hit"]?> </td>
<?php }?>
                </tr>
<?php }}?>

<?php if($TPL_VAR["bdList"]["list"]){?>
<?php if((is_array($TPL_R1=$TPL_VAR["bdList"]["list"])&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?>
                <tr data-sno="<?php echo $TPL_V1["sno"]?>" data-auth="<?php echo $TPL_V1["auth"]["view"]?>" <?php echo $TPL_VAR["bdList"]["cfg"]["bdHeightStyle"]?>>
                    <td>
                        <?php echo $TPL_V1["articleListNo"]?>

                    </td>
<?php if($TPL_VAR["bdList"]["cfg"]["bdListImageFl"]=='y'){?>
                    <td>
                        <div class="board_img">
                            <a href="javascript:gd_btn_view('<?php echo $TPL_VAR["req"]["bdId"]?>',<?php echo $TPL_V1["sno"]?> , '<?php echo $TPL_V1["auth"]["view"]?>')">
                                <img src="<?php echo gd_isset($TPL_V1["viewListImage"],'/data/skin/front/moment/board/skin/default/img/etc/noimg.png')?>" width="<?php echo $TPL_VAR["bdList"]["cfg"]["bdListImgWidth"]?>" height="<?php echo $TPL_VAR["bdList"]["cfg"]["bdListImgHeight"]?>" class="js_image_load" alt="<?php echo $TPL_V1["imageTitle"]?>"/>
                            </a>
                        </div>
                    </td>
<?php }?>
<?php if($TPL_VAR["bdList"]["cfg"]["bdCategoryFl"]=='y'){?>
                    <td> <?php if($TPL_V1["category"]){?>[<?php echo $TPL_V1["category"]?>]<?php }?> </td>
<?php }?>
                    <td class="board_tit">
                        <?php echo $TPL_V1["gapReply"]?>

<?php if($TPL_V1["groupThread"]){?><img src="<?php echo $TPL_VAR["bdList"]["cfg"]["iconImage"]["re"]["url"]?>"alt="<?php echo __('답변')?>" style="padding:0 5px" /><?php }?>
                        <a href="javascript:gd_btn_view('<?php echo $TPL_VAR["req"]["bdId"]?>',<?php echo $TPL_V1["sno"]?> ,'<?php echo $TPL_V1["auth"]["view"]?>')" >
<?php if($TPL_V1["isSecret"]=='y'){?>
                            <img src="<?php echo $TPL_VAR["bdList"]["cfg"]["iconImage"]["secret"]["url"]?>" alt="<?php echo __('비밀글')?>" align=absmiddle>
<?php }?>
                            <strong><?php echo $TPL_V1["subject"]?></strong>
<?php if($TPL_VAR["bdList"]["cfg"]["bdMemoFl"]=='y'&&$TPL_V1["memoCnt"]> 0){?>
                            <span>(<?php echo $TPL_V1["memoCnt"]?>)</span>
<?php }?>
<?php if($TPL_V1["isFile"]=='y'){?>
                            <img src="<?php echo $TPL_VAR["bdList"]["cfg"]["iconImage"]["attach_file"]["url"]?>" alt="<?php echo __('파일첨부 있음')?>"/>
<?php }?>
<?php if($TPL_V1["isImage"]=='y'){?>
                            <img src="<?php echo $TPL_VAR["bdList"]["cfg"]["iconImage"]["attach_img"]["url"]?>" alt="<?php echo __('이미지첨부 있음')?>"/>
<?php }?>
<?php if($TPL_V1["isNew"]=='y'){?>
                            <img src="<?php echo $TPL_VAR["bdList"]["cfg"]["iconImage"]["new"]["url"]?>" alt="<?php echo __('신규 등록글')?>"/>
<?php }?>
<?php if($TPL_V1["isHot"]=='y'){?>
                            <img src="<?php echo $TPL_VAR["bdList"]["cfg"]["iconImage"]["hot"]["url"]?>" alt="<?php echo __('인기글')?>"/>
<?php }?>
                        </a>
                    </td>
<?php if($TPL_VAR["bdList"]["cfg"]["bdGoodsPtFl"]=='y'){?>
                    <td>
                        <span class="rating_star">
                            <span style="width:<?php echo $TPL_V1["goodsPtPer"]?>%;"><?php echo __('별 다섯개중 다섯개')?></span>
                        </span>
                    </td>
<?php }?>
                    <td> <?php echo $TPL_V1["regDate"]?> </td>
                    <td> <?php echo $TPL_V1["writer"]?> </td>
<?php if($TPL_VAR["bdList"]["cfg"]["bdRecommendFl"]=='y'){?>
                    <td> <?php echo $TPL_V1["recommend"]?> </td>
<?php }?>
<?php if($TPL_VAR["bdList"]["cfg"]["bdPcHitFl"]=='y'){?>
                    <td> <?php echo $TPL_V1["hit"]?> </td>
<?php }?>
                </tr>
<?php }}?>
<?php }else{?>
                <tr>
                    <td colspan="9" align="center">
                        <?php echo __('게시글이 존재하지 않습니다.')?>

                    </td>
                </tr>
<?php }?>

                </tbody>
            </table>


            <?php echo $TPL_VAR["bdList"]["pagination"]?>


            <!-- //pagination -->

            <div class="board_search_box">
                <form name="frmList" id="frmList" action="list.php" method="get">
                    <input type="hidden" name="bdId" value="<?php echo $TPL_VAR["bdList"]["cfg"]["bdId"]?>"/>
                    <input type="hidden" name="memNo" value="<?php echo $TPL_VAR["req"]["memNo"]?>"/>
                    <input type="hidden" name="noheader" value="<?php echo $TPL_VAR["req"]["noheader"]?>"/>
                    <input type="hidden" name="mypageFl" value="<?php echo $TPL_VAR["mypageFl"]?>"/>

<?php if($TPL_VAR["bdList"]["cfg"]["bdCategoryFl"]=='y'){?>
                    <?php echo gd_select_box('category','category',$TPL_VAR["bdList"]["cfg"]["arrCategory"],null,gd_isset($TPL_VAR["req"]["category"]),__('선택'),'style="width: 80px;"','chosen-select')?>

<?php }?>
                    <select class="chosen-select" name="searchField">
                        <option value="subject"
<?php if($TPL_VAR["req"]["searchField"]=='subject'){?>selected<?php }?> ><?php echo __('제목')?></option>
                        <option value="contents"
<?php if($TPL_VAR["req"]["searchField"]=='contents'){?>selected<?php }?> ><?php echo __('내용')?></option>
                        <option value="writerNm"
<?php if($TPL_VAR["req"]["searchField"]=='writerNm'){?>selected<?php }?> ><?php echo __('작성자')?></option>
                    </select>

                    <input type="text" class="text" name="searchWord" value="<?php echo $TPL_VAR["req"]["searchWord"]?>"/>
                    <button class="btn_board_search"><em><?php echo __('검색')?></em></button>
                </form>
            </div>
            <!-- //board_search_box -->

        </div>
        <!-- //board_zone_list -->

<?php if(!$TPL_VAR["inList"]&&$TPL_VAR["bdList"]["cfg"]["auth"]["write"]=='y'){?>
        <div class="btn_right_box">
            <button type="button" class="btn_write" onclick="gd_btn_write('<?php echo $TPL_VAR["req"]["bdId"]?>')"><strong><?php echo __('글쓰기')?></strong></button>
        </div>
<?php }?>

    </div>
    <!-- //board_zone_cont -->
</div>
<!-- //board_zone_sec -->
<?php if($TPL_VAR["bdList"]["cfg"]["bdFooter"]&&!$TPL_VAR["inList"]){?>
<div class="addition_zone">
    <p><?php echo $TPL_VAR["bdList"]["cfg"]["bdFooter"]?></p>
</div>
<?php }?>

<form id="frmWritePassword">
    <div id="lyPassword" class="dn layer_wrap password_layer" style="height: 226px">
        <div class="layer_wrap_cont">
            <div class="ly_tit">
                <h4><?php echo __('비밀번호 인증')?></h4>
            </div>
            <div class="ly_cont">
                <div class="scroll_box">
                    <p><?php echo __('비밀번호를 입력해 주세요.')?></p>
                    <input type="password" name="writerPw" class="text" />
                </div>
                <!-- // -->
                <div class="btn_center_box">
                    <button type="button" class="btn_ly_password js_submit"><strong><?php echo __('확인')?></strong></button>
                </div>
            </div>
            <!-- //ly_cont -->
            <a href="#close" class="ly_close layer_close"><img src="/data/skin/front/moment/img/common/layer/btn_layer_close.png" alt="<?php echo __('닫기')?>"></a>
        </div>
        <!-- //layer_wrap_cont -->
    </div>
    <!-- //layer_wrap -->
</form>

<div id="layerDim" class="dn">&nbsp;</div>
<script type="text/javascript" src="<?php echo PATH_SKIN?>js/gd_board_list.js" charset="utf-8"></script>
<script>
    $(document).ready(function () {
        $('img.js_image_load').error(function () {
            $(this).css('background', 'url("/data/skin/front/moment/board/skin/default/img/etc/noimg.png") no-repeat center center');
            $(this).attr('src', '/data/skin/front/moment/img/etc/blank.gif');
        })
            .each(function () {
                $(this).attr("src", $(this).attr("src"));
            })
    });
</script>