<?php get_header(); ?>
<div class="container">
  <div class="contents">
      
      <!-- トップ -->
      <div class="top">
          <div class="pc-slider">
          <div class="slider">
      <div><img src="<?php echo get_template_directory_uri() ?>/images/bg_hero_01.jpg"></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/images/bg_hero_02.jpg"></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/images/bg_hero_03.jpg"></div>
          </div>
          </div>
          <div class="sp-slider">
          <div class="slider">
      <div><img src="<?php echo get_template_directory_uri() ?>/images/sp-1.jpg"></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/images/sp-2.jpg"></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/images/sp-3.jpg"></div>
          </div>
          </div>
          <div class="title"><p>自分らしさをレイアウトする</p></div>
          <div class="sp-title"><p>自分らしさを<br>レイアウトする</p></div>
      </div>
      
      <!-- お知らせ -->
      <div class="news">
          <div class="title">お知らせ</div>
          <div class="mintitle">NEWS</div>
          <div class="contentslist">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class( 'kiji-list' ); ?>>
      <a class="list-up" href="<?php the_permalink(); ?>">
        <div class="text">
          <!--投稿日を表示-->
          <span class="kiji-date">
            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
              <?php echo get_the_date(); ?>
            </time>
          </span>
            <!--カテゴリ-->
          <?php if (!is_category()): ?>
            <?php if( has_category() ): ?>
              <span class="cat-data">
              <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
              </span>
            <?php endif; ?>
          <?php endif; ?>
             <!--タイトル-->
          <h3><?php the_title(); ?></h3>
        </div>
      </a>
    </article>

    <?php endwhile; endif; ?><!--ループ終了-->
              
  </div>
          <div class="center">
          <div class="btn">お知らせ一覧へ</div>
          </div>
          
      </div>
      
      <!-- 取り扱い家具 -->
      <div class="forniture">
          
          <div class="title">取り扱い家具</div>
          <div class="mintitle">FORMITURE</div>
          
          <div class="theme">
              <div class="fig"></div>
              <div class="text">
              <div class="title">テーマで探す</div>
              <div class="conts">モダン、ナチュラル、北欧、ヴィンテージ、和風、ハワイアン、アメリカン、ミニマルなど、テーマごとに家具をお探しいただけます。</div>
                <div class="res-center">
              <div class="btn">取り扱い家具の一覧へ</div>
                  </div>
              </div>
          </div>
          
          
          <div class="color">
              <div class="fig"></div>
              <div class="text">
              <div class="title">カラーで探す</div>
              <div class="conts">レッド、ブルー、グリーン、イエロー、オレンジ、ピンク、パープル、ベージュ・アイボリー、ブラウン、ブラック、グレー、ホワイトなど、好みのカラーごとに家具をお探しいただけます。</div>
                  <div class="res-center">
              <div class="btn">取り扱い家具の一覧へ</div>
                  </div>
              </div>
          </div>
          
          <div class="flex">
          
          <div class="scene">
              <div class="fig"></div>
              <div class="text">
              <div class="title">シーンで探す</div>
              <div class="conts">「ﾘビング」や「ダイニング」、「寝室・ベッドルーム」、「キッチン」、「玄関・エントランス」、「書斎・ホームオフィス」などのシーンから、それぞれのシーンで使用する家具をお探しいただけます。</div>
                  <div class="res-center">
              <div class="btn">取り扱い家具の一覧へ</div>
                  </div>
              </div>
          </div>
          
          <div class="bland">
              <div class="fig"></div>
              <div class="text">
              <div class="title">ブランドで探す</div>
              <div class="conts">他では出会えないソファやチェアが見つかります。
当社ブランド以外でも、セレクトラインアップの中で多数のブランドをお取扱いしております。</div>
                  <div class="res-center">
              <div class="btn">取り扱い家具の一覧へ</div>
                  </div>
              </div>
          </div>
          
          <div class="material">
              <div class="fig"></div>
              <div class="text">
              <div class="title">素材で探す</div>
              <div class="conts">チークやパイン、マホガニーやウォールナットなどの木材から、ファブリックやラタンなどの布・繊維、ステンレスやロートアイアンのような金属まで、あらゆる素材を使用した家具を取り揃えております。</div>
                  <div class="res-center">
              <div class="btn">取り扱い家具の一覧へ</div>
                  </div>
              </div>
          </div>
              
          </div>
          
      </div>
      
      <div class="store">
          
      <div class="place">
          <div class="fig"></div>
          <div class="text">
              <div class="title">販売店・展示場一覧</div>
              <div class="conts">KAGUの販売店をご覧いただけます。<br>また、KAGUの家具は全国のショールームにてご覧いただけます。</div>
              <div class="res-center">
              <div class="btn">販売店・展示場一覧を見る</div>
              </div>
          </div>
      </div>
    
      <div class="onlinestore">
          <div class="fig"></div>
          <div class="text">
          <div class="title">ONLINE STORE</div>
              <div class="conts">KAGUの家具はオンラインストアでもご購入いただけます。</div>
              <div class="res-center">
              <div class="btn">オンラインストアを見る</div>
              </div>
          </div>
      </div>
          
      </div>
      
      
    </div>
</div>
<?php get_footer(); ?>