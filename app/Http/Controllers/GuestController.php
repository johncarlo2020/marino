<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Products;

class GuestController extends Controller
{

    public function index()
    {
        $this->sharedData();
        return view('welcome');
    }

    public function sharedData()
    {
        //to-do replace this data base on admin
        $iconData = [
            [
            'iconUrl' => asset('images/icons/telephone.svg'),
            'value' => '+63287904028',
            ],
            [
                'iconUrl' => asset('images/icons/email.svg'),
                'value' => 'official@marinodatatopupph.com',
            ],
            [
                'iconUrl' => asset('images/icons/location-marker.svg'),
                'value' => '12 Floor Room 1222 Times Plaza Building UN Ave. Ermita Manila',
            ],
        ];

        $companyName = 'Marino Data Top Up Corp';

        $missionText =  'To help Filipino seafarers and travelers connected to their love ones in an easy and quick service for a very affordable price';

        $navLinks = [
            [
                'linkUrl' => '#',
                'page' => 'Home',
                'child' => false,
            ],
            [
                'linkUrl' => '#',
                'page' => 'Products',
                'child' => true,
                'children' => [
                    [
                        'linkUrl' => '#',
                        'page' => 'Product 1',
                    ],
                    [
                        'linkUrl' => '#',
                        'page' => 'Product 2',
                    ],
                ],
            ],
            [
                'linkUrl' => '#',
                'page' => 'Promotions',
                'child' => false,
            ],
            [
                'linkUrl' => '#',
                'page' => 'Top up offer',
                'child' => false,
            ],
            [
                'linkUrl' => '#',
                'page' => 'Contact us',
                'child' => false,
            ],
            [
                'linkUrl' => '#',
                'page' => 'Our Clients',
                'child' => false,
            ],
            [
                'linkUrl' => '#',
                'page' => 'About us',
                'child' => false,
            ],
        ];

        // Modify the "Products" link without looping through the array
        $footerNavLinks = array_map(function ($link) {
            if ($link['page'] === 'Products') {
                $link['child'] = false;
                foreach ($link['children'] as &$childLink) {
                    $childLink['child'] = false;
                }
            }
            return $link;
        }, $navLinks);

        $iconDataFooter = [

            [
            'iconUrl' => asset('images/icons/whatsapp.svg'),
            'value' => '+639159966353',
            ],
            [
                'iconUrl' => asset('images/icons/mobile.svg'),
                'value' => '+639159966353 +639762535769',
            ],
            [
                'iconUrl' => asset('images/icons/telephone.svg'),
                'value' => '+63287904028',
            ],
            [
                'iconUrl' => asset('images/icons/email.svg'),
                'value' => 'official@marinodatatopupph.com',
            ],
            [
                'iconUrl' => asset('images/icons/location-marker.svg'),
                'value' => '12 Floor Room 1222 Times Plaza Building UN Ave. Ermita Manila',
            ],
            [
                'iconUrl' => asset('images/icons/fb-icon.svg'),
                'value' => 'FLORA MAE BAÑAS-LLANERA',
            ],
        ];

        $learnMoreText = 'Learn more';

        $buyNowText = 'Buy now';


        $servicess = [
            [
                'image' =>  asset('images/icons/satelite.svg'),
                'title' => 'Worldwide connectivity',
                'description' => 'Seafarers can use Marino sim all around the world in multiple countries. No need to look for a local sim card anymore or rely on slow and expensive satellite connection.'
            ],
            [
                'image' =>  asset('images/icons/moneyhand.svg'),
                'title' => 'Amazing prices',
                'description' => 'provides almost local prices and helps you save %90 on your roaming costs'
            ],
            [
                'image' =>  asset('images/icons/phonesignal.svg'),
                'title' => 'Simple to use',
                'description' => 'Easy to use and configure with our instruction will guide you to enjoy our products.'
            ],
            [
                'image' =>  asset('images/icons/globe.svg'),
                'title' => 'Data-only packages',
                'description' => 'Offers convenient data-only packages that can cover your voyage destinations seamlessly.'
            ],
            [
                'image' =>  asset('images/icons/pcup.svg'),
                'title' => 'Top up now pay later',
                'description' => 'We also offer top up now, pay later, further enhancing their experience with our services'
            ],
            [
                'image' =>  asset('images/icons/customer-service.svg'),
                'title' => 'Customer support',
                'description' => 'Our multilingual customer support team is available around the clock in 3 different time zones to make sure all your support needs are answered immediately.'
            ],
        ];

        $bannerText = "Unbeatable products for our Marino's we love!";

        $pruductsHeading = 'Our Products';
        $productSectionDescription = 'We offer wide range of international simcards and data packages that are available to ensure seamless connectivity across different countries and regions. Our company also offers 24/7 customer support to assist users with any technical issues or inquiries they may have';

        $products = Products::get();
        // $products = [
        //     [
        //         'image' => asset('images/icons/customer-service.svg'),
        //         'product-type' => 'WORLDWIDE POCKET WIFI',
        //         'product-name' => 'Pokefi',
        //         'product-details' => [
        //             'FREE 5GB (No expiry)',
        //             'FREE you from changing sim hassles',
        //             'Worldwide Coverage (100+ countries)',
        //             'Easy & Ready to use',
        //         ],
        //         'reaload' => 'RE-LOADABLE',
        //         'shopUrl' => 'https://getbootstrap.com/docs/5.2/components/card/#about',
        //         'price' => 299
        //     ],
        //     [
        //         'image' => asset('images/icons/customer-service.svg'),
        //         'product-type' => 'WORLDWIDE POCKET WIFI',
        //         'product-name' => 'Pokefi',
        //         'product-details' => [
        //             'FREE 5GB (No expiry)',
        //             'FREE you from changing sim hassles',
        //             'Worldwide Coverage (100+ countries)',
        //             'Easy & Ready to use',
        //         ],
        //         'reaload' => 'RE-LOADABLE',
        //         'shopUrl' => 'https://getbootstrap.com/docs/5.2/components/card/#about',
        //         'price' => 299
        //     ],
        //     [
        //         'image' => asset('images/icons/customer-service.svg'),
        //         'product-type' => 'WORLDWIDE POCKET WIFI',
        //         'product-name' => 'Pokefi',
        //         'product-details' => [
        //             'FREE 5GB (No expiry)',
        //             'FREE you from changing sim hassles',
        //             'Worldwide Coverage (100+ countries)',
        //             'Easy & Ready to use',
        //         ],
        //         'reaload' => 'RE-LOADABLE',
        //         'shopUrl' => 'https://getbootstrap.com/docs/5.2/components/card/#about',
        //         'price' => 299
        //     ],
        //     [
        //         'image' => asset('images/icons/customer-service.svg'),
        //         'product-type' => 'WORLDWIDE POCKET WIFI',
        //         'product-name' => 'Pokefi',
        //         'product-details' => [
        //             'FREE 5GB (No expiry)',
        //             'FREE you from changing sim hassles',
        //             'Worldwide Coverage (100+ countries)',
        //             'Easy & Ready to use',
        //         ],
        //         'reaload' => 'RE-LOADABLE',
        //         'shopUrl' => 'https://getbootstrap.com/docs/5.2/components/card/#about',
        //         'price' => 299
        //     ],
        //     [
        //         'image' => asset('images/icons/customer-service.svg'),
        //         'product-type' => 'WORLDWIDE POCKET WIFI',
        //         'product-name' => 'Pokefi',
        //         'product-details' => [
        //             'FREE 5GB (No expiry)',
        //             'FREE you from changing sim hassles',
        //             'Worldwide Coverage (100+ countries)',
        //             'Easy & Ready to use',
        //         ],
        //         'reaload' => 'RE-LOADABLE',
        //         'shopUrl' => 'https://getbootstrap.com/docs/5.2/components/card/#about',
        //         'price' => 299
        //     ],
        //     [
        //         'image' => asset('images/icons/customer-service.svg'),
        //         'product-type' => 'WORLDWIDE POCKET WIFI',
        //         'product-name' => 'Pokefi',
        //         'product-details' => [
        //             'FREE 5GB (No expiry)',
        //             'FREE you from changing sim hassles',
        //             'Worldwide Coverage (100+ countries)',
        //             'Easy & Ready to use',
        //         ],
        //         'reaload' => 'RE-LOADABLE',
        //         'shopUrl' => 'https://getbootstrap.com/docs/5.2/components/card/#about',
        //         'price' => 299
        //     ],

        // ];

        $testimonialHeading = 'Our Clients';

        $testimonials = Testimonial::get();

        view()->share([
            'iconData' => $iconData,
            'companyName' => $companyName,
            'navLinks' => $navLinks,
            'footerNavLinks' => $footerNavLinks,
            'iconDataFooter' => $iconDataFooter,
            'missionText' => $missionText,
            'learnMoreText' => $learnMoreText,
            'buyNowText' => $buyNowText,
            'servicess' => $servicess,
            'bannerText' => $bannerText,
            'pruductsHeading' => $pruductsHeading,
            'productSectionDescription' => $productSectionDescription,
            'products' => $products,
            'testimonialHeading' => $testimonialHeading,
            'testimonials' => $testimonials
        ]);

    }

}
