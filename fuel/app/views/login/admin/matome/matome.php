			<iframe name="shumbnail_iframe" id="" style="display: none;"></iframe>


				<!-- 文字カウントツール -->
				<div class="text_count_tool clearfix">
					<div class="text_count_tool_inner">
						<div class="text_count_tool_inner_count">
							<h4>現在の文字数</h4>
							<p class="count">0文字</p>
							<p>クオリティー度：<span class="rank"></span></p>
						</div>
					</div>
				</div>
<!--
低
中
高
最高
超絶
神
-->

				<!-- 文字装飾ツール -->
				<div class="text_design_tool clearfix">
					<div class="text_design_tool_content">
						<span class="text_design_tool_content_title"><span class="typcn typcn-pen"></span>文字装飾ツール</span>
						<ul class="text_design_tool_content_list clearfix">
							<li class="text_design_tool_content_list_change"><span class="typcn typcn-arrow-repeat"></span></li>
							<li class="text_design_tool_content_list_h3">
								<input type="button" class="text_design_tool_content_list_h3_button" value="中見出し">
							</li>
							<li class="text_design_tool_content_list_h4">
								<input type="button" class="text_design_tool_content_list_h4_button" value="小見出し">
							</li>
							<li class="text_design_tool_content_list_strong">
								<input type="button" class="text_design_tool_content_list_strong_button" value="強調する[SEO]">
							</li>
							<li class="text_design_tool_content_list_bold">
								<input type="button" class="text_design_tool_content_list_bold_button" value="太くする">
							</li>
							<li class="text_design_tool_content_list_marker">
								<input type="button" class="text_design_tool_content_list_marker_button" value="マーカー">
							</li>

<!--
							<li class="text_design_tool_content_list_text_red_color">
								<input type="button" class="text_design_tool_content_list_text_red_color_button" value="文字[赤]">
							</li>
							<li class="text_design_tool_content_list_big_text_1">
								<input type="button" class="text_design_tool_content_list_big_text_1_button" value="文字・中">
							</li>
							<li class="text_design_tool_content_list_big_text_2_red_color">
								<input type="button" class="text_design_tool_content_list_big_text_1_red_color_button" value="文字・中[赤]">
							</li>
							<li class="text_design_tool_content_list_big_text_2">
								<input type="button" class="text_design_tool_content_list_big_text_2_button" value="文字・大">
							</li>
							<li class="text_design_tool_content_list_big_text_2_red_color">
								<input type="button" class="text_design_tool_content_list_big_text_2_red_color_button" value="文字・大[赤]">
							</li>
							<li class="text_design_tool_content_list_big_text_3">
								<input type="button" class="text_design_tool_content_list_big_text_3_button" value="文字・特大">
							</li>
							<li class="text_design_tool_content_list_big_text_2_red_color">
								<input type="button" class="text_design_tool_content_list_big_text_3_red_color_button" value="文字・特大[赤]">
							</li>
-->
						</ul>
					</div>
				</div>

				<div class="columns_2 clearfix">
						<!-- new_post -->
						<div class="new_post">
							<div class="new_post_contents">
								<h1 class="m_b_15">まとめ作成</h1>
									<?php 
										echo '<pre>';
//										var_dump($post_data);
										echo '</pre>';
									?>
								<input class="matome_title" id="title" type="text" name="title" value="<?php echo $post_data["post"]["title"]; ?>" placeholder="まとめタイトルを入力（50文字以内）">

								<!-- item_add -->
								<div class="item_add">
									<div class="item_add_content clearfix">
										<span class="item_add_content_title"><span class="typcn typcn-plus"></span>アイテムを追加</span>
										<ul class="item_add_content_list">
											<li class="item_add_content_list_link">リンク</li>
											<li class="item_add_content_list_image">画像</li>
											<li class="item_add_content_list_video">動画</li>
											<li class="item_add_content_list_quote">引用</li>
											<li class="item_add_content_list_twitter">Twitter</li>
											<li class="item_add_content_list_text">テキスト</li>
											<li class="item_add_content_list_title">見出し</li>
											<li class="item_add_content_list_change"><span class="typcn typcn-arrow-repeat"></span></li>
										</ul>
									</div> <!-- item_add_content -->
								</div> <!-- item_add -->
								<!-- matome -->
								<div class="matome">
									<div class="matome_content">
										<?php echo $post_data["post"]["sub_text"]; ?>


										<?php 

/*
			// iTunes_app_スクレイピング
			$itunes_app_data_array = Model_Login_Itunesappscraping_Basis::itunes_app_scraping();
			// iTunes_app_html生成
			$itunes_app_html       = Model_Login_Itunesappscraping_Html::itunes_app_html_create($itunes_app_data_array);
*/
/*
echo '<pre>';
//var_dump($itunes_app_data_array);
echo '</pre>';
*/
 ?>





									</div> <!-- matome_content -->
								</div> <!-- matome -->
							</div> <!-- new_post_contents -->
						</div> <!-- new_post -->
						<!-- postboxs -->
						<div class="postboxs">
							<!-- postbox -->
							<div class="postbox">
								<h3>公開</h3>
								<div class="postbox_contents">
									<?php 
										// エディットの場合
										if($post_data["post"]["edit"]) {
											echo '<input class="matome_edit" type="submit" name="edit" value="編集する">';
											echo '<input class="matome_edit_primary_id" type="hidden" name="matome_edit_primary_id" value="'.$post_data["post"]["primary_id"].'">';
										}
											// それ以外
											else {
												echo '<a id="post-preview" target="_blank" href="'.HTTP.'login/admin/matome/preview/?p='.$post_data["post"]["primary_id"].'&amp;preview=true" class="preview_button">プレビュー</a>
												<input class="matome_draft" type="submit" name="draft" value="下書きとして保存">
												<input class="matome_submit" type="submit" name="submit" value="投稿する">';
											}
									// 下書きの場合 matome_draft_save matome_draft_primary_id
									if((int)$post_data["post"]["draft"] == 1) {
										echo '<input class="matome_draft_save" type="hidden" name="matome_draft_save" value="true">';
										echo '<input class="matome_draft_primary_id" type="hidden" name="matome_draft_primary_id" value="'.$post_data["post"]["primary_id"].'">';
									}
								?>
								</div>
							</div> <!-- postbox -->
							<!-- postbox -->
							<div class="postbox">
								<h3>テーマ</h3>
								<div class="postbox_contents">
									<input class="matome_tag" type="text" name="tag" value="<?php echo $post_data["post"]["tag"]; ?>" placeholder="テーマを入力(全角空白で区切れます。)">
								</div>
							</div> <!-- postbox -->
							<!-- postbox -->
							<div class="postbox">
								<h3>カテゴリー</h3>
								<div class="postbox_contents">
									<select class="matome_category" id="category" name="category">

										<option value="風景" <?php if($post_data["post"]["category"] == '風景') {echo 'selected'; } ?>>風景</option>
										<option value="アート" <?php if($post_data["post"]["category"] == 'アート') {echo 'selected'; } ?>>アート</option>
										<option value="アニマル" <?php if($post_data["post"]["category"] == 'アニマル') {echo 'selected'; } ?>>アニマル</option>
										<option value="フード" <?php if($post_data["post"]["category"] == 'フード') {echo 'selected'; } ?>>フード</option>
										<option value="人物" <?php if($post_data["post"]["category"] == '人物') {echo 'selected'; } ?>>人物</option>
										<option value="旅" <?php if($post_data["post"]["category"] == '旅') {echo 'selected'; } ?>>旅</option>
										<option value="コンテスト" <?php if($post_data["post"]["category"] == 'コンテスト') {echo 'selected'; } ?>>コンテスト</option>

<!--
エンタメ・カルチャー           entertainment_culture
ニュース・ゴシップ             news_gossip
かわいい                       cute
ガールズ                       girls
暮らし・アイデア               life_idea
カラダ                         body
おでかけ・グルメ               spot_gourmet

レシピ                         recipe
おもしろ                       humor
アニメ・ゲーム                 anime_game
アプリ・ガジェット             app_gadget
デザイン・アート               design_art
開発・プログラミング           developer_programming
イノベーション・テクノロジー   innovation_technology
ビジネス・スタートアップ       business_startup
お知らせ                       notice
-->

									</select>
								</div>
							</div> <!-- postbox -->
							<!-- postbox -->
							<div class="postbox">
								<h3>サムネイル</h3>
								<div class="postbox_contents">
									<?php 
										$random_key_css = '';
										if($post_data["post"]["random_key"]) {
											$random_key_css = 'display: none';
											// 拡張子取得
											$extension_type = substr($post_data["post"]["thumbnail_image"], strrpos($post_data["post"]["thumbnail_image"], '.') + 1);

//pre_var_dump($post_data);

											// 緊急策 松岡
											$random_key_year = (int)substr($post_data['post']['random_key'], 0, 4);
											echo '<img id="reader_image" src="'.HTTP.'assets/img/draft/article/'.$random_key_year.'/original/'.$post_data["post"]["random_key"].'.'.$extension_type.'" style="width: 100%; height: auto;">';

										echo '<form id="thumbnail_form" action="'.HTTP.'login/admin/post/thumbnail/" method="post" target="shumbnail_iframe" enctype="multipart/form-data" style="'.$random_key_css.'">
<input type="hidden" id="thumbnail_form_random_key" name="random_key" value="'.$post_data["post"]["random_key"].'">
<input id="file" type="file" name="file"></form>';
										}
											else {
												echo '<form id="thumbnail_form" action="'.HTTP.'login/admin/post/thumbnail/" method="post" target="shumbnail_iframe" enctype="multipart/form-data" style="'.$random_key_css.'">
<input id="file" type="file" name="file"></form>';
											}
									?>
	<?php if($post_data["post"]["random_key"]) { echo '<span class="thumbnail_form_delete_button" title="削除ボタン">×</span>';
	 }?>
								</div>
							</div> <!-- postbox -->
						</div> <!-- postboxs -->
				</div>
