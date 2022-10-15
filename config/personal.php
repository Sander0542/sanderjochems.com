<?php

return [
    'about' => [
        'name' => env('APP_NAME', 'Sander Jochems'),
        'title' => 'Software Developer',
        'location' => 'Eindhoven Area, Netherlands',
        'birthdate' => '2001-06-07T00:00:00',
        'about' => 'I am a Software Engineering student able to build Websites, Desktop Applications and Mobile Apps. I love to learn new programming languages and new frameworks. My favorite languages are PHP, Java and C#. I am skilled at writing well-designed, testable and optimized code using modern solutions. I am a team player who likes to guide the team.'
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
            'startedAt' => '2020-02-01T00:00:00',
            'endedAt' => '2023-01-31T00:00:00'
        ],
        [
            'school' => 'Summa College',
            'study' => 'Computer Software and Media Applications',
            'degree' => 'MBO Level 4',
            'startedAt' => '2017-08-01T00:00:00',
            'endedAt' => '2020-01-31T00:00:00'
        ],
        [
            'school' => 'Strabrecht College',
            'study' => 'Voortgezet middelbaar onderwijs (VMBO)',
            'degree' => 'High School Diploma',
            'startedAt' => '2013-08-01T00:00:00',
            'endedAt' => '2017-07-31T00:00:00'
        ],
        [
            'school' => 'Nutsbasisschool de Ganzebloem',
            'study' => 'Basisonderwijs',
            'degree' => '',
            'startedAt' => '2005-08-01T00:00:00',
            'endedAt' => '2013-07-31T00:00:00'
        ]
    ],
    'experiences' => [
        [
            'company' => 'Whyellow',
            'titles' => [
                [
                    'title' => 'Intern Software Engineer',
                    'type' => 'Internship',
                    'location' => 'Achtseweg Zuid 151E, 5651 GW Eindhoven',
                    'startedAt' => '2022-08-01T00:00:00',
                    'endedAt' => null
                ]
            ]
        ],
        [
            'company' => 'Kodular',
            'titles' => [
                [
                    'title' => 'Vice President of Digital Tech',
                    'type' => 'Contract',
                    'location' => 'Eindhoven Area, Netherlands',
                    'startedAt' => '2019-08-31T00:00:00',
                    'endedAt' => null
                ],
                [
                    'title' => 'Chief Executive Officer',
                    'type' => 'Self-employed',
                    'location' => 'Eindhoven Area, Netherlands',
                    'startedAt' => '2017-07-01T00:00:00',
                    'endedAt' => '2019-08-30T00:00:00'
                ]
            ]
        ],
        [
            'company' => 'ASB Security',
            'titles' => [
                [
                    'title' => 'Intern',
                    'type' => 'Internship',
                    'location' => 'Boschdijk 720, 5624 CL Eindhoven',
                    'startedAt' => '2019-08-01T00:00:00',
                    'endedAt' => '2019-12-31T00:00:00'
                ]
            ]
        ],
        [
            'company' => 'Summa College',
            'titles' => [
                [
                    'title' => 'Intern',
                    'type' => 'Internship',
                    'location' => 'Kronehoefstraat 76, 5622 AC Eindhoven',
                    'startedAt' => '2018-08-01T00:00:00',
                    'endedAt' => '2019-02-01T00:00:00'
                ]
            ]
        ],
        [
            'company' => 'Jumbo Supermarkten',
            'titles' => [
                [
                    'title' => 'Stocker',
                    'type' => 'Part-time',
                    'location' => 'Coevering 5, 5665 GA Geldrop',
                    'startedAt' => '2017-03-01T00:00:00',
                    'endedAt' => '2018-08-31T00:00:00'
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
            'startedAt' => '2020-01-16T00:00:00',
            'endedAt' => null
        ],
        [
            'name' => 'Network Manager',
            'description' => 'Simple web application that lets you manage the used hosts in your networks. It supports multiple networks based on their subnet and size. Within each host you can specify the ports that are used and the services that are running on them.',
            'url' => 'https://github.com/Sander0542/Network-Manager',
            'imageUrl' => '/assets/projects/network-manager.png',
            'startedAt' => '2021-12-21T00:00:00',
            'endedAt' => null
        ]
    ],
    'skills' => [
        'C#',
        'PHP',
        'Flutter',
        'Java',
        'JavaScript',
        'Android',
        'SQL',
        'HTML & CSS'
    ]
];
