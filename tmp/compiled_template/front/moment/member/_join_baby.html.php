<?php /* Template_ 2.2.7 2023/03/07 13:42:27 /www/unpobby147_godomall_com/data/skin/front/moment/member/_join_baby.html 000006211 */ 
if (is_array($TPL_VAR["diseaseCd"])) $TPL_diseaseCd_1=count($TPL_VAR["diseaseCd"]); else if (is_object($TPL_VAR["diseaseCd"]) && in_array("Countable", class_implements($TPL_VAR["diseaseCd"]))) $TPL_diseaseCd_1=$TPL_VAR["diseaseCd"]->count();else $TPL_diseaseCd_1=0;
if (is_array($TPL_VAR["allergyCd"])) $TPL_allergyCd_1=count($TPL_VAR["allergyCd"]); else if (is_object($TPL_VAR["allergyCd"]) && in_array("Countable", class_implements($TPL_VAR["allergyCd"]))) $TPL_allergyCd_1=$TPL_VAR["allergyCd"]->count();else $TPL_allergyCd_1=0;?>
<div class="base_info_box">
	<h3><?php echo __('아기 정보 관리')?> <i style="cursor: pointer" class="tool_tip">?</i> </h3> 
	<div class="tool_wrap" style="width:350px;">
		<h2>아기 정보 관리</h2>
		<p>아기 정보를 입력하시면 정기 배송 및 상담시<br>우리 아이에게 맞는 정보를 알려드리며 해당 월령에 맞는 <br>이벤트를 진행시 우선적으로 알림이 갑니다. </p>
		<a href="#;" class="tool_tip_close">닫기</a>
	</div><!-- // tool_wrap -->

	<div class="base_info_sec">
		<table border="0" cellpadding="0" cellspacing="0" class="baby_write_table">
			<colgroup>
				<col width="220px">
				<col />			   
				<col width="220px">
			</colgroup>
            <tbody>
				<tr>
					<th><span><?php echo __('아이이름')?></span></th>
					<td>
						<div><input type="text" id="b_name" name="b_name"></div>
					</td>
					<td class="pic"><?php echo __('아기 사진')?></td>	
				</tr>
				<tr>
					<th><span><?php echo __('성별')?></span></th>
					<td class="td_rdo"> 
						<label class="radio_n"><input type="radio" class="b_sexFl" name="b_sexFl" value="m" <?php echo $TPL_VAR["checked"]['b_sexFl']['m']?> ><i></i>남자</label>
						<label class="radio_n"><input type="radio" class="b_sexFl" name="b_sexFl" value="w" <?php echo $TPL_VAR["checked"]['b_sexFl']['w']?> ><i></i>여자</label>
					</td> 
					<td class="pic_con" rowspan="5">
						<div class="thumb">
							<span><img src="/data/skin/front/moment/img/new/baby_profile_blank.gif" id="b_img_view"></span>
						</div>
						<div class="btn_upfile mt20">
							<span>사진찾기</span>
							<input type="file" id="b_img" name="b_img" class="btn_upfile">
						</div>
					</td>	
				</tr>
				<tr>
					<th><span><?php echo __('생년월일')?></span></th>
					<td>
                                            <input type="text" name="b_birthday" class="b_birthday anniversary js_datepicker inp_date w200" value="<?php echo $TPL_VAR["babyData"]["b_birthday"]?>" >
					</td>  
				</tr>   
				<tr>
					<th><span><?php echo __('키')?></span></th>
					<td>
                                            <input type="text" class="b_height w200" name="b_height" value="<?php echo $TPL_VAR["babyData"]["b_height"]?>" /> cm
					</td>  
				</tr>   
				<tr>
					<th><span><?php echo __('몸무게')?></span></th>
					<td>
						<input type="text" class="b_weight w200" name="b_weight" value="<?php echo $TPL_VAR["babyData"]["b_weight"]?>" /> kg
					</td>  
				</tr>
				<tr>
					<th><span><?php echo __('유병정보 및 알레르기 정보')?></span></th>
					<td class="td_disease">
						<div>
<?php if($TPL_diseaseCd_1){foreach($TPL_VAR["diseaseCd"] as $TPL_V1){?>
								<label class="checkbox_btn"><input type="checkbox" class="b_disease" name="b_disease[]" value="<?php echo $TPL_V1["itemCd"]?>" <?php echo $TPL_VAR["checked"]['disease'][$TPL_V1["itemCd"]]?>><i></i><span><?php echo $TPL_V1["itemNm"]?></span></label>
<?php }}?>
						</div> 
						<div class="mt10">
<?php if($TPL_allergyCd_1){foreach($TPL_VAR["allergyCd"] as $TPL_V1){?>
								<label class="checkbox_btn"><input type="checkbox" class="b_allergy" name="b_allergy[]" value="<?php echo $TPL_V1["itemCd"]?>" <?php echo $TPL_VAR["checked"]['allergy'][$TPL_V1["itemCd"]]?> ><i></i><span><?php echo $TPL_V1["itemNm"]?></span></label>
<?php }}?>
						</div>
						<div class="mt10">알레르기 정보는 3개까지 선택 가능하며, 추가 알레르기 체크는 정기 식단 주문 시 추가 선택 가능합니다. 선택하신 알레르기 정보는 이유식 식단 주문 시 반영됩니다.</div>
					</td>  
				</tr>
			</tbody>
		</table>
	</div>
</div>

<!-- 아기정보의 알레르기 체크를 너무 많이 할 경우 문제 발생하여 3개까지로 제한 20.09.07. 진회-->
<script type="text/javascript">
    $(document).ready(function(){
    $(".b_allergy").on("click", function(){
    var count = $("input:checked[type='checkbox']").length;

    if(count > 3){
        $(this).attr("checked", false);
        alert("알레르기 정보는 3개까지 선택 가능합니다.");
    }
    })
    })
</script>

<script type="text/javascript">
    <!--
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#b_img_view').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#b_img").change(function() {
        readURL(this);
    });


	$(function(){
		// 인풋박스 선택 이벤트
        if ($('.js_datepicker').length) {
			var today = new Date();
			var minDate = new Date();
			minDate.setDate(today.getDate() - 365);
			minDate = new Date(minDate.getFullYear(), minDate.getMonth(), minDate.getDate());
			
			$('.js_datepicker').datetimepicker({
				locale: 'ko',
				format: 'YYYY-MM-DD',
				dayViewHeaderFormat: 'YYYY MM',
				viewMode: 'days',
				ignoreReadonly: true,
				debug: false,
				keepOpen: false,
				maxDate: today,
                //minDate: minDate
			});
		}
	});

	$(document).ready(function(){
        $('.tool_tip').click(function(){
            if( !$(this).parent().siblings().hasClass('on') ) {
                $(this).parent().siblings().addClass('on');
            }else{
                $(this).parent().siblings().removeClass('on');
            }
        });

		$('.tool_tip_close').click(function() {
			$(this).parent().removeClass('on');
		});

    });
    //-->
</script>