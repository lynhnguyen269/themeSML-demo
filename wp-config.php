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
define('DB_NAME', 'demo-wp');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Y)DJRhs4Ec k3w$p0!T&t/X<V)I)+-pH7nnoak> riPG}M#)rv)X,;W0E|zTF!s_');
define('SECURE_AUTH_KEY',  'Baw0/2iX+5}]KcXyS,`x7k+QI},n{11~j5K/JfX*EZ8K),}D{0=LH/>HKdjoo-s-');
define('LOGGED_IN_KEY',    'o@_kmb?( ~`^rF)PY5w9U7*5S+V##/yimb~[FLSX6iN02V97~k=w&D4|H:P1yn?,');
define('NONCE_KEY',        'PM~cuGR!4/NrI@B%6X;4M^D->2gO_LhykV#0w|slvUY<HcM{2]X,j:7lc_UbqS|(');
define('AUTH_SALT',        'G|%Y(k,QY]6UJ8kh]9ez$5 ZR{JNHcU Ca}J>mrIwZGcNIwpL*QKUKePr+;#H@@4');
define('SECURE_AUTH_SALT', 'x2`2bQ5z/X4z36:bt0^OZbwq6?+b(Zs ]0Yy.d-Y#0h<x=B>lw)R%t<!V0^y66,P');
define('LOGGED_IN_SALT',   'XT7I7RUfM4Ic~^9,t23@2WDBZkSj$3~Bfo;hw7qvRQ$g83jV3z 1f|+!NT2ySOqX');
define('NONCE_SALT',       'WE0=u-uU5(QiF!YMIG}z:lCH0nwO<GWm?l5[Cx <$7>OjQ*#%2,<-sx|)~{o&.+0');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
