<?php
/**
 * What? ヘルプコンポーネント
 * 使い方: $whatHelpId と $whatHelpContent を設定してから include
 * 例: $whatHelpId = 'hero-what'; $whatHelpContent = '<p>説明文</p>'; require INCLUDES_PATH . '/what-help.php';
 * 配置用の修飾クラス: $whatHelpModifier を指定可能（例: 'what-help--hero' で hero 右下用）
 */
if (empty($whatHelpId) || !isset($whatHelpContent)) return;
$whatHelpModifier = $whatHelpModifier ?? '';
$popupId = $whatHelpId . '-popup';
?>
<div class="what-help <?= h($whatHelpModifier) ?>" id="<?= h($whatHelpId) ?>">
    <button type="button" class="what-help-btn" id="<?= h($whatHelpId) ?>-btn" aria-label="これは何ですか？" aria-expanded="false" aria-controls="<?= h($popupId) ?>">
        <span class="what-help-btn-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg></span>
        <span class="what-help-btn-text">what?</span>
    </button>
    <div class="what-help-popup" id="<?= h($popupId) ?>" role="dialog" aria-labelledby="<?= h($whatHelpId) ?>-btn" aria-hidden="true">
        <div class="what-help-popup-inner">
            <?= $whatHelpContent ?>
        </div>
    </div>
</div>
