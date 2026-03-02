<?php
/**
 * UI Cache Rebuild Script for bemlqualitynew
 * Run this ONCE after UI migration to clear compiled templates
 * 
 * Usage: Access http://localhost/bemlqualitynew/clear_ui_cache.php (then DELETE it)
 */

// Basic security - only run from localhost
if (php_sapi_name() !== 'cli' && !in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    die('Access denied - run from localhost or CLI only');
}

$root = __DIR__;
$cleared = [];
$errors = [];

// Clear template compile caches
$cache_dirs = [
    $root . '/test/templates_c',
    $root . '/customerportal/writeable/templates_c',
    $root . '/cron/customerportal/writeable/templates_c',
    $root . '/modules/Mobile/v2/writeable/templates_c',
];

foreach ($cache_dirs as $dir) {
    if (is_dir($dir)) {
        $files = glob($dir . '/*.php');
        foreach ($files as $file) {
            if (@unlink($file)) {
                $cleared[] = basename($file) . ' (from ' . basename($dir) . ')';
            }
        }
    }
}

// Clear user_privileges cache (forces module reload)
$user_priv_dir = $root . '/user_privileges';
if (is_dir($user_priv_dir)) {
    $files = glob($user_priv_dir . '/*.php');
    foreach ($files as $file) {
        // Only clear file-based privilege cache, not user settings
        if (strpos(basename($file), 'profile') !== false) {
            if (@unlink($file)) {
                $cleared[] = basename($file) . ' (user_privileges)';
            }
        }
    }
}

// Force LESS recompilation signal
// vtiger checks if the .less is newer than compiled CSS
$less_files = [
    $root . '/layouts/v7/skins/vtiger/style.less',
    $root . '/layouts/v7/skins/vtiger/variables.less',
    $root . '/layouts/v7/resources/custom.less',
];

foreach ($less_files as $less_file) {
    if (file_exists($less_file)) {
        // Touch the file to mark it as newer
        touch($less_file);
        $cleared[] = 'Touched (timestamp updated): ' . basename($less_file);
    }
}

// Output report
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head><title>UI Cache Clear</title>
<style>
body { font-family: monospace; padding: 20px; background: #1a1a2e; color: #e0e0e0; }
h1 { color: #4a9eff; }
.ok { color: #4caf50; }
.err { color: #f44336; }
.info { color: #ff9800; }
pre { background: #0d0d1e; padding: 15px; border-radius: 8px; }
</style>
</head>
<body>
<h1>🚀 bemlqualitynew UI Cache Clear</h1>
<pre>
<span class="ok">✅ Cleared <?= count($cleared) ?> items:</span>
<?php foreach ($cleared as $item): ?>
  - <?= htmlspecialchars($item) ?>

<?php endforeach; ?>
<?php if (!empty($errors)): ?>
<span class="err">❌ Errors:</span>
<?php foreach ($errors as $err): ?>
  - <?= htmlspecialchars($err) ?>

<?php endforeach; ?>
<?php endif; ?>

<span class="info">ℹ️  Next Steps:</span>
  1. Delete this file (clear_ui_cache.php) after running once!
  2. Hard refresh the browser (Ctrl+F5)
  3. Visit: http://localhost/bemlqualitynew/
  4. Verify the UI matches product-all-in-one-crm
</pre>

<p><strong style="color:#f44336">⚠️ IMPORTANT: Delete this file after use!</strong></p>
<p><a href="/" style="color:#4a9eff">→ Go to CRM Login</a></p>
</body>
</html>
