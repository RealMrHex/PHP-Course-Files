<?php

function sayHello($language = 'en')
{
    $src = [
        'en' => ['language' => 'English', 'greeting' => 'Hello'],
        'fa' => ['language' => 'Persian (Farsi)', 'greeting' => 'سلام (Salam)'],
        'es' => ['language' => 'Spanish', 'greeting' => 'Hola'],
        'fr' => ['language' => 'French', 'greeting' => 'Bonjour'],
        'de' => ['language' => 'German', 'greeting' => 'Hallo'],
        'it' => ['language' => 'Italian', 'greeting' => 'Ciao'],
        'pt' => ['language' => 'Portuguese', 'greeting' => 'Olá'],
        'nl' => ['language' => 'Dutch', 'greeting' => 'Hallo'],
        'ru' => ['language' => 'Russian', 'greeting' => 'Привет (Privet)'],
        'zh' => ['language' => 'Mandarin Chinese', 'greeting' => '你好 (Nǐ hǎo)'],
        'ja' => ['language' => 'Japanese', 'greeting' => 'こんにちは (Konnichiwa)'],
        'ko' => ['language' => 'Korean', 'greeting' => '안녕하세요 (Annyeonghaseyo)'],
        'ar' => ['language' => 'Arabic', 'greeting' => 'مرحبا (Marhaban)'],
        'hi' => ['language' => 'Hindi', 'greeting' => 'नमस्ते (Namaste)'],
        'tr' => ['language' => 'Turkish', 'greeting' => 'Merhaba'],
        'el' => ['language' => 'Greek', 'greeting' => 'Γεια σας (Yassas)'],
        'he' => ['language' => 'Hebrew', 'greeting' => 'שלום (Shalom)'],
        'sw' => ['language' => 'Swahili', 'greeting' => 'Jambo'],
        'th' => ['language' => 'Thai', 'greeting' => 'สวัสดี (Sawasdee)'],
        'vi' => ['language' => 'Vietnamese', 'greeting' => 'Xin chào'],
        'id' => ['language' => 'Indonesian', 'greeting' => 'Halo'],
        'tl' => ['language' => 'Filipino (Tagalog)', 'greeting' => 'Kumusta'],
        'sv' => ['language' => 'Swedish', 'greeting' => 'Hej'],
        'no' => ['language' => 'Norwegian', 'greeting' => 'Hei'],
        'da' => ['language' => 'Danish', 'greeting' => 'Hej'],
        'fi' => ['language' => 'Finnish', 'greeting' => 'Hei'],
        'pl' => ['language' => 'Polish', 'greeting' => 'Cześć'],
        'uk' => ['language' => 'Ukrainian', 'greeting' => 'Привіт (Pryvit)'],
        'cs' => ['language' => 'Czech', 'greeting' => 'Ahoj'],
        'hu' => ['language' => 'Hungarian', 'greeting' => 'Szia'],
        'ro' => ['language' => 'Romanian', 'greeting' => 'Salut'],
        'bg' => ['language' => 'Bulgarian', 'greeting' => 'Здравейте (Zdraveyte)'],
        'ms' => ['language' => 'Malay', 'greeting' => 'Selamat datang'],
        'bn' => ['language' => 'Bengali', 'greeting' => 'নমস্কার (Namaskar)'],
        'pa' => ['language' => 'Punjabi', 'greeting' => 'ਸਤਿ ਸ਼੍ਰੀ ਅਕਾਲ (Sat Sri Akal)'],
        'ta' => ['language' => 'Tamil', 'greeting' => 'வணக்கம் (Vanakkam)'],
        'te' => ['language' => 'Telugu', 'greeting' => 'നమస్కారం (Namaskaram)'],
        'mr' => ['language' => 'Marathi', 'greeting' => 'नमस्कार (Namaskar)'],
        'ur' => ['language' => 'Urdu', 'greeting' => 'سلام (Salam)'],
        'az' => ['language' => 'Azerbaijani', 'greeting' => 'Salam'],
        'ka' => ['language' => 'Georgian', 'greeting' => 'გამარჯობა (Gamarjoba)'],
        'hy' => ['language' => 'Armenian', 'greeting' => 'Բարև (Barev)'],
        'am' => ['language' => 'Amharic', 'greeting' => 'ሰላም (Selam)'],
        'yo' => ['language' => 'Yoruba', 'greeting' => 'Pẹlẹ o'],
        'ig' => ['language' => 'Igbo', 'greeting' => 'Ndeewo'],
        'zu' => ['language' => 'Zulu', 'greeting' => 'Sawubona'],
        'af' => ['language' => 'Afrikaans', 'greeting' => 'Hallo'],
        'is' => ['language' => 'Icelandic', 'greeting' => 'Halló'],
        'ga' => ['language' => 'Irish', 'greeting' => 'Dia dhuit'],
        'mi' => ['language' => 'Maori', 'greeting' => 'Kia ora']
    ];

    echo $src[$language]['greeting'];
}

sayHello('es');

echo '<hr>';

function createUser($mobile, $password, $firstName = null, $lastName = null, $age = null)
{
    echo "<pre>
firstName: $firstName
lastName: $lastName
mobile: $mobile
password: $password
age: $age
</pre>";
}

createUser(
    mobile: '09123456789',
    password: 'password',
    lastName: 'H.',
    age: 25,
);