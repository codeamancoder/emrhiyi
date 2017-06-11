<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'dogrun_emrahdo');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'dogrun_emrahdo');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'Ubofi5E9');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mRJjF]mzdG2c2tj9GH}l9@bJQ?P(_]4[M9t]sh:K+QX4/A,ksG`m1.hmM%G9P%e5');
define('SECURE_AUTH_KEY',  '.CYUR!w3:TCb@T~.!nWEwS865IvX~3!bs9E6~|SV;&nu+0=}%W$z6KIcD:(N!U2F');
define('LOGGED_IN_KEY',    '6(k0/6lb,MH<6(My,Qc^PIma&F{eU||cs[Se9xf1sX+oyD$Fdg_hemp5KBWTX:M+');
define('NONCE_KEY',        'ZS[ OEti;8do:*R{_4G~_D5^8[9`l/{I1^_ctoxewU--#X9z+zl)k.5`4^g[GIuV');
define('AUTH_SALT',        '*.dx&]#,Hr&T1oO,n<@R<Cb[ZD[L] i8zjPu8Dh%cJIO+,41~*ccW/PAm6-/*}Zm');
define('SECURE_AUTH_SALT', 'k4{%)XEl<SweJ]Y`e>diu#OU+mS9tK?@>V_yWK|@leBW14%{UvRs-q> rLTil##v');
define('LOGGED_IN_SALT',   '!+$/J yGlpOa*(7`gS-duMW+U#72$&HB)n0V5=Fl=ymZqn%.w6K#M<jxrv&f-96{');
define('NONCE_SALT',       '{$EnB;|zyU4vGrWZ%#o~M$dQ9GruZBADx[$.Cx:2Ny5X=UK^8-ErcP:vH@#7QN80');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
