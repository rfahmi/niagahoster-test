<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
	public function index()
	{
		$data = [
			"topnav" => [
                "text" => "Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]",
                "menus" => [
                    [
                        "icon" => "phone-alt",
                        "label" => "0123-123123",
                    ],
                    [
                        "icon" => "comments",
                        "label" => "Live Chat",
                    ],
                    [
                        "icon" => "user-circle",
                        "label" => "Member Area",
                    ],
                ]
            ],
			"navs" => [
                "Hosting",
                "Domain",
                "Server",
                "Website",
                "Afiliasi",
                "Promo",
                "Pembayaran",
                "Review",
                "Kontak",
                "Blog",
            ],
            "headline" => [
                "text1" => "PHP Hosting",
                "text2" => "Cepat, handal, penuh dengan modul PHP yang Anda butuhkan",
                "benefit" => [
                    "Solusi PHP untuk performa query yang lebih cepat. ",
                    "Konsumsi memori yang lebih rendah",
                    "Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP ",
                    "Fitur enkripsi ionCube dan Zend Guard Loaders",
                ],
                "image" => "svg/illustration banner PHP hosting-01.svg",
            ],
            "techs" => [
              [
                  "name" => "PHP Zend",
                  "image" => "images/zenguard.png",
              ],
              [
                  "name" => "PHP Composer",
                  "image" => "images/composer.png",
              ],
              [
                  "name" => "PHP ionCube Loader",
                  "image" => "images/ioncube.png",
              ],
            ],
            "paket" => [
                "title" => "Paket Hosting Singapura yang Tepat",
                "subtitle" => "Diskon 40% Domain dan SSL Gratis untuk Anda",
                "type" => [
                    [
                        "is_best" => false,
                        "name" => "Bayi",
                        "price1" => 14900,
                        "price2" => 19900,
                        "reg_count" => 938,
                        "button" => "Pilih Sekarang",
                        "feature" => "<p><strong>0.5X RESOURCE POWER</strong><br /><strong>500 MB</strong> Disk Space<br /><strong>Unlimited</strong> Bandwidth<br /><strong>Unlimited</strong> Database<br /><strong>1</strong> Domain<br /><strong>Instant</strong> Backup<br /><strong>Unlimited SSL</strong> Gratis Selamanya</p>",
                    ],
                    [
                        "is_best" => false,
                        "name" => "Pelajar",
                        "price1" => 23450,
                        "price2" => 46900,
                        "reg_count" => 4168,
                        "button" => "Pilih Sekarang",
                        "feature" => "<p><strong>1X RESOURCE POWER</strong><br /><strong>Unlimited</strong> Disk Space<br /><strong>Unlimited</strong> Bandwidth<br /><strong>Unlimited</strong> Database<br /><strong>Unlimited</strong> POP3 Email<br /><strong>10</strong> Addon Domains<br /><strong>Instant</strong> Backup<br /><strong>Domain</strong> Gratis Selamanya<br /><strong>Unlimited SSL</strong> Gratis Selamanya</p>",
                    ],
                    [
                        "is_best" => true,
                        "name" => "Personal",
                        "price1" => 38900,
                        "price2" => 58900,
                        "reg_count" => 10017,
                        "button" => "Pilih Sekarang",
                        "feature" => "<p><strong>2X RESOURCE POWER</strong><br /><strong>Unlimited</strong> Disk Space<br /><strong>Unlimited</strong> Bandwidth<br /><strong>Unlimited</strong> POP3 Email<br /><strong>Unlimited</strong> Databases<br /><strong>Unlimited</strong> Addon Domains<br /><strong>Instant</strong> Backup<br /><strong>Domain Gratis</strong> Selamanya<br /><strong>Unlimited SSL</strong> Gratis Selamanya<br /><strong>Private</strong> Name Server<br /><strong>Spam Assasin</strong> Mail Protection</p>",
                    ],
                    [
                        "is_best" => false,
                        "name" => "Bisnis",
                        "price1" => 65900,
                        "price2" => 109900,
                        "reg_count" => 10017,
                        "button" => "Diskon 40%",
                        "feature" => "<p><strong>3X RESOURCE POWER</strong><br /><strong>Unlimited</strong> Disk Space<br /><strong>Unlimited</strong> Bandwidth<br /><strong>Unlimited</strong> POP3 Email<br /><strong>Unlimited</strong> Databases<br /><strong>Unlimited</strong> Addon Domains<br /><strong>Magic Auto</strong> Backup &amp; Restore<br /><strong>Domain Gratis</strong> Selamanya<br /><strong>Unlimited SSL</strong> Gratis Selamanya<br /><strong>Private</strong> Name Server<br /><strong>Prioritas</strong> Layanan Support<br /><i class='fas fa-star text-primary'></i><i class='fas fa-star text-primary'></i><i class='fas fa-star text-primary'></i><i class='fas fa-star text-primary'></i><i class='fas fa-star text-primary'></i><br/> <strong>Spam Expert</strong> Pro Mail Protection</p>",
                    ],
                ]
            ],
            "benefit" => [
                "title" => "Powerful dengan Limit PHP yang Lebih Besar",
                "items" => [
                    "max execution time 300s",
                    "max execution time 300s",
                    "php memory limit 1024 MB",
                    "post max size 128 MB",
                    "upload max filesize 128 MB",
                    "max input vars 2500",
                ]
            ],
            "fitur" => [
                "title" => "Semua Paket Hosting Sudah Termasuk",
                "items" => [
                    [
                        "name" => "PHP Semua Versi",
                        "desc" => "Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!",
                        "image" => "svg/icon PHP Hosting_PHP Semua Versi.svg",
                    ],
                    [
                        "name" => "MySQL Versi 5.6",
                        "desc" => "Nikmati MySQL versi terharu, tercepat dan kaya akan fitur.",
                        "image" => "svg/icon PHP Hosting_My SQL.svg",
                    ],
                    [
                        "name" => "Panel Hosting cPanel",
                        "desc" => "Kelola website dengan panel canggih yang familiar di hall Anda.",
                        "image" => "svg/icon PHP Hosting_CPanel.svg",
                    ],
                    [
                        "name" => "Garansi Uptime 99.9%",
                        "desc" => "Data center yang mendukung kelangsungan website Anda 24/7.",
                        "image" => "svg/icon PHP Hosting_garansi uptime.svg",
                    ],
                    [
                        "name" => "Database lnnoDB Unlimited",
                        "desc" => "Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.",
                        "image" => "svg/icon PHP Hosting_InnoDB.svg",
                    ],
                    [
                        "name" => "Wildcard Remote MySQL",
                        "desc" => "Mendukung s/d 25 max_user_connections dan 100 max_connections.",
                        "image" => "svg/icon PHP Hosting_My SQL remote.svg",
                    ],
                ]
            ],
            "headline2" => [
                "text1" => "Mendukung Penuh Framework Laravel",
                "text2" => "Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda",
                "benefit" => [
                    "Install Laravel <b>1 klik</b> dengan Softaculous Installer.",
                    "Mendukung ekstensi PHP MCrypt, phar, mbstring, json, dan fileinfo.",
                    "Tersedia Composer dan SSH untuk menginstall packages pilihan Anda.",
                ],
                "nb" => "Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis",
                "image" => "svg/illustration banner support laravel hosting.svg",
                "button" => "Pilih Hosting Anda",
            ],
            "modules" => [
                "title" => "Modul Lengkap Untuk",
                "items" => [
                    "IcePHP",
                    "apc",
                    "apcu",
                    "apm",
                    "ares",
                    "bcmath",
                    "bcompiler",
                    "big_int",
                    "bitset",
                    "bloomy",
                    "bz2_filter",
                    "clamav",
                    "coin_acceptor",
                    "crack",
                    "dba",
                    "httph",
                    "uffman",
                    "idn",
                    "igbinary",
                    "imagick",
                    "imap",
                    "inclued",
                    "inotify",
                    "interbase",
                    "intl",
                    "ioncube_loader",
                    "ioncube_loader_4",
                    "jsmin",
                    "json",
                    "ldap",
                    "nd_pdo_mysql",
                    "oauth",
                    "oci8",
                    "odbc",
                    "opcache",
                    "pdf",
                    "pdo",
                    "pdo_dblib",
                    "pdo_firebird",
                    "pdo_mysql",
                    "pdo_odbc",
                    "pdo_pgsql",
                    "pdo_sqlite",
                    "pgsql",
                    "phalcon",
                    "stats",
                    "stem",
                    "stomp",
                    "suhosin",
                    "sybase_ct",
                    "sysvmsg",
                    "sysvsem",
                    "sysvshm",
                    "tidy",
                    "timezonedb",
                    "trader",
                    "transit",
                    "uploadprogress",
                    "uri_template",
                    "uuid",
                ],
            ],
            "headline3" => [
                "text1" => "Linux Hosting yang Stabil dengan Teknologi LVE",
                "text2" => "SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LIVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda.",
                "image" => "images/Image support.png",
                "button" => "Pilih Hosting Anda",
            ],
		];

		return view('landing', $data);
	}
}
