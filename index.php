<?php require 'header.php'; ?>
<?php
// 実績
$works = [
  ['img' => 'work-04.jpg', 'tags' => ['コーポレートサイト', 'WordPress'], 'title' => 'コーポレートサイト制作', 'text' => 'デザインデータをもとに、コーディングからWordPress実装まで担当しました。'],
  ['img' => 'work-03.jpg', 'tags' => ['採用サイト', 'WordPress'], 'title' => '採用サイト制作', 'text' => 'デザインをもとに、レスポンシブ対応・WordPress実装を行いました。'],
  ['img' => 'work-02.jpg', 'tags' => ['LP', 'HTML / CSS / JavaScript'], 'title' => 'ランディングページ制作', 'text' => 'デザインデータをもとに、アニメーションを含むコーディングを担当しました。'],
  ['img' => 'work-01.jpg', 'tags' => ['店舗サイト', 'WordPress'], 'title' => '店舗サイト制作', 'text' => 'デザインデータをもとに、コーディングからWordPress実装まで担当しました。'],
];

// プロフィール
$profile = [
  '名前' => '山田 花子（やまだ はなこ）',
  '職種' => 'フロントエンドエンジニア',
  '経験' => 'Web制作会社で約2年半',
  '対応領域' => 'コーディング / WordPress実装<br>LP制作 / サイト運用・保守',
  '活動エリア' => '全国対応可能（オンライン）',
  '好きなこと' => 'カフェ巡り・写真・デザインを見ること',
];

// サービス
$services = [
  ['icon' => 'monitor', 'title' => 'コーディング', 'text' => 'デザインを忠実に再現し、<br>レスポンシブ対応・各種ブラウザ<br>対応まで丁寧にコーディングします。'],
  ['icon' => 'wordpress', 'title' => 'WordPress実装', 'text' => 'オリジナルテーマの構築や<br>既存テーマのカスタマイズ、<br>更新しやすいサイトを制作します。'],
  ['icon' => 'phone', 'title' => 'レスポンシブ対応', 'text' => 'スマートフォン・タブレットにも<br>最適化し、どの端末でも快適に<br>閲覧できるサイトを制作します。'],
  ['icon' => 'gear', 'title' => 'サイト運用・保守', 'text' => '公開後の修正対応や機能追加、<br>WordPressの更新など<br>長期的な運用もサポートします。'],
];

// 制作の流れ
$flows = [
  ['icon' => 'mail', 'title' => 'お問い合わせ', 'text' => 'まずはお気軽に<br>お問い合わせください。'],
  ['icon' => 'chat', 'title' => 'ヒアリング', 'text' => 'ご要望やイメージをお伺いし、<br>最適なご提案をいたします。'],
  ['icon' => 'doc', 'title' => '制作開始', 'text' => 'デザインデータをもとに<br>丁寧にコーディングします。'],
  ['icon' => 'monitor', 'title' => 'ご確認・修正', 'text' => 'テスト環境でご確認いただき、<br>必要に応じて修正を行います。'],
  ['icon' => 'send', 'title' => '納品・公開', 'text' => '最終確認後、納品・公開まで<br>責任をもって対応いたします。'],
];

// 線画アイコン
function icon($name)
{
  $icons = [
    'monitor' => '<rect x="2" y="3" width="20" height="14" rx="1.5"/><path d="M8 21h8M12 17v4"/>',
    'wordpress' => '<circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="8"/><path d="M6.5 8.5h3M12.5 8.5h3M8 8.5l3 8 1.5-4.5M11 8.5l3.5 8 2-6.5"/>',
    'phone' => '<rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18.5h2"/>',
    'gear' => '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1Z"/>',
    'mail' => '<rect x="2" y="4" width="20" height="16" rx="1.5"/><path d="m2.5 5 9.5 8 9.5-8"/>',
    'chat' => '<path d="M21 11.5a8.4 8.4 0 0 1-9 8 9.4 9.4 0 0 1-3.8-.8L3 20l1.4-4A7.7 7.7 0 0 1 3 11.5a8.4 8.4 0 0 1 9-8 8.4 8.4 0 0 1 9 8Z"/><path d="M8 11.5h.01M12 11.5h.01M16 11.5h.01"/>',
    'doc' => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M9 7h6M9 11h6M9 15h4"/>',
    'send' => '<path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7Z"/>',
  ];
  return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[$name] . '</svg>';
}
?>
<main class="l-main">

  <!-- MV -->
  <section class="p-mv" id="js-mv">
    <div class="p-mv__bg">
      <img src="./assets/images/top/mv.jpg" alt="" class="c-ofiCover">
    </div>
    <div class="p-mv__inner c-inner --1100">
      <h1 class="p-mv__title">想いを、<br>かたちにするWeb制作を。</h1>
      <p class="p-mv__text">デザインを忠実に再現し、使いやすく・見やすい・成果につながる<br class="u-spNone">Webサイトをコーディングします。</p>
      <div class="p-mv__buttons">
        <a href="#works" class="c-button --navy">制作実績を見る<span class="c-button__arrow">→</span></a>
        <a href="#contact" class="c-button --outline">お問い合わせ<span class="c-button__arrow">→</span></a>
      </div>
    </div>
    <p class="p-mv__script" aria-hidden="true">Web<br>Front-end Developer</p>
  </section>

  <!-- WORKS -->
  <section class="p-works" id="works">
    <div class="c-inner --1100">
      <div class="p-works__head">
        <h2 class="c-title iv fadeUp"><span class="c-title__en">WORKS</span><span class="c-title__ja">制作実績</span></h2>
        <a href="#" class="c-textLink">すべての実績を見る<span class="c-textLink__arrow">→</span></a>
      </div>
      <ul class="p-works__list iv c-stagger">
        <?php foreach ($works as $work) : ?>
          <li class="p-worksCard">
            <a href="#" class="p-worksCard__link">
              <div class="p-worksCard__img">
                <img src="./assets/images/top/<?php echo $work['img']; ?>" alt="<?php echo $work['title']; ?>" class="c-ofiCover">
              </div>
              <ul class="p-worksCard__tags">
                <?php foreach ($work['tags'] as $tag) : ?>
                  <li class="p-worksCard__tag"><?php echo $tag; ?></li>
                <?php endforeach; ?>
              </ul>
              <h3 class="p-worksCard__title"><?php echo $work['title']; ?></h3>
              <p class="p-worksCard__text"><?php echo $work['text']; ?></p>
              <span class="p-worksCard__arrow" aria-hidden="true">→</span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- ABOUT / SKILLS -->
  <section class="p-about" id="about">
    <div class="p-about__inner c-inner --1100">
      <div class="p-about__main">
        <h2 class="c-title iv fadeUp"><span class="c-title__en">ABOUT</span><span class="c-title__ja">自己紹介</span></h2>
        <div class="p-about__body iv fadeUp">
          <div class="p-about__img iv c-reveal">
            <img src="./assets/images/top/about-01.jpg" alt="ノートパソコンで作業する様子" class="c-ofiCover">
          </div>
          <div class="p-about__content">
            <h3 class="p-about__lead">Webサイト制作を通して、<br>クライアント様の想いを形にします。</h3>
            <p class="p-about__text">Web制作会社にて約2年半、Webサイトの制作・運用に携わっております。<br>デザインを忠実に再現したコーディングはもちろん、WordPress実装や納品後の保守運用まで一貫して対応可能です。<br>丁寧なコミュニケーションと、安心してお任せいただける制作を心がけています。</p>
            <a href="#profile" class="c-button --outline --small">詳しいプロフィールを見る<span class="c-button__arrow">→</span></a>
          </div>
        </div>
      </div>
      <div class="p-skills" id="skills">
        <h2 class="c-title iv fadeUp"><span class="c-title__en">SKILLS</span><span class="c-title__ja">スキル</span></h2>
        <ul class="p-skills__list iv c-stagger">
          <li class="p-skills__item">
            <span class="p-skills__icon">
              <svg viewBox="0 0 32 32" aria-hidden="true"><path fill="#E44D26" d="M5 2h22l-2 23-9 3-9-3Z"/><path fill="#fff" d="M10 7h12l-.3 3H13.4l.3 3.5h7.7l-.7 7.6L16 22.4l-4.7-1.3-.3-3.6h3l.2 1.6 1.8.5 1.8-.5.3-2.6H10.7Z"/></svg>
            </span>
            <span class="p-skills__name">HTML5</span>
          </li>
          <li class="p-skills__item">
            <span class="p-skills__icon">
              <svg viewBox="0 0 32 32" aria-hidden="true"><path fill="#1572B6" d="M5 2h22l-2 23-9 3-9-3Z"/><path fill="#fff" d="M10 7h12l-.3 3h-8.3l.3 3.5h7.7l-.7 7.6L16 22.4l-4.7-1.3-.3-3.6h3l.2 1.6 1.8.5 1.8-.5.3-3H11Z"/></svg>
            </span>
            <span class="p-skills__name">CSS3 / SCSS</span>
          </li>
          <li class="p-skills__item">
            <span class="p-skills__icon">
              <svg viewBox="0 0 32 32" aria-hidden="true"><rect x="4" y="4" width="24" height="24" fill="#F7DF1E"/><text x="16" y="24" text-anchor="middle" font-family="Arial, sans-serif" font-weight="700" font-size="11" fill="#222">JS</text></svg>
            </span>
            <span class="p-skills__name">JavaScript</span>
          </li>
          <li class="p-skills__item">
            <span class="p-skills__icon">
              <svg viewBox="0 0 32 32" aria-hidden="true"><circle cx="16" cy="16" r="13" fill="#3a3a3a"/><circle cx="16" cy="16" r="11" fill="#fff"/><text x="16" y="21.5" text-anchor="middle" font-family="Georgia, serif" font-weight="700" font-size="15" fill="#3a3a3a">W</text></svg>
            </span>
            <span class="p-skills__name">WordPress</span>
          </li>
          <li class="p-skills__item">
            <span class="p-skills__icon --double">
              <svg viewBox="0 0 20 30" aria-hidden="true"><path fill="#F24E1E" d="M5 0h5v10H5a5 5 0 0 1 0-10Z"/><path fill="#FF7262" d="M10 0h5a5 5 0 0 1 0 10h-5Z"/><path fill="#A259FF" d="M5 10h5v10H5a5 5 0 0 1 0-10Z"/><circle fill="#1ABCFE" cx="15" cy="15" r="5"/><path fill="#0ACF83" d="M5 20h5v5a5 5 0 1 1-5-5Z"/></svg>
              <svg viewBox="0 0 32 32" aria-hidden="true"><rect x="2" y="2" width="28" height="28" rx="5" fill="#470137"/><text x="16" y="21" text-anchor="middle" font-family="Arial, sans-serif" font-weight="700" font-size="12" fill="#FF61F6">Xd</text></svg>
            </span>
            <span class="p-skills__name">Figma / Adobe XD</span>
          </li>
          <li class="p-skills__item">
            <span class="p-skills__icon --double">
              <svg viewBox="0 0 32 32" aria-hidden="true"><path fill="#F05032" d="M30.4 14.6 17.4 1.6a2 2 0 0 0-2.8 0l-2.7 2.7 3.4 3.4a2.4 2.4 0 0 1 3 3l3.3 3.3a2.4 2.4 0 1 1-1.4 1.4l-3.1-3.1v8.2a2.4 2.4 0 1 1-2-.1v-8.3a2.4 2.4 0 0 1-1.3-3.1L10.4 5.8 1.6 14.6a2 2 0 0 0 0 2.8l13 13a2 2 0 0 0 2.8 0l13-13a2 2 0 0 0 0-2.8Z"/></svg>
              <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#181717" d="M12 .5a11.5 11.5 0 0 0-3.64 22.41c.58.1.79-.25.79-.56v-2c-3.2.7-3.88-1.36-3.88-1.36-.52-1.33-1.28-1.69-1.28-1.69-1.05-.71.08-.7.08-.7 1.16.08 1.77 1.19 1.77 1.19 1.03 1.77 2.7 1.26 3.36.96.1-.75.4-1.26.73-1.55-2.55-.29-5.24-1.28-5.24-5.69 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.17 1.18a11 11 0 0 1 5.77 0c2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.81 1.19 1.84 1.19 3.1 0 4.42-2.7 5.4-5.26 5.68.41.36.78 1.06.78 2.14v3.17c0 .31.21.67.8.56A11.5 11.5 0 0 0 12 .5Z"/></svg>
            </span>
            <span class="p-skills__name">Git / GitHub</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- PROFILE -->
  <section class="p-profile" id="profile">
    <div class="c-inner --1100">
      <h2 class="c-title iv fadeUp"><span class="c-title__en">PROFILE</span><span class="c-title__ja">プロフィール</span></h2>
    </div>
    <div class="p-profile__body">
      <div class="p-profile__img iv c-reveal">
        <img src="./assets/images/top/profile-01.jpg" alt="山田 花子" class="c-ofiCover">
      </div>
      <div class="p-profile__content iv fadeUp">
        <h3 class="p-profile__lead">丁寧なコミュニケーションで、<br>安心して任せていただける制作を。</h3>
        <p class="p-profile__text">Web制作会社にて約2年半、フロントエンドエンジニアとして<br class="u-tabNone">コーポレートサイト・LP・採用サイト・ECサイトなど、さまざまなWebサイトの<br class="u-tabNone">コーディング・WordPress実装を担当してきました。<br>見た目の美しさだけでなく、使いやすさ・保守性・表示速度にも配慮した、<br class="u-tabNone">長く運用できるWebサイト制作を心がけています。</p>
      </div>
      <dl class="p-profile__table iv c-stagger">
        <?php foreach ($profile as $label => $value) : ?>
          <div class="p-profile__row">
            <dt><?php echo $label; ?></dt>
            <dd><?php echo $value; ?></dd>
          </div>
        <?php endforeach; ?>
      </dl>
    </div>
  </section>

  <!-- SERVICE -->
  <section class="p-service" id="service">
    <div class="c-inner --1200">
      <h2 class="c-title iv fadeUp"><span class="c-title__en">SERVICE</span><span class="c-title__ja">できること</span></h2>
      <p class="p-service__lead iv fadeUp">コーディングからWordPress実装まで、<br>幅広く対応しています。</p>
      <p class="p-service__text iv fadeUp">デザインの意図を正確に読み取り、見た目だけでなく使いやすさや運用面も考慮した<br class="u-tabNone">Webサイト制作を行います。小規模なサイトから中規模のサイトまで柔軟に対応いたします。</p>
      <ul class="p-service__list iv c-stagger">
        <?php foreach ($services as $service) : ?>
          <li class="p-serviceCard">
            <span class="p-serviceCard__icon"><?php echo icon($service['icon']); ?></span>
            <h3 class="p-serviceCard__title"><?php echo $service['title']; ?></h3>
            <p class="p-serviceCard__text"><?php echo $service['text']; ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- WORKFLOW -->
  <section class="p-flow" id="flow">
    <div class="c-inner --1200">
      <h2 class="c-title iv fadeUp"><span class="c-title__en">WORKFLOW</span><span class="c-title__ja">制作の流れ</span></h2>
      <ol class="p-flow__list iv c-stagger">
        <?php foreach ($flows as $i => $flow) : ?>
          <li class="p-flowCard">
            <span class="p-flowCard__num c-fontEn"><?php echo sprintf('%02d', $i + 1); ?></span>
            <span class="p-flowCard__icon"><?php echo icon($flow['icon']); ?></span>
            <h3 class="p-flowCard__title"><?php echo $flow['title']; ?></h3>
            <p class="p-flowCard__text"><?php echo $flow['text']; ?></p>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="p-contact" id="contact">
    <div class="p-contact__bg">
      <img src="./assets/images/top/contact.jpg" alt="" class="c-ofiCover">
    </div>
    <div class="p-contact__inner c-inner --1100 iv fadeUp">
      <p class="p-contact__label c-fontEn">CONTACT</p>
      <h2 class="p-contact__title">Web制作のご相談・お見積もりはお気軽にどうぞ。</h2>
      <p class="p-contact__text">コーディングのみのご依頼や、WordPress実装、サイトの修正・リニューアルなど<br class="u-tabNone">どんな内容でもお気軽にご相談ください。1営業日以内にご返信いたします。</p>
      <a href="mailto:info@example.com" class="c-button --navy --large">お問い合わせはこちら<span class="c-button__arrow">→</span></a>
    </div>
  </section>

</main>
<?php require 'footer.php'; ?>
