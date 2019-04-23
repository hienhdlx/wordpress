<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt,
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'demoweb' );

/** Username của database */
define( 'DB_USER', 'demoweb' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '123456' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm6mndvSfO|[ddj_eAuA~a+Q`^z8N:w$bHRLHe[w2%w>B{n#HzpCYlo[)[Ym_bId2' );
define( 'SECURE_AUTH_KEY',  'j=H1JNCaP#tyfv086?}ViMxDRU!GXt`3Mmwau6`ioY0^<O-lW[L9D7U&}?:fO>L/' );
define( 'LOGGED_IN_KEY',    '1 Bqp)WC]/xe{-/$]gGhofO=Pj6@],Y[fTdCk+!a$T}6fS ~@xf($8ij7g1<#aK0' );
define( 'NONCE_KEY',        ':Ik6qU3PK>*]*KNrt~<+b]3ZX&V}0JGJc~;<}zOXOs(kcAon 9=70/C}SJr3*T}^' );
define( 'AUTH_SALT',        '_k`6.1xw1;?&!HAZn6QjEs<# KhlON{SV0YXH=xaGt.f3SS+Cm^jstp+u<*Z?z]K' );
define( 'SECURE_AUTH_SALT', '3=(L <B/T<f>c*WWCI&<n0_;(7VX5}jC}c4j=v6E;H|xP|~bJusC^HhXmX~4EAE|' );
define( 'LOGGED_IN_SALT',   '$bV:[ih0#hB~yCQDF^qOd7U IaOWEZwj~)79Sl>fDHUOq:%ZoMd1~n7pn.HxU|(d' );
define( 'NONCE_SALT',       'Y3A~[v;<hN~ |Od;l{ZyF&DCIGwEpk?vW=KRYwQ/lLbW.26Sk9{PE)mrKx-lKX&<' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
