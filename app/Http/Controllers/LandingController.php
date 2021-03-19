<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
	public function index()
	{
		$data = [
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
                "text2" => "Cepat blasfa asda",
                "benefit" => [
                    "asdad",
                    "asdad",
                    "asdad",
                ],
                "image" => "illustration banner PHP hosting-01.svg",
            ],
            "techs" => [
              [
                  "name" => "PHP Zend",
                  "image" => "placeholder.png",
              ],
              [
                  "name" => "PHP Composer",
                  "image" => "placeholder.png",
              ],
              [
                  "name" => "PHP ionCube Loader",
                  "image" => "placeholder.png",
              ],
            ],
            "paket" => [
                "title" => "Paket Hosting singap",
                "subtitle" => "diskonasd asdsa d",
                "type" => [
                    [
                        "name" => "Bayi",
                        "price1" => 14900,
                        "price2" => 19900,
                        "reg_count" => 938,
                        "feature" => "<p><strong>0.5X RESOURCE POWER</strong><br /><strong>500 MB</strong> Disk Space<br /><strong>Unlimited</strong> Bandwidth<br /><strong>Unlimited</strong> Database<br /><strong>1</strong> Domain<br /><strong>Instant</strong> Backup<br /><strong>Unlimited SSL</strong> Gratis Selamanya</p>",
                    ],
                    [
                        "name" => "Manusia",
                        "price1" => 14900,
                        "price2" => 19900,
                        "reg_count" => 938,
                        "feature" => "<p><strong>0.5X RESOURCE POWER</strong><br /><strong>500 MB</strong> Disk Space<br /><strong>Unlimited</strong> Bandwidth<br /><strong>Unlimited</strong> Database<br /><strong>1</strong> Domain<br /><strong>Instant</strong> Backup<br /><strong>Unlimited SSL</strong> Gratis Selamanya</p>",
                    ],
                ]
            ],
            "benefit" => [
                "title" => "Powerfull asdasa",
                "items" => [
                    "asda",
                    "asda",
                    "asda",
                    "asda",
                    "asda",
                    "asda",
                ]
            ],
            "fitur" => [
                "title" => "Semua Paket asd",
                "items" => [
                    [
                        "name" => "PHP Semua Versi",
                        "desc" => "Pilih Mulai",
                        "image" => "icon PHP Hosting_PHP Semua Versi.svg",
                    ],
                    [
                        "name" => "PHP Semua Versi",
                        "desc" => "Pilih Mulai",
                        "image" => "icon PHP Hosting_PHP Semua Versi.svg",
                    ],
                    [
                        "name" => "PHP Semua Versi",
                        "desc" => "Pilih Mulai",
                        "image" => "icon PHP Hosting_PHP Semua Versi.svg",
                    ],
                    [
                        "name" => "PHP Semua Versi",
                        "desc" => "Pilih Mulai",
                        "image" => "icon PHP Hosting_PHP Semua Versi.svg",
                    ],
                    [
                        "name" => "PHP Semua Versi",
                        "desc" => "Pilih Mulai",
                        "image" => "icon PHP Hosting_PHP Semua Versi.svg",
                    ],
                    [
                        "name" => "PHP Semua Versi",
                        "desc" => "Pilih Mulai",
                        "image" => "icon PHP Hosting_PHP Semua Versi.svg",
                    ],
                ]
            ],
            "headline2" => [
                "text1" => "PHP Hosting",
                "text2" => "Cepat blasfa asda",
                "benefit" => [
                    "asdad",
                    "asdad",
                    "asdad",
                ],
                "image" => "illustration banner PHP hosting-01.svg",
            ],
            "modules" => [
                "title" => "Modul Lengkap Untuk",
                "items" => [
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                    "asdad",
                ],
            ],
            "headline3" => [
                "text1" => "Linux Hosting yang stabil asda da",
                "text2" => "Cepat blasfa asda",
                "benefit" => [
                    "asdad",
                    "asdad",
                    "asdad",
                ],
                "image" => "images/Image support.png",
            ],
		];

		return view('landing', $data);
	}
}
