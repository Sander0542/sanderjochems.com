<?php

use Carbon\Carbon;

return [
    'about' => [
        'name' => env('APP_NAME', 'Sander Jochems'),
        'title' => 'Cloud Engineer',
        'location' => 'Utrecht, Netherlands',
        'birthdate' => Carbon::parse('2001-06-07T00:00:00', 'UTC'),
        'about' => 'I\'m Sander — a Cloud & Software Engineer based in Utrecht.<br/>I enjoy designing and building reliable, scalable systems, and I like turning complex problems into simple, maintainable solutions.',
        'contact' => 'Want to talk about a project, role, or collaboration?<br/>Feel free to reach out — I\'m always open to interesting opportunities.'
    ],
    'social' => [
        'email' => [
            'header' => 'Email',
            'title' => 'contact@sanderjochems.com',
            'url' => 'mailto:contact@sanderjochems.com',
        ],
        'linkedin' => [
            'header' => 'LinkedIn',
            'title' => 'Sander Jochems',
            'url' => 'https://www.linkedin.com/in/sander-jochems/'
        ],
        'github' => [
            'header' => 'GitHub',
            'title' => 'Sander0542',
            'url' => 'https://github.com/Sander0542'
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
                    'name' => 'Cloud Engineer Consultant',
                    'type' => 'Full-time',
                    'location' => 'Utrecht, Netherlands',
                    'startedAt' => Carbon::parse('2024-02-01T00:00:00', 'UTC'),
                    'endedAt' => null
                ]
            ]
        ],
        [
            'company' => 'Equigy',
            'positions' => [
                [
                    'name' => 'Cloud Engineer (via Capgemini)',
                    'type' => 'Contract',
                    'location' => 'Netherlands',
                    'startedAt' => Carbon::parse('2024-10-17T00:00:00', 'UTC'),
                    'endedAt' => null
                ]
            ]
        ],
        [
            'company' => 'KPN',
            'positions' => [
                [
                    'name' => 'DevOps Engineer (via Capgemini)',
                    'type' => 'Contract',
                    'location' => 'Amsterdam, Netherlands',
                    'startedAt' => Carbon::parse('2024-04-01T00:00:00', 'UTC'),
                    'endedAt' => Carbon::parse('2024-10-16T00:00:00', 'UTC')
                ]
            ]
        ],
        [
            'company' => 'Whyellow',
            'positions' => [
                [
                    'name' => 'Cloud & Software Engineer',
                    'type' => 'Full-time',
                    'location' => 'Eindhoven, Netherlands',
                    'startedAt' => Carbon::parse('2023-02-06T00:00:00', 'UTC'),
                    'endedAt' => Carbon::parse('2024-01-31T00:00:00', 'UTC')
                ],
                [
                    'name' => 'Software Engineer (Intern)',
                    'type' => 'Internship',
                    'location' => 'Eindhoven, Netherlands',
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
                    'location' => 'Eindhoven, Netherlands',
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
                    'location' => 'Eindhoven, Netherlands',
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
                    'location' => 'Eindhoven, Netherlands',
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
                    'location' => 'Geldrop, Netherlands',
                    'startedAt' => Carbon::parse('2017-03-01T00:00:00', 'UTC'),
                    'endedAt' => Carbon::parse('2018-08-31T00:00:00', 'UTC')
                ]
            ]
        ]
    ],
    'projects' => [
        [
            'name' => 'Kodular',
            'description' => ' A no-code platform for building Android apps using a drag-and-drop interface. I worked on the platform\'s architecture, scalability, and core features, helping creators publish thousands of apps.',
            'url' => 'https://kodular.io/',
            'imageUrl' => '/assets/projects/kodular.webp',
            'startedAt' => Carbon::parse('2020-01-16T00:00:00', 'UTC'),
            'endedAt' => null
        ],
        [
            'name' => 'Network Manager',
            'description' => 'A lightweight tool for managing networks, hosts, and services. Built to make network administration easier with a clean UI and simple workflows.',
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
