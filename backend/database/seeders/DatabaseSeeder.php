<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $questions = collect([
            [
                'in_serbian' => 'srećan',
                'in_english' => 'happy',
                'image' => 'https://s3-alpha-sig.figma.com/img/2983/484c/02f1f51da2aaae1b0f190e4b632adfa8?Expires=1669593600&Signature=ait98ugYiA8I31kLgsua6NQ7xCZKWggao8hq4yy5wO1ddMx8zm3LZ1dSZ6QyrcfJo956fpC5Zsrb~s~kIFmPcHEyd2QQCYlELFqy9pCGgx2g8aulRX-8xdpQVBpSekfXQOphUwABG4M6QFEi09H4FcxSNk~nQUcYm5gHEmEY9oGaVIOdPOxjOOxWrscKWFhu9xACPnqpQA6qTVLSgIYV9jJiSGmrbF4WKpiA344FKHqHU1WZqTxov-tki0snyFbCMsX~G0aDS9ArvYNs7Mzru-OtgyxfNFBIbFTlPYYYejZvBqaCcOGyvT4X0VXr0R~QZRdmOxgY2S3guUEs28epSQ__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'lijepo',
                'in_english' => 'nice',
                'image' => 'https://s3-alpha-sig.figma.com/img/63bc/75b3/8447a61b88ed25bd53aa7c14faeb3d2e?Expires=1669593600&Signature=F67zlx07qC8gmKsgDARyLyKY5U9F7V8HqhiQUlmvIqjmRW3k53WSdoIsupwdR5whP-PkaryMF3FH4MFx3ZmARqBnNVR7xLrwbVzlzir~v7HDd0Hqu95AfGNnORdl4dAVhhiXhenqyhb88f1sijc77u-KA3bgJcMWdXs7esc1m7H66KnRKwDqNTg9nSxujwtx72hUo8Lh3uKeBJ5w0wq2V1ikGReXbJ00O6rDqOz5vKcLucWlT8wG1j45MwXTP0F92w2xiz7ihMwm90oqn1TF9l6OXJHFRYhGMDFi0jYwKj8a4WNghOSA~TdrYrgLgcM6hxVVu7EykG1~s3htcWbqkw__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'prijatelju',
                'in_english' => 'friend',
                'image' => 'https://s3-alpha-sig.figma.com/img/df74/0864/b039d5e3bc983722eb3c24062883dba7?Expires=1669593600&Signature=Gzoo1pI1bz~38LzVf5g2GwK8tgaX2KJfRye-GSMmdB3MBaIwg892cahvrIpiM7LIchR1hHOcHPQlfDHThBRnMcsWZBaeldp3xWCdJKin278rfhXEI~TY-FIvGZhK9B27w8uyxHAXQvYM8J9QrqwXYjKoIOogVtD7j-~-XNxES-OfguYx-F7T00e8zq1GjPGACH7iCEVxS6-KGN96L0wCTaf6xxE6iFboemED9eWKOjTCfy~zNnfMF8jMxRVwWegmzjtcspfKGA8qTh4VGFCdWIS0QMJhpgLp~krU9oZA1F51~362Ks37TTXjSigiHatv9HdyTJ1eoWks1sweyD1YLA__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'eksplozija',
                'in_english' => 'explosion',
                'image' => 'https://s3-alpha-sig.figma.com/img/25cb/0b30/9e70d171faf4dd65df375f6965a014e8?Expires=1669593600&Signature=egq-9TsYMHhwN3NQ1-UWr3KBuVUl~cBg6iOAslQN~qeBGMorsyaKkYkFmo9FKZ86ZjJ4gEN4RPSFT6xVtsrwd~NQdA6N5FIlh4sTwcr2R-IY4fQh-iLfkxxsahEh6hP415yJsci9JbVg4no785JcZ7hCCAVnSJr~9I0gbwXqOn-i8Rps~xUhUI60Q07JiB~cQpk7UY13fHHnHvr6L1jW1k5hil6TeTtsLX44ybpbGHwuWHXZofM-bDX5N18scsCSa~Xny9~0FJwI4BEecFfTmCVp9-1comJl9ZNJNZdyvUdZy~8r4-qnOumiciQjSfv3oqJhljhB5BhtFX3AJyuhhg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'šargarepa',
                'in_english' => 'carrot',
                'image' => 'https://s3-alpha-sig.figma.com/img/c09f/748d/268d99ea6c0977fbecd771db9f691c3e?Expires=1669593600&Signature=a~Y3vgDG3nDvv6-fSGtnaKNshgzAH~~H5xY~sf3ORhAknwce9CBTSj0JOg88my9EI2apQGd4ApI3Ph7a5GlKy6mEUnVjrhXUCBgPsJWNuU0xXwdd57lAngxFMV7E~Kk2m7QbSCkxH0Ub830YIZxbuRhNQHLT9zZGBn-Va8a2lAHRf-gLmc0F4vgXi8URrw4XsZBmm5uKk3dOnbW0pmOJ2JVtUTH3uq6JuAB6YU3F25Xiuq34IOCtd1BZhhbpwTCXS8-Le~HAbpCl6mtU9S0S4dC3QzxbB-u7xFcE7jYi94mPM1SD-aqoYUutO74XQIBQeFHD1GNokCDOqXDPvxe-6Q__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'auto',
                'in_english' => 'car',
                'image' => 'https://s3-alpha-sig.figma.com/img/8e18/9198/b596ec8aaf473f1bb3851e23f55a92f0?Expires=1669593600&Signature=hDTNSw0WU3diuLSTmFXZQ0~xbpsXuRaWKaL~qlAN6FWbQvtX0Lzte9G7mmmokIxGpHHmUn-SLV1oAIlziOg93yrbngtHcLNGvtuxWFNJRkeMUwzuNwAyywcheDpUx0TndtxpUmh3Wb79rs3s-R7C1h4fzwgD~EbVAywu6W6cXdUWvYbOxbawOAq7qmeU-l9ZVqLBgib5L4jZV1nqbEJBuEHHSW-gbLmOEz-bx-sLR0XTEopR1DYgSeYCtWWd6Wql372TFbYy1aXDzB5fSYHbVynCd2NJgd682sM6R-ElqTooXNUpFpip~fe-fkfvehCaeqXsn7lFQgFqyx1y6lCujg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'vojnik',
                'in_english' => 'soldier',
                'image' => 'https://s3-alpha-sig.figma.com/img/e6c4/e378/dda598c32858068ec7cebc8c26f9df6c?Expires=1669593600&Signature=Di0MCytZyg20Hhx3guttvU7KKm~uQAI5wENaRKpYjTEjr9NXyJ~0SVYdCtKZ-GJRSe34MoujczHKYIx8LD3OhezHADmNa8K7XvaaBsP9WWDnBO0Zt4iaQW73Y~Cq7BTAAMLyF207I2H2lmAmRECxfUiFNvl6arVcqb84jCX9j7Jmd3CnHX7Bmwbt9lBAcYKnZOrIo7Ir9qWzVBwMnCegMc3ai21vCByErURq5tQGmxfDoNwScmKjN32vOhNtr~pFVnN5U5bDPzNGNrt7-5AwKubCue5LNgQ6Af2hCo79S2GZtkAEoHXeuHVf8rxbvZJqTI9c2v7hJ3Ad5dum2D~Elg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'strah',
                'in_english' => 'fear',
                'image' => 'https://s3-alpha-sig.figma.com/img/423f/b29d/f9abc1016fe45822c7a14f624eafd6c2?Expires=1669593600&Signature=AAilul7HUMp0BTGjKkdLQAiPvP~WsJy5iOEpCfhMOuHWeV~7nwOGGBHknR5NPoUEeKdYDPyiyEbYvWVswnRetkEqeUokUonwq1rIQu2D1SW5LQdBZ50NDiLyqEYOqszUIV96uUAmAQ4seYgYQGFlWyKgCCygsCjT3ijm5JSHzfdmMiNl4UoRKis7pY3kPWg6N3lfT5eIWKYQDFxH7Azw3zqf7gY3sDmn0UbrNj-YDRHMXVyzJxjVoryLxfLZtmT~mi47GDssbtfsU~HiItnWKZ8uLXNJL~6iHKbz~4J0wCgnSlRHzvpNuPxovKtElufY2qoohoYxukUkuzmnX0vzlA__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'relativnost',
                'in_english' => 'relativity',
                'image' => 'https://s3-alpha-sig.figma.com/img/a617/2683/e30b1f7879b08f994fbcda8a22d172f4?Expires=1669593600&Signature=gV6I0b09EadOaY0iAssuouSx7pNOIN9PsdeA7c5T6rbH9oSo3PCq0bMCQtv20yYe5cUo2ewdRhXOfc0zTKRrlVTqbL1PX3Io076zesAP8HbCvMyJqtRLwNXiTru~kkwx-luqbFtDfgh9ybGAhD6TLHDO6NVvkFLBRr3-Bdm8YPBcQDk3YPjQ~W0PhgiNmwDwFPi9WMaa5~085ljvBQYeKlsA-niMcA9FgRH~-ufmHNEcDc4NyNcQY2A3d16LIvEWJjYKiIlqGQOKqgf-~5iwApYfwiiJPk5wEEGsLXyqLkVffkP3z5emIvoSWxb-LuxECc2z9fEF6x~m55mjRrdwjA__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'knjiga',
                'in_english' => 'book',
                'image' => 'https://s3-alpha-sig.figma.com/img/635e/24c0/f44761170f05f7b8cec0c164ffe3f7ab?Expires=1669593600&Signature=DGEXz0bTQYxEQaZVwxd35njCXoYu5scRLAcyg8PFWUrhu2VoVC1RJ0JpYwnRL9AFEu-OiewvsHdXMPR2EggaGIAdc-PUtcT7CWtaIMa8i-pMsiafTpzax5FYT3~2F~w8F6gjLSu4f0qyjhMs7EY1i8zv1By~dJRBqir8lC5emkqj0EzxV1Nj4sJQylzcYjecPfn2Rj1WcYkqZNqaJya5Hp6bfcMsJWnFCE9CMX4ReOeDyXV5-fnyiWgfSIY323AoAh4~bJfnkcy6JNWUxfj7NneR-dsAq4SwWpxp~fGquWD90QyXl4Fw1fFaJaObfos7gKBDb0NNOSRIJ7CcOrYolA__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'Zemlja',
                'in_english' => 'Earth',
                'image' => 'https://s3-alpha-sig.figma.com/img/9b88/f050/d77f5b07ac36cc4e4d17fb5f31806f2c?Expires=1669593600&Signature=R6CTvyT2m1oIEPsy4AKa-f8om6MjR6dg4XEYuSNsQO~QmchXRWG8K80V453QWtvh1jtChKCxV7BR0245nl7p6GgpkafHLPsMStZ7Rp5LEAJ~6zpZEdFu3YSITM0J4IpC8z2aXoEwEB1BXCagSx8jthCbRZBVWpuDt3NLQCeFPYuHpi7P2GsksIshFkbyAPaD73IjcR1w53WnpnkF5eDlrZBeVirzWrNYzbz56PO3q0y4ZjIFaP76-LP7WuEQMrfp9BM3T15syoPNP9xVVXTdtEVcoKVhbozgTPL3i-j7dqYN5CQcf~GB-HUUM9CSb7lg1JoIB9lVJ~aPRFghMzN63g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
            [
                'in_serbian' => 'ograničenje brzine',
                'in_english' => 'speed limit',
                'image' => 'https://s3-alpha-sig.figma.com/img/abad/8b66/af5c7ba0826d7cceb5d5b6782349fa7c?Expires=1669593600&Signature=fM0ZovJZcvl2gBKFqcAVT4K7-EF3DTa5qV83do8SUVwXmHEDE1UQmu1TfKdgeeQ~uA5Nfl3OT-s-zpfco9z9qsF8BTMTo0bDvV8oWWf0HyhNiQTwT6AIEJCbRfvi9KyHllde9agtlbw5oqWukeP3AZeSV8JM8xba0coe79iweqQZQAiiIKnIq9pfWyWRYclnsEql6CVlYnr9jvZQ21lacGGg04ZwkYd8g7cp5Hpfz2Qz9Q6Woj6i3MG5379qRF5eim70DkNrDbH6sgYyVGdTWsIN3bCoTBsuaB2cHWFJQVAzbm-FSnmN38imneCNvVphajMwRJfu97sgvhRKcmqcqw__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA'
            ],
        ]);

        $questions->each(fn ($q) => Question::create($q));
    }
}
