<?php
/*
 * 심플로우 홈페이지 Menu
 */
return [
    [
        "title" => "심플로우",
        "path" => "/content/introduction",
        "sub" => [
            ["title" => "소개", "path" => "/content/introduction"],
            [
                "title" => "주요기능",
                "path" => "/content/function1",
                "tab" => [
                    ["title" => "웨비나", "path" => "/content/function1"],
                    ["title" => "발표기능", "path" => "/content/function2"],
                    ["title" => "다운플로우", "path" => "/content/function3"],
                    ["title" => "업플로우", "path" => "/content/function4"],
                ]
            ],
            ["title" => "활용사례", "path" => "/board/use"],
            ["title" => "주요사용처", "path" => "/board/major"],
            ["title" => "심플로우 사용신청", "path" => "/application"],
        ]
    ],
    [
        "title" => "요금제 및 가격책정",
        "path" => "/price",
        "sub" => [
            ["title" => "심플로우", "path" => "/price?#s"],
            ["title" => "웨비나", "path" => "/price?#w"],
            ["title" => "월요금제", "path" => "/price?#m"],
            ["title" => "연간요금제", "path" => "/price?#y"],
            ["title" => "솔루션", "path" => "/price?#s"],
        ]
    ],
    [
        "title" => "견적문의",
        "path" => "/estimate",
        "sub" => [
            ["title" => "견적문의", "path" => "/estimate"],
        ]
    ],
    [
        "title" => "갤러리",
        "path" => "/board/gallery",
        "sub" => [
            ["title" => "갤러리", "path" => "/board/gallery"],
        ]
    ],
    [
        "title" => "커뮤니티",
        "path" => "/board/notice",
        "sub" => [
            ["title" => "공지사항", "path" => "/board/notice"],
            ["title" => "홍보영상", "path" => "/board/movie"],
            ["title" => "자주묻는 질문", "path" => "/board/faq"],
            ["title" => "1:1문의", "path" => "/board/qa"],
        ]
    ],
    [
        "title" => "도움말",
        "path" => "/board/manual",
        "sub" => [
            ["title" => "매뉴얼", "path" => "/board/manual"],
            ["title" => "활용백서", "path" => "/board/guide"],
        ]
    ],
    [
        "title" => "마이 심플로우",
        "path" => "/user/profile",
        "sub" => [
            ["title" => "회원정보", "path" => "/user/profile"],
            ["title" => "계정사용신청", "path" => "/user/account"],
            ["title" => "부가서비스 신청", "path" => "/user/service"],
            ["title" => "결제이력", "path" => "/user/payment"],
            ["title" => "이전강연", "path" => "/user/lecture"],
            ["title" => "보유 심플로우 계정", "path" => "/user/mysymflow"],
        ]
    ],
    [
        "title" => "회원관리",
        "path" => "/login",
        "sub" => [
            ["title" => "로그인", "path" => "/login"],
            ["title" => "회원가입", "path" => "/register"],
        ]
    ],
];
