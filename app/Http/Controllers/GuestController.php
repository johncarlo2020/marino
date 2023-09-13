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

    public function aboutUs()
    {
        $this->sharedData();
        return view('aboutus');
    }

    public function products() {
        $this->sharedData();
        return view('products');
    }

    public function clients() {
        $this->sharedData();
        return view('clients');
    }

    public function contact() {
        $this->sharedData();
        return view('contact');
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
                'linkUrl' =>  route('home'),
                'page' => 'Home',
                'child' => false,
            ],
            [
                'linkUrl' => route('products'),
                'page' => 'Products',
                'child' => false,
                'children' => [
                    [
                        'linkUrl' => '#',
                        'page' => 'SIM',
                    ],
                    [
                        'linkUrl' => '#',
                        'page' => 'Product 2',
                    ],
                ],
            ],
            [
                'linkUrl' => route('contact'),
                'page' => 'Contact us',
                'child' => false,
            ],
            [
                'linkUrl' => route('clients'),
                'page' => 'Our Clients',
                'child' => false,
            ],
            [
                'linkUrl' => route('about-us'),
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

        $testimonialHeading = 'Our Clients';

        $aboutUsHeading = 'About Us';
        $ourBrands = 'Our Brands';

        $aboutUsContent1 = [
            'title' => $aboutUsHeading,
            'content' => [
                [
                    'text' => 'By establishing partnerships with major network providers globally, our company aims to create a comprehensive service that offers reliable and high-speed internet access to seafarers and travelers, enabling them to stay connected with their loved ones and access important information while on the go. This initiative not only caters to the growing demand for connectivity at sea and in remote areas but also positions us as a leading player in providing data sim cards worldwide.'
                ],
            ]
        ];

        $aboutUsContent2 = [
            'title' => $ourBrands,
            'content' => [
                [
                    'text' => 'We offer wide range of international sim cards and data packages that are available to ensure seamless connectivity across different countries and regions. Our company also offers 24/7 customer support to assist users with any technical issues or inquiries they may have. Our Brands PRODUCTS OUR By establishing partnerships with major network providers globally, our company aims to create a comprehensive service that offers reliable and high-speed internet access to seafarers and travelers, enabling them to stay connected with their loved ones and access important information while on the go.'
                ],
                [
                    'text' => 'This initiative not only caters to the growing demand for connectivity at sea and in remote areas but also positions us as a leading player in providing data sim cards worldwide. International Simcard and Data 3uk AIS Talktiko Talk2all Pokefi We also offer top up now, pay later, further enhancing their experience with our services'
                ],
            ]
        ];

        $brands = [
            [
                'imageUrl' => asset('images/icons/pcup.svg')
            ],
            [
                'imageUrl' => asset('images/icons/pcup.svg')
            ],
            [
                'imageUrl' => asset('images/icons/pcup.svg')
            ],
            [
                'imageUrl' => asset('images/icons/pcup.svg')
            ],
        ];

        $aboutUsImg = asset('images/manAtSea.png');

        $testimonials = Testimonial::get();

        $productsList = [
                [
                    'image' => asset('images/products.png'),
                    'name' => 'TALKTIKO SIM',
                    'price' => 299,
                    'type' => 'SIM',
                    'link' => '#',
                    'countries' => 'Australia 5G, Bahrain 5G, Bangladesh, Brunei, Cambodia, China 5G, Georgia, Guam, Hong Kong 5G, India, Indonesia 5G, Israel 5G, Japan 5G, Jordan, Kazakhstan, Kuwait 5G, Laos, Macau, Malaysia, Mongolia, Myanmar (New), Nepal, Oman 5G, Pakistan, Philippines 5G, Qatar 5G, Singapore 5G, South Korea 5G, Sri Lanka, Taiwan, Tibet 5G, Uzbekistan, Vietnam 5G, Thailand 5G',
                    'notes' => 'User reported poor connection
                                AIS Roaming Partners by country listed here.
                                For India: Not Available in Diskit,Gulmarg, Jammu,Kargil, Kashmir, Katra, Leh, Plan Bandipora and Srinagar. (Update Sep 10,2022)
                                The use of 4G or 3G depends on the capabilities of the overseas service provider network.
                                1 Global SIM can be used in one or many countries
                                AIS will roam on its partner networks.',
                    'accordion' => [
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'Packages',
                            'visibility' => true
                        ],
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'how to top up',
                            'visibility' => true
                        ],
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'mode of payment',
                            'visibility' => true
                        ],
                    ]

                ],
                [
                    'image' => asset('images/products.png'),
                    'name' => 'TALKTIKO SIM',
                    'price' => 299,
                    'type' => 'SIM',
                    'link' => '#',
                    'countries' => 'Australia 5G, Bahrain 5G, Bangladesh, Brunei, Cambodia, China 5G, Georgia, Guam, Hong Kong 5G, India, Indonesia 5G, Israel 5G, Japan 5G, Jordan, Kazakhstan, Kuwait 5G, Laos, Macau, Malaysia, Mongolia, Myanmar (New), Nepal, Oman 5G, Pakistan, Philippines 5G, Qatar 5G, Singapore 5G, South Korea 5G, Sri Lanka, Taiwan, Tibet 5G, Uzbekistan, Vietnam 5G, Thailand 5G',
                    'notes' => 'User reported poor connection
                                AIS Roaming Partners by country listed here.
                                For India: Not Available in Diskit,Gulmarg, Jammu,Kargil, Kashmir, Katra, Leh, Plan Bandipora and Srinagar. (Update Sep 10,2022)
                                The use of 4G or 3G depends on the capabilities of the overseas service provider network.
                                1 Global SIM can be used in one or many countries
                                AIS will roam on its partner networks.',
                    'accordion' => [
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'Packages',
                            'visibility' => true
                        ],
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'how to top up',
                            'visibility' => true
                        ],
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'mode of payment',
                            'visibility' => true
                        ],
                    ]

                ],
                [
                    'image' => asset('images/products.png'),
                    'name' => 'TALKTIKO SIM',
                    'price' => 299,
                    'type' => 'SIM',
                    'link' => '#',
                    'countries' => 'Australia 5G, Bahrain 5G, Bangladesh, Brunei, Cambodia, China 5G, Georgia, Guam, Hong Kong 5G, India, Indonesia 5G, Israel 5G, Japan 5G, Jordan, Kazakhstan, Kuwait 5G, Laos, Macau, Malaysia, Mongolia, Myanmar (New), Nepal, Oman 5G, Pakistan, Philippines 5G, Qatar 5G, Singapore 5G, South Korea 5G, Sri Lanka, Taiwan, Tibet 5G, Uzbekistan, Vietnam 5G, Thailand 5G',
                    'notes' => 'User reported poor connection
                                AIS Roaming Partners by country listed here.
                                For India: Not Available in Diskit,Gulmarg, Jammu,Kargil, Kashmir, Katra, Leh, Plan Bandipora and Srinagar. (Update Sep 10,2022)
                                The use of 4G or 3G depends on the capabilities of the overseas service provider network.
                                1 Global SIM can be used in one or many countries
                                AIS will roam on its partner networks.',
                    'accordion' => [
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'Packages',
                            'visibility' => true
                        ],
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'how to top up',
                            'visibility' => true
                        ],
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'mode of payment',
                            'visibility' => true
                        ],
                    ]

                ],
                [
                    'image' => asset('images/products.png'),
                    'name' => 'TALKTIKO SIM',
                    'price' => 299,
                    'type' => 'SIM',
                    'link' => '#',
                    'countries' => 'Australia 5G, Bahrain 5G, Bangladesh, Brunei, Cambodia, China 5G, Georgia, Guam, Hong Kong 5G, India, Indonesia 5G, Israel 5G, Japan 5G, Jordan, Kazakhstan, Kuwait 5G, Laos, Macau, Malaysia, Mongolia, Myanmar (New), Nepal, Oman 5G, Pakistan, Philippines 5G, Qatar 5G, Singapore 5G, South Korea 5G, Sri Lanka, Taiwan, Tibet 5G, Uzbekistan, Vietnam 5G, Thailand 5G',
                    'notes' => 'User reported poor connection
                                AIS Roaming Partners by country listed here.
                                For India: Not Available in Diskit,Gulmarg, Jammu,Kargil, Kashmir, Katra, Leh, Plan Bandipora and Srinagar. (Update Sep 10,2022)
                                The use of 4G or 3G depends on the capabilities of the overseas service provider network.
                                1 Global SIM can be used in one or many countries
                                AIS will roam on its partner networks.',
                    'accordion' => [
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'Packages',
                            'visibility' => true
                        ],
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'how to top up',
                            'visibility' => true
                        ],
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'mode of payment',
                            'visibility' => true
                        ],
                    ]

                ],
                [
                    'image' => asset('images/products.png'),
                    'name' => 'TALKTIKO SIM',
                    'price' => 299,
                    'type' => 'SIM',
                    'link' => '#',
                    'countries' => 'Australia 5G, Bahrain 5G, Bangladesh, Brunei, Cambodia, China 5G, Georgia, Guam, Hong Kong 5G, India, Indonesia 5G, Israel 5G, Japan 5G, Jordan, Kazakhstan, Kuwait 5G, Laos, Macau, Malaysia, Mongolia, Myanmar (New), Nepal, Oman 5G, Pakistan, Philippines 5G, Qatar 5G, Singapore 5G, South Korea 5G, Sri Lanka, Taiwan, Tibet 5G, Uzbekistan, Vietnam 5G, Thailand 5G',
                    'notes' => 'User reported poor connection
                                AIS Roaming Partners by country listed here.
                                For India: Not Available in Diskit,Gulmarg, Jammu,Kargil, Kashmir, Katra, Leh, Plan Bandipora and Srinagar. (Update Sep 10,2022)
                                The use of 4G or 3G depends on the capabilities of the overseas service provider network.
                                1 Global SIM can be used in one or many countries
                                AIS will roam on its partner networks.',
                    'accordion' => [
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'Packages',
                            'visibility' => true
                        ],
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'how to top up',
                            'visibility' => true
                        ],
                        [
                            'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos',
                            'title' => 'mode of payment',
                            'visibility' => true
                        ],
                    ]

                ],

            ];

            $ourClientHeading = 'What our client says?';
            $ourClientHeadingDescription = 'We are very fortunate to have formed excellent partnerships with many of our clients. And we’ve formed more than just working relationships with them; we have formed true friendships. Here’s what they’re saying about us.';

            $testimonialList2 = [
                [
                    'name' => 'Capt. KimSeowon',
                    'position' => 'Korean Captain from Pan Ocean',
                    'rating' => 4,
                    'message' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet',
                    'image' => asset('images/products.png')
                ] ,
                [
                    'name' => 'Capt. KimSeowon',
                    'position' => 'Korean Captain from Pan Ocean',
                    'rating' => 4,
                    'message' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet',
                    'image' => asset('images/products.png')
                ] ,
                [
                    'name' => 'Capt. KimSeowon',
                    'position' => 'Korean Captain from Pan Ocean',
                    'rating' => 4,
                    'message' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet',
                    'image' => asset('images/products.png')
                ] ,
                [
                    'name' => 'Capt. KimSeowon',
                    'position' => 'Korean Captain from Pan Ocean',
                    'rating' => 4,
                    'message' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet',
                    'image' => asset('images/products.png')
                ] ,
                [
                    'name' => 'Capt. KimSeowon',
                    'position' => 'Korean Captain from Pan Ocean',
                    'rating' => 4,
                    'message' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet',
                    'image' => asset('images/products.png')
                ] ,
            ];

            $contactHeading = 'Contact us';
            $contactHeadingDescription = '';
            $contactUsImg = asset('images/emailpic.png');
            $contactContent1 = [
                'title' => 'Have questions? Shoot us an email.',
                'content' => [
                    [
                        'text' => 'By establishing partnerships with major network providers globally, our company aims to create a comprehensive service that offers reliable and high-speed internet access to seafarers and travelers, enabling them to stay connected with their loved ones and access important information while on the go. This initiative not only caters to the growing demand for connectivity at sea and in remote areas but also positions us as a leading player in providing data sim cards worldwide.'
                    ],
                ]
            ];


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
            'testimonials' => $testimonials,
            'aboutUsContent1' => $aboutUsContent1,
            'aboutUsImg' => $aboutUsImg,
            'ourBrands' => $ourBrands,
            'aboutUsContent2' => $aboutUsContent2,
            'brands' => $brands,
            'productsList' => $productsList,
            'ourClientHeading' => $ourClientHeading,
            'ourClientHeadingDescription' => $ourClientHeadingDescription,
            'testimonialList2' => $testimonialList2,
            'contactHeading' => $contactHeading,
            'contactHeadingDescription' => $contactHeadingDescription,
            'contactContent1' => $contactContent1,
            'contactUsImg' => $contactUsImg
        ]);

    }

}
