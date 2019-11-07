<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<input class="searchInput" type="text" value="so so" name="s" id="s"/>
<input class="search-btn" type="submit" value="" onClick="if(document.forms['search'].searchinput.value=='- Search -')document.forms['search'].searchinput.value='';" alt="Search" />
</form>
<script type="text/javascript">
$(document).ready(function(){
// 当鼠标聚焦在搜索框
$('#s').focus(
function() {
if($(this).val() == 'so') {
$(this).val('').css({color:"#454545"});
}
}
// 当鼠标在搜索框失去焦点
).blur(
function(){
if($(this).val() == '') {
$(this).val('so字').css({color:"#333333"});
}
}
);
});
</script>