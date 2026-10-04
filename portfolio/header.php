<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- <link rel="icon" href="./assets/images/favicon.ico" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio | 想いを、かたちにするWeb制作を。</title>
  <meta name="description" content="デザインを忠実に再現し、使いやすく・見やすい・成果につながるWebサイトをコーディングします。">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Allura&family=Inter:wght@400;500;600&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/splide-core.min.css">
  <link rel="stylesheet" href="./assets/css/style.min.css?<?php echo date('YmdHis') ?>">

  <?php
  // 今いるページのファイル名
  $self_name = basename($_SERVER['PHP_SELF']);

  // プロジェクトディレクトリ内の.phpファイル一覧を取得
  $php_files = glob('./*.php');

  // php_filesのファイル名の部分を取得
  $php_files = array_map('basename', $php_files);

  // 必要なファイル名のパターンのみフィルタリング
  $pages = array_filter($php_files, function ($file) {
    return preg_match('/^(index|page-|archive-|single-).*\.php$/', $file);
  });

  if (in_array($self_name, $pages)) {
    // 'page-', 'archive-', 'single-' などの接頭辞を削除して、ディレクトリ名を生成
    $page_base = preg_replace('/^(page-|archive-|single-)/', '', basename($self_name, '.php'));
    // 'archive-' や 'single-' の接頭辞に応じたCSSファイル名を決定
    if (strpos($self_name, 'archive') !== false) {
      $css_suffix = 'archive.min.css';
      $js_suffix = 'archive.min.js';
    } elseif (strpos($self_name, 'single') !== false) {
      $css_suffix = 'single.min.css';
      $js_suffix = 'single.min.js';
    } else {
      $css_suffix = 'index.min.css';
      $js_suffix = 'index.min.js';
    }
    // ディレクトリ名はハイフンをそのまま使用
    $directory = $self_name === 'index.php'
      ? 'top'
      : $page_base;
    // CSSファイルを出力
    echo '<link rel="stylesheet" href="./assets/css/pages/' . $directory . '/' . $css_suffix . '?' . date('YmdHis') . '">';
    // JSファイルが存在する場合のみ出力
    if (file_exists('./assets/js/pages/' . $directory . '/' . $js_suffix)) {
      echo '<script src="./assets/js/pages/' . $directory . '/' . $js_suffix . '?' . date('YmdHis') . '" defer></script>';
    }
  }
  ?>
</head>

<body>
  <header class="l-header" id="js-header">
    <a href="./" class="l-header__logo c-fontEn">Portfolio</a>
    <div class="l-header__right">
      <button class="l-headerNavButton" type="button" id="js-hamburgerButton" aria-label="メニューを開く">
        <span class="lineIcon">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </span>
      </button>
    </div>
    <nav class="l-headerNav" id="js-headerNav">
      <ul class="l-headerNav__list">
        <li class="l-headerNav__item">
          <a href="#js-mv" class="l-headerNav__link">ホーム</a>
        </li>
        <li class="l-headerNav__item">
          <a href="#works" class="l-headerNav__link">実績</a>
        </li>
        <li class="l-headerNav__item">
          <a href="#skills" class="l-headerNav__link">スキル</a>
        </li>
        <li class="l-headerNav__item">
          <a href="#profile" class="l-headerNav__link">プロフィール</a>
        </li>
        <li class="l-headerNav__item">
          <a href="#contact" class="l-headerNav__link">お問い合わせ</a>
        </li>
        <li class="l-headerNav__item --button">
          <a href="#contact" class="c-button --navy --small">お問い合わせ<span class="c-button__arrow">→</span></a>
        </li>
      </ul>
    </nav>
  </header>