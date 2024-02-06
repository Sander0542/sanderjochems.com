<?php

use Carbon\Carbon;

return [
    'about' => [
        'name' => env('APP_NAME', 'Sander Jochems'),
        'title' => 'Cloud & Software Engineer',
        'location' => 'Eindhoven Area, Netherlands',
        'birthdate' => Carbon::parse('2001-06-07T00:00:00', 'UTC'),
        'about' => 'I am a Cloud & Software Engineer with the ability to develop Full-Stack and Cloud-Native applications. I am passionate about continuously expanding my knowledge of software and cloud. Among my favorite programming tools are C# and Terraform. I excel in crafting cloud-native solutions that can efficiently utilize cloud resources and services. I have a collaborative work style and enjoy providing leadership within a team.'
    ],
    'social' => [
        'github' => [
            'title' => 'Sander0542',
            'url' => 'https://github.com/Sander0542'
        ],
        'linkedin' => [
            'title' => 'Sander Jochems',
            'url' => 'https://www.linkedin.com/in/sander-jochems/'
        ],
        'email' => [
            'title' => 'contact@sanderjochems.com',
            'url' => 'mailto:contact@sanderjochems.com',
        ],
        'twitter' => [
            'title' => '@Sander0542',
            'url' => 'https://twitter.com/Sander0542'
        ],
    ],
    'educations' => [
        [
            'school' => 'Avans University of Applied Sciences',
            'study' => 'Information Technology',
            'degree' => 'Bachelor of Science',
            'startedAt' => Carbon::parse('2020-02-01T00:00:00', 'UTC'),
            'endedAt' => Carbon::parse('2023-01-31T00:00:00', 'UTC')
        ],
        [
            'school' => 'Summa College',
            'study' => 'Computer Software and Media Applications',
            'degree' => 'MBO Level 4',
            'startedAt' => Carbon::parse('2017-08-01T00:00:00', 'UTC'),
            'endedAt' => Carbon::parse('2020-01-31T00:00:00', 'UTC')
        ],
        [
            'school' => 'Strabrecht College',
            'study' => 'Voortgezet middelbaar onderwijs (VMBO)',
            'degree' => 'High School Diploma',
            'startedAt' => Carbon::parse('2013-08-01T00:00:00', 'UTC'),
            'endedAt' => Carbon::parse('2017-07-31T00:00:00', 'UTC')
        ],
        [
            'school' => 'Nutsbasisschool de Ganzebloem',
            'study' => 'Basisonderwijs',
            'degree' => '',
            'startedAt' => Carbon::parse('2005-08-01T00:00:00', 'UTC'),
            'endedAt' => Carbon::parse('2013-07-31T00:00:00', 'UTC')
        ]
    ],
    'experiences' => [
        [
            'company' => 'Capgemini',
            'positions' => [
                [
                    'name' => 'Cloud Engineer',
                    'type' => 'Full-time',
                    'location' => 'Reykjavikplein 1, 3543 KA Utrecht',
                    'startedAt' => Carbon::parse('2024-02-01T00:00:00', 'UTC'),
                    'endedAt' => null
                ]
            ]
        ],
        [
            'company' => 'Whyellow',
            'positions' => [
                [
                    'name' => 'Cloud & Software Engineer',
                    'type' => 'Full-time',
                    'location' => 'Achtseweg Zuid 151E, 5651 GW Eindhoven',
                    'startedAt' => Carbon::parse('2023-02-06T00:00:00', 'UTC'),
                    'endedAt' => Carbon::parse('2024-01-31T00:00:00', 'UTC')
                ],
                [
                    'name' => 'Software Engineer (Intern)',
                    'type' => 'Internship',
                    'location' => 'Achtseweg Zuid 151E, 5651 GW Eindhoven',
                    'startedAt' => Carbon::parse('2022-08-29T00:00:00', 'UTC'),
                    'endedAt' => Carbon::parse('2023-01-27T00:00:00', 'UTC')
                ]
            ]
        ],
        [
            'company' => 'Kodular',
            'positions' => [
                [
                    'name' => 'Co-Founder',
                    'type' => 'Permanent',
                    'location' => 'Eindhoven Area, Netherlands',
                    'startedAt' => Carbon::parse('2017-07-01T00:00:00', 'UTC'),
                    'endedAt' => Carbon::parse('2023-12-31T00:00:00', 'UTC')
                ]
            ]
        ],
        [
            'company' => 'ASB Security',
            'positions' => [
                [
                    'name' => 'Software Developer (Intern)',
                    'type' => 'Internship',
                    'location' => 'Boschdijk 720, 5624 CL Eindhoven',
                    'startedAt' => Carbon::parse('2019-08-01T00:00:00', 'UTC'),
                    'endedAt' => Carbon::parse('2019-12-31T00:00:00', 'UTC')
                ]
            ]
        ],
        [
            'company' => 'Summa College',
            'positions' => [
                [
                    'name' => 'Software Developer (Intern)',
                    'type' => 'Internship',
                    'location' => 'Kronehoefstraat 76, 5622 AC Eindhoven',
                    'startedAt' => Carbon::parse('2018-08-01T00:00:00', 'UTC'),
                    'endedAt' => Carbon::parse('2019-02-01T00:00:00', 'UTC')
                ]
            ]
        ],
        [
            'company' => 'Jumbo Supermarkten',
            'positions' => [
                [
                    'name' => 'Stocker',
                    'type' => 'Part-time',
                    'location' => 'Coevering 5, 5665 GA Geldrop',
                    'startedAt' => Carbon::parse('2017-03-01T00:00:00', 'UTC'),
                    'endedAt' => Carbon::parse('2018-08-31T00:00:00', 'UTC')
                ]
            ]
        ]
    ],
    'projects' => [
        [
            'name' => 'Kodular',
            'description' => 'Kodular is an online suite for mobile app development. It mainly provides a free drag-and-drop Android app creator without coding, based on MIT AppInventor. It brings lots of new features like new components and blocks. It also provides a free online app store to share and distribute apps and an extensions IDE for advanced users.',
            'url' => 'https://kodular.io/',
            'imageUrl' => '/assets/projects/kodular.webp',
            'startedAt' => Carbon::parse('2020-01-16T00:00:00', 'UTC'),
            'endedAt' => null
        ],
        [
            'name' => 'Network Manager',
            'description' => 'Simple web application that lets you manage the used hosts in your networks. It supports multiple networks based on their subnet and size. Within each host you can specify the ports that are used and the services that are running on them.',
            'url' => 'https://github.com/Sander0542/Network-Manager',
            'imageUrl' => '/assets/projects/network-manager.png',
            'startedAt' => Carbon::parse('2021-12-21T00:00:00', 'UTC'),
            'endedAt' => null
        ]
    ],
    'skills' => [
        'Cloud Computing',
        'Infrastructure as Code',
        'Containers',
        'Object-oriented programming',
        'DevOps',
        'Full-stack development',
        'No-Code',
        'Cloud Native'
    ]
];
