<div class='main-menu-wrapper'>
<div class='main-menu'>
<ul>
	<li class='first-item home'><div class='inner'><a href='<?=g::url()?>'>홈</a></div></li>
	<?="<li><div class='inner'><div class='border_left'></div>" . implode( "</div></li><li><div class='inner'><div class='border_left'></div>", x::menu_links() ) . "</div></li>"?>

</ul>
<div class='search-bar'>
	  <form name="fsearchbox" method="get" action="<?=x::url()?>">	
		<input type='hidden' name='module' value='post' />
		<input type='hidden' name='action' value='search' />
		<input type='hidden' name='search_subject' value=1 />
		<input type='hidden' name='search_content' value=1 />
		<? /*
		<input type="hidden" name="sfl" value="wr_subject||wr_content">
		<input type="hidden" name="sop" value="and">
		*/?>
		<input type="text" name="key" id="travel_search_text" maxlength="20" placeholder='검색어를 입력해 주세요.' />
		<input type="image" id="travel_search_submit" src='<?=x::url_theme()?>/img/search.png' />
      </form>
	<? /*
		  <script>
				function fsearchbox_submit(f)
				{
					if (f.stx.value.length < 2) {
						alert("검색어는 두글자 이상 입력하십시오.");
						f.stx.select();
						f.stx.focus();
						return false;
					}

					// 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
					var cnt = 0;
					for (var i=0; i<f.stx.value.length; i++) {
						if (f.stx.value.charAt(i) == ' ')
							cnt++;
					}

					if (cnt > 1) {
						alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
						f.stx.select();
						f.stx.focus();
						return false;
					}

					return true;
				}
		 </script>
		 */?>
	</div>
</div>
<div style='clear:both;'></div>
</div>
<style>
</style>
<style>
.main-menu a[href*='<?=$bo_table?>'] {
	font-weight:bold;
	color:#ff4000;
}
</style>
<script>
	$(function(){				
		if ( '<?=$bo_table?>' == '' ) $(".main-menu li.first-item a").css("font-weight", "bold").css('color', '#ff4000');
	});
</script>