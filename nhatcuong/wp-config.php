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
define( 'DB_NAME', 'hientv' );

/** Username của database */
define( 'DB_USER', 'hientv' );

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
define( 'AUTH_KEY',         '29(o%;py}~WVF (+]78qREHXG}DK=x;dZ/UGqhy(.MM9eiA{X4J>_~B534pNV8u2' );
define( 'SECURE_AUTH_KEY',  'c6#FohXuhpxJ;M/$M&ea*ez#k0G7a!qrn[d~vz36.#LU -.IV~KE-mA*F-l|-RN4' );
define( 'LOGGED_IN_KEY',    'ok9wy.:}!c{a-!eYd+H4:t8+k44l^!sJ;M&6+.TphL (%2~ O/]It#@%8D3n}nE$' );
define( 'NONCE_KEY',        'a;uYYrWPvd^,A[;]+R[{HTlyM6*XS{plx;/.aAa.e.W!xSsJw;KQ7l|9Z+Gm{h:4' );
define( 'AUTH_SALT',        '@zdpBB,ryN~=Ky18<~2AU,==qxHAU{mWyOk<p,~m7$`OrSL:}|VA~pI1S}8`0DUd' );
define( 'SECURE_AUTH_SALT', 'D|PS+T}yIp!&/B~2NAY%4!MaJ)4-m%IU;te]rjN/-k^Hb<Y$uau( Pkj;mZQQ_z5' );
define( 'LOGGED_IN_SALT',   'zTk.ZdU8s?tQ`wvW6bR62Tp2W!W]y5Ba40USQ9Ge{GCnn[C]p&FgjOy(O#V#I8+E' );
define( 'NONCE_SALT',       '/9 ^R@uQKW~gez[|MR/gMd%[!F%f~Mc$v~fn?NlmmYw}Dr$?CXMA$ST<ONV`~@Z~' );

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
