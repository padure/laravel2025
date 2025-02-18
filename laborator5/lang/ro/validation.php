<?php

return [

    /*
    |----------------------------------------------------------------------
    | Linii de validare a limbajului
    |----------------------------------------------------------------------
    |
    | Următoarele linii de limbaj conțin mesajele implicite de eroare folosite de
    | clasa validator. Unele dintre aceste reguli au mai multe versiuni, 
    | cum ar fi regulile de dimensiune. Simte-te liber să ajustezi fiecare dintre
    | aceste mesaje aici.
    |
    */

    'accepted' => 'Câmpul :attribute trebuie să fie acceptat.',
    'accepted_if' => 'Câmpul :attribute trebuie să fie acceptat când :other este :value.',
    'active_url' => 'Câmpul :attribute trebuie să fie un URL valid.',
    'after' => 'Câmpul :attribute trebuie să fie o dată ulterioară lui :date.',
    'after_or_equal' => 'Câmpul :attribute trebuie să fie o dată ulterioară sau egală cu :date.',
    'alpha' => 'Câmpul :attribute trebuie să conțină doar litere.',
    'alpha_dash' => 'Câmpul :attribute trebuie să conțină doar litere, cifre, cratime și liniuțe de subliniere.',
    'alpha_num' => 'Câmpul :attribute trebuie să conțină doar litere și cifre.',
    'array' => 'Câmpul :attribute trebuie să fie un array.',
    'ascii' => 'Câmpul :attribute trebuie să conțină doar caractere alfanumerice și simboluri cu un singur octet.',
    'before' => 'Câmpul :attribute trebuie să fie o dată anterioară lui :date.',
    'before_or_equal' => 'Câmpul :attribute trebuie să fie o dată anterioară sau egală cu :date.',
    'between' => [
        'array' => 'Câmpul :attribute trebuie să aibă între :min și :max elemente.',
        'file' => 'Câmpul :attribute trebuie să aibă între :min și :max kilobyte.',
        'numeric' => 'Câmpul :attribute trebuie să fie între :min și :max.',
        'string' => 'Câmpul :attribute trebuie să aibă între :min și :max caractere.',
    ],
    'boolean' => 'Câmpul :attribute trebuie să fie adevărat sau fals.',
    'can' => 'Câmpul :attribute conține o valoare neautorizată.',
    'confirmed' => 'Confirmația câmpului :attribute nu se potrivește.',
    'contains' => 'Câmpul :attribute lipsește o valoare necesară.',
    'current_password' => 'Parola este incorectă.',
    'date' => 'Câmpul :attribute trebuie să fie o dată validă.',
    'date_equals' => 'Câmpul :attribute trebuie să fie o dată egală cu :date.',
    'date_format' => 'Câmpul :attribute trebuie să se potrivească cu formatul :format.',
    'decimal' => 'Câmpul :attribute trebuie să aibă :decimal zecimale.',
    'declined' => 'Câmpul :attribute trebuie să fie respins.',
    'declined_if' => 'Câmpul :attribute trebuie să fie respins când :other este :value.',
    'different' => 'Câmpul :attribute și :other trebuie să fie diferite.',
    'digits' => 'Câmpul :attribute trebuie să aibă :digits cifre.',
    'digits_between' => 'Câmpul :attribute trebuie să aibă între :min și :max cifre.',
    'dimensions' => 'Câmpul :attribute are dimensiuni de imagine invalide.',
    'distinct' => 'Câmpul :attribute conține o valoare duplicată.',
    'doesnt_end_with' => 'Câmpul :attribute nu trebuie să se termine cu unul dintre următoarele: :values.',
    'doesnt_start_with' => 'Câmpul :attribute nu trebuie să înceapă cu unul dintre următoarele: :values.',
    'email' => 'Câmpul :attribute trebuie să fie o adresă de email validă.',
    'ends_with' => 'Câmpul :attribute trebuie să se termine cu unul dintre următoarele: :values.',
    'enum' => 'Selecția :attribute este invalidă.',
    'exists' => 'Selecția :attribute este invalidă.',
    'extensions' => 'Câmpul :attribute trebuie să aibă una dintre următoarele extensii: :values.',
    'file' => 'Câmpul :attribute trebuie să fie un fișier.',
    'filled' => 'Câmpul :attribute trebuie să aibă o valoare.',
    'gt' => [
        'array' => 'Câmpul :attribute trebuie să aibă mai mult de :value elemente.',
        'file' => 'Câmpul :attribute trebuie să fie mai mare de :value kilobyte.',
        'numeric' => 'Câmpul :attribute trebuie să fie mai mare de :value.',
        'string' => 'Câmpul :attribute trebuie să fie mai lung de :value caractere.',
    ],
    'gte' => [
        'array' => 'Câmpul :attribute trebuie să aibă cel puțin :value elemente.',
        'file' => 'Câmpul :attribute trebuie să fie mai mare sau egal cu :value kilobyte.',
        'numeric' => 'Câmpul :attribute trebuie să fie mai mare sau egal cu :value.',
        'string' => 'Câmpul :attribute trebuie să aibă cel puțin :value caractere.',
    ],
    'hex_color' => 'Câmpul :attribute trebuie să fie o culoare hexazecimală validă.',
    'image' => 'Câmpul :attribute trebuie să fie o imagine.',
    'in' => 'Selecția :attribute este invalidă.',
    'in_array' => 'Câmpul :attribute trebuie să existe în :other.',
    'integer' => 'Câmpul :attribute trebuie să fie un număr întreg.',
    'ip' => 'Câmpul :attribute trebuie să fie o adresă IP validă.',
    'ipv4' => 'Câmpul :attribute trebuie să fie o adresă IPv4 validă.',
    'ipv6' => 'Câmpul :attribute trebuie să fie o adresă IPv6 validă.',
    'json' => 'Câmpul :attribute trebuie să fie un șir JSON valid.',
    'list' => 'Câmpul :attribute trebuie să fie o listă.',
    'lowercase' => 'Câmpul :attribute trebuie să fie în litere mici.',
    'lt' => [
        'array' => 'Câmpul :attribute trebuie să aibă mai puțin de :value elemente.',
        'file' => 'Câmpul :attribute trebuie să fie mai mic de :value kilobyte.',
        'numeric' => 'Câmpul :attribute trebuie să fie mai mic de :value.',
        'string' => 'Câmpul :attribute trebuie să aibă mai puțin de :value caractere.',
    ],
    'lte' => [
        'array' => 'Câmpul :attribute nu trebuie să aibă mai mult de :value elemente.',
        'file' => 'Câmpul :attribute nu trebuie să fie mai mare de :value kilobyte.',
        'numeric' => 'Câmpul :attribute nu trebuie să fie mai mare de :value.',
        'string' => 'Câmpul :attribute nu trebuie să aibă mai mult de :value caractere.',
    ],
    'mac_address' => 'Câmpul :attribute trebuie să fie o adresă MAC validă.',
    'max' => [
        'array' => 'Câmpul :attribute nu trebuie să aibă mai mult de :max elemente.',
        'file' => 'Câmpul :attribute nu trebuie să fie mai mare de :max kilobyte.',
        'numeric' => 'Câmpul :attribute nu trebuie să fie mai mare de :max.',
        'string' => 'Câmpul :attribute nu trebuie să aibă mai mult de :max caractere.',
    ],
    'max_digits' => 'Câmpul :attribute nu trebuie să aibă mai mult de :max cifre.',
    'mimes' => 'Câmpul :attribute trebuie să fie un fișier de tip: :values.',
    'mimetypes' => 'Câmpul :attribute trebuie să fie un fișier de tip: :values.',
    'min' => [
        'array' => 'Câmpul :attribute trebuie să aibă cel puțin :min elemente.',
        'file' => 'Câmpul :attribute trebuie să aibă cel puțin :min kilobyte.',
        'numeric' => 'Câmpul :attribute trebuie să fie cel puțin :min.',
        'string' => 'Câmpul :attribute trebuie să aibă cel puțin :min caractere.',
    ],
    'min_digits' => 'Câmpul :attribute trebuie să aibă cel puțin :min cifre.',
    'missing' => 'Câmpul :attribute trebuie să lipsească.',
    'missing_if' => 'Câmpul :attribute trebuie să lipsească când :other este :value.',
    'missing_unless' => 'Câmpul :attribute trebuie să lipsească decât dacă :other este :value.',
    'missing_with' => 'Câmpul :attribute trebuie să lipsească când :values este prezent.',
    'missing_with_all' => 'Câmpul :attribute trebuie să lipsească când :values sunt prezente.',
    'multiple_of' => 'Câmpul :attribute trebuie să fie un multiplu de :value.',
    'not_in' => 'Selecția :attribute este invalidă.',
    'not_regex' => 'Formatul câmpului :attribute este invalid.',
    'numeric' => 'Câmpul :attribute trebuie să fie un număr.',
    'password' => [
        'letters' => 'Câmpul :attribute trebuie să conțină cel puțin o literă.',
        'mixed' => 'Câmpul :attribute trebuie să conțină cel puțin o literă mare și una mică.',
        'numbers' => 'Câmpul :attribute trebuie să conțină cel puțin un număr.',
        'symbols' => 'Câmpul :attribute trebuie să conțină cel puțin un simbol.',
        'uncompromised' => 'Câmpul :attribute furnizat a apărut într-o scurgere de date. Te rugăm să alegi alt :attribute.',
    ],
    'present' => 'Câmpul :attribute trebuie să fie prezent.',
    'present_if' => 'Câmpul :attribute trebuie să fie prezent când :other este :value.',
    'present_unless' => 'Câmpul :attribute trebuie să fie prezent decât dacă :other este :value.',
    'present_with' => 'Câmpul :attribute trebuie să fie prezent când :values este prezent.',
    'present_with_all' => 'Câmpul :attribute trebuie să fie prezent când :values sunt prezente.',
    'prohibited' => 'Câmpul :attribute este interzis.',
    'prohibited_if' => 'Câmpul :attribute este interzis când :other este :value.',
    'prohibited_unless' => 'Câmpul :attribute este interzis decât dacă :other este în :values.',
    'prohibits' => 'Câmpul :attribute interzice ca :other să fie prezent.',
    'regex' => 'Formatul câmpului :attribute este invalid.',
    'required' => 'Câmpul :attribute este obligatoriu.',
    'required_array_keys' => 'Câmpul :attribute trebuie să conțină intrări pentru: :values.',
    'required_if' => 'Câmpul :attribute este obligatoriu când :other este :value.',
    'required_if_accepted' => 'Câmpul :attribute este obligatoriu când :other este acceptat.',
    'required_if_declined' => 'Câmpul :attribute este obligatoriu când :other este respins.',
    'required_unless' => 'Câmpul :attribute este obligatoriu decât dacă :other este în :values.',
    'required_with' => 'Câmpul :attribute este obligatoriu când :values este prezent.',
    'required_with_all' => 'Câmpul :attribute este obligatoriu când :values sunt prezente.',
    'required_without' => 'Câmpul :attribute este obligatoriu când :values nu este prezent.',
    'required_without_all' => 'Câmpul :attribute este obligatoriu când niciunul din :values nu este prezent.',
    'same' => 'Câmpul :attribute trebuie să se potrivească cu :other.',
    'size' => [
        'array' => 'Câmpul :attribute trebuie să conțină :size elemente.',
        'file' => 'Câmpul :attribute trebuie să fie de :size kilobyte.',
        'numeric' => 'Câmpul :attribute trebuie să fie :size.',
        'string' => 'Câmpul :attribute trebuie să aibă :size caractere.',
    ],
    'starts_with' => 'Câmpul :attribute trebuie să înceapă cu unul dintre următoarele: :values.',
    'string' => 'Câmpul :attribute trebuie să fie un șir de caractere.',
    'timezone' => 'Câmpul :attribute trebuie să fie un fus orar valid.',
    'unique' => 'Câmpul :attribute a fost deja luat.',
    'uploaded' => 'Câmpul :attribute nu a reușit să se încarce.',
    'uppercase' => 'Câmpul :attribute trebuie să fie cu litere mari.',
    'url' => 'Câmpul :attribute trebuie să fie un URL valid.',
    'ulid' => 'Câmpul :attribute trebuie să fie un ULID valid.',
    'uuid' => 'Câmpul :attribute trebuie să fie un UUID valid.',

    /*
    |----------------------------------------------------------------------
    | Linii de limbaj pentru validare personalizată
    |----------------------------------------------------------------------
    |
    | Aici poți specifica mesaje personalizate pentru validarea atributelor folosind
    | convenția "atribut.regula" pentru a numi liniile. Aceasta face rapidă
    | specificarea unui mesaj personalizat pentru o anumită regulă a unui atribut.
    |
    */

    'custom' => [
        'numele-atributului' => [
            'numele-regulei' => 'mesaj-personalizat',
        ],
    ],

    /*
    |----------------------------------------------------------------------
    | Atribute de validare personalizate
    |----------------------------------------------------------------------
    |
    | Următoarele linii de limbaj sunt folosite pentru a înlocui placeholderul
    | atributului cu ceva mai ușor de citit, de exemplu, "Adresa de E-Mail"
    | în loc de "email". Acest lucru ajută la crearea unor mesaje mai expresive.
    |
    */

    'attributes' => [],
];
